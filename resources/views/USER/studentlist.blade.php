<!-- Uses basic css then use font-awesome for icons -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="css/studentlist_style.css">
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

    <!--LIST-->
    <div class="list">
        <div class="icon">
            <a href="{{ route('instructordashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 64 64">
                    <rect width="64" height="64" fill="none" />
                    <path fill="#9e9e9e" d="M32 2C15.432 2 2 15.432 2 32c0 16.568 13.432 30 30 30s30-13.432 30-30C62 15.432 48.568 2 32 2m17 35.428H30.307V48L15 32l15.307-16v11.143H49z" />
                </svg>
            </a>
            <div class="text">
                <h1> LIST OF STUDENTS </h1>
            </div>
        </div>


        <div class="container">
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

                    <select name="id" id="id">
                        <option value="time in">Status</option>
                    </select>

                    <select name="id" id="id">
                        <option value="time out">Action</option>
                    </select>
                </div>
            </div>
            <div class="info">
                <span id="one">2022-00752</span>
                <span id="two">Mark Jordan Bayot</span>
                <span id="three">BSIT</span>
                <span id="four">Male</span>
                <span id="five">2nd Year</span>
                <span id="six">Late</span>
                <span id="seven">
                    <a href="{{ route('studentnotes') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <rect width="24" height="24" fill="none" />
                            <g fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                <path d="M18.375 2.625a2.121 2.121 0 1 1 3 3L12 15l-4 1l1-4Z" />
                            </g>
                        </svg>
                    </a>
                </span>
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