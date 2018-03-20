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
            <span class="panel-title">Freequently Asked Questions (FAQ)</span>
            <div class="panel-heading-controls">
             <!-- / .pagination -->
            </div> <!-- / .panel-heading-controls -->
          </div> <!-- / .panel-heading -->
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Question</th>
                <th>Answer</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody class="valign-middle">
             <?php
                    $active_flag = 1;
                    $i = 1;
                      $q= $d->select('faq');
                        while($data= mysqli_fetch_row($q))
                        {
                        ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['1']; ?></td>
                <td><?php echo $data['2']; ?></td>
                  <input type="hidden" name="active_flag" value="<?php $data['9'];?>">
                 <td><a href="faq.php?faq_id=<?php echo $data[0]; ?>"><input class="btn btn-success" name="reply" value="Reply" type="submit"></a></td>
                <td><a href="delete_master1.php?faq_id=<?php echo $data[0]; ?>"><button class="btn btn-danger">Delete</button></a></td>
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
else
{ ?>
<?php include 'common/header.php'; ?>
<!-- /4. $MAIN_MENU -->
	<div id="content-wrapper">
		<div class="well">
			<h4><strong>&nbsp;&nbsp;Freequently Asked Questions (FAQ)</strong></h4>
		</div>
		<div class="well">
			<form method="post" action="insert_master.php">
				<h4><strong>&nbsp;&nbsp;Can not find Your Question ? Ask Here !!</strong></h4>
				<div class="col-xs-12" style="height:30px;"></div>
				<h4 class="col-md-12"><strong>Question</strong></h4>
				<input type="text" name="question" id="question" placeholder="Question" class="form-control input-lg">
				<div class="col-xs-12" style="height:30px;"></div>
				<input type="submit" value="Ask" name="questions" class="btn btn-info">
			</form>
		</div>
		<div class="well">
		<?php
                    
                      $q= $d->select('faq');
                        while($data= mysqli_fetch_row($q))
                        {
        ?>
        	<div class="alert alert-info">
        	<h4><strong> Q:<?php echo $data['1']; ?></strong></h4>
        	<h4>A:<?php echo $data['2']; ?></h4>
        	</div>
        	<div class="col-xs-12" style="height:30px;"></div>
		<?php  }?>
		</div>
	</div> <!-- / #content-wrapper -->
<?php include 'common/footer.php'; ?>

<?php } ?>