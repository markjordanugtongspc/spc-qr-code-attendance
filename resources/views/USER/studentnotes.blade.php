<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/studentnotes.css">
</head>

<body>
    <nav>
        <div class="navdiv">
            <div class="row01">
                <li><a href="{{route('studentdashboard')}}"><img src="images/spc-logo.png" class="mainlogo"></a></li>
                <li id="title">STUDENT ATTENDANCE MONITORING</li>
            </div>
            <div class="row001">
                <li class="nav-item nav-item-dropdown">
                    <a class="dropdown-trigger" href="#">Menu</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-item">
                            <p>Mark Jordan Bayot</p>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#">Profile</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#">Settings</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#">Support</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
    <div class="container1">
        <div class="container1-1">
            <div class="container11">
                <ul class="row1">
                    <li><img src="images/ccs.png" class="studentpp"></li>
                    <li>Mark Jordan Bayot</li>
                    <li>Student</li>
                    <li><button>Edit Profile</button></li>
                </ul>
            </div>
            <div class="container12">
                <ul class="row2">
                    <li>Id Number :</li>
                    <li>Address :</li>
                    <li>Phone Number :</li>
                    <li>Gender :</li>
                    <li>Department :</li>
                    <li>Course :</li>
                    <li>Year Level :</li>
                </ul>
            </div>
            <div class="backd">
                <a id="back" href="{{route('studentlist')}}"><img src="images/back-button.png" alt=""></a>
            </div>
        </div>
        <div class="container1-2">
            <div class="container21">
                <ul>
                    <li><img src="images/spc-qrcode.png" id="spcqr"> SCAN QR CODE</li>
                    <li>
                        <p id="showdate"></p>
                    </li>
                    <li>scan qr code</li>
                </ul>
            </div>
            <div class="container22">
                <div class="container22-1">
                    <h1>Admin Notes</h1>
                    <div class="notes">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sint reiciendis deserunt vero officia, assumenda odit culpa accusamus illum natus!</p>
                    </div>
                    <h5>Showing 0 to 0 entries</h5>
                </div>
                <div class="container22-2">
                    <h1>Instructor Notes</h1>
                    <div class="notes">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ut quas alias optio temporibus facere fuga, ullam voluptates deleniti minus.</p>
                    </div>
                    <h5>Showing 0 to 0 entries</h5>
                </div>
                <div class="prev-nex">
                    <button>Previous</button>
                    <button>Next</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        setInterval(() => {
            document.getElementById("showdate").innerHTML = Date();
        }, 1000);
    </script>
    <source src="js/menu.js">
</body>

</html>