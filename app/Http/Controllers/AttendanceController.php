<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceLog;
use Carbon\Carbon;
use App\Models\Logs2;

class AttendanceController extends Controller
{
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
