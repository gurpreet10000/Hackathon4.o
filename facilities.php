<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
	<div class="well col-md-6">
		<form method="post" action="insert_master.php" enctype="multipart/form-data">
		<legend>Add Facilies Here !! </legend>
		<div class="col-md-12" style="height:20px;"></div>
		<h4>Facilities Name</h4>
		<input type="text" name="fname" class="form-control input-lg col-md-8" placeholder="Enter Facility Name" required>
		<div class="col-md-12" style="height:20px;"></div>
		<h4>Image</h4>
		<input type="file" name="file" class="form-control input-lg col-md-8" required>
		<div class="col-md-12" style="height:20px;"></div>
		<input type="submit" value="Add" name="addfacility" class="btn btn-success" style="width: 100px">
		</form>
	</div>
	</div>
<?php include 'common/footer.php'; ?>
