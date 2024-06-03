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
use App\Models\User;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ScannerController;
use App\Http\Controllers\InstructorController;
use App\Models\Logs2;

// ..................................GATE PASS
// Route for default branch//
Route::get('/', [ScannerController::class, 'index']);
Route::post('/store', [ScannerController::class, 'store'])->name('scan');

// ..................................ADMIN
// Route for the admin page
Route::get('/admin', function () {
    return view('ADMINISTRATOR/Admin/admin');
})->name('admin')->middleware(['auth', 'admin']);

// Route for the instructor page
Route::get('/instructor', function () {
    return view('ADMINISTRATOR/InstructorAdministrator/instructor_admin');
})->name('instructor');

// Route for the student page
Route::get('/student', function () {
    return view('ADMINISTRATOR/StudentAdministrator/student_admin');
})->name('student'); 

// Route for the attendance log page
Route::get('/attendancelog', [ScannerController::class, 'showAttendanceLogs'])->name('attendancelog');

// Route for the instructor attendance log
Route::get('/instructor-attendance-log', [InstructorController::class, 'showAttendanceLogss'])->name('instructor.attendance.log');
Route::get('/instructor-dashboard', 'InstructorController@showInstructorDashboard')->name('instructor.dashboard');

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

// Route for the ccs studentlist
Route::get('/ccs', [StudentController::class, 'showStudentList'])->name('ccs');

// Route for the studentlist
Route::get('/cas', function () {
    return view('ADMINISTRATOR/StudentList/cas_stud_list');
})->name('cas');

// Route for the studentlist
Route::get('/ced', function () {
    return view('ADMINISTRATOR/StudentList/ced_stud_list');
})->name('ced');


// Route for the Instructor list
Route::get('/instructor_coe', function () {
    return view('ADMINISTRATOR\InstructorAdministrator\coe_instuctor_list');
})->name('instructor_coe');

// Route for the Instructor list
Route::get('/instructor_cba', function () {
    return view('ADMINISTRATOR\InstructorAdministrator\cba_instuctor_list');
})->name('instructor_cba');

// Route for the Instructor list
Route::get('/instructor_coc', function () {
    return view('ADMINISTRATOR\InstructorAdministrator\coc_instuctor_list');
})->name('instructor_coc');

// Route for the ccs Instructor list
Route::get('/instructor_ccs', [InstructorController::class, 'showInstructors'])->name('ccs_instuctor_list');


// Route for the Instructor list
Route::get('/instructor_cas', function () {
    return view('ADMINISTRATOR\InstructorAdministrator\cas_instuctor_list');
})->name('instructor_cas');

// Route for the Instructor list
Route::get('/instructor_ced', function () {
    return view('ADMINISTRATOR\InstructorAdministrator\ced_instuctor_list');
})->name('instructor_ced');



// .................................USER
// Route for the signup
Route::get('/signup', function () {
    return view('USER/signup');
})->name('signup');

// Route for the Login
Route::get('/login', function () {
    return view('USER/Authentication/login');
})->name('login');

// Update the route for the parent dashboard
Route::get('/parents', [ScannerController::class, 'getGuardianName'])->name('parents_dashboard');
// Route for the sub log page
Route::get('/parents', [ScannerController::class, 'getGatepassAttendanceLog'])->name('parents_dashboard');

// Specific Guardian Data
Route::get('/guardian/{guardian_id}/attendance', 'GuardianController@getAttendanceData');


// Route for the instructor dashboard
Route::get('/instructordashboard', [InstructorController::class, 'showDashboard'])->name('instructordashboard');

// Route for the instructor sub views
Route::get('/instructor_sub_views', function () {
    return view('USER/Instructor/instructor_sub_views');
})->name('instructor_sub_views');

// Route for the student dashboard
Route::get('/studentdashboard', [StudentController::class, 'showStudentDashboard'])->name('studentdashboard');

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

// Ensure authentication for these routes
Route::get('/student/dashboard', [AttendanceController::class, 'getAttendanceLogs'])->middleware('auth');
Route::post('/student/attendance', [AttendanceController::class, 'store'])->middleware('auth');

// Edit Route
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

// Delete Routes [Students and Instructors]
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::post('/students/{id}/restore', [StudentController::class, 'restore'])->name('students.restore');
// Soft delete an instructor
Route::delete('/instructors/{id}', [InstructorController::class, 'destroy'])->name('instructors.destroy');
Route::post('/instructors/{id}/restore', [InstructorController::class, 'restore'])->name('instructors.restore');
// Save QR Instructor
Route::put('/instructors/{id}/save-qr', [InstructorController::class, 'updateQrCode'])->name('instructors.save-qr');
// Instructor Scan
Route::post('/instructor-scan', [ScannerController::class, 'scanInstructor'])->name('instructor.scan');

// Authentication Routes
Route::get('/signup', [AuthController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [RegisterController::class, 'studentRegister'])->name('student.register');
Route::post('instructorregister', [RegisterController::class, 'instructorRegister'])->name('instructor.register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');  // Change to showLoginForm
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Student Attendance Route
Route::post('/submit-attendance', [AttendanceController::class, 'store'])->name('attendance.store');

// Temporarily bypass middleware for testing
Route::post('/check-enrollment', [EnrollmentController::class, 'check'])->withoutMiddleware(['admin', 'auth']);

// Student Specific Subject Attendance
Route::get('/logs2/{id?}', [AttendanceController::class, 'showLogs2'])->name('logs2');

// Soft Delete for Logs2
Route::delete('/logs2/{id}/soft-delete', [AttendanceController::class, 'softDeleteLog'])->name('logs2.softDelete');
Route::post('/logs2/{id}/restore', [AttendanceController::class, 'restoreLog'])->name('logs2.restore');

// Search Dynamic
Route::get('/search-attendance', [ScannerController::class, 'searchAttendance'])->name('search.attendance');
