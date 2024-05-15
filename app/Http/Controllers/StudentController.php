<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function create(Request $request)
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
            'guardian_email' => 'required',

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
            'profile_picture' => $request->file('profile_picture')->store('profile_pictures'),
            'userType' => $request->input('userType'),
            'password' => bcrypt($request->input('password')),
            // 'confirm_password' => bcrypt($request->input('confirm_password')),
            'guardian_name' => $request->input('guardian_name'),
            'guardian_relationship' => $request->input('guardian_relationship'),
            'guardian_phone_number' => $request->input('guardian_phone_number'),
            'guardian_email' => $request->input('guardian_email'),
        ]);

        dd($student);
    }
}
