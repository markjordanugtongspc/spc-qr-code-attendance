<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/authentication/login.css">
	<title>Document</title>
</head>

<body>

	<div class="container" id="container">


		<div class="form-container sign-up-container">
			<div class="role">
                <div class="btn_content" id="btn">
                    <h2>I'am a </h2>
                    <button class="role_btn" id="student">student</button>
                    <button class="role_btn"id="instructor">Instructor</button>
                </div>
				<div class="role_form">
					<div class="form-container student_sign_up" id="student_form">
						<form class="formsignup" action="{{ route('register') }}" method="POST" enctype="multipart/form-data" onsubmit="return reloadAfterSubmit(this)">
							@csrf
							<div class="con0">
								<h1>Create Account</h1>
								<div class="form-con1">
									<div class="personalinfo">
										<h4>Personal Information</h4>
										<input type="text" name="name" placeholder="Full Name" required />
										<input type="text" name="student_id" placeholder="Student ID" required />

										<!-- Input with suggestions for Course -->
										<input list="courses" name="course" placeholder="Course" required />
										<datalist id="courses">
											<option value="BSIT">
											<option value="BSCS">
											<option value="BSBA">
											<option value="BSCE">
										</datalist>

										<input type="email" name="email" placeholder="Email" required />
										<input type="password" name="password" placeholder="Password" required />
										<input type="password" name="password_confirmation" placeholder="Re-Password" required />
										<input type="text" name="phone_number" placeholder="Phone Number" required />
										<input type="date" name="birthday" placeholder="Birthday" required />
										<input type="text" name="address" placeholder="Address" required />

										<!-- Input with suggestions for Gender -->
										<input list="genders" name="gender" placeholder="Gender" required />
										<datalist id="genders">
											<option value="Male">
											<option value="Female">
											<option value="Non-binary">
										</datalist>

										<input type="file" name="profile_picture" required />
									</div>

									<div class="ginfo">
										<h4>Guardian Information</h4>
										<input type="text" name="guardian_name" placeholder="Guardian Name" required />
										<input type="text" name="guardian_relationship" placeholder="Guardian Relationship" required />
										<input type="text" name="guardian_phone_number" placeholder="Guardian Phone Number" required />
										<input type="text" name="guardian_email" placeholder="Guardian Email" required />
									</div>
								</div>
								<div class="btn"><button type="submit">Sign Up</button></div>
							</div>
						</form>
					</div>
					<div class="form-container instructor_sign_up" id="instructor_form">
						<form class="formsignup" action="#">
							<div class="con0">
								<h1>Create Account</h1>
									<div class="form-con1">
										<div class="instructor_personalinfo">
											<h4>Personal Informaton</h4>
											<input type="text" placeholder="Name" />
											<input type="text" placeholder="Department" />
											<input type="email" placeholder="Email" />
											<input type="password" placeholder="Password" />
											<input type="text" placeholder="Phone NUmber" />
											<input type="text" placeholder="Status" />
											<input type="date" placeholder="Birthday" />
											<input type="text" placeholder="Address" />
											<input type="text" placeholder="Job Status" />
											<input type="file" placeholder="Image" />
										</div>
									</div>
								<div class="btn"><button>sign up</button></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="form-container sign-in-container">
			<form class="formsignin" action="{{ route('login') }}" method="POST">
				<h1>Sign in</h1>
				@csrf
				@if ($errors->any())
				<div class="alert alert-danger error-message">
					@foreach ($errors->all() as $error)
					<p>{{ $error }}</p>
					@endforeach
				</div>
				@endif
				<input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
				<input type="password" name="password" placeholder="Password" />
				<button type="submit">Sign In</button>
				<a href="{{ route('forgotpassword') }}">Forgot your password?</a>
			</form>
		</div>

		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back</h1>
					<img src="images/spc-logo.png" alt="SPC Logo">
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Start Journey with us</h1>
					<img src="images/spc-logo.png" alt="SPC Logo">
					<p>Enter your personal details</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<script src="js/authentication/loginjs.js"></script>
</body>

</html>