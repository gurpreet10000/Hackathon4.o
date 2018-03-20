<?php
include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>
<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
	<div class="well">
		<?php
	$ad_id = $_GET['ad_id'];
	$q = $d->select('advertisemenet',"ad_id='$ad_id'");
		while($data= mysqli_fetch_row($q)) { ?>
		<form action="update_master.php" method="post">
			<h4>AdTitle</h4>
			<input type="text" name="title" value="<?php echo $data['1']; ?>" class="form-control input-lg">
			<div class="col-xs-12" style="height:20px;"></div>
			<h4>Ad url</h4>
			<input type="text" name="url" value="<?php echo $data['2']; ?>" class="form-control input-lg">
			<div class="col-xs-12" style="height:20px;"></div>
			<h4>Ad Image</h4>
			<input type="file" name="file" class="form-control input-lg"> 
			<div class="col-xs-12" style="height:20px;"></div>
		    <img src="img/<?php echo $data['3']; ?>" height="200px" width="100%">
		    <div class="col-xs-12" style="height:20px;"></div>
			<h4>Description</h4>
			<input type="text" name="description" value="<?php echo $data['4']; ?>" class="form-control input-lg">
			<div class="col-xs-12" style="height:20px;"></div>
			<input type="submit" value="Update" class="btn btn-success dark col-md-offset-0 col-md-2" name="updatead" style="height: 40px">
		</form>
		</div>

		<?php } ?>
	</div>
<?php include 'common/footer.php'; ?>