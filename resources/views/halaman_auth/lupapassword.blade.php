<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forget Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('halaman_auth/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('halaman_auth/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action ="{{ route('registrasi') }}" class="login100-form validate-form" method="POST" enctype="multipart/form-data">
                    @csrf 
					<span class="login100-form-title p-b-43">
						Forget Password
					</span> 
					@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                
                <li>{{ $item }}</li>
                
            @endforeach
        </ul>
    </div>
@endif
@if (Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif
					

					<div class="wrap-input100 validate-input" data-validate = "Masukkan Alamat Email yang terdaftar">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
			
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Reset
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
						Account already? <a href="{{ route('auth') }}" class="text-primary">Login</a>
						</span>
					</div>

				</form>

				<div class="login100-more" style="background-image: url('{{ asset('halaman_auth/images/bg-02.png') }}');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('halaman_auth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('halaman_auth/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('halaman_auth/js/main.js') }}"></script>

</body>
</html>