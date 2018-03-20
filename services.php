<?php include 'common/header.php'; ?>
<div id="content-wrapper">
	<form method="post" action="insert_master.php" enctype="multipart/form-data" id="service_add">
		<div class="form-group w-icon alert alert-info col-sm-12">
  		  <strong><h4><b>Add Services From Here</b></h4></strong>
  		</div>

		<div class="form-group w-icon col-sm-12">
			<h4><strong>Service Name</strong></h4>
			<input type="text" name="sname" class="form-control input-lg col-md-12" placeholder="Service Name" id="s_id">
		</div>

		<div class="form-group w-icon col-sm-12">
			<h4><strong>Service Image</strong></h4>
			<input type="file" name="file" class="form-control input-lg col-md-12" placeholder="Upload Image" id="file">
		</div>

		<div class="form-actions w-icon col-sm-6">
			<button name="reg_service" type="submit" class="btn btn-info btn-md">Add Services</button>
		</div>
		</form>
	<div class="col-xs-12" style="height:30px;"></div>
<!--view Services from here like gallery!-->
		<div class="row"><br></div>
		&nbsp;<div class="form-group w-icon alert alert-warning col-sm-12">
  		  <strong><h4><b>View Services From Here</b></h4></strong>
  		</div>
  		 

<?php
                    
                      $q= $d->select('services');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<div class="col-sm-6">
<div class="col-sm-4">
<img src="img/<?php echo $data[2]; ?>" width="150px" height="150px"></div>
<div class="col-sm-8"><h4>Service Name : <?php echo $data['1']; ?></h4>
<a href="delete_master1.php?s_id=<?php echo $data[0]; ?>"><button class="btn btn-warning">Delete</button></a>
</div>
<div class="col-xs-12" style="height:30px;"></div></div>
<?php  }?>
</div>
</div>
<?php include 'common/footer.php'; ?>
<script type="text/javascript">
	$("#service_add").validate({ focusInvalid: true, errorPlacement: function () {} });

		// Validate service name
		$("#s_id").rules("add", {
			required: true,
			minlength: 3
		});

		// Validate file
		$("#file").rules("add", {
			required: true,
		});
</script>