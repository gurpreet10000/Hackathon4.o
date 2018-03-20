<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
		<div class="alert alert-info">
			<h4><strong>Add Role</h4></strong>
		</div>
		<div>
			<form name="category" method="post" action="insert_master.php">
			<h4 class="col-md-2">Role:</h4>
			<input type="text" name="category" placeholder="Role" id="role_id" class="form-group input-lg col-md-6">
			<input type="submit" value="Add Role" name="category" class="btn btn-success col-md-offset-1" style="height:45px">
			</form>
		</div>
	</div>
<?php include 'common/footer.php'; ?>