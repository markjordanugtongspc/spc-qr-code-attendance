<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/intructordashboard.css">
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
                            <p>Christian Maglangit</p>
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
                    <li><img src="images/ccs11806-stk-200h.png" class="studentpp"></li>
                    <li>name</li>
                    <li>Instructor</li>
                    <li><button>edit profile</button></li>
                </ul>
            </div>
            <div class="container12">
                <ul class="row2">
                    <li>Department :</li>
                    <li>Email Address :</li>
                    <li>Phone Number :</li>
                    <li>Address :</li>
                    <li>Status :</li>
                    <li>Job Status :</li>
                    <li>Birthday :</li>
                    <li><button>Student list</button></li>
                </ul>
            </div>
            <div class="container13"> 
                <div class="container13-1">
                    <ul class="qrcodesub">
                        <li>GENERATE QR CODE</li>
                        <li><img src="images/spc-qrcode.png" id="subqrcode1"></li>
                        <li><button>Select Subject</button></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container1-2">
            <div class="container21">
                <ul>
                    <li><img src="images/spc-qrcode.png" id="spcqr"> SCAN QR CODE</li>
                    <li><p id="showdate"></p></li>
                    <li>scan qr code</li>
                </ul>
            </div>
            <div class="container22">
                <div class="container22-1">
                    <ul class="row5">
                        <div class="sub1"><li><a id="sub" href="">Subject 1</a></li></div>
                        <div class="sub1"><li><a id="sub" href="">Subject 2</a></li></div>
                        <div class="sub1"><li><a id="sub" href="">Subject 3</a></li></div>
                    </ul>
                </div>
                <div class="container22-2">
                    <div class="searchengine">
                        <input id="inputsearch"type="text">
                        <button type="submit">Search</button>
                    </div>
                    <div class="atttitle">
                        <ul class="row6">
                            <li>ID Number</li>
                            <li>Name</li>
                            <li>Course</li>
                            <li>Gernder</li>
                            <li>Year Level</li>
                            <li>Time in</li>
                            <li>TIme out</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        setInterval(() => {
            document.getElementById("showdate").innerHTML=Date();
        }, 1000);
    </script>
    <source src="js/menu.js">
</body>
</html>