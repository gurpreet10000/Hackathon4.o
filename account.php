<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>	
<?php
error_reporting(0);
  session_start();
  $role_id = $_SESSION['role_id'];
  if($role_id == 1 OR $role_id ==2)
  {
  ?>
<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
		<?php if(isset($_GET['msg'])){ ?>
			<div class="alert alert-success"><span class="vd_alert-icon">
			<i class="fa fa-check-circle vd_green"></i></span><strong>
			<?php error_reporting(0); echo $_GET['msg']; ?></strong> </div>
		<?php  } elseif(isset ($_GET['msg1'])) { ?>

		<div class="alert alert-danger"><span class="vd_alert-icon">
		<i class="fa fa-check-circle vd_red"></i></span><strong>
		<?php error_reporting(0); echo $_GET['msg1']; ?></strong> </div>
		<?php } ?> 
		<div class="well"><h4><strong>&nbsp;&nbsp;&nbsp;Change Profile Picture</strong></h4>
		<div class="col-xs-12" style="height:30px;"></div>
			<form method="post" name="update_image" enctype="multipart/form-data" action="update_master.php" id="update_image">
				<h4 class="col-md-12">Profile Picture</h4>
				<input type="file" class="form-control input-lg col-md-12" name="file" placeholder="Upload Image" id="file">
			<div class="col-md-12" style="height:20px;">&nbsp;</div>
			<input type="submit" class="btn btn-info" value="Update Picture" name="update_image">
			</form>
		</div>
		<div class="col-xs-12" style="height:30px;"></div>
		<div class="well"><h4><strong>&nbsp;&nbsp;Change Password</strong></h4>
			<form method="post" name="update_password" action="update_master.php" id="update_password">
				<div class="col-md-12" style="height:20px;">&nbsp;</div>
				<h4 class="col-md-12">New Password</h4>
				<input type="password" class="form-control input-lg col-md-12" name="password" placeholder="New Password" id="npass">
				<h4 class="col-md-12">Confirm Password</h4>
				<input type="password" class="form-control input-lg col-md-12" name="cpassword" placeholder="Confirm Password" id="cpass">
				<div class="col-md-12" style="height:20px;">&nbsp;</div>
				<input type="submit" class="btn btn-info" value="Update Password" name="update_password" id="change_pass">
			</form>
		</div>
		<div class="well">&nbsp;&nbsp;<h4><strong>Change EmailID</strong></h4>
			<form method="post" action="update_master.php" name="update_email1" id="update_email2">
					<div class="col-md-12" style="height:20px;">&nbsp;</div>
					<h4 class="col-md-12">New Email ID</h4>
					<input type="text" name="email" class="form-control input-lg col-md-12" placeholder="new EmailID" id="email">
					<div class="col-md-12" style="height:20px;">&nbsp;</div>
					<input type="submit" value="Update EmailID" name="update_email" class="btn btn-info">
			</form>
		</div>
	</div>
<?php include 'common/footer.php'; ?>
<?php }
	else {?>
	<?php include 'common/header.php'; ?>
			<div id="content-wrapper">
		<?php if(isset($_GET['msg'])){ ?>
			<div class="alert alert-success"><span class="vd_alert-icon">
			<i class="fa fa-check-circle vd_green"></i></span><strong>
			<?php error_reporting(0); echo $_GET['msg']; ?></strong> </div>
		<?php  } elseif(isset ($_GET['msg1'])) { ?>

		<div class="alert alert-danger"><span class="vd_alert-icon">
		<i class="fa fa-check-circle vd_red"></i></span><strong>
		<?php error_reporting(0); echo $_GET['msg1']; ?></strong> </div>
		<?php } ?> 
		<div class="well"><h4><strong>&nbsp;&nbsp;&nbsp;Change Profile Picture</strong></h4>
		<div class="col-xs-12" style="height:30px;"></div>
			<form method="post" name="update_image" enctype="multipart/form-data" action="update_master.php" id="update_image">
				<h4 class="col-md-12">Profile Picture</h4>
				<input type="file" class="form-control input-lg col-md-12" name="file" placeholder="Upload Image" id="file">
			<div class="col-md-12" style="height:20px;">&nbsp;</div>
			<input type="submit" class="btn btn-info" value="Update Picture" name="update_image1">
			</form>
		</div>
		<div class="col-xs-12" style="height:30px;"></div>
		<div class="well"><h4><strong>&nbsp;&nbsp;Change Password</strong></h4>
			<form method="post" name="update_password" action="update_master.php" id="update_password">
				<div class="col-md-12" style="height:20px;">&nbsp;</div>
				<h4 class="col-md-12">New Password</h4>
				<input type="password" class="form-control input-lg col-md-12" name="password" placeholder="New Password" id="npass">
				<h4 class="col-md-12">Confirm Password</h4>
				<input type="password" class="form-control input-lg col-md-12" name="cpassword" placeholder="Confirm Password" id="cpass">
				<div class="col-md-12" style="height:20px;">&nbsp;</div>
				<input type="submit" class="btn btn-info" value="Update Password" name="update_password1" id="change_email">
			</form>
		</div>
		<div class="well">&nbsp;&nbsp;<h4><strong>Change EmailID</strong></h4>
			<form method="post" action="update_master.php" name="update_email1" id="update_email2">
					<div class="col-md-12" style="height:20px;">&nbsp;</div>
					<h4 class="col-md-12">New Email ID</h4>
					<input type="text" name="email" class="form-control input-lg col-md-12" placeholder="new EmailID" id="email">
					<div class="col-md-12" style="height:20px;">&nbsp;</div>
					<input type="submit" value="Update EmailID" name="update_email1" class="btn btn-info">
			</form>
		</div>
	</div>
	<?php include 'common/footer.php'; ?>
<?php } ?> 
<script type="text/javascript">
	$("#update_image").validate({ focusInvalid: true, errorPlacement: function () {} });

		// Validate product name
		

		// Validate file
		$("#file").rules("add", {
			required: true,
		});
		
</script>
<script type="text/javascript">
	$("#update_password").validate({ focusInvalid: true, errorPlacement: function () {} });
	$("#opass").rules("add", {
			required: true,
			minlength: 3
		});
	$("#npass").rules("add", {
			required: true,
			minlength: 3
		});

	$("#cpass").rules("add", {
			required: true,
			minlength: 3
		});

</script>
<script type="text/javascript">
	$("#update_email2").validate({ focusInvalid: true, errorPlacement: function () {} });

	$("#email").rules("add", {
			required: true,
			minlength: 7
		});		
</script>