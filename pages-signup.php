<?php
include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->

<!-- Mirrored from infinite-woodland-5276.herokuapp.com/pages-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2015 12:10:03 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

	<!-- Pixel Admin's stylesheets -->
	<link rel="icon" href="icon.gif" type="image/gif" sizes="16x16">
	<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->


<!-- $DEMO =========================================================================================

	Remove this section on production
-->
	<style>
		#signup-demo {
			position: fixed;
			right: 0;
			bottom: 0;
			z-index: 10000;
			background: rgba(0,0,0,.6);
			padding: 6px;
			border-radius: 3px;
		}
		#signup-demo img { cursor: pointer; height: 40px; }
		#signup-demo img:hover { opacity: .5; }
		#signup-demo div {
			color: #fff;
			font-size: 10px;
			font-weight: 600;
			padding-bottom: 6px;
		}
	</style>
<!-- / $DEMO -->

</head>


<!-- 1. $BODY ======================================================================================
	
	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'     - Sets text direction to right-to-left
-->
<body class="theme-default page-signup">

<script>
	var init = [];
	init.push(function () {
		var $div = $('<div id="signup-demo" class="hidden-xs"><div>PAGE BACKGROUND</div></div>'),
		    bgs  = [ 'assets/demo/signin-bg-1.jpg', 'assets/demo/signin-bg-2.jpg', 'assets/demo/signin-bg-3.jpg',
		    		 'assets/demo/signin-bg-4.jpg', 'assets/demo/signin-bg-5.jpg', 'assets/demo/signin-bg-6.jpg',
					 'assets/demo/signin-bg-7.jpg', 'assets/demo/signin-bg-8.jpg', 'assets/demo/signin-bg-9.jpg' ];
		for (var i=0, l=bgs.length; i < l; i++) $div.append($('<img src="' + bgs[i] + '">'));
		$div.find('img').click(function () {
			var img = new Image();
			img.onload = function () {
				$('#page-signup-bg > img').attr('src', img.src);
				$(window).resize();
			}
			img.src = $(this).attr('src');
		});
		$('body').append($div);
	});
</script>
<!-- Demo script --> <script src="assets/demo/demo.js"></script> <!-- / Demo script -->

	<!-- Page background -->
	<div id="page-signup-bg">
		<!-- Background overlay -->
		<div class="overlay"></div>
		<!-- Replace this with your bg image -->
		<img src="assets/demo/signin-bg-1.jpg" alt="">
	</div>
	<!-- / Page background -->

	<!-- Container -->
	<div class="signup-container">
		<!-- Header -->
		<div class="signup-header">
			<a href="index.php" class="logo">
				Help2All
			</a> <!-- / .logo -->
			
		</div>
		<!-- / Header -->

		<!-- Form -->
		<div class="signup-form">
			<form id="signup-form_id" method="post" action="insert_master.php" enctype="multipart/form-data">
					<ul class="nav nav-tabs nav-justified">
							<li class="active">
								<a href="pages-signup.php">Admin</a>
							</li>
							<li class="">
								<a href="pages-companysignup.php">Company</a>
							</li>
						</ul>
				<div class="col-xs-12" style="height:30px;"></div>
				<div class="signup-text">
					<span>Create an account</span>
				</div>

				<div class="form-group w-icon">
					<input type="text" name="name" id="name_id" class="form-control input-lg" placeholder="Full name">
					<span class="fa fa-info signup-form-icon"></span>
				</div>

				<div class="form-group w-icon">
					<input type="text" name="email" id="email_id" class="form-control input-lg" placeholder="E-mail">
					<span class="fa fa-envelope signup-form-icon"></span>
				</div>

				<div class="form-group w-icon">
					<select class="form-control input-lg" name="role_id"><option value="1"  name="role_id">Admin</option><option value="2"  name="role_id">SubAdmin</option></select>
				</div>
				

				<div class="form-group w-icon">
					<input type="text" name="username" id="username_id" class="form-control input-lg" placeholder="Username">
					<span class="fa fa-user signup-form-icon"></span>
				</div>

				<div class="form-group w-icon">
					<input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password">
					<span class="fa fa-lock signup-form-icon"></span>
				</div>

				<div class="form-group w-icon">
				<input type="file" name="file" class="form-control input-lg" placeholder="Upload Image" id="file">
					<span class="fa fa-image signup-form-icon"></span>
				</div>

				<input type="hidden" name="active_flag" value="1">

				<div class="form-group" style="margin-top: 20px;margin-bottom: 20px;">
					<label class="checkbox-inline">
						<input type="checkbox" name="signup_confirm" class="px" id="confirm_id">
						<span class="lbl">I agree with the <a href="#" target="_blank">Terms and Conditions</a></span>
					</label>
				</div>

				<div class="form-actions">
					<input type="submit" value="SIGN UP" class="signup-btn bg-primary" name="reg_admin">
				</div>
			</form>
			<!-- / Form -->

			<!-- "Sign In with" block -->
			<!-- / "Sign In with" block -->
		</div>
		<!-- Right side -->
	</div>
		<div class="have-account">
		Already have an account? <a href="pages-signin.php">Sign In</a>
	</div>


<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
	<script type="text/javascript"> window.jQuery || document.write('<script src="assets/javascripts/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- Pixel Admin's javascripts -->
<script src="assets/javascripts/bootstrap.min.js"></script>
<script src="assets/javascripts/pixel-admin.min.js"></script>

<script type="text/javascript">
	// Resize BG
	init.push(function () {
		var $ph  = $('#page-signup-bg'),
		    $img = $ph.find('> img');

		$(window).on('resize', function () {
			$img.attr('style', '');
			if ($img.height() < $ph.height()) {
				$img.css({
					height: '100%',
					width: 'auto'
				});
			}
		});

		$("#signup-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });

		// Validate name
		$("#name_id").rules("add", {
			required: true,
			minlength: 1
		});

		// Validate email
		$("#email_id").rules("add", {
			required: true,
			email: true
		});
		
		// Validate username
		$("#username_id").rules("add", {
			required: true,
			minlength: 3
		});

		// Validate password
		$("#password_id").rules("add", {
			required: true,
			minlength: 6
		});

		// Validate confirm checkbox
		$("#confirm_id").rules("add", {
			required: true
		});
	});

	window.PixelAdmin.start(init);
</script>

</body>

<!-- Mirrored from infinite-woodland-5276.herokuapp.com/pages-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2015 12:10:03 GMT -->
</html>
