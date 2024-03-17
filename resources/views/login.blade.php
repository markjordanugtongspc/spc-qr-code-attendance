<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="navdiv">
            <div class="row01">
                <li><a href="{{route('studentdashboard')}}"><img src="image/spc-logo.png" class="mainlogo"></a></li>
                <li id="title">STUDENT ATTENDANCE MONITORING</li>
            </div>  
        </div>  
    </nav>
    <div class="form-login">
        <form action="{{route('login')}}" method="POST">
            @if(Session:: has('error'))
                <div class="alert" role="alert">
                    {{Session::get('error')}}
                </div>
            @endif
            @csrf
            <h1>Login</h1>
            
            <div class="login">
                <input type="email" id="email" placeholder="Email"name="email" required>
                <input type="Password" id="password" placeholder="Password" name="password" required>
                <a href="#">Forgot your password?</a>
                <button> SIGN IN</button>
                <div class="stud-inst-signup">
                    <a class="button-28" href="studentreg">Student Sign up</a>
                    <a class="button-28" href="studentreg">Instructor Sign up</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>