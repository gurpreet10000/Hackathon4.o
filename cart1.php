<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>	
<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
		<div class="well">
			<h4><strong>Your Booking's are Done here !!</strong>
			</h4>
			<div class="col-md-12" style="height:30px;"></div>
			<form method="post" action="insert_master.php">
				<h4>&nbsp;&nbsp;Product Name </h4>
				<input type="text" name="s_id" placeholder="Service" class="form-control input-lg" value="<?php echo $_GET['s_id']; ?>"readonly>
				<h4>&nbsp;&nbsp;Return Date</h4>
				<input type="date" name="date" placeholder="Return date" class="form-control input-lg" required>
				<div class="col-md-12" style="height:30px;"></div>
				<input type="hidden" name="active_flag" value="1">
				<input type="submit" name="booking1" value="Register" class="btn btn-info">
			</form>
		</div>
	</div>
<?php include 'common/footer.php'; ?>