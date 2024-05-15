<!-- Using tailwind Css for styling and added php foreach loop to display the data from the database. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Attendance Log</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 h-screen overflow-auto">
    <div class="bg-red-700 h-10"></div>
    <div class="flex flex-col md:flex-row justify-between items-center px-4 md:px-10 py-5">
        <h1 class="text-xl md:text-3xl font-bold">ATTENDANCE LOG</h1>
        <div class="flex flex-wrap items-center space-x-2 space-y-2 md:space-y-0"> <!-- Added flex-col, space-y-4, and md:space-y-0 classes -->
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

    <div class="overflow-auto">
        <table class="min-w-full">
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
            <button class="px-2 py-1 rounded-full bg-red-700 rounded-md hover:bg-red-500" onclick="randomizeRoute()">
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

        <script>
            function randomizeRoute() {
                var routes = ["instructor", "student"];
                var randomIndex = Math.floor(Math.random() * routes.length);
                var randomRoute = routes[randomIndex];

                // Redirect to the random route
                window.location.href = "/" + randomRoute;
            }
        </script>

</body>

</html>