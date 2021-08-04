<!DOCTYPE html>
<html lang="en">

<head>

	<title>Halaman Login</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Flash Able, Flash Able bootstrap admin template">
	<meta name="author" content="Codedthemes" />

	<!-- Favicon icon -->
	<link rel="icon" href="<?php echo base_url(); ?>public/assets/images/favicon.ico" type="image/x-icon">
	<!-- fontawesome icon -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/fonts/fontawesome/css/fontawesome-all.min.css">
	<!-- animation css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/plugins/animation/css/animate.min.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/style.css">




</head>

<!-- [ auth-signin ] start -->
<div id="admin">

	<div class="auth-wrapper">
		<div class="auth-content container">
			<div class="card" style="background: #ffffff;">
				<div class="row align-items-center">
					<div class="card-body">
						<div class="msg">
							<?php if ($_SESSION['login'] == -1) { ?>
								<div class="error">
									<p style="color:red; ">Username atau Password yang Anda masukkan salah!
								</div>
							<?php }
							if ($_SESSION['login'] == -2) { ?>
								<div class="error">
									<p style="color:red; ">Silahkan klik kotak I'm not robot (reCaptcha) untuk
										verifikasi!
								</div>
							<?php } ?>
						</div>
						<h4 class="mb-3 f-w-400">Login into your account</h4>
						<br>
						<form id="sign_in" method="POST" action="<?php echo base_url(); ?>clogin/auth">
							<!-- <div class="input-group mb-2">
								<select id="mySelect" name="select" class="form-control" onchange="myFunction($(this).find(':selected').val())">
									<option value="1">Admin</option>
									<option value="2">Penduduk</option>
								</select>
							</div> -->
							<?php if ($this->uri->segment(1) == "penduduk") { ?>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="feather icon-mail"></i></span>
									</div>
									<input type="text" name="username" class="form-control" placeholder="Username">
									<input type="hidden" value="2" name="select" class="form-control">
								</div>
								<button class="btn btn-primary mb-4">Login</button>
							<?php } else { ?>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="feather icon-mail"></i></span>
									</div>
									<input type="hidden" value="1" name="select" class="form-control">
									<input type="text" name="username" class="form-control" placeholder="Username">
								</div>
								<div class="input-group mb-3" id="pass">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="feather icon-lock"></i></span>
									</div>
									<input type="password" name="password" class="form-control" placeholder="Password">
								</div>
								<button class="btn btn-primary mb-4">Login</button>
							<?php } ?>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?php echo base_url(); ?>public/assets/js/vendor-all.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script>
	function myFunction(status) {
		switch (status) {
			case '1':
				document.getElementsByName('username')[0].placeholder = 'username';
				document.getElementById("pass").style.visibility = "visible";
				break;
			case '2':
				document.getElementsByName('username')[0].placeholder = 'Nik Penduduk';
				document.getElementById("pass").style.visibility = "hidden";
				break;
		}
	}
</script>



</body>

</html>