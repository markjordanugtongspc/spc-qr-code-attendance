<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  
    public function showStudentList()
    {
        $students = User::where('userType', 'student')
            ->whereIn('course', ['BSIT', 'BSCS'])
            ->get();

        return view('ADMINISTRATOR.StudentList.ccs_stud_list', compact('students'));
    }

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
            'guardian_name' => 'required',
            'guardian_relationship' => 'required',
            'guardian_phone_number' => 'required',
            'guardian_email' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $student = User::create($validatedData);

        return redirect()->route('students.list')->with('success', 'Student created successfully');
    }

    public function edit($id)
    {
        $student = User::findOrFail($id);
        return view('ADMINISTRATOR.StudentList.Edit.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'student_id' => 'required|unique:users,student_id,' . $id,
            'name' => 'required',
            'course' => 'required',
            'gender' => 'required|in:male,female,other',
            'year_level' => 'nullable',
            'stats' => 'nullable', // Use 'stats' to match your column name
        ]);

        $student = User::findOrFail($id);
        $student->update($validatedData);

        return redirect()->route('ccs')->with('success', 'Student updated successfully');

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
