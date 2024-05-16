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
					<button class="role_btn" id="instructor">Instructor</button>
				</div>

				<div class="role_form">
					<div class="form-container student_sign_up" id="student_form">
						<form class="formsignup" action="{{ route('student.register') }}" method="POST" enctype="multipart/form-data" onsubmit="return reloadAfterSubmit(this)">
							@csrf
							<div class="con0">
								<h1>Create Account</h1>
								<div class="form-con1">
									<div class="personalinfo">
										<h4>Personal Information</h4>
										<input type="text" name="name" placeholder="Full Name" required />
										<input type="text" name="student_id" placeholder="Student ID" required />
										<input type="hidden" name="userType" value="student">

										<!-- Input with suggestions for Course -->
										<input list="courses" name="course" placeholder="Course" required />
										<datalist id="courses">
											<option value="BSIT">
											<option value="BSCS">
											<option value="BSBA">
											<option value="BSCE">
										</datalist>

										<!-- Katong ga AI ko kol kay need daw nag conditional logic para ma separate ang instructor ug student -->
										<!-- ohh bai pero unsaon?? hahahaha -->
										<input type="email" name="email" placeholder="Email" required />
										<input type="password" name="password" placeholder="Password" required />
										<!-- <input type="password" name="password_confirmation" placeholder="Re-Password" required /> -->
										<input type="text" name="phone_number" placeholder="Phone Number" required />
										<input type="date" name="birthday" placeholder="Birthday" required />
										<input type="text" name="address" placeholder="Address" required />

										<!-- Input with suggestions for Gender -->
										<input list="gender" name="gender" placeholder="Gender" required />
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
						<form class="formsignup" action="{{ route('instructor.register') }}" method="POST" enctype="multipart/form-data" onsubmit="return reloadAfterSubmit(this)">
							@csrf
							<div class="con0">
								<h1>Create Account</h1>
								<div class="form-con1">
									<div class="instructor_personalinfo">
										<h4>Personal Information</h4>
										<input type="text" name="name" placeholder="Name" required />
										<input type="hidden" name="userType" value="instructor">
										<input type="text" name="department" placeholder="Department" required />
										<input type="email" name="email" placeholder="Email" required />
										<input type="password" name="password" placeholder="Password" required />
										<input type="text" name="phone_number" placeholder="Phone Number" required />
										<input type="text" name="status" placeholder="Status" required />
										<input type="date" name="birthday" placeholder="Birthday" required />
										<input type="text" name="address" placeholder="Address" required />
										<input type="text" name="job_status" placeholder="Job Status" required />
										<input type="file" name="profile_picture" required />
									</div>
								</div>
								<div class="btn"><button type="submit">Sign Up</button></div>
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