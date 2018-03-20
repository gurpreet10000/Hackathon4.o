<?php
include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>
<?php
error_reporting(0);
session_start();
if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
}
?>
<?php
	session_start();
	$role_id = $_SESSION['role_id'];
	if($role_id == 1 OR $role_id ==2)
	{
	?>
<!DOCTYPE html>
<!--

TABLE OF CONTENTS.

Use search to find needed section.

===================================================================

|  1. $BODY                        |  Body                        |
|  2. $MAIN_NAVIGATION             |  Main navigation             |
|  3. $NAVBAR_ICON_BUTTONS         |  Navbar Icon Buttons         |
|  4. $MAIN_MENU                   |  Main menu                   |
|  5. $UPLOADS_CHART               |  Uploads chart               |
|  6. $EASY_PIE_CHARTS             |  Easy Pie charts             |
|  7. $EARNED_TODAY_STAT_PANEL     |  Earned today stat panel     |
|  8. $RETWEETS_GRAPH_STAT_PANEL   |  Retweets graph stat panel   |
|  9. $UNIQUE_VISITORS_STAT_PANEL  |  Unique visitors stat panel  |
|  10. $SUPPORT_TICKETS            |  Support tickets             |
|  11. $RECENT_ACTIVITY            |  Recent activity             |
|  12. $NEW_USERS_TABLE            |  New users table             |
|  13. $RECENT_TASKS               |  Recent tasks                |

===================================================================

-->


<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

	<!-- Pixel Admin's stylesheets -->
	<script type="text/javascript" src="assets/javascripts/jquery.min.js"></script>
	<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="icon.gif" type="image/gif" sizes="16x16">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->
</head>


<!-- 1. $BODY ======================================================================================
	
	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'      - Sets text direction to right-to-left
	* 'main-menu-right'    - Places the main menu on the right side
	* 'no-main-menu'       - Hides the main menu
	* 'main-navbar-fixed'  - Fixes the main navigation
	* 'main-menu-fixed'    - Fixes the main menu
	* 'main-menu-animated' - Animate main menu
-->
<body class="theme-default main-menu-animated">

<script>var init = [];</script>
<!-- Demo script --> <script src="assets/demo/demo.js"></script> <!-- / Demo script -->

<div id="main-wrapper">


<!-- 2. $MAIN_NAVIGATION ===========================================================================

	Main navigation
-->
	<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
		<!-- Main menu toggle -->
		<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
		
		<div class="navbar-inner">
			<!-- Main navbar header -->
			<div class="navbar-header">

				<!-- Logo -->
				<a href="index.php" class="navbar-brand">
				Help2All
				</a>

				<!-- Main navbar toggle -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

			</div> <!-- / .navbar-header -->

			<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
				<div>
					<ul class="nav navbar-nav">
					
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Regsiter&nbsp;<i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="pages-signup.php">Administrator</a></li>
								<li><a href="pages-companysignup.php">Members</a></li>
							</ul>
						</li>
					</ul> <!-- / .navbar-nav -->

					<div class="right clearfix">
						<ul class="nav navbar-nav pull-right right-navbar-nav">

							<li class="dropdown">
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
									<img src="img/<?php error_reporting(0);
session_start();
if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
} echo $_SESSION['file']; ?>" alt="" class="">
									<span><?php
error_reporting(0);
session_start();
if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
}
?>
<?php echo $_SESSION['username']; ?></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="profile.php"><span class="label label-warning pull-right">New</span>Profile</a></li>
									<li><a href="account.php"><span class="badge badge-primary pull-right">New</span>Account</a></li>
									<li class="divider"></li>
									<li><a href="logout.php"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
								</ul>
							</li>
						</ul> <!-- / .navbar-nav -->
					</div> <!-- / .right -->
				</div>
			</div> <!-- / #main-navbar-collapse -->
		</div> <!-- / .navbar-inner -->
	</div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->


<!-- 4. $MAIN_MENU =================================================================================

		Main menu
		
		Notes:
		* to make the menu item active, add a class 'active' to the <li>
		  example: <li class="active">...</li>
		* multilevel submenu example:
			<li class="mm-dropdown">
			  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
			  <ul>
				<li>...</li>
				<li class="mm-dropdown">
				  <a href="#"><span class="mm-text">Submenu item text 2</span></a>
				  <ul>
					<li>...</li>
					...
				  </ul>
				</li>
				...
			  </ul>
			</li>
-->
	<div id="main-menu" role="navigation">
		<div id="main-menu-inner">
			<div class="menu-content top" id="menu-content-demo">
				<!-- Menu custom content demo
					 CSS:        styles/pixel-admin-less/demo.less or styles/pixel-admin-scss/_demo.scss
					 Javascript: html/assets/demo/demo.js
				 -->
				<div>
					<div class="text-bg"><span class="text-slim">Welcome,</span> <span class="text-semibold"><?php
