<?php
error_reporting(0);
  session_start();
  $role_id = $_SESSION['role_id'];
  if($role_id == 1 OR $role_id ==2)
  {
  ?>
<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
		<div class="alert alert-info well">
			<h4><strong>Messages !!&nbsp;You can Sent From Here </strong></h4>
		</div>
	<div class="col-md-1">
		<img src="img/<?php
session_start();
if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
} echo $_SESSION['file']; ?>" alt="" class="" style="border-radius: 50%" name="file" height=60px width=60px>
	</div>
	<form method="post" action="insert_master.php" enctype="multipart/form-data">
	<div class="col-md-6">
		<input type="text" name="message" class="form-control col-md-6" placeholder="Enter Message">
		</div>
	<div class="col-md-2">
		<select class="form-control" name="name">

		<?php            
      	         $q= $d->select('members');
                 while($data= mysqli_fetch_row($q))
                    {
                       ?>
                         <option><?php echo $data[6]; ?></option>
                    <?php    }
                        ?>
     </select>
	</div>
	<div class="col-md-1">
		<input class="btn btn-success" name="send" value="Send" type="submit">
	</div>	</form><div class="col-xs-12" style="height:30px;"></div>
<div class="row"></div>

	<?php
     ?>
     <div class="alert alert-warning">
     	<h4><strong> Messages !!</strong></h4>
     </div>
     <?php               
                      $q= $d->select('message');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<?php 
	if(isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
} 

	if($_SESSION['file'] == $data['3'])
		{ ?>
<div class="col-sm-7 well" style="float:right; ">
	<div class="col-md-2">
		<img src="img/<?php echo $data['3']; ?>" width="60px" height="60px" style="border-radius: 50%">
	</div>
	<div class="col-md-6">
		<h5>To&nbsp;:&nbsp;<?php echo $data['2']?></h5>
		<h5>Message&nbsp;:&nbsp;<?php echo $data['1']; ?></h5>
		<h5>Time&nbsp;:&nbsp;<?php echo $data['4']; ?></h5>
	</div> 
</div>
<?php }
else if($data['2']==$_SESSION['username'])
{ ?>
	<div class="col-sm-7 alert alert-success" style="float:left; ">
	<div class="col-md-2">
		<img src="img/<?php echo $data['3']; ?>" width="60px" height="60px" style="border-radius: 50%">
	</div>
	<div class="col-md-6">
		<h5>From&nbsp;:&nbsp;<?php echo $data['5']; ?></h5>
		<h5>Message&nbsp;:&nbsp;<?php echo $data['1']; ?></h5>
		<h5>Time&nbsp;:&nbsp;<?php echo $data['4']; ?></h5>
	</div>
</div><?php 	
} ?>
<?php  }?>

<?php include 'common/footer.php'; ?>
<?php }
else { ?>
<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
		<div class="alert alert-info well">
			<h4><strong>Messages !!&nbsp;You can Sent From Here </strong></h4>
		</div>
	<div class="col-md-1">
		<img src="img/<?php
session_start();
if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
} echo $_SESSION['file']; ?>" alt="" class="" style="border-radius: 50%" name="file" height=60px width=60px>
	</div>
	<form method="post" action="insert_master.php" enctype="multipart/form-data">
	<div class="col-md-6">
		<input type="text" name="message" class="form-control col-md-6" placeholder="Enter Message">
		</div>
	<div class="col-md-2">
		<select class="form-control" name="name">

		<?php            
      	         $q= $d->select('members');
                 while($data= mysqli_fetch_row($q))
                    {
                       ?>
                         <option><?php echo $data[6]; ?></option>
                    <?php    }
                        ?>
     </select>
	</div>
	<div class="col-md-1">
		<input class="btn btn-success" name="send" value="Send" type="submit">
	</div>	</form><div class="col-xs-12" style="height:30px;"></div>
<div class="row"></div>

	<?php
     ?>
     <div class="alert alert-warning">
     	<h4><strong> Messages !!</strong></h4>
     </div>
     <?php               
                      $q= $d->select('message');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<?php 
	if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
} 

	if($_SESSION['file'] == $data['3'])
		{ ?>
<div class="col-sm-7 well" style="float:right; ">
	<div class="col-md-2">
		<img src="img/<?php echo $data['3']; ?>" width="60px" height="60px" style="border-radius: 50%">
	</div>
	<div class="col-md-6">
		<h5>To&nbsp;:&nbsp;<?php echo $data['2']?></h5>
		<h5>Message&nbsp;:&nbsp;<?php echo $data['1']; ?></h5>
		<h5>Time&nbsp;:&nbsp;<?php echo $data['4']; ?></h5>
	</div> 
</div>
<?php }
else if($data['2']==$_SESSION['username'])
{ ?>
	<div class="col-sm-7 alert alert-success" style="float:left; ">
	<div class="col-md-2">
		<img src="img/<?php echo $data['3']; ?>" width="60px" height="60px" style="border-radius: 50%">
	</div>
	<div class="col-md-6">
		<h5>From&nbsp;:&nbsp;<?php echo $data['5']; ?></h5>
		<h5>Message&nbsp;:&nbsp;<?php echo $data['1']; ?></h5>
		<h5>Time&nbsp;:&nbsp;<?php echo $data['4']; ?></h5>
	</div>
</div><?php 	
} ?>
<?php  }?>

<?php include 'common/footer.php'; ?>
<?php } ?>