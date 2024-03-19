<!-- Using tailwind Css for styling and added php foreach loop to display the data from the database. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Attendance Log</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200" style="background-color: rgb(217, 217, 217);">
    <div class="bg-red-700 h-10" style="background-color: rgb(74, 3, 11);"></div>
    <div class="flex items-center justify-between mx-10 mt-5"> <!-- Reduced margin-top to mt-4 -->
        <h1 class="text-3xl font-bold ml-48">ATTENDANCE LOG</h1>
        <div class="flex ml-20 space-x-4">
            <div>
                <span class="font-medium">Date Today:</span>
                <input class="px-2 py-1 ml-2 rounded-md" type="search" placeholder="March 11, 2024...">
            </div>
            <div>
                <span class="font-medium">Last name contains:</span>
                <input class="px-2 py-1 ml-2 rounded-md" type="search" placeholder="Barila...">
            </div>
            <div>
                <span class="font-medium">Time in contains:</span>
                <input class="px-2 py-1 ml-2 rounded-md" type="search" placeholder="7:00 am...">
            </div>
            <button class="px-4 py-1 ml-4 font-medium text-white bg-red-700 rounded-md hover:bg-red-500">Search</button>
        </div>
    </div>
    
    <table class="w-full mx-auto mt-4 center">
        <tr>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">ID NUMBER</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">TYPE</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">NAME</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">COURSE</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">DEPARTMENT</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">DATE</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">TIME IN</th>
            <th class="px-6 py-3 border" style="background-color: rgb(198, 170, 170);">TIME OUT</th>
        </tr>
        <!-- @foreach($attendanceLogs as $log)
        <tr>
            <td class="px-6 py-3 border">{{ $log->id }}</td>
            <td class="px-6 py-3 border">{{ $log->type }}</td>
            <td class="px-6 py-3 border">{{ $log->name }}</td>
            <td class="px-6 py-3 border">{{ $log->course }}</td>
            <td class="px-6 py-3 border">{{ $log->department }}</td>
            <td class="px-6 py-3 border">{{ $log->date }}</td>
            <td class="px-6 py-3 border">{{ $log->time_in }}</td>
            <td class="px-6 py-3 border">{{ $log->time_out }}</td>
        </tr>
        @endforeach -->
    </table>
    <div class="absolute bottom-0 left-0 ml-4 mb-4 flex items-center">
        <button class="px-2 py-1 rounded-full bg-red-700 rounded-md hover:bg-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <span class="ml-4 py-1">Showing 0 to 0 of 0 entries</span>
    </div>
    <div class="absolute bottom-0 right-0 mb-3 mr-4">
        <button class="px-4 py-2 ml-1 font-medium text-white bg-red-700 rounded-md hover:bg-red-500">Previous</button> 
        <button class="px-4 py-2 ml-1 font-medium text-white bg-red-700 rounded-md hover:bg-red-500">Next</button>
    </div>
</body>
</html>