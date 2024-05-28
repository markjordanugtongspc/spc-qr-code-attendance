<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Logs;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class InstructorController extends Controller
{
    public function showInstructors()
    {
        $instructors = User::where('userType', 'instructor')
            ->where('department', 'Computer Studies')
            ->get();

        // Make sure the view path matches the actual file name and location
        return view('ADMINISTRATOR.InstructorAdministrator.ccs_instuctor_list', compact('instructors'));
    }

    public function destroy($id)
    {
        $instructor = User::findOrFail($id);
        $instructor->delete();

        return redirect()->back()->with('success', 'Instructor soft deleted successfully.');
    }

    public function restore($id)
    {
        $instructor = User::withTrashed()->findOrFail($id);
        $instructor->restore();

        return redirect()->back()->with('success', 'Instructor restored successfully.');
    }

    public function showDashboard()
    {
        $attendanceLogs = Logs::all();

        return view('USER.Instructor.instructor_dashboard', compact('attendanceLogs'));
    }


    public function updateQrCode(Request $request, $id)
    {
        $instructor = User::findOrFail($id);

        // Generate QR code data
        $qrData = $request->input('qr_data');
        // Generate the QR code and save it as an image file
        $qrCode = QrCode::format('png')->size(200)->generate($qrData);
        $filename = 'qrcode/' . $instructor->id . '.png'; // Unique filename
        Storage::disk('public')->put($filename, $qrCode);

        // Update the instructor's QR code path in the database
        $instructor->qr_code = $filename;
        $instructor->save();

        return redirect()->back()->with('success', 'QR Code updated successfully.');
    }
}