error_reporting(0);
session_start();
if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
}
?>
<?php echo $_SESSION['username']; ?></span></div>

					<img src="img/<?php session_start(); echo $_SESSION['file']; ?>" alt="" class="">
					<div class="btn-group">
						<a href="messages.php" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
						<a href="profile.php" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
						<a href="logout.php" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
					</div>
					<a href="#" class="close">&times;</a>
				</div>
			</div>
			<ul class="navigation">
				<li>
					<a href="index.php"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
				</li>
				<li>
					<a href="productadd.php"><i class="menu-icon fa fa-cog"></i><span class="mm-text">Help</span></a>
				</li>
				<li>
					<a href="facilities.php"><i class="menu-icon fa fa-file"></i><span class="mm-text">Facilities</span></a>
				</li>
				<li>
					<a href="services.php"><i class="menu-icon fa fa-cogs"></i><span class="mm-text">Services</span></a>
				</li>
				<li>
					<a href="messages.php"><i class="menu-icon fa fa-exclamation-circle"></i><span class="mm-text">Messages</span></a>
				</li>
				<li class="mm-dropdown">
					<a href="#"><i class="menu-icon fa fa-file"></i><span class="mm-text">News</span><span class="label label-success">2</span></a>
					<ul>
						<li>
							<a tabindex="-1" href="news.php"><span class="mm-text">Add News</span></a>
						</li>
						<li>
							<a tabindex="-1" href="news1.php"><span class="mm-text">View News</span></a>
						</li>
					</ul>
					</li>
				<li class="mm-dropdown">
					<a href="#"><i class="menu-icon fa fa-file"></i><span class="mm-text">Advertisemnt</span><span class="label label-warning">2</span></a>
					<ul>
						<li>
							<a tabindex="-1" href="advertisement.php"><span class="mm-text">Add Advertisement</span></a>
						</li>
						<li>
							<a tabindex="-1" href="advertisement1.php"><span class="mm-text">View Advertisement</span></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="about.php"><i class="menu-icon fa fa-bar-chart-o"></i><span class="mm-text">About Us</span></a>
				</li>
				<li>
					<a href="manage.php"><i class="menu-icon fa fa-users"></i><span class="mm-text">Manage Users</span></a>
				</li>
				<li class="mm-dropdown">
					<a href="#"><i class="menu-icon fa fa-files-o"></i><span class="mm-text">Pages</span><span class="label label-info">3</span></a>
					<ul>
						<li>
							<a tabindex="-1" href="pages-faq.php"><span class="mm-text">FAQ</span></a>
						</li>
						<li>
							<a tabindex="-1" href="role.php"><span class="mm-text">Add Roles</span></a>
						</li>
						<li>
							<a tabindex="-1" href="gallery.php"><span class="mm-text">Gallery</span></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="post-queries.php"><i class="menu-icon fa fa-question"></i><span class="mm-text">Post Queries</span></a>
				</li>
			</ul> <!-- / .navigation -->
			<div class="menu-content">
				<a href="logout.php" class="btn btn-primary btn-block btn-outline dark">Logout</a>
			</div>
		</div> <!-- / #main-menu-inner -->
	</div> <!-- / #main-menu -->
	<?php } 
	else
	{ ?>
<!DOCTYPE html>
<!--

TABLE OF CONTENTS.

Use search to find needed section.

===================================================================

|  1. $BODY                        |  Body                        |
|  2. $MAIN_NAVIGATION             |  Main navigation             |
|  3. $NAVBAR_ICON_BUTTONS         |  Navbar Icon Buttons         |
|  4. $MAIN_MENU                   |  Main menu                   |
|  5. $UPLOADS_CHART               |  Uploads chart               |
|  6. $EASY_PIE_CHARTS             |  Easy Pie charts             |
|  7. $EARNED_TODAY_STAT_PANEL     |  Earned today stat panel     |
|  8. $RETWEETS_GRAPH_STAT_PANEL   |  Retweets graph stat panel   |
|  9. $UNIQUE_VISITORS_STAT_PANEL  |  Unique visitors stat panel  |
|  10. $SUPPORT_TICKETS            |  Support tickets             |
|  11. $RECENT_ACTIVITY            |  Recent activity             |
|  12. $NEW_USERS_TABLE            |  New users table             |
|  13. $RECENT_TASKS               |  Recent tasks                |

===================================================================

-->


<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->

<!-- Mirrored from infinite-woodland-5276.herokuapp.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2015 12:07:00 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Dashboard - ResoExpo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

	<!-- Pixel Admin's stylesheets -->
	<script type="text/javascript" src="assets/javascripts/jquery.min.js"></script>
	<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="icon.gif" type="image/gif" sizes="16x16">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->
</head>


<!-- 1. $BODY ======================================================================================
	
	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'      - Sets text direction to right-to-left
	* 'main-menu-right'    - Places the main menu on the right side
	* 'no-main-menu'       - Hides the main menu
	* 'main-navbar-fixed'  - Fixes the main navigation
	* 'main-menu-fixed'    - Fixes the main menu
	* 'main-menu-animated' - Animate main menu
-->
<body class="theme-default main-menu-animated">

<script>var init = [];</script>
<!-- Demo script --> <script src="assets/demo/demo.js"></script> <!-- / Demo script -->

<div id="main-wrapper">


<!-- 2. $MAIN_NAVIGATION ===========================================================================

	Main navigation
-->
	<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
		<!-- Main menu toggle -->
		<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
		
		<div class="navbar-inner">
			<!-- Main navbar header -->
			<div class="navbar-header">

				<!-- Logo -->
				<a href="index.php" class="navbar-brand">
				<div><img alt="Pixel Admin" src="icon.gif"></div>
					ResoExpo
				</a>

				<!-- Main navbar toggle -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

			</div> <!-- / .navbar-header -->

			<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
				<div>
					
					<div class="right clearfix">
						<ul class="nav navbar-nav pull-right right-navbar-nav">

							<li class="dropdown">
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
									<img src="img/<?php error_reporting(0);
session_start();
if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
} echo $_SESSION['file']; ?>" alt="" class="">
									<span><?php
