<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forgotpassword.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="navdiv">
            <div class="row01">
                <li><a href="{{route('studentdashboard')}}"><img src="images/spc-logo.png" class="mainlogo"></a></li>
                <li id="title">STUDENT ATTENDANCE MONITORING</li>
            </div>    
        </div>
    </nav>
    <div class="container1">
        <form action="{{route('resetpassword')}}" <!--method="POST"-->>
            <img id="image" src="images/spc-logo.png" alt="">
            <h1>Forgot Password</h1>
            <label for="email" >Email</label>
            <input type="email" id="email" name="email" required>
            <button class="btn""> Forgot Password</button>
            <a id="havepass" href="{{route('login')}}">Already have the Password</a>
        </form>
    </div>
</body>
</html>