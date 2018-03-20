<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
		<div class="well">
		<h4><strong>&nbsp;&nbsp;Add News Details From Here !!</strong></h4>
		<div class="col-xs-12" style="height:20px;"></div>
		<form method="post" action="insert_master.php">
			<h4>&nbsp;&nbsp;News Title</h4>
			<input type="text" name="title" class="form-control input-lg" placeholder="Add News Title">
			<div class="col-xs-12" style="height:20px;"></div>
			<h4>&nbsp;&nbsp;News Description</h4>
			<textarea name="description" class="form-control input-lg" rows="4" style="resize: none"></textarea>
			<div class="col-xs-12" style="height:20px;"></div>
			<input type="submit" name="addnews" value="Send" class="btn btn-info">
		</form>
		</div>
	</div>
<?php include 'common/footer.php'; ?> 