<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logs;

class ScannerController extends Controller
{
    // Method to display the gatepass view
    public function index()
    {
        return view('GATEPASS.gatepass');
    }

    // Method to handle scanning for both students and instructors
    public function store(Request $request)
    {
        // Find the user by student_id or name
        $user = User::where('student_id', $request->id_student)
            ->orWhere('name', $request->name)->first();

        if (!$user) {
            return redirect('/')->with('error', 'User is not recognized');
        }

        // Check if the user is already logged for today
        $log = Logs::where('date', date('Y-m-d'))
            ->where(function ($query) use ($user) {
                $query->where('student_id', $user->student_id)
                    ->orWhere('instructor_name', $user->name);
            })->first();

        // Get the enrollment status and profile picture path
        $enrollmentStatus = $user->stats; // Assuming 'stats' is the column name
        $profilePicturePath = str_replace('/public', '', asset('/' . $user->profile_picture));

        // Check if the log exists for sign-in or sign-out
        if ($log) {
            $log->update([
                'signout_time' => now(),
            ]);
            $message = 'User has signed out successfully';
        } else {
            // Create a new log entry based on user type
            $newLogData = [
                'date' => date('Y-m-d'),
                'signin_time' => now(),
            ];

            if ($user->userType === 'student') {
                $newLogData['student_id'] = $user->student_id;
            } elseif ($user->userType === 'instructor') {
                // For instructors, we don't need to log here as we'll handle instructor scanning separately
                return redirect('/')->with('error', 'Instructor scanning should be done separately.');
            }

            Logs::create($newLogData);

            $message = 'User has signed in successfully';
        }

        // Redirect with a success message
        return redirect('/')->with([
            'success' => $message,
            'enrollmentStatus' => $enrollmentStatus,
            'profilePicturePath' => $profilePicturePath,
            'userName' => $user->name
        ]);
    }

    // Method to handle scanning for instructors
    public function scanInstructor(Request $request)
    {
        // Get the scanned code from the request
        $scannedCode = $request->scanned_code;

        // Try to decode the scanned code as JSON
        $decodedData = json_decode($scannedCode, true);

        // If the code is valid JSON, extract the instructor's name
        if (is_array($decodedData) && array_key_exists('name', $decodedData)) {
            $instructorName = $decodedData['name'];
        } else {
            // If the code is not JSON, assume it's the instructor's name directly
            $instructorName = $scannedCode;
        }

        // Find the instructor by name
        $instructor = User::where('userType', 'instructor')
            ->where('name', $instructorName)
            ->first();

        if (!$instructor) {
            return redirect('/')->with('error', 'Instructor not recognized');
        }

        // Check if the instructor has already signed in today
        $log = Logs::where('date', date('Y-m-d'))
            ->where('instructor_name', $instructor->name)
            ->first();

        if ($log) {
            // If a log exists, update the sign-out time
            $log->update([
                'signout_time' => now(),
            ]);
            $message = 'Instructor has signed out successfully';
        } else {
            // If no log exists, create a new log entry for sign-in
            Logs::create([
                'instructor_name' => $instructor->name,
                'signin_time' => now(),
                'date' => date('Y-m-d'),
            ]);
            $message = 'Instructor has signed in successfully';
        }

        // Redirect with a success message
        return redirect('/')->with('success', $message);
    }

    // Method to display today's attendance logs
    public function showAttendanceLogs()
    {
        $today = date('Y-m-d');
        $attendanceLogs = Logs::with('student')
            ->whereDate('date', $today)
            ->get();

        return view('ADMINISTRATOR.AttendanceLog.attendance_log', compact('attendanceLogs'));
    }
}
