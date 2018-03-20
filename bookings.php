<?php
include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>	
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
            <span class="panel-title">New Company Approval Requests</span>
            <div class="panel-heading-controls">
             <!-- / .pagination -->
            </div> <!-- / .panel-heading-controls -->
          </div> <!-- / .panel-heading -->
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Product</th>
                <th>Return Date</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody class="valign-middle">
             <?php
                    $active_flag = 1;
                    $i = 1;
                      $q= $d->select('cart');
                        while($data= mysqli_fetch_row($q))
                        {
                        ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['1']; ?></td>
                <td><?php echo $data['2']; ?></td>
                <td><?php echo $data['3']; ?></td>
                <td><?php echo $data['4']; ?></td>
                  <input type="hidden" name="active_flag" value="<?php $data['9'];?>">
                 <td><a href="update_master.php?cart_id=<?php echo $data[0]; ?>"><input  type="submit" class="btn btn-info" name="approve" value="Retrived"></a></td>
                <td><a href="delete_master1.php?cart_id=<?php echo $data[0]; ?>"><button class="btn btn-danger">Decline</button></a></td>
              </tr>
              <?php $i++; } ?>
            </tbody>
          </table>
        </div> <!-- / .panel -->
      </div>
      </div>
<?php include 'common/footer.php'; ?>
<?php }
else
{ ?>
<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
	<form method="post" action="insert_master.php" enctype="multipart/form-data" id="service_add">
		<div class="form-group w-icon alert alert-success col-sm-12">
  		  <strong><h4><b>Facilities of the Products & Services are available Here !!</b></h4></strong>
  		</div>
  		<div class="row"><br></div>
		<div class="form-group w-icon alert alert-warning col-sm-12">
  		  <strong><h4><b>Available Products </b></h4></strong>
  		</div>
      </form>
  		 

<?php
                      $active_flag = 0;
                      $q= $d->select('product,cart',"cart.product != product.pname");
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<div class="col-sm-6">
<div class="col-sm-4">
<img src="img/<?php echo $data[3]; ?>" width="150px" height="150px"></div>
<div class="col-sm-8"><h4>Product Name : <?php echo $data['1']; ?></h4>
<h4>Brand Of Product : <?php echo $data['2']; ?></h4>
<a href="cart.php?pname=<?php echo $data[1]; ?>"><input  type="submit" class="btn btn-info" name="book" value="Register"></a>
</div>
<div class="col-xs-12" style="height:30px;"></div></div>
<?php  }?>

<!--view Services from here like gallery!-->
		<div class="row"><br></div>
		&nbsp;<div class="form-group w-icon alert alert-warning col-sm-12">
  		  <strong><h4><b>Available Services </b></h4></strong>
  		</div>
  		 

<?php
                    
                      $q= $d->select('services');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<div class="col-sm-6">
<div class="col-sm-4">
<img src="img/<?php echo $data[2]; ?>" width="150px" height="150px"></div>
<div class="col-sm-8"><h4>Service Name : <?php echo $data['1']; ?></h4>
<a href="cart1.php?s_id=<?php echo $data[1]; ?>"><input  type="submit" class="btn btn-info" name="book" value="Register"></a>
</div>
<div class="col-xs-12" style="height:30px;"></div></div>
<?php  }?>
</div>
</form>

	</div>
<?php include 'common/footer.php'; ?>
<?php } ?>