<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Create a free Account if you do not have one already Paylege Payment Online Management Platform">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assett/assets/images/favicon.png') }}">

    <title>Sign in to your account | Paylege Payment Online Management Platform</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset("assets/css/vendors_css.css") }}">
	<!--amcharts -->
	<link href="{{ asset("www.amcharts.com/lib/3/plugins/export/export.css") }}" rel="stylesheet" type="text/css" /> 
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset("assets/css/styles.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/css/skin_color.css")}}">
   
  </head>
 
<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-1.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<span class="light-logo"><img src="" alt="Paylege" ></span>
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Sign in to continue to Paylege</p>							
							</div>
							<div class="p-40">
								<form action="{{ route('login') }}" method="post">
									@csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" class="form-control ps-15 bg-transparent" placeholder="Username" name="username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password" name="password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-end">
											<a href="{{ route('emailp') }}" class="hover-warning"><i class="ti-lock"></i> Forgot password?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-warning ms-5">Sign Up</a></p>
								</div>	
							</div>						
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	
	@include('sweetalert::alert')
</body>

</html>