<?php
error_reporting(0);
  session_start();
  $role_id = $_SESSION['role_id'];
  if($role_id == 1 OR $role_id ==2)
  {
  ?>
<?php include 'common/header.php'; ?>
<div id="content-wrapper">
	<div class="well alert alert-info">
		<h4><strong>Welcome To Gallery !!</strong></h4>
	</div>
	<form method="post" action="insert_master.php" enctype="multipart/form-data" id="gallery">
		<h4 class="col-md-12">Image</h4>
		<input type="file" class="form-control input-lg col-md-12" name="file" placeholder="Upload Image" id="file">
		<h4 class="col-md-12">Image Title</h4>
		<input type="text" class="form-control input-lg col-md-12" name="title" placeholder="Image Title" id="title">
		<div class="col-md-12" style="height:20px;">&nbsp;</div>
		<input type="submit" class="btn btn-info" value="Upload" name="upload">
	</form>
	<!--view Products from here like gallery!-->
		<div class="row"><br></div>
		<div class="form-group w-icon alert alert-warning col-sm-12">
  		  <strong><h4><b>Gallery !!</b></h4></strong>
  		</div>
  		 
  		<div class="col-md-12">
<?php
                    
                      $q= $d->select('gallery');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<div class="col-md-3">
	<img src="img/<?php echo $data['1']; ?>"  width="250px" height="250px">
	<h4><?php echo $data['2']; ?></h4>
	<a href="delete_master1.php?g_id=<?php echo $data[0]; ?>"><button class="btn btn-warning">Delete</button></a>
</div>
<?php  }?>
</div>
</div>
<?php include 'common/footer.php'; ?>
<?php }
else
{ ?>
<?php include 'common/header.php'; ?>
<div id="content-wrapper">
	<div class="col-md-12">
<?php
                    
                      $q= $d->select('gallery');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<div class="col-md-3">
	<img src="img/<?php echo $data['1']; ?>"  width="250px" height="250px">
	<h4><?php echo $data['2']; ?></h4>
</div>
<?php  }?>
</div>
</div>
<?php include 'common/footer.php'; ?>
<?php } ?>
<script type="text/javascript">
	$("#gallery").validate({ focusInvalid: true, errorPlacement: function () {} });

		// Validate product name
		

		// Validate file
		$("#file").rules("add", {
			required: true,
		});

		$("#title").rules("add", {
			required: true,
			minlength: 3
		});
		
</script>