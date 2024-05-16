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
    }
}
