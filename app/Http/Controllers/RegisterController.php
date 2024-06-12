<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function studentRegister(Request $request)
    {
        $rules = [
            'name' => 'required',
            'student_id' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'course' => 'required',
            'phone_number' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'profile_picture' => 'image|required',
            'userType' => 'required|in:student,instructor',
            'password' => 'required',
            'guardian_name' => 'required',
            'guardian_relationship' => 'required',
            'guardian_phone_number' => 'required',
            'guardian_email' => 'required'
        ];

        $this->validate($request, $rules);

        $student = User::create([
            'name' => $request->input('name'),
            'student_id' => $request->input('student_id'),
            'course' => $request->input('course'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'birthday' => $request->input('birthday'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender'),
            'profile_picture' => $request->file('profile_picture')->store('public/students/profile_pictures'),
            'userType' => $request->input('userType'),
            'password' => Hash::make($request->input('password')),
            'guardian_name' => $request->input('guardian_name'),
            'guardian_relationship' => $request->input('guardian_relationship'),
            'guardian_phone_number' => $request->input('guardian_phone_number'),
            'guardian_email' => $request->input('guardian_email'),
            'guardian_generated_password' => Hash::make($request->input('password'))
        ]);

        auth()->login($student);

        // Send email verification notification
        $student->sendEmailVerificationNotification();

        // Redirect to login page with success message
        return redirect('/login')->with('success', 'Registration successful! Please verify your email to log in.');
    }

    public function instructorRegister(Request $request)
    {
        $rules = [
            'name' => 'required',
            'userType' => 'required|in:student,instructor',
            'department' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'phone_number' => 'required',
            'status' => 'required',
            'job_status' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'profile_picture' => 'image|required'
        ];

        $this->validate($request, $rules);

        $instructor = User::create([
            'name' => $request->input('name'),
            'userType' => $request->input('userType'),
            'department' => $request->input('department'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone_number' => $request->input('phone_number'),
            'status' => $request->input('status'),
            'job_status' => $request->input('job_status'),
            'birthday' => $request->input('birthday'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender'),
            'profile_picture' => $request->file('profile_picture')->store('public/instructor/profile_pictures')
        ]);

        auth()->login($instructor);
        // Send email verification notification
        $instructor->sendEmailVerificationNotification();

        // Redirect to login page with success message
        return redirect('/login')->with('success', 'Registration successful! Please verify your email to log in.');
    }
}
