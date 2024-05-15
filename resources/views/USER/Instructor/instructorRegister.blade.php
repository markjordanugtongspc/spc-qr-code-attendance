<form class="formsignup" action="{{route('inst.register')}}" method="POST" enctype="multipart/form-data" onsubmit="return reloadAfterSubmit(this)">
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
				<!-- <input type="text" name="job_status" placeholder="Job Status" required /> -->
				<!-- Ikaw na add ani jobstatus -->
				<input type="file" name="profile_picture" required />
			</div>
		</div>
		<div class="btn"><button type="submit">Sign Up</button></div>
	</div>
</form>