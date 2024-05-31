<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Logs2;

class CheckAttendanceAccess
{
    public function handle(Request $request, Closure $next)
    {
        $attendanceId = $request->route('attendanceId'); // Assuming you have a route parameter for the attendance ID
        $attendance = Logs2::findOrFail($attendanceId);

        // Check if the authenticated user has access to view this attendance record
        if ($attendance->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized access.'], 403);
        }

        return $next($request);
    }
}
