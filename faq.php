<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
		<div class="well">
		<h4><strong>Answer Here for FAQ !!</strong></h4>
		<div class="col-md-12" style="height:20px;">&nbsp;</div>
			<form method="post" action="update_master.php"> 
					<?php
					session_start();
					$_SESSION['faq_id'] = $_GET['faq_id'];
					$faq_id =  $_GET['faq_id'];
					$q = $d->select('faq',"faq_id='$faq_id'");
					while($data= mysqli_fetch_row($q))
                    {
                       ?>
				<input type="hidden" name="query" value="<?php $_GET['faq_id']; ?>">
				<h4>&nbsp;&nbsp;Reply</h4>				
				<textarea class="form-control input-lg" name="answer" id="Reply" required>
				</textarea>
				<div class="col-md-12" style="height:20px;">&nbsp;</div>
				<input type="submit" value="Reply" name="answer1" class="btn btn-success">
			</form>
		</div>
		<?php } 
		?>
	</div>
<?php include 'common/footer.php'; ?>