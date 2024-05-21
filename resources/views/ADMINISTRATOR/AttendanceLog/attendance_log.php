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
                <input class="form-control ml-2" type="search" placeholder="March 11, 2024...">
            </div>
            <div class="mr-3 mb-2">
                <span class="font-weight-medium">Last name contains:</span>
                <input class="form-control ml-2" type="search" placeholder="Barila...">
            </div>
            <div class="mr-3 mb-2">
                <span class="font-weight-medium">Time in contains:</span>
                <input class="form-control ml-2" type="search" placeholder="7:00 am...">
            </div>
            <button class="btn btn-danger mt-3 ml-4">Search</button>
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
                <!-- You can populate the table rows dynamically here using PHP -->
            </tbody>
        </table>
        <div class="position-absolute bottom-0 start-0 ms-3 mb-3 d-flex align-items-center">
        <button class="btn btn-danger me-2" onclick="randomizeRoute()">
            Back
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

</body>

</html>
