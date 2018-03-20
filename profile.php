<?php
error_reporting(0);
  session_start();
  $role_id = $_SESSION['role_id'];
  if($role_id == 1 OR $role_id ==2)
  {
  ?>
<?php include 'common/header.php'; ?>
<?php
session_start();
if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
}
?>
	<div id="content-wrapper">
		<div class="alert alert-success">
			<h4><strong>Profile Details</strong></h4>
		</div>
		<?php
		$username = $_SESSION['username'];
		$q = $d->select('users',"username='$username'");
		while($data= mysqli_fetch_row($q))
                    {
                       ?>
            <img src="img/<?php echo $data['6']; ?>" height="300px" width="300px" style="border-radius:50%">
            <div class="col-xs-12" style="height:30px;"></div>
			<form role="form">
			<h4 class="col-md-2">Name  </h4>
			<input type="text" name="name" class="form-group input-lg col-md-4" value="<?php echo $data['1']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">Email  </h4>
			<input type="text" name="email" class="form-group input-lg col-md-4" value="<?php echo $data['2']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">Role  </h4>
			<input type="text" name="role" class="form-group input-lg col-md-4" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">Username  </h4>
			<input type="text" name="username" class="form-group input-lg col-md-4" value="<?php echo $data['4']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">password  </h4>
			<input type="text" name="password" class="form-group input-lg col-md-4" value="<?php echo $data['5']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">Created Date  </h4>
			<input type="text" name="c_date" class="form-group input-lg col-md-4" value="<?php echo $data['8']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">Last Updated Date  </h4>
			<input type="text" name="u_date" class="form-group input-lg col-md-4" value="<?php echo $data['9']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
		</form>
		<?php } ?>
	</div>
<?php include 'common/footer.php'; ?>
<?php } else
{ ?>
<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
		<div class="alert alert-success">
			<h4><strong>Profile Details</strong></h4>
		</div>
		<?php
		$username = $_SESSION['username'];
		$q = $d->select('members',"username='$username'");
		while($data= mysqli_fetch_row($q))
                    {
                       ?>
            <img src="img/<?php echo $data['8']; ?>" height="300px" width="300px" style="border-radius:50%">
            <div class="col-xs-12" style="height:30px;"></div>
			<form role="form">
			<h4 class="col-md-2">Company Name  </h4>
			<input type="text" name="name" class="form-group input-lg col-md-4" value="<?php echo $data['1']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">Email  </h4>
			<input type="text" name="email" class="form-group input-lg col-md-4" value="<?php echo $data['2']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">Contact pesron  </h4>
			<input type="text" name="role" class="form-group input-lg col-md-4" value="<?php echo $data['3']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">Contact No</h4>
			<input type="text" name="username" class="form-group input-lg col-md-4" value="<?php echo $data['4']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">Address  </h4>
			<input type="text" name="password" class="form-group input-lg col-md-4" value="<?php echo $data['5']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">Username</h4>
			<input type="text" name="c_date" class="form-group input-lg col-md-4" value="<?php echo $data['6']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
			<h4 class="col-md-2">Created  Date  </h4>
			<input type="text" name="u_date" class="form-group input-lg col-md-4" value="<?php echo $data['10']; ?>" disabled>
			<div class="col-xs-12" style="height:30px;"></div>
		</form>
		<?php } ?>
	</div>
<?php include 'common/footer.php'; ?>
<?php } ?>