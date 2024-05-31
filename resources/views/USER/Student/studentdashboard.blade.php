<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/users/student/dashboard/studentdashboard.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="text-light">SPC Student Attendance Monitoring System</span>
            </a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="max-width: 100px;"> <!-- Adjust max-width as needed -->
                    <li><a class="dropdown-item text-truncate" href="#">{{ Auth::user()->name }}</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#attendanceModal">Attendance Here</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                </ul>
            </li>
        </div>
    </nav>
    <!-- Add this form somewhere within your HTML body where it won't be displayed -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- Modal -->
    <div class="modal fade" id="attendanceModal" tabindex="-1" aria-labelledby="attendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="attendanceModalLabel">Attendance Here</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="attendanceForm">
                        <div class="form-group">
                            <label for="subjects">Select Subject:</label>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input type="radio" id="subject-cc106" name="subjects" value="CC 106">
                                    <label for="subject-cc106">CC 106</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="radio" id="subject-sia101" name="subjects" value="SIA 101">
                                    <label for="subject-sia101">SIA 101</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="radio" id="subject-pf102" name="subjects" value="PF 102">
                                    <label for="subject-pf102">PF 102</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="radio" id="subject-im102" name="subjects" value="IM 102">
                                    <label for="subject-im102">IM 102</label>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary ml-auto">Submit Attendance</button>
                        </div>
                    </form>
                    <div id="attendanceMessage" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="body container d-flex gap-4">
        <div class="student-details flex-column m-5">
            <div class="student-image" style="background-image: url('{{ str_replace('/public', '', asset('/' . Auth::user()->profile_picture)) }}');">
                <p class="student-name gap-1">
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

        <div class="student-time flex-column pt-3 w-75 ">
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
            <div class="container mt-5 pt-5">
                <table class="table table-striped table-bordered w-100">
                    <thead class="tablehead">
                        <tr>
                            <th scope="col" class="text-center">Subject</th>
                            <th scope="col" class="text-center">Date</th>
                            <th scope="col" class="text-center">Time In</th>
                            <th scope="col" class="text-center">Time Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendanceLogs as $log)
                        <tr>
                            <td class="text-center">CC106</td>
                            <td class="text-center">{{ $log->date }}</td>
                            <td class="text-center">{{ $log->signin_time ? \Carbon\Carbon::parse($log->signin_time)->format('h:ia') : 'N/A' }}</td>
                            <td class="text-center">{{ $log->signout_time ? \Carbon\Carbon::parse($log->signout_time)->format('h:ia') : 'N/A' }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#attendanceForm').submit(function(event) {
                event.preventDefault();
                var subject = $('input[name="subjects"]:checked').val();
                if (!subject) {
                    alert('Please select a subject.');
                    return;
                }
                $.ajax({
                    type: 'POST',
                    url: '/submit-attendance',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        subject: subject
                    },
                    success: function(response) {
                        $('#attendanceMessage').removeClass().addClass('alert alert-success').text(response.message);

                        // Close the modal after 3 seconds
                        setTimeout(function() {
                            $('#attendanceModal').modal('hide');
                            // Clear the message and reset the form
                            $('#attendanceMessage').text('').removeClass();
                            $('#attendanceForm').trigger('reset');
                        }, 3000); // 3000 milliseconds = 3 seconds
                    },
                    error: function(xhr, status, error) {
                        $('#attendanceMessage').removeClass().addClass('alert alert-danger').text(xhr.responseJSON.message || 'There was an error submitting your attendance. Please try again.');
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>

    <script>
        setInterval(() => {
            document.getElementById("showdate").innerHTML = Date();
        }, 1000);
    </script>
</body>

</html>