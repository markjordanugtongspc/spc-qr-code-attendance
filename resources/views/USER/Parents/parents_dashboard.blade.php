<!-- Uses customize css (bootstrap) then use font-awesome for icons -->
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Parents Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="assets/css/Goblin%20One.css?h=da5870ae798b40cb00e3f64eddded650">
    <link rel="stylesheet" href="assets/css/Roboto.css?h=f01c4f84e687561c690c45bf4223d7be">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css?h=4f3cfa46e40e236365345fc77963f4b8">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="css/users/parents/parents_style.css">
</head>

<body>
    <div class="container" style="margin: 0px; padding-left: 0px; margin-bottom: 0px; margin-left: 0px; margin-right: 0px; height: 600px; padding-bottom: 0px; padding-right: 0px; max-width: 100%;">
        <div class="row" style="margin-right: 0px; margin-left: 0px; padding-bottom: 120px; display: flex; align-items: center; justify-content: space-between;">
            <div class="col" style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid white; padding-bottom: 10px; margin-top: 4px;">
                <h1 style="font-size: 17px; color: var(--bs-body-bg); margin-bottom: 0px;">Parent Dashboard</h1>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="menuButton" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #f8f9fa; color: #333; border: 1px solid #ddd; padding: 5px 10px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.2); cursor: pointer; text-decoration: none;">
                        Menu
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="max-width: 100px;"> <!-- Adjust max-width as needed -->
                        <li><a class="dropdown-item text-truncate" href="#">{{ $guardianName ?? Auth::user()->name }}</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

        <div class="row" style="margin-right: 0px; margin-left: 0px; height: 45px; position: absolute; top: 0; margin-top: 70px">
            <div class="col">
                <select name="student-name" id="student-name" style="background: rgba(225,180,180,0.57); border-radius: 4px; cursor: pointer;">
                    <option value="Student">{{ Auth::user()->name }}</option>
                    <option value="Sherie Barila">Sherie Barila</option>
                    <option value="Jordan Ugtong">Jordan Ugtong</option>
                    <option value="Cathy Amamampang">Cathy Amamampang</option>
                </select>
            </div>
        </div>

        <div style="display: flex; justify-content: center;">
            <a href="#subject1" data-toggle="modal" data-target="#subject1Modal" style="text-decoration: none; color: inherit;">
                <div style="display: grid; grid-template-columns: auto auto auto auto; position: absolute; top: 0; margin-top: 78px">
                    <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                        <div style="display: flex; flex-direction: column">
                            <img style="width: 270px; height: 120px" src="https://add.pics/images/2024/06/03/image4261169653260bd7.png" alt="">
                            <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                                <span>CC 106</span>
                                <span>Application Development & Emerging Technologies</span>
                            </div>
                        </div>
                    </div>
            </a>
            <a href="#subject2" data-toggle="modal" data-target="#subject2Modal" style="text-decoration: none; color: inherit;">
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://add.pics/images/2024/06/03/image7f5e1401a541896d.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>SIA 101</span>
                            <span>Fundamentals of System Integration & Architecture</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#subject3" data-toggle="modal" data-target="#subject3Modal" style="text-decoration: none; color: inherit;">
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://add.pics/images/2024/06/03/image888ada38d44309ee.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>PF 102</span>
                            <span>Life and Works of Rizal</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#subject4" data-toggle="modal" data-target="#subject4Modal" style="text-decoration: none; color: inherit;">
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://wallpapers.com/images/hd/subject-icons-hd-uhvujdwz08050y9z.jpg" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>IM 102</span>
                            <span>Life and Works of Rizal</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#subject6" data-toggle="modal" data-target="#subject6Modal" style="text-decoration: none; color: inherit;">
                <div style="width: 270px; height: 200px; background-color: white; display: flex; justify-content: center; box-shadow: 2px 2px 4px 1px gray; border-radius: 2px; margin-top: 40px; margin-right: 40px;">
                    <div style="display: flex; flex-direction: column">
                        <img style="width: 270px; height: 120px" src="https://add.pics/images/2024/06/03/imageed5a26552bc82834.png" alt="">
                        <div style="display: flex; flex-direction: column; margin: 10px 0 0 10px;">
                            <span>GATE PASS</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Modal for Subject 1 -->
    <div class="modal fade" id="subject1Modal" tabindex="-1" role="dialog" aria-labelledby="subject1ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="subject1ModalLabel">CC 106 Attendance</h5>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">SUBJECT</th>
                                <th class="text-center">NAME</th>
                                <th class="text-center">DATE</th>
                                <th class="text-center">SIGN IN</th>
                                <th class="text-center">SIGN OUT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cc106s as $cc106)
                            @if ($cc106->subject == 'CC 106')
                            <tr>
                                <td class="text-center">{{ $cc106->subject}}</td>
                                <td class="text-center">{{ $cc106->name }}</td>
                                <td class="text-center">{{ $cc106->date }}</td>
                                <td class="text-center">
                                    {{ $cc106->time_in ? \Carbon\Carbon::parse($cc106->time_in)->format('h:i A') : 'N/A' }}
                                </td>
                                <td class="text-center">
                                    {{ $cc106->signout_time ? \Carbon\Carbon::parse($cc106->signout_time)->format('h:i A') : 'N/A' }}
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Subject 2 -->
    <div class="modal fade" id="subject2Modal" tabindex="-1" role="dialog" aria-labelledby="subject2ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="subject2ModalLabel">SIA 101 Attendance</h5>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">SUBJECT</th>
                                <th class="text-center">NAME</th>
                                <th class="text-center">DATE</th>
                                <th class="text-center">SIGN IN</th>
                                <th class="text-center">SIGN OUT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sia101s as $sia101)
                            @if ($sia101->subject == 'SIA 101')
                            <tr>
                                <td class="text-center">{{ $sia101->subject}}</td>
                                <td class="text-center">{{ $sia101->name }}</td>
                                <td class="text-center">{{ $sia101->date }}</td>
                                <td class="text-center">
                                    {{ $sia101->time_in ? \Carbon\Carbon::parse($sia101->time_in)->format('h:i A') : 'N/A' }}
                                </td>
                                <td class="text-center">
                                    {{ $sia101->signout_time ? \Carbon\Carbon::parse($sia101->signout_time)->format('h:i A') : 'N/A' }}
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Subject 3 -->
    <div class="modal fade" id="subject3Modal" tabindex="-1" role="dialog" aria-labelledby="subject3ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="subject3ModalLabel">PF 102 Attendance</h5>
                    </button>
                </div>
                <div class="modal-body">
                <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">SUBJECT</th>
                                <th class="text-center">NAME</th>
                                <th class="text-center">DATE</th>
                                <th class="text-center">SIGN IN</th>
                                <th class="text-center">SIGN OUT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pf102s as $pf102)
                            @if ($pf102->subject == 'PF 102')
                            <tr>
                                <td class="text-center">{{ $pf102->subject}}</td>
                                <td class="text-center">{{ $pf102->name }}</td>
                                <td class="text-center">{{ $pf102->date }}</td>
                                <td class="text-center">
                                    {{ $pf102->time_in ? \Carbon\Carbon::parse($pf102->time_in)->format('h:i A') : 'N/A' }}
                                </td>
                                <td class="text-center">
                                    {{ $pf102->signout_time ? \Carbon\Carbon::parse($pf102->signout_time)->format('h:i A') : 'N/A' }}
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Subject 4 -->
    <div class="modal fade" id="subject4Modal" tabindex="-1" role="dialog" aria-labelledby="subject4ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="subject4ModalLabel">IM 102 Attendance</h5>
                    </button>
                </div>
                <div class="modal-body">
                <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">SUBJECT</th>
                                <th class="text-center">NAME</th>
                                <th class="text-center">DATE</th>
                                <th class="text-center">SIGN IN</th>
                                <th class="text-center">SIGN OUT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($im102s as $im102)
                            @if ($im102->subject == 'IM 102')
                            <tr>
                                <td class="text-center">{{ $im102->subject}}</td>
                                <td class="text-center">{{ $im102->name }}</td>
                                <td class="text-center">{{ $im102->date }}</td>
                                <td class="text-center">
                                    {{ $im102->time_in ? \Carbon\Carbon::parse($im102->time_in)->format('h:i A') : 'N/A' }}
                                </td>
                                <td class="text-center">
                                    {{ $im102->signout_time ? \Carbon\Carbon::parse($im102->signout_time)->format('h:i A') : 'N/A' }}
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- School Gatepass Logs -->
    <div class="modal fade" id="subject6Modal" tabindex="-1" role="dialog" aria-labelledby="subject6ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="subject6ModalLabel">School Gatepass Logs</h5>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">ID NUMBER</th>
                                <th class="text-center">NAME</th>
                                <th class="text-center">DATE</th>
                                <th class="text-center">TIME IN</th>
                                <th class="text-center">TIME OUT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendanceLogs as $log)
                            <tr>
                                <td class="text-center">{{ $log->student_id }}</td>
                                <td class="text-center">{{ $log->student->name }}</td>
                                <td class="text-center">{{ $log->date }}</td>
                                <td class="text-center">
                                    {{ $log->signin_time ? \Carbon\Carbon::parse($log->signin_time)->format('h:i A') : 'N/A' }}
                                </td>
                                <td class="text-center">
                                    {{ $log->signout_time ? \Carbon\Carbon::parse($log->signout_time)->format('h:i A') : 'N/A' }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modals -->
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Moment.js Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#subject6Modal').on('show.bs.modal', function(e) {});
        });
    </script>
</body>

</html>