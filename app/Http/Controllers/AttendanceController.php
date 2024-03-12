<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Assuming you have a Student model
use Carbon\Carbon; // For handling date and time

class AttendanceController extends Controller
{
    public function verifyStudent(Request $request)
{
    $qrCode = $request->input('qr_code');
    // Simulate verification logic. Replace with actual database query.
    $student = Student::where('qr_code', $qrCode)->first();

    if ($student) {
        // Log the attendance
        $now = Carbon::now();
        $attendance = new AttendanceLog([
            'student_id' => $student->id,
            'date' => $now->toDateString(),
            'time_in' => $now->toTimeString(),
            // 'time_out' => handled separately
        ]);
        $attendance->save();

        return response()->json([
            'verified' => true,
            'student_name' => $student->name,
            'time_in' => $now->toTimeString(),
        ]);
    } else {
        return response()->json(['verified' => false]);
    }
  }
}