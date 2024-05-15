<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;

// Route::post('/verify-student', [AttendanceController::class, 'verifyStudent'])->name('verify-student');

// // Process the form and generate the QR code with a download link
// Route::post('/generate-qr', function (Request $request) {
//     // Generate a unique identifier for the session/data
//     $uniqueId = Str::random(40);
//     $filename = "student_info_{$uniqueId}.txt";
//     $data = "ID: " . $request->student_id . "\nName: " . $request->student_name . "\nSubject: " . $request->student_subject . "\nTimestamp: " . now();

//     // Store the data in a text file within local storage
//     Storage::disk('local')->put($filename, $data);

//     // Generate QR code with a URL to download the file
//     $downloadLink = route('download', ['filename' => $filename]);
//     $qrCode = QrCode::size(200)->generate($downloadLink);

//     return view('your-view', ['qrCode' => $qrCode]);
// })->name('generate-qr');

// // Route to download the file
// Route::get('/download/{filename}', function ($filename) {
//     if (Storage::disk('local')->exists($filename)) {
//         return Storage::download($filename);
//     }

//     return abort(404);
// })->name('download');

// ..................................GATE PASS
// Route for default branch//
Route::get('/', function () {
    return view('GATEPASS/gatepass');
});

// ..................................ADMIN
// Route for the admin page
Route::get('/admin', function () {
    return view('ADMINISTRATOR/Admin');
})->name('admin')->middleware(['auth', 'admin']);

// Route for the instructor page
Route::get('/instructor', function () {
    return view('ADMINISTRATOR/InstructorAdministrator');
})->name('instructor');

// Route for the student page
Route::get('/student', function () {
    return view('ADMINISTRATOR/StudentAdministrator');
})->name('student');

// Route for the attendance log page
Route::get('/attendancelog', function () {
    return view('ADMINISTRATOR/AttendanceLog');
})->name('attendancelog');

// Route for the studentlist
Route::get('/coe', function () {
    return view('ADMINISTRATOR/StudentList/coe_stud_list');
})->name('coe');

// Route for the studentlist
Route::get('/cba', function () {
    return view('ADMINISTRATOR/StudentList/cba_stud_list');
})->name('cba');

// Route for the studentlist
Route::get('/coc', function () {
    return view('ADMINISTRATOR/StudentList/coc_stud_list');
})->name('coc');

// Route for the studentlist
Route::get('/ccs', function () {
    return view('ADMINISTRATOR/StudentList/ccs_stud_list');
})->name('ccs');

// Route for the studentlist
Route::get('/cas', function () {
    return view('ADMINISTRATOR/StudentList/cas_stud_list');
})->name('cas');

// Route for the studentlist
Route::get('/ced', function () {
    return view('ADMINISTRATOR/StudentList/ced_stud_list');
})->name('ced');



// .................................USER
// Route for the signup
Route::get('/signup', function () {
    return view('USER/signup');
})->name('signup');

// Route for the Login
Route::get('/login', function () {
    return view('USER/Authentication/login');
})->name('login');

// Route for the parent dashboard
Route::get('/parents', function () {
    return view('USER/Parents');
})->name('parents_dashboard');

// Route for the instructor dashboard
Route::get('/instructordashboard', function () {
    return view('USER/Instructor/instructor_dashboard');
})->name('instructordashboard');

// Route for the instructor sub views
Route::get('/instructor_sub_views', function () {
    return view('USER/Instructor/instructor_sub_views');
})->name('instructor_sub_views');

// Route for the Srudent dashboard
Route::get('/studentdashboard', function () {
    return view('USER/Student/studentdashboard');
})->name('studentdashboard');

// Route for forgot password
Route::get('/forgotpassword', function () {
    return view('USER/Authentication/forgotpassword');
})->name('forgotpassword');

// Route for Reset password
Route::get('/resetpassword', function () {
    return view('USER/Authentication/resetpassword');
})->name('resetpassword');

// Route for Student Notes
Route::get('/studentnotes', function () {
    return view('USER/Student/studentnotes');
})->name('studentnotes');

// Route for Instructor register
// Route::get('/instructorregister', function () {
//     return view('USER/instructorregister');
// })->name('instructor.register');


// Authentication Routes
Route::get('/signup', [AuthController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [StudentController::class, 'create'])->name('register');
Route::post('/signup', [RegisterController::class, 'studentRegister'])->name('student.register');
Route::post('instructorregister', [RegisterController::class, 'instructorRegister'])->name('instructor.register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
