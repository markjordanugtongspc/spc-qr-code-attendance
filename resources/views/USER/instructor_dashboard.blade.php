<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/users/instructor/instructordashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand">
                <span class="text-light shift-text-left">SPC Student Attendance Monitoring System</span>
            </a>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">View Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                </ul>
            </li>
        </div>
    </nav>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div class="body container d-flex">
        <div class="instructor-details flex-column m-5">
            <!-- Wrap the name and edit icon in a container div -->
            <div class="instructor-name-container">
                <p class="instructor-name">{{ Auth::user()->name }}
                    <img src="{{ asset('images/svgs/pen-to-square-sharp-light.svg') }}" alt="Edit" class="edit-icon">
                </p>
            </div>
            <!-- The instructor image div now comes after the name container -->
            <div class="instructor-image" style="background-image: url('{{ asset('storage/profile_pictures/' . Auth::user()->profile_picture) }}');"></div>
            <div class="instructor-info bg-light  p-2">
                <div class="role d-flex justify-content-center">
                    <h6>Instructor<img src="https://add.pics/images/2024/04/30/imageabd0f4d5a4a733ba.png" alt="Verified" class="verified-mark"></h6>
                </div>
                <h6>Department: <span>{{ Auth::user()->department }}</span></h6>
                <h6>Email Address: <span>{{ Auth::user()->email }}</span></h6>
                <h6>Phone: <span>{{ Auth::user()->phone_number }}</span></h6>
                <h6>Address: <span>{{ Auth::user()->address }}</span></h6>
                <h6>Status: <span>{{ Auth::user()->status }}</span></h6>
                <h6>Job Status: <span>{{ Auth::user()->job_status }}</span></h6>
                <h6>Birthday: <span>{{ Auth::user()->birthday }}</span></h6>
                <div class="list d-flex justify-content-center">
                    <h6 class="bg-success p-2 rounded-pill">List of Student<span></span></h6>
                </div>
            </div>
            <div class="generate-qr d-flex flex-column bg-white mt-3">
                <p class="d-flex justify-content-center pt-3">GENERATE QR</p>
                <p class="d-flex justify-content-center"><img src="/images/qr-code.png" alt=""></p>
                <p class="d-flex justify-content-center"><a class="bg-success text-black p-1" href="#">Select Subject</a></p>
            </div>
        </div>
        <div class="instructor-time flex-column pt-3 w-75 ">
            <div class="d-flex gap-4 ">
                <div class="qr-time text-light gap-1 align-content-center">
                    <h6><img src="/images/qr-code.png" id="spcqr"><span> SCAN QR CODE</span></h6>
                    <h6 id="showdate"></h6>
                    <button class="scan w-100 d-flex justify-content-start" onclick="#">Scan QR Code</button>
                    <!-- <h6><a class="scan w-100 text-black" style="background-color: #fff;" href="#">scan qr code</a></h6> -->
                </div>
                <div class="logo justify-content-center ">
                    <img class="w-50 h-70 d-flex justify-content-center" src="/images/spc-logo.png" alt="">
                </div>
            </div>
            <div class="subject d-flex justify-content-center mt-5 gap-5">
                <a class="sub p-4 align-content-center bg-white text-black" href="">CC106 - 50000</a>
                <a class="sub p-4 align-content-center bg-white text-black" href="">CC107 - 60000</a>
                <a class="sub p-4 align-content-center bg-white text-black" href="">CC108 - 70000</a>
            </div>
            <div class="show-search d-flex d-flex justify-content-between padd-1">
                <h6 class="d-flex align-items-end">SHOW&nbsp;
                    <select class="form-select form-select-sm d-flex align-items-end custom-dropdown-width" aria-label=".form-select-sm example">
                        <option selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    &nbsp;Entries
                </h6>


                <form class="form-inline d-flex">
                    <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <table class="table table-striped table-bordered mt-5  w-100">
                <thead class="tablehead">
                    <tr>
                        <th scope="col" class="text-center">Id Number</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Course</th>
                        <th scope="col" class="text-center">Gender</th>
                        <th scope="col" class="text-center">Year Level</th>
                        <th scope="col" class="text-center">Time In</th>
                        <th scope="col" class="text-center">Time Out</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">18-0553</td>
                        <td class="text-center">Christian Bolohan Maglangit</td>
                        <td class="text-center">BSIT</td>
                        <td class="text-center">Male</td>
                        <td class="text-center">Second Year</td>
                        <td class="text-center">10:00am</td>
                        <td class="text-center">11:00am</td>
                    </tr>
                    <tr>
                        <td class="text-center">2000-2021</td>
                        <td class="text-center">Jerald C. Corbo</td>
                        <td class="text-center">BSIT</td>
                        <td class="text-center">Male</td>
                        <td class="text-center">Second Year</td>
                        <td class="text-center">11:00am</td>
                        <td class="text-center">12:00pm</td>
                    </tr>
                    <tr>
                        <td class="text-center">2000-2022</td>
                        <td class="text-center">Mark Jordan Ugtong</td>
                        <td class="text-center">BSIT</td>
                        <td class="text-center">Male</td>
                        <td class="text-center">Second Year</td>
                        <td class="text-center">12:00pm</td>
                        <td class="text-center">01:00pm</td>
                    </tr>
                    <tr>
                        <td class="text-center">2000-2023</td>
                        <td class="text-center">Sherie Darlene Barila</td>
                        <td class="text-center">BSIT</td>
                        <td class="text-center">Male</td>
                        <td class="text-center">Second Year</td>
                        <td class="text-center">02:00pm</td>
                        <td class="text-center">03:00pm</td>
                    </tr>
                </tbody>
            </table>
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