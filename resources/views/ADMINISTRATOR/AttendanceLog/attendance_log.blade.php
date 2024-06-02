<!DOCTYPE html>
<html lang="en">

<head>
    <title>Attendance Log</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light h-screen overflow-auto">
    <div style="height: 40px; background-color: #800000;"></div>
    <div class="container-fluid d-flex flex-column flex-md-row justify-content-between align-items-center px-4 px-md-5 py-5">
        <h1 class="text-xl mb-0 mb-md-3" style="font-weight: 800;">ATTENDANCE LOG</h1>
        <div class="d-flex gap-2 align-items-center">
            <div class="mr-3 mb-2">
                <span class="font-weight-medium">Date Today:</span>
                <input id="dateInput" class="form-control ml-2" type="date" placeholder="March 11, 2024...">
            </div>
            <div class="mr-3 mb-2">
                <span class="font-weight-medium">Last name contains:</span>
                <input id="lastNameInput" class="form-control ml-2" type="search" placeholder="Barila...">
            </div>
            <div class="mr-3 mb-2">
                <span class="font-weight-medium">Time in contains:</span>
                <input id="timeInInput" class="form-control ml-2" type="search" placeholder="7:00 am...">
            </div>
            <button class="btn btn-danger mt-3 ml-4" onclick="performSearch()">Search</button>
        </div>
    </div>

    <div class="overflow-auto">
        <table class="table table-bordered">
            <thead class="bg-secondary text-white">
                <tr>
                    <th class="text-center">ID NUMBER</th>
                    <th class="text-center">TYPE</th>
                    <th class="text-center">NAME</th>
                    <th class="text-center">COURSE</th>
                    <th class="text-center">DEPARTMENT</th>
                    <th class="text-center">DATE</th>
                    <th class="text-center">TIME IN</th>
                    <th class="text-center">TIME OUT</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($attendanceLogs as $log)
                <tr>
                    <td class="text-center">{{ $log->student_id ?? $log->instructor_name ?? 'N/A' }}</td>
                    <td class="text-center">{{ $log->student ? 'student' : 'instructor' }}</td>
                    <td class="text-center">{{ $log->student ? $log->student->name : $log->instructor_name }}</td>
                    <td class="text-center">{{ $log->student ? ($log->student->course ?? 'N/A') : 'N/A' }}</td>
                    <td class="text-center">{{ $log->student ? ($log->student->department ?? 'N/A') : ($log->instructor ? $log->instructor->department : 'N/A') }}</td>
                    <td class="text-center">{{ $log->date }}</td>
                    <td class="text-center">{{ $log->signin_time ? \Carbon\Carbon::parse($log->signin_time)->format('H:i:s') : 'N/A' }}</td>
                    <td class="text-center">{{ $log->signout_time ? \Carbon\Carbon::parse($log->signout_time)->format('H:i:s') : 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <div class="position-absolute bottom-0 start-0 ms-3 mb-3 d-flex align-items-center">
            <button class="btn " style="background-color: #800000;" onclick="randomizeRoute()">
                <img src="images/back1.png" alt="back-button" class="d-flex align-items-center" style="height: 20px;">
            </button>
            <span class="ms-4">Showing 0 to 0 of 0 entries</span>
        </div>
        <div class="position-absolute bottom-0 end-0 me-3 mb-3">
            <button class="btn text-light me-1" style="background-color: #800000;">Previous</button>
            <button class="btn text-light ms-1" style="background-color: #800000;">Next</button>
        </div>


        <!-- Include Bootstrap JS (Optional, if you need JavaScript functionality) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script>
            function randomizeRoute() {
                var routes = ["admin"];
                var randomIndex = Math.floor(Math.random() * routes.length);
                var randomRoute = routes[randomIndex];

                // Redirect to the random route
                window.location.href = "/" + randomRoute;
            }
        </script>
        <script>
            function performSearch() {
                console.log('Search button clicked');

                const date = document.getElementById('dateInput').value;
                const name = document.getElementById('lastNameInput').value; // Assuming you have a field with id 'lastNameInput'
                const timeIn = document.getElementById('timeInInput').value;
                const student_id = document.getElementById('IDNumberInput').value; // Assuming you have a field with id 'IDNumberInput'

                console.log('Search parameters:', date, name, timeIn);

                const query = new URLSearchParams({
                    date,
                    name,
                    timeIn,
                    student_id
                }).toString();

                console.log('Search query:', query);

                fetch(`/search-attendance?${query}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Search results:', data);
                        updateAttendanceLog(data);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        </script>

</body>

</html>