<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    //
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
            // 'confirm_password' => 'required|same:password',
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
            'gender' => $request->gender,
            'profile_picture' =>
            'storage/' .
                $request
                ->file('profile_picture')
                ->store('public/students/profile_pictures'), // For MySQL and File Upload method [separated from Instructor]
            'userType' => $request->input('userType'),
            'password' => bcrypt($request->input('password')),
            // 'confirm_password' => bcrypt($request->input('confirm_password')),
            'guardian_name' => $request->input('guardian_name'),
            'guardian_relationship' => $request->input('guardian_relationship'),
            'guardian_phone_number' => $request->input('guardian_phone_number'),
            'guardian_email' => $request->input('guardian_email'),
            'guardian_generated_password' => bcrypt($request->input('password'))
        ]);

        Auth::login($student);

        return redirect()->route('login');
    }

    public function instructorRegister(Request $request)
    {
        $user = $request->validate([
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
        ]);

        $user = User::create([
            'name' => $request->name,
            'userType' => $request->userType,
            'department' => $request->department,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'status' => $request->status,
            'job_status' => $request->job_status,
            'birthday' => $request->birthday,
            'address' => $request->address,
            'gender' => $request->gender,
            'profile_picture' => $request
                ->file('profile_picture')
                ->store('public/instructor/profile_pictures') // Corrected URL for instructor profile pictures
        ]);

        Auth::login($user);

        return redirect()->route('login');
    }
}
