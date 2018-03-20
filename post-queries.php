<?php
error_reporting(0);
  session_start();
  $role_id = $_SESSION['role_id'];
  if($role_id == 1 OR $role_id ==2)
  {
  ?>
<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
	 <div class="col-md-12">
        <div class="panel panel-dark panel-light-green">
          <div class="panel-heading">
            <span class="panel-title">Quesries and Questions Post By users</span>
            <div class="panel-heading-controls">
             <!-- / .pagination -->
            </div> <!-- / .panel-heading-controls -->
          </div> <!-- / .panel-heading -->
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Title</th>
                <th>Description</th>
                <th>Reply</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody class="valign-middle">
             <?php
                    $i = 1;
                      $q= $d->select('post_query');
                        while($data= mysqli_fetch_row($q))
                        {
                        ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['1']; ?></td>
                <td><?php echo $data['2']; ?></td>
                <td><?php echo $data['3']; ?></td>
                <td><?php echo $data['4']; ?></td>
                <td><textarea readonly style="resize: none;"><?php echo $data['6']; ?></textarea>
                 <td><a href="reply.php?query_id=<?php echo $data[0]; ?>"><input class="btn btn-success" name="reply" value="Reply" type="submit"></a></td>
                <td><a href="delete_master1.php?query_id=<?php echo $data[0]; ?>"><button class="btn btn-danger">Delete</button></a></td>
              </tr>
              <?php $i++; } ?>
            </tbody>
          </table>
        </div> <!-- / .panel -->
      </div>
      </div>
      <?php 
      ?>
<?php include 'common/footer.php'; ?>
<?php }
else{
	?>
	<?php include 'common/header.php'; ?>
			<div class="well col-md-8"><h4><strong>&nbsp;&nbsp;Ask Your Queries Here !!</strong></h4>
		<div class="col-xs-12" style="height:30px;"></div>
		<form method="post" action="insert_master.php" enctype="multipart/form-data">
			<h4><strong>&nbsp;&nbsp;Query TItle</strong></h4>
			<input type="text" name="title" placeholder="" class="form-control input-lg" id="title">
			<h4><strong>&nbsp;&nbsp;Description</strong></h4>
			<input type="text" name="description" placeholder="" class="form-control input-lg" id="description">
			<h4><strong>&nbsp;&nbsp;Document</strong></h4>
			<input type="file" name="document" placeholder="" class="form-control input-lg" id="document">
			<input type="hidden" name="active_flag" value="0">
			<div class="col-xs-12" style="height:30px;"></div>
			<input  type="submit" value="Post" class="btn btn-info col-md-offset-0 col-md-3" name="send_query">
			<div class="col-xs-12" style="height:30px;"></div>
		</form>
		</div>
		<div class="col-xs-12" style="height:30px;"></div>
		<div class="well col-md-8"><h4><strong>Queries Posted By You is Here !!</strong></h4>
			<div class="col-xs-12" style="height:30px;"></div>
			<?php
                    
                      $q= $d->select('post_query');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
                            <?php
                            session_start();
                            if($_SESSION['username'] == $data['1'])
                            {
                            	?>

			<h4><strong>Query Title</strong> : <?php echo $data['3']; ?></h4>
			<h4><strong>Description :</strong> <?php echo $data['4']; ?></h4>
      <h4><strong>Reply : </strong><?php echo $data['6']; ?></h4>
		<div class="col-xs-12" style="height:30px;"></div>
		<?php  }
		else if($_SESSION['username'] != $data['1'])
		{ ?>
		<?php }
		?>
		<?php } ?>
		</div>
		<?php include 'common/footer.php'; ?>
<?php } ?>