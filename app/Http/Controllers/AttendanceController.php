<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceLog;
use Carbon\Carbon;
use App\Models\Logs2;

class AttendanceController extends Controller
{
    public function showLogs2($id = null) // Optional ID parameter for single log
    {
        if ($id) {
            $log = Logs2::find($id); // Fetch a single log entry by ID

            if (!$log) {
                return abort(404); // Handle case if log not found
            }

            return view('USER.Student.studentdashboard', compact('log'));
        } else {
            $logs2 = Logs2::all();  // Fetch all log entries
            return view('USER.Student.studentdashboard', compact('logs2')); // Pass data to the view
        }
    }
    public function showInstructorDashboard()
    {
        $attendanceLogs2 = Logs2::all(); // Or however you retrieve the logs
        return view('USER.Instructor.instructor_dashboard', compact('attendanceLogs2'));
    }

    public function softDeleteLog($id)
    {
        $log = Logs2::findOrFail($id);
        $log->delete();

        return redirect()->back()->with('success', 'Log soft deleted successfully!');
    }

    public function restoreLog($id)
    {
        $log = Logs2::withTrashed()->findOrFail($id); 
        $log->restore();

        return redirect()->back()->with('success', 'Log restored successfully!');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required|string',
        ]);

        $user = auth()->user();
        $subject = $validatedData['subject'];
        $date = Carbon::now()->format('Y-m-d');

        $log = AttendanceLog::where('user_id', $user->id)
            ->where('subject', $subject)
            ->where('date', $date)
            ->first();

        if ($log && $log->time_out) {
            return response()->json(['message' => 'You have already signed out for this subject today.'], 422);
        }

        $log = AttendanceLog::updateOrCreate(
            [
                'user_id' => $user->id,
                'subject' => $subject,
                'date' => $date,
            ],
            [
                'time_in' => $log ? $log->time_in : now(),
                'time_out' => $log ? now() : null,
            ]
        );

        if ($log->time_out !== null) {
            return response()->json(['message' => 'You have successfully signed out.'], 200);
        } else {
            return response()->json(['message' => 'Attendance submitted successfully'], 200);
        }
    }
}
