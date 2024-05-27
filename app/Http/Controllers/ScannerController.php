<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScannerController extends Controller
{
    //

    public function index()
    {
        return view('GATEPASS.gatepass');
    }

    public function store(Request $request)
    {

        $studentExists = User::where('student_id', $request->id_student)->exists();

        if (!$studentExists) {
            return redirect('/')->with('error', 'Student is not recognized');
        }

        // Check if the student has already logged in today
        $log = Logs::where([
            'student_id' => $request->id_student,
            'date' => date('Y-m-d'),
        ])->first();

        if ($log) {
            // Student has already logged in today, update logout time
            $log->update([
                'logout_time' => now(),
            ]);
            // $this->sendSms('Your student has logged out');
            return redirect('/')->with('success', 'Student has logged out successfully');
        } else {
            // Student has not logged in today, create a new log entry with login time
            Logs::create([
                'student_id' => $request->id_student,
                'date' => date('Y-m-d'),
                'login_time' => now(),
            ]);

            // $this->sendSms('Your student has logged in');
            return redirect('/')->with('success', 'Student has logged in successfully');

            // return redirect('/scan');
        }
    }
}
