<?php include 'common/header.php'; ?>
	<div id="content-wrapper">	
	<div class="well">																			
	<form action="insert_master.php" method="post" enctype="multipart/form-data">
		<h4 ><strong>Add The Advertisemnts From Here !!</strong></h4>
		<div class="col-xs-12" style="height:40px;"></div>
		<h4>Ad Title</h4>
		<input type="text" name="title" class="form-control input-lg" placeholder="Title" required>
		<div class="col-xs-12" style="height:20px;"></div>
		<h4>Advertisement URL</h4> 
		<input type="text" name="url" class="form-control input-lg" placeholder="Paste URL" required>
		<div class="col-xs-12" style="height:20px;"></div>
		<h4>Advertisement Image</h4>
		<input type="file" name="file" class="form-control input-lg" required>
		<div class="col-xs-12" style="height:20px;"></div>
		<h4>Description(Optional)</h4>
		<textarea class="form-control input-lg" rows="3" name="description" style="resize: none" required></textarea>
		<div class="col-xs-12" style="height:30px;"></div>
		<input type="submit" value="Upload" name="upload1" class="btn btn-success">
	</form>			
	</div>		
	</div>
<?php include 'common/footer.php'; ?>