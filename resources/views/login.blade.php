<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form class="formsignup" action="#">
			<div class="con0">
			<h1>Create Account</h1>
				<div class="form-con1">
					<div class="personalinfo">
						<h4>Personal Informaton</h4>
						<input type="text" placeholder="Name" />
						<input type="text" placeholder="Student ID" />
						<input type="text" placeholder="Course" />
						<input type="email" placeholder="Email" />
						<input type="password" placeholder="Password" />
						<input type="text" placeholder="Phone NUmber" />
						<input type="date" placeholder="Birthday" />
						<input type="text" placeholder="Address" />
						<input type="text" placeholder="Gender" />
						<input type="file" placeholder="Image" />
					</div>
					<div class="ginfo">
						<h4>Guardian Informaton</h4>
						<input type="text" placeholder="Guardian Name" />
						<input type="text" placeholder="Guardian Relationship"" />
						<input type="text" placeholder="Guardian Phone Number" />
						<input type="text" placeholder="Guardian Email" />
					</div>
				</div>
				<div class="btn"><button>sign up</button></div>
			</div>
		</form>
        x`
	</div>
	<div class="form-container sign-in-container">
		<form class="formsignin" action="#">
			<h1>Sign in</h1>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign In</button>
			<a href="#">Forgot your password?</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back</h1>
				<img src="images/spc-logo1.png" alt="" srcset="">
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Start Journey with us</h1>
				<img src="images/spc-logo1.png" alt="" srcset="">
				<p>Enter your personal details</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="js/loginjs.js"></script>
</body>
</html>