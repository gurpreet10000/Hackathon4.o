<?php
session_start();
if(isset($_SESSION['username']) )
{
		header("location:index.php?msg=Logout First");
}
include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();

if($_POST){

	extract(array_map("test_input" , $_POST));

	$query=$d->select("users","username='$username' AND password='$password'");

	// $result=$conn->query($query);
	$data = mysqli_fetch_array($query);

	if($data>0)
	{

		if($active_flag == 0)
		{
		$_SESSION['username']=$username;
		$_SESSION['role_id']= $data['role_id'];
		$_SESSION['email']=$data['email'];
		$_SESSION['reg_id']=$data['reg_id'];
		$_SESSION['file']=$data['file'];
		header("location:index.php");
	}
	else if($active_flag == 1)
	{
		header("pages-signin.php?msg:wrong");
	}
	}
	else{
		header("location:pages-signin.php?msg1=wrong user name and password OR your account is not approved");
	}

}
?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Sign In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

	<!-- Pixel Admin's stylesheets -->
	<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="icon.gif" type="image/gif" sizes="16x16">

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->


<!-- $DEMO =========================================================================================

	Remove this section on production
-->
	<style>
		#signin-demo {
			position: fixed;
			right: 0;
			bottom: 0;
			z-index: 10000;
			background: rgba(0,0,0,.6);
			padding: 6px;
			border-radius: 3px;
		}
		#signin-demo img { cursor: pointer; height: 40px; }
		#signin-demo img:hover { opacity: .5; }
		#signin-demo div {
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
<body class="theme-default page-signin">

<script>
	var init = [];
	init.push(function () {
		var $div = $('<div id="signin-demo" class="hidden-xs"><div>PAGE BACKGROUND</div></div>'),
		    bgs  = [ 'assets/demo/signin-bg-1.jpg', 'assets/demo/signin-bg-2.jpg', 'assets/demo/signin-bg-3.jpg',
		    		 'assets/demo/signin-bg-4.jpg', 'assets/demo/signin-bg-5.jpg', 'assets/demo/signin-bg-6.jpg',
					 'assets/demo/signin-bg-7.jpg', 'assets/demo/signin-bg-8.jpg', 'assets/demo/signin-bg-9.jpg' ];
		for (var i=0, l=bgs.length; i < l; i++) $div.append($('<img src="' + bgs[i] + '">'));
		$div.find('img').click(function () {
			var img = new Image();
			img.onload = function () {
				$('#page-signin-bg > img').attr('src', img.src);
				$(window).resize();
			}
			img.src = $(this).attr('src');
		});
		$('body').append($div);
	});
</script>
<!-- Demo script --> <script src="assets/demo/demo.js"></script> <!-- / Demo script -->

	<!-- Page background -->
	<div id="page-signin-bg">
		<!-- Background overlay -->
		<div class="overlay"></div>
		<!-- Replace this with your bg image -->
		<img src="assets/demo/signin-bg-1.jpg" alt="">
	</div>
	<!-- / Page background -->

	<!-- Container -->
	<div class="signin-container">

		<!-- Left side -->
		<div class="signin-info">
			
			
		</div>
		<!-- / Left side -->

		<!-- Right side -->
		<div class="signin-form">
				<ul class="nav nav-tabs nav-justified">
							<li class="active">
								<a href="pages-signin.php">Admin</a>
							</li>
							<li class="">
								<a href="pages-companysignin.php">Company</a>
							</li>
						</ul> <!-- / .nav -->
			<!-- Form -->
			<form action="" id="signin-form_id" method="post">
				<div class="signin-text">
					<span>Sign In to your account</span>
				</div> <!-- / .signin-text -->

				<div class="form-group w-icon">
					<input type="text" name="username" id="username_id" class="form-control input-lg" placeholder="Username or email">
					<span class="fa fa-user signin-form-icon"></span>
				</div> <!-- / Username -->

				<div class="form-group w-icon">
					<input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password">
					<span class="fa fa-lock signin-form-icon"></span>
				</div> <!-- / Password -->

				<div class="form-actions">
					<input type="submit" value="SIGN IN" class="signin-btn bg-primary">
					<a href="forgot.php" class="forgot-password" >Forgot your password?</a>
				</div> <!-- / .form-actions -->
			</form>
			<!-- / Form -->

			<?php if(isset($_GET['msg'])){ ?>
			<div class="alert-alert-success"><span class="vd_alert-icon">
			<i class="fa fa-check-circle vd_green"></i></span><strong>
			<?php error_reporting(0); echo $_GET['msg']; ?></strong> </div>
		<?php  } elseif(isset ($_GET['msg1'])) { ?>

		<div class="alert alert-danger"><span class="vd_alert-icon">
		<i class="fa fa-check-circle vd_red"></i></span><strong>
		<?php error_reporting(0); echo $_GET['msg1']; ?></strong> </div>
		<?php } ?> 



			<!-- "Sign In with" block -->
			<!-- / "Sign In with" block -->

			<!-- Password reset form -->
			<div class="password-reset-form" id="password-reset-form">
				<div class="header">
					<div class="signin-text">
						<span>Password reset</span>
						<div class="close">&times;</div>
					</div> <!-- / .signin-text -->
				</div> <!-- / .header -->
				
				<!-- Form -->
				<form action="forgot.php" id="password-reset-form_id">
					<div class="form-group w-icon">
						<input type="text" name="email" id="p_email_id" class="form-control input-lg" placeholder="Enter your email">
						<span class="fa fa-envelope signin-form-icon"></span>
					</div> <!-- / Email -->

					<div class="form-actions">
						<input type="submit" value="SEND PASSWORD RESET LINK" class="signin-btn bg-primary" name="reg_user">
					</div> <!-- / .form-actions -->
				</form>
				<!-- / Form -->
			</div>
			<!-- / Password reset form -->
		</div>
		<!-- Right side -->
	</div>
	<!-- / Container -->

	<div class="not-a-member">
		Not a member? <a href="pages-signup.php">Sign up now</a>
	</div>
	<?php 
	if($_GET['msg']){
		echo "<h1 style='color:green'>".$_GET['msg']."</h1>";
	}
	else if($_GET['msg1'])
	{
		echo "<h1 style='color:red'>".$_GET['msg1']."</h1>";
	}
?>

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
		var $ph  = $('#page-signin-bg'),
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
	});

	// Show/Hide password reset form on click
	init.push(function () {
		$('#forgot-password-link').click(function () {
			$('#password-reset-form').fadeIn(400);
			return false;
		});
		$('#password-reset-form .close').click(function () {
			$('#password-reset-form').fadeOut(400);
			return false;
		});
	});

	// Setup Sign In form validation
	init.push(function () {
		$("#signin-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });
		
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
	});

	// Setup Password Reset form validation
	init.push(function () {
		$("#password-reset-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });
		
		// Validate email
		$("#p_email_id").rules("add", {
			required: true,
			email: true
		});
	});

	window.PixelAdmin.start(init);
</script>

</body>

<!-- Mirrored from infinite-woodland-5276.herokuapp.com/pages-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2015 12:09:37 GMT -->
</html>
