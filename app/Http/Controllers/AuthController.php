<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('login');  // Replace with your signup view's filename
    }

    public function register(Request $request)
    {
        // Validation Rules (Tailor these!)
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        }

        
        $user = User::create([
            'name' => $request->name,
            'student_id' => $request->student_id,
            'course' => $request->course,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'birthday' => $request->birthday,
            'address' => $request->address,
            'gender' => $request->gender,
            'profile_picture' => $request->profile_picture, 
            'guardian_name' => $request->guardian_name,
            'guardian_relationship' => $request->guardian_relationship,
            'guardian_phone_number' => $request->guardian_phone_number,
            'guardian_email' => $request->guardian_email,
        ]);

        // Log the user in (optional)
        // Auth::login($user); 

        // Redirect to success page
        return redirect('/')->with('success', 'Registration successful!');
    }

    public function showLoginForm()
    {
        return view('USER/login'); // Make sure this points to your login view
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

        // Authentication attempt
        if (Auth::attempt($request->only(['email', 'password']))) {
            // Successful login, redirect to intended route
            return redirect()->intended('/');
        } else {
            // Invalid credentials, go back
            return redirect('login')->with('error', 'Invalid login credentials.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
