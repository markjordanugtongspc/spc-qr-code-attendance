<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        // Validation Rules
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'profile_picture' => 'image|required',
            'userType' => 'required|in:student,instructor',
            'password' => 'required',
        ];

        // Add password confirmation rule only for students
        if ($request->userType === 'student') {
            $rules['password'] .= '|confirmed';
            $rules['student_id'] = 'required';
            $rules['course'] = 'required';
            $rules['gender'] = 'required';
            $rules['guardian_name'] = 'required';
            $rules['guardian_relationship'] = 'required';
            $rules['guardian_phone_number'] = 'required';
            $rules['guardian_email'] = 'required';
        }

        // Add instructor-specific validation rules here
        if ($request->userType === 'instructor') {
            $rules['department'] = 'required';
            $rules['status'] = 'required';
            $rules['job_status'] = 'required';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        }

        // Handle the profile picture upload
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = $file->store('profile_pictures', 'public');
        }

        // Prepare user data for creation
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'birthday' => $request->birthday,
            'address' => $request->address,
            'userType' => $request->userType,
            'profile_picture' => isset($filename) ? $filename : null,
        ];

        // Conditionally add student-specific fields
        if ($request->userType === 'student') {
            $userData['student_id'] = $request->student_id;
            $userData['course'] = $request->course;
            $userData['gender'] = $request->gender;
            $userData['guardian_name'] = $request->guardian_name;
            $userData['guardian_relationship'] = $request->guardian_relationship;
            $userData['guardian_phone_number'] = $request->guardian_phone_number;
            $userData['guardian_email'] = $request->guardian_email;
        }

        // Conditionally add instructor-specific fields
        if ($request->userType === 'instructor') {
            $userData['department'] = $request->department;
            $userData['status'] = $request->status; // Ensure this value is being provided
            $userData['job_status'] = $request->job_status;
        }

        // Create the user
        $user = User::create($userData);

        // Redirect to success page
        return redirect('/login')->with('success', 'Registration successful!');
    }

    public function showLoginForm()
    {
        return view('USER/login');
    }

    public function login(Request $request)
    {
        // Validation
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        }

        // Attempt to authenticate the user
        $user = User::where('email', $request->email)->orWhere('guardian_email', $request->email)->first();

        if (!$user) {
            return redirect('login')->withErrors(['email' => 'No account found with that email.'])->withInput();
        }

        if ($user->userType == 'parent' && $request->password == $user->guardian_phone_number) {
            Auth::login($user);
            return redirect()->intended('/parentsdashboard');
        } elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended($this->redirectPath($user->userType));
        } else {
            return redirect('login')->withErrors(['email' => 'Invalid email or password.'])->withInput();
        }
    }

    private function redirectPath($userType)
    {
        switch ($userType) {
            case 'admin':
                return '/admin';
            case 'student':
                return '/studentdashboard';
            case 'instructor':
                return '/instructordashboard';
            default:
                return '/login';
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
