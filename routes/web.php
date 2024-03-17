<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

// Display the student form
Route::get('/student-form', function () {
    return view('student_form');
})->name('student-form');

// Process the form and generate the QR code with a download link
Route::post('/generate-qr', function (Request $request) {
    // Generate a unique identifier for the session/data
    $uniqueId = Str::random(40);
    $filename = "student_info_{$uniqueId}.txt";
    $data = "ID: " . $request->student_id . "\nName: " . $request->student_name . "\nSubject: " . $request->student_subject . "\nTimestamp: " . now();

    // Store the data in a text file within local storage
    Storage::disk('local')->put($filename, $data);

    // Generate QR code with a URL to download the file
    $downloadLink = route('download', ['filename' => $filename]);
    $qrCode = QrCode::size(200)->generate($downloadLink);

    return view('your-view', ['qrCode' => $qrCode]);
})->name('generate-qr');

// Route to download the file
Route::get('/download/{filename}', function ($filename) {
    if (Storage::disk('local')->exists($filename)) {
        return Storage::download($filename);
    }

    return abort(404);
})->name('download');

// Route for default branch
Route::get('/', function () {
    return view('student_form');
});

// Route for the admin page
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

// Route for the instructor page
Route::get('/instructor', function () {
    return view('instructor_admin');
})->name('instructor');

// Route for the attendance log page
Route::get('/attendance_log', function () {
    return view('attendance_log');
})->name('attendance_log');

// Route for the student page
Route::get('/student', function () {
    return view('student_admin');
})->name('student');
Route::get('/studentdashboard', function () {
    return view('studentdashboard');
})->name('studentdashboard');
Route::get('/instructordashboard', function () {
    return view('instructordashboard');
})->name('instructordashboard');
Route::get('/logout',function(){
    auth()->logout();
    return redirect('student-form');
})->name('logout');