<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Dashboard</title>
    <link rel="stylesheet" href="css/users/instructor/instructordashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="text-light">SPC Student Attendance Monitoring System</span>
            </a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 100px;">Menu</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="max-width: 100px;"> <!-- Adjust max-width as needed -->
                    <li><a class="dropdown-item text-truncate" href="#">{{ Auth::user()->name }}</a></li>
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
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div class="body container d-flex">
        <div class="instructor-details flex-column m-5">
            <!-- Wrap the name and edit icon in a container div -->
            <div class="instructor-image" style="background-image: url('{{ asset(str_replace('/storage/storage', '/storage', Storage::url(Auth::user()->profile_picture))) }}');">
                <p class="instructor-name gap-1">
                    {{ Auth::user()->name }}
                </p>
            </div>
            <!-- The instructor image div now comes after the name container -->
            <div class="instructor-info bg-light p-3 rounded shadow-sm" style="width: 100%;">
                <div class="row mb-3">
                    <div class="col-12 text-center" style="display: flex; justify-content: center; align-items: center;">
                        <h4 class="text-primary">Instructor</h4>
                        <img src="https://add.pics/images/2024/04/30/imageabd0f4d5a4a733ba.png" alt="Verified" class="verified-mark">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6" style="width: 100%;">
                        <div class="mb-2" style="display: flex; flex-direction: column; width: 100%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                            <h6 style="display: flex; align-items: center;">Department: <span class="highlight">{{ Auth::user()->department }}</span></h6>
                            <h6 style="display: flex; align-items: center;">Address: <span class="highlight">{{ Auth::user()->address }}</span></h6>
                            <h6 style="display: flex; align-items: center;">Email Address: <span class="highlight">{{ Auth::user()->email }}</span></h6>
                            <h6 style="display: flex; align-items: center;">Phone: <span class="highlight">{{ Auth::user()->phone_number }}</span></h6>
                            <h6 style="display: flex; align-items: center;">Status: <span class="highlight">{{ Auth::user()->status }}</span></h6>
                            <h6 style="display: flex; align-items: center;">Birthday: <span class="highlight">{{ Auth::user()->birthday }}</span></h6>
                            <h6 style="display: flex; align-items: center;">Job Status: <span class="highlight">{{ Auth::user()->job_status }}</span></h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 'View List' link that triggers the modal -->
            <div class="generate-qr d-flex flex-column bg-white mt-3">
                <p class="d-flex justify-content-center pt-3">ATTENDANCE VALIDATOR</p>
                <p class="d-flex justify-content-center">
                    <img src="https://img.icons8.com/?size=100&id=KV88o2HqEMTt&format=png&color=000000" alt="">
                </p>
                <p class="d-flex justify-content-center">
                    <!-- This link will trigger the modal -->
                    <a class="bg-success text-black p-1" href="#" data-bs-toggle="modal" data-bs-target="#studentListModal">View List</a>
                </p>
            </div>

            <!-- Modal Structure -->
            <div class="modal fade" id="studentListModal" tabindex="-1" aria-labelledby="studentListModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="studentListModalLabel">Student Attendance List</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Table structure for student list -->
                            <table class="table table-striped table-bordered w-100">
                                <thead class="tablehead">
                                    <tr>
                                        <th scope="col" class="text-center">Subject</th>
                                        <th scope="col" class="text-center">Student Name</th>
                                        <th scope="col" class="text-center">Date</th>
                                        <th scope="col" class="text-center">Time In</th>
                                        <th scope="col" class="text-center">Time Out</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attendanceLogs2 as $log)
                                    <tr>
                                        <td class="text-center">{{ $log->subject }}</td>
                                        <td class="text-center">{{ $log->user->name }}</td>
                                        <td class="text-center">{{ $log->date }}</td>
                                        <td class="text-center">{{ $log->time_in ? \Carbon\Carbon::parse($log->time_in)->format('h:i A') : 'N/A' }}</td>
                                        <td class="text-center">{{ $log->time_out ? \Carbon\Carbon::parse($log->time_out)->format('h:i A') : 'N/A' }}</td>
                                        <td class="text-center">
                                            @if (!$log->trashed())
                                            <form action="{{ route('logs2.softDelete', $log->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Soft Delete</button>
                                            </form>
                                            @else
                                            <form action="{{ route('logs2.restore', $log->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Restore</button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="instructor-time flex-column pt-3 w-75 ">
            <div class="d-flex gap-4 ">
                <div class="qr-time text-light gap-1 align-content-center">
                    <h6 id="welcomeMessage"></h6>
                    <h6 id="showdate"></h6>
                    <button class="scan w-100 d-flex justify-content-start">Inspire, empower, and ignite the minds of your students.</button>
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
                <div style="display: flex; align-items: center;">
                    <span style="font-weight: 600; margin-right: 2px;">SHOW</span>
                    <select class="form-select form-select-sm d-flex align-items-end custom-dropdown-width" aria-label=".form-select-sm example">
                        <option selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <span style="font-weight: 600; margin-left: 2px;">Entries</span>
                </div>

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
                    @foreach ($attendanceLogs as $log)
                    <tr>
                        @if($log->student)
                        <td class="text-center">{{ $log->student->student_id }}</td>
                        <td class="text-center">{{ $log->student->name }}</td>
                        <td class="text-center">{{ $log->student->course }}</td>
                        <td class="text-center">{{ $log->student->gender }}</td>
                        <td class="text-center">{{ $log->student->year_level }}</td>
                        <td class="text-center">{{ $log->created_at->format('h:i A') }}</td>
                        <td class="text-center">{{ $log->signout_time ? \Carbon\Carbon::parse($log->signout_time)->format('h:i A') : 'N/A' }}</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    <script>
        setInterval(() => {
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: 'numeric',
                minute: 'numeric',
                second: 'numeric',
                hour12: true,
                timeZone: 'Asia/Manila',
                timeZoneName: 'shortOffset'
            };

            const date = new Date();
            const formattedDateTime = date.toLocaleString('en-US', options);

            const timezoneSpan = document.createElement('span');
            timezoneSpan.textContent = " (Philippine Standard Time)";
            timezoneSpan.style.fontWeight = 'bold';
            timezoneSpan.style.color = '#cc9900'; // Subtle golden color

            const showdateElement = document.getElementById("showdate");
            showdateElement.innerHTML = formattedDateTime;
            showdateElement.appendChild(timezoneSpan);
        }, 1000);

        function updateWelcomeMessage() {
            const hour = new Date().getHours();
            let message = "";
            let iconLink = "";

            if (hour >= 0 && hour < 12) {
                message = "Good Morning, ";
                iconLink = '<a>🌞</a>';
            } else if (hour >= 12 && hour < 18) {
                message = "Good Afternoon, ";
                iconLink = '<a>😎</a>';
            } else {
                message = "Good Evening, ";
                iconLink = '<a>🌙</a>';
            }

            const welcomeMessageElement = document.getElementById("welcomeMessage");
            welcomeMessageElement.innerHTML = iconLink + " " + message + "{{ Auth::user()->name }}!"; // Include icon link
        }

        updateWelcomeMessage();
        setInterval(updateWelcomeMessage, 60000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>