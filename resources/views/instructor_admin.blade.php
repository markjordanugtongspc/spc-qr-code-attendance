<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    @import url('https://db.onlinewebfonts.com/c/56d3addcc26c615d76f21e7e540c2647?family=Carol+Gothic');
  </style>
</head>

<body class="bg-white">
  <div class="flex">
    <div class="w-1/4 bg-red-900 text-white">
      <div class="flex items-center justify-center py-3">
        <img src="images/spc-logo.png" alt="Logo" class="w-11 h-11 mr-2">
        <h1 class="text-5xl font-semibold" style="font-family: 'Carol Gothic', sans-serif;">Admin Dashboard</h1>
      </div>
      <div class="flex flex-col items-center justify-start h-screen">
        <a href="{{ route('student') }}" class="btn btn-primary bg-red-500 hover:bg-red-700 mb-2">Students</a>
        <a href="{{ route('instructor') }}" class="btn btn-primary bg-red-500 hover:bg-red-700 mb-2">Instructor</a>
        <a href="{{ route('attendance_log') }}" class="btn btn-primary bg-red-500 hover:bg-red-700 mb-2">Attendance Log</a>
      </div>
    </div>
    <div class="w-3/4">
      <div class="flex items-center justify-center py-8">
        <h1 class="text-4xl font-semibold">Instructor</h1>
      </div>
      <div class="grid grid-cols-6 gap-4 mx-8">
        <div class="flex flex-col">
          <a href="YOUR_LOGO_ROUTE" class="flex flex-row items-center">
            <div class="bg-white rounded-lg p-2">
              <img src="images/instructor/cba.png" class="instructor-cba1" />
              <p class="text-center">College of Business Administration</p>
            </div>
          </a>
        </div>
        <div class="flex flex-col items-center">
          <a href="YOUR_LOGO_ROUTE" class="flex flex-row items-center">
            <div class="bg-white rounded-lg p-2">
              <img src="images/instructor/coc.png" class="instructor-coc1" />
              <p class="text-center">College of Computing</p>
            </div>
          </a>
        </div>
        <div class="flex flex-col items-center">
          <a href="YOUR_LOGO_ROUTE" class="flex flex-row items-center">
            <div class="bg-white rounded-lg p-2">
              <img src="images/instructor/ccs.png" class="instructor-ccs1" />
              <p class="text-center">College of Computer Studies</p>
            </div>
          </a>
        </div>
        <div class="flex flex-col items-center">
          <a href="YOUR_LOGO_ROUTE" class="flex flex-row items-center">
            <div class="bg-white rounded-lg p-2">
              <img src="images/instructor/cas.png" class="instructor-cas1" />
              <p class="text-center">College of Arts and Sciences</p>
            </div>
          </a>
        </div>
        <div class="flex flex-col items-center">
          <a href="YOUR_LOGO_ROUTE" class="flex flex-row items-center">
            <div class="bg-white rounded-lg p-2">
              <img src="images/instructor/coe.png" class="instructor-coe1" />
              <p class="text-center">College of Engineering</p>
            </div>
          </a>
        </div>
        <div class="flex flex-col items-center">
          <a href="YOUR_LOGO_ROUTE" class="flex flex-row items-center">
            <div class="bg-white rounded-lg p-2">
              <img src="images/instructor/ced.png" class="instructor-ced1" />
              <p class="text-center">College of Education</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>