error_reporting(0);
session_start();
if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
}
?>
<?php echo $_SESSION['username']; ?></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="profile.php"><span class="label label-warning pull-right">New</span>Profile</a></li>
									<li><a href="account.php"><span class="badge badge-primary pull-right">New</span>Account</a></li>
									<li class="divider"></li>
									<li><a href="logout.php"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
								</ul>
							</li>
						</ul> <!-- / .navbar-nav -->
					</div> <!-- / .right -->
				</div>
			</div> <!-- / #main-navbar-collapse -->
		</div> <!-- / .navbar-inner -->
	</div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->


<!-- 4. $MAIN_MENU =================================================================================

		Main menu
		
		Notes:
		* to make the menu item active, add a class 'active' to the <li>
		  example: <li class="active">...</li>
		* multilevel submenu example:
			<li class="mm-dropdown">
			  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
			  <ul>
				<li>...</li>
				<li class="mm-dropdown">
				  <a href="#"><span class="mm-text">Submenu item text 2</span></a>
				  <ul>
					<li>...</li>
					...
				  </ul>
				</li>
				...
			  </ul>
			</li>
-->
	<div id="main-menu" role="navigation">
		<div id="main-menu-inner">
			<div class="menu-content top" id="menu-content-demo">
				<!-- Menu custom content demo
					 CSS:        styles/pixel-admin-less/demo.less or styles/pixel-admin-scss/_demo.scss
					 Javascript: html/assets/demo/demo.js
				 -->
				<div>
					<div class="text-bg"><span class="text-slim">Welcome,</span> <span class="text-semibold"><?php
error_reporting(0);
session_start();
if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
}
?>
<?php echo $_SESSION['username']; ?></span></div>

					<img src="img/<?php session_start(); echo $_SESSION['file']; ?>" alt="" class="">
					<div class="btn-group">
						<a href="messages.php" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
						<a href="profile.php" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
						<a href="logout.php" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
					</div>
					<a href="#" class="close">&times;</a>
				</div>
			</div>
			<ul class="navigation">
				<li>
					<a href="index.php"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
				</li>
				<li>
					<a href="bookings.php"><i class="menu-icon fa fa-bookmark"></i><span class="mm-text">Register</span></a>
				</li>
				<li>
					<a href="bookings1.php"><i class="menu-icon fa fa-bookmark"></i><span class="mm-text">Bookings</span></a>
				</li>
				<li>
					<a href="messages.php"><i class="menu-icon fa fa-exclamation-circle"></i><span class="mm-text">Messages</span></a>
				</li>
				<li>
					<a href="feedback.php"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">Contact Us</span></a>
				</li>
				<li>
					<a href="about.php"><i class="menu-icon fa fa-bar-chart-o"></i><span class="mm-text">About Us</span></a>
				</li>
				<li class="mm-dropdown">
					<a href="#"><i class="menu-icon fa fa-files-o"></i><span class="mm-text">Pages</span><span class="label label-info">2</span></a>
					<ul>
						<li>
							<a tabindex="-1" href="pages-faq.php"><span class="mm-text">FAQ</span></a>
						</li>
						<li>
							<a tabindex="-1" href="gallery.php"><span class="mm-text">Gallery</span></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="post-queries.php"><i class="menu-icon fa fa-question"></i><span class="mm-text">Post Queries</span></a>
				</li>
			</ul> <!-- / .navigation -->
			<div class="menu-content">
				<a href="logout.php" class="btn btn-primary btn-block btn-outline dark">Logout</a>
			</div>
		</div> <!-- / #main-menu-inner -->
	</div> <!-- / #main-menu -->
<?php	 } ?>