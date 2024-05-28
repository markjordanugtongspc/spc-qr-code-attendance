<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPC QR Code Monitoring System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div style="height: 40px; background-color: #800000;"></div>
    <div class="d-flex justify-content-center align-items-center mx-5 mt-3 gap-3">
        <img src="images/ccs.png" alt="ccs Logo" style="height: 80px; width: 80px;">
        <h1 class="text-center fs-3 fw-bold">@yield('title')</h1>
        <img src="images/ccs.png" alt="ccs Logo" style="height: 80px; width: 80px;">
    </div>

    @yield('content')

    <div class="position-absolute bottom-0 start-0 ms-3 mb-3 d-flex align-items-center">
        <button class="btn " style="background-color: #800000;">
            <img src="images/back1.png" alt="back-button" class="d-flex align-items-center" style="height: 20px;">
        </button>
        <span class="ms-4">Showing 0 to 0 of 0 entries</span>
    </div>
    <div class="position-absolute bottom-0 end-0 me-3 mb-3">
        <button class="btn text-light me-1" style="background-color: #800000;">Previous</button>
        <button class="btn text-light ms-1" style="background-color: #800000;">Next</button>
    </div>
</body>

</html>