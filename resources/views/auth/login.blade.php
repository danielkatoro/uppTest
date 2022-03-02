<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/pages/examples/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 12:41:56 GMT -->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Admin || Login</title>
	<!-- Favicon-->
	<link rel="icon" href="{{ asset('images') }}//{{$app_config->image}}" type="image/x-icon">
	<!-- Plugins Core Css -->
	<link href="{{ asset('admin//css/app.min.css') }}" rel="stylesheet">
	<!-- Custom Css -->
	<link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/css/pages/extra_pages.css') }}" rel="stylesheet" />
</head>

<body class="light">
	<div class="loginmain">
		<div class="loginCard">
			<div class="login-btn splits">
				<p>Already an user?</p>
				<button class="active">Login</button>
			</div>
			<div class="rgstr-btn splits">
				<p>Don't have an account?</p>
				<button>Register</button>
			</div>
			<div class="wrapper">
				<form  action="{{ route('login') }}" method="POST" id="login" tabindex="500">
                    @csrf
					<h3>Login</h3>
					<div class="mail">
						<input type="email" name="email" value="{{ old('email') }}">
						<label>Mail or Username</label>
					</div>
					<div class="passwd">
						<input type="password" name="password">
						<label>Password</label>
					</div>
					<div class="text-end p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					<div class="submit">
						<button type="submit" class="dark">Login</button>
					</div>
					<div class="flex-c p-b-112">
						<a href="#" class="login100-social-item bg-fb">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="#" class="login100-social-item bg-twitter">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#" class="login100-social-item bg-google">
							<i class="fab fa-google"></i>
						</a>
					</div>
				</form>
				<form id="register" tabindex="502">
					<h3>Register</h3>
					<div class="name">
						<input type="text">
						<label>Full Name</label>
					</div>
					<div class="mail">
						<input type="email">
						<label>Mail</label>
					</div>
					<div class="uid">
						<input type="text">
						<label>User Name</label>
					</div>
					<div class="passwd">
						<input type="password">
						<label>Password</label>
					</div>
					<div class="submit">
						<button class="dark">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Plugins Js -->
	<script src="{{ asset('admin/js/app.min.js') }}"></script>
	<!-- Extra page Js -->
	<script src="{{ asset('admin/js/pages/examples/login-register.js') }}"></script>
</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/pages/examples/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 12:42:00 GMT -->
</html>