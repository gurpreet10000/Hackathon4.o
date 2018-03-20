<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
	<div class="well col-md-6">
	<legend><strong>&nbsp;&nbsp;Book Events From Here !!</strong></legend>
		<form method="post" action="insert_master.php">
			<h4>&nbsp;&nbsp;Company Name</h4>
			<input type="text" name="cname"  class="form-control input-lg" required>
			<h4>&nbsp;&nbsp;Event Title</h4>
			<input type="text" name="etitle"  class="form-control input-lg" required>
			<h4>&nbsp;&nbsp;Event Date</h4>
			<input type="text" name="edate"  class="form-control input-lg" required>
			<h4>&nbsp;&nbsp;Event Time</h4>
			<input type="text" name="etime"  class="form-control input-lg" required>
			<h4>&nbsp;&nbsp;Amount</h4>
			<input type="text" name="amount"  class="form-control input-lg" required><br>
			<input type="submit" value="Regsiter" class="btn btn-primary" name="book">
		</form>
	</div>
	</div>
<?php include 'common/footer.php'; ?>