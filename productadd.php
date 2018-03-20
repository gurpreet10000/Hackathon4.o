<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>
<?php include 'common/header.php'; ?>

<div id="content-wrapper">
	<div class="well">
<!--insert Products from here like gallery!-->
	<form method="post" action="insert_master.php" enctype="multipart/form-data" id="product_add">
		<div class="form-group w-icon alert alert-info col-sm-12">
  		  <strong><h4><b>Add Helps From Here</b></h4></strong>
  		</div>

		<div class="form-group w-icon col-sm-12">
			<h4><strong>Type Of Help</strong></h4>
			<input type="text" name="pname" class="form-control input-lg col-md-12" placeholder="Problem" id="p_id">
		</div>

		<div class="form-group w-icon col-sm-12">
		<h4><strong>Description of Problem</strong></h4>
		<input type="text" name="brand" id="brand_id" class="form-control input-lg col-md-12" placeholder="Description of problem">
		</div>

		<div class="form-group w-icon col-sm-12">
			<h4><strong>Problem Related Images</strong></h4>
			<input type="file" name="file" class="form-control input-lg col-md-12" placeholder="Upload Image" id="file">
		</div> 

		<div class="form-actions w-icon col-sm-6">
			<button name="reg_product" type="submit" class="btn btn-info btn-md">Add Problem</button>
		</div>
	</form>

	<div class="col-xs-12" style="height:30px;"></div>
<!--view Products from here like gallery!-->
		<div class="row"><br></div>
		<div class="form-group w-icon alert alert-warning col-sm-12">
  		  <strong><h4><b>View Problems From Here</b></h4></strong>
  		</div>
  		 

<?php
                    
                      $q= $d->select('product');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<div class="col-sm-6">
<div class="col-sm-4">
<img src="img/<?php echo $data[3]; ?>" width="150px" height="150px"></div>
<div class="col-sm-8"><h4>Problem Name : <?php echo $data['1']; ?></h4>
<h4>Description of Problem : <?php echo $data['2']; ?></h4>
<a href="delete_master1.php?id=<?php echo $data[0]; ?>"><button class="btn btn-warning">Delete</button></a>
</div>
<div class="col-xs-12" style="height:30px;"></div></div>
<?php  }?>

<a href="pdf_master.php?product" class="btn btn-info">Export PDF</a>
	</div>
</div>
<?php include 'common/footer.php'; ?>
<script type="text/javascript">
	$("#product_add").validate({ focusInvalid: true, errorPlacement: function () {} });

		// Validate product name
		$("#p_id").rules("add", {
			required: true,
			minlength: 3
		});

		// Validate file
		$("#file").rules("add", {
			required: true,
		});
		
		// Validate brand
		$("#brand_id").rules("add", {
			required: true,
			minlength: 3
		});
</script>