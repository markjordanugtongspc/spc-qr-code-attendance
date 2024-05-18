<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/users/student/dashboard/studentdashboard.css">
    <!-- <link rel="stylesheet" href="css/users/student/dashboard/studentdashboard.css"> -->
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="text-light">SPC Student Attendance Monitoring System</span>
            </a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">View Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <!-- Update this line -->
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                </ul>
            </li>
        </div>
    </nav>

    <!-- Add this form somewhere within your HTML body where it won't be displayed -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <div class="body container d-flex gap-4">
        <div class="student-details flex-column m-5">
            <div class="student-image" style="background-image: url('{{ asset('/'.Auth::user()->profile_picture) }}');">
                <p class="student-name">
                    {{ Auth::user()->name }}
                    <img src="{{ asset('images/svgs/pen-to-square-sharp-light.svg') }}" alt="Edit" class="edit-icon">
                </p>
            </div>

            <div class="student-info bg-light p-2">
                <div class="role d-flex justify-content-center">
                    <h6>Student<img src="https://add.pics/images/2024/04/30/imageabd0f4d5a4a733ba.png" alt="Verified" class="verified-mark"></h6>
                </div>
                <h6>ID-Number: <span class="user-info">{{ Auth::user()->student_id }}</span></h6>
                <h6>Phone: <span class="user-info">{{ Auth::user()->phone_number }}</span></h6>
                <h6>Course: <span class="user-info">{{ Auth::user()->course }}</span></h6>
                <h6>Address: <span class="user-info">{{ Auth::user()->address }}</span></h6>
                <h6>Gender: <span class="user-info">{{ Auth::user()->gender }}</span></h6>
                <h6>Year Level: <span>2nd year</span></h6>
            </div>
        </div>

        <div class="student-time flex-column pt-3 w-75">
            <div class="d-flex gap-4 ">
                <div class="qr-time text-light gap-1 align-content-center">
                    <h6><img src="images/qr-code.png" id="spcqr"><span> SCAN QR CODE</span></h6>
                    <h6 id="showdate"></h6>
                    <button class="scan w-100 d-flex justify-content-start" onclick="#">Scan QR Code</button>
                    <!-- <h6><a class="scan w-100 text-black" style="background-color: #fff;" href="#">scan qr code</a></h6> -->
                </div>
                <div class="logo justify-content-center ">
                    <img class="w-50 h-70 d-flex justify-content-center" src="images/spc-logo.png" alt="">
                </div>
            </div>
            <div class="container">
                <table class="table table-striped table-bordered mt-5 w-100">
                    <thead class="tablehead ">
                        <tr>
                            <th scope="col" class="text-center">Subject</th>
                            <th scope="col" class="text-center">Date</th>
                            <th scope="col" class="text-center">Time In</th>
                            <th scope="col" class="text-center">Time Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">CC106</td>
                            <td class="text-center">March 11,2004</td>
                            <td class="text-center">10:00am</td>
                            <td class="text-center">11:00am</td>
                        </tr>
                        <tr>
                            <td class="text-center">CC106</td>
                            <td class="text-center">March 11,2004</td>
                            <td class="text-center">10:00am</td>
                            <td class="text-center">11:00am</td>
                        </tr>
                        <tr>
                            <td class="text-center">CC106</td>
                            <td class="text-center">March 11,2004</td>
                            <td class="text-center">10:00am</td>
                            <td class="text-center">11:00am</td>
                        </tr>
                        <tr>
                            <td class="text-center">CC106</td>
                            <td class="text-center">March 11,2004</td>
                            <td class="text-center">10:00am</td>
                            <td class="text-center">11:00am</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        setInterval(() => {
            document.getElementById("showdate").innerHTML = Date();
        }, 1000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>