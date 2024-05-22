@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="container px-4">
    <div class="w-full max-w-lg mx-auto bg-white p-8 border border-gray-200 rounded-lg shadow-xl">
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="student_id" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Student ID</label>
                <input type="text" name="student_id" id="student_id" placeholder="Enter student ID" value="{{ $student->student_id }}" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-100" />
            </div>

            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter name" value="{{ $student->name }}" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-100" />
            </div>

            <div class="mb-6">
                <label for="course" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Course</label>
                <input type="text" name="course" id="course" placeholder="Enter course" value="{{ $student->course }}" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-100" />
            </div>

            <div class="mb-6">
                <label for="gender" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Gender</label>
                <select name="gender" id="gender" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-100">
                    <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ $student->gender == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <div class="mb-6">
                <label for="year_level" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Year Level</label>
                <input type="text" name="year_level" id="year_level" placeholder="Enter year level" value="{{ $student->year_level }}" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-100" />
            </div>

            <div class="mb-6">
                <label for="stats" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Status</label>
                <input type="text" name="stats" id="stats" placeholder="Enter Status" value="{{ $student->stats }}" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-100" />
            </div>

            <!-- QR Code Display -->
            <div class="mb-6 text-center">
                <label for="qr_code" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">QR Code</label>
                <div id="qrCode" class="mb-4"></div>
                <button type="button" onclick="generateQrCode()" class="px-3 py-2 text-white bg-blue-500 rounded-md focus:bg-blue-600 focus:outline-none">Generate QR Code</button>
            </div>

            <div class="mb-6">
                <button type="submit" class="w-full px-3 py-4 text-white bg-blue-500 rounded-md focus:bg-blue-600 focus:outline-none">Update</button>
            </div>
        </form>
    </div>
</div>

<script>
    function generateQrCode() {
        // Get the student_id value
        var studentId = document.getElementById('student_id').value;
        // Generate the QR code URL with only the student_id
        const qrCodeUrl = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${encodeURIComponent(studentId)}`;
        // Display the QR code
        document.getElementById('qrCode').innerHTML = `<img src="${qrCodeUrl}" alt="QR Code" style="margin: auto; display: block;">`;
    }
</script>
@endsection