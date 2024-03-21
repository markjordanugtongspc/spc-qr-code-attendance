<!-- Uses basic css then use font-awesome for icons -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dashboard instructor</title>
  <link rel="stylesheet" href="css/instructor_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
  <div class="header">
    <a href="{{ route('login') }}"><img src="images/spc-logo.png" alt="spc_logo"></a>
    <span id="qr">QR</span>
    <span id="code">Code SPC Attendance System</span>
    <select name="menu" id="menu">
      <option value="menu">Menu</option>
    </select>
  </div>
  <!--user profile-->
  <div class="user-profile">

    <div id="circle">
      <i class="fa-solid fa-circle-user" style="color: #7348f4;"></i>
    </div>
    <span id="name">Ryan E. Balisi</span> <br>
    <span id="instructor">Instructor</span> <br>
    <div id="check">
      <i class="fa-solid fa-circle-check" style="color: #17ee4c;"></i>
    </div>
    <button>Edit Profile</button>
    <hr>
    <div class="information">
      <p>Department: College of Computer Studies <br>
        Email Adress: ryan_balisi@spc.com <br>
        Phone: 090000000<br>
        Address: Sabayle<br>
        Status: Married<br>
        Job Status: Full Time Instructor<br>
        Birthday: May 8 1990
      </p>
    </div>
    <button id="list">List of Students</button>
  </div>
  <!--scan qr code-->
  <div class="qr">
    <i class="fa-solid fa-qrcode"></i>
    <span>SCAN QR CODE</span> <br>
    <span>Wednesday Mar 20 2024 4:30pm(Philippines Standard Time)</span> <br>
    <button>scan qrcode</button>
  </div>
  <div class="container">
    <div class="icon">
      <a href="{{ route('instructordashboard') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 64 64">
          <rect width="64" height="64" fill="none" />
          <path fill="#9e9e9e" d="M32 2C15.432 2 2 15.432 2 32c0 16.568 13.432 30 30 30s30-13.432 30-30C62 15.432 48.568 2 32 2m17 35.428H30.307V48L15 32l15.307-16v11.143H49z" />
        </svg>
      </a>
    </div>
    <div class="cc106_2">
      <span>CC106-50000</span>
    </div>
    <div class="entries">
      <span>SHOW</span>
      <select name="show" id="show">
        <option value="10">10</option>
      </select>
      <span>Entries</span>
      <span id="search">Search</span>
      <input type="text" name="search">
      <div class="entries1">
        <select name="id" id="id">
          <option value="idnumber">ID Number</option>
        </select>
        <select name="id" id="id">
          <option value="name">Name</option>
        </select>
        <select name="id" id="id">
          <option value="course">Course</option>
        </select>
        <select name="id" id="id">
          <option value="genderr">Gender</option>
        </select>
        <select name="id" id="id">
          <option value="year level">Year Level</option>
        </select>
        <div class="timein">
          <select name="id" id="id">
            <option value="time in">Time in</option>
          </select>
        </div>
        <div class="timeout">
          <select name="id" id="id">
            <option value="time out">Time out</option>
          </select>
        </div>
      </div>
      <div class="info">
        <span id="one">2022-00752</span>
        <span id="two">Mark Jordan Bayot</span>
        <span id="three">BSIT</span>
        <span id="four">Male</span>
        <span id="five">2nd Year</span>
        <span id="six">7:00am</span>
        <span id="seven">8:30pm</span>
      </div>
      <div class="show">
        <span>Showing 0 to 0 Entries</span>
        <button id="pre">Previous</button>
        <button>Next</button>
      </div>
    </div>
  </div>
</body>

</html>