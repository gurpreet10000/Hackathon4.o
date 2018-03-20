<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
		<div class="well">
		<h4><strong>Reply Here !!</strong></h4>
		<div class="col-md-12" style="height:20px;">&nbsp;</div>
			<form method="post" action="update_master.php"> 
					<?php
					$query_id =  $_GET['query_id'];
					$q = $d->select('post_query',"query_id='$query_id'");
					while($data= mysqli_fetch_row($q))
                    {
                       ?>
				<h4>&nbsp;&nbsp;Email</h4>
				<input type="text" name="email" value="<?php echo $data['2']; ?>" id="email" class="form-control input-lg" disabled><?php session_start();
		$_SESSION['email1'] = $data['2']; ?>
				<input type="hidden" name="query" value="<?php $_GET['query_id']; ?>">
				<h4>&nbsp;&nbsp;Reply</h4>				
				<textarea class="form-control input-lg" name="reply" id="Reply" required>
				</textarea>
				<div class="col-md-12" style="height:20px;">&nbsp;</div>
				<input type="submit" value="Reply" name="reply1" class="btn btn-success">
			</form>
		</div>
		<?php } 
		?>
	</div>
<?php include 'common/footer.php'; ?>