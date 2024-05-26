<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Use the User model

class EnrollmentController extends Controller
{
    public function check(Request $request)
    {
        $studentId = $request->input('student_id');
        $user = User::where('student_id', $studentId)->first();

        if ($user) {
            return response()->json([
                'enrolled' => $user->stats === 'Enrolled',
                'profile_picture' => $user->profile_picture,
                'stats' => $user->stats
            ]);
        } else {
            return response()->json(['enrolled' => false], 404);
        }
    }
}
