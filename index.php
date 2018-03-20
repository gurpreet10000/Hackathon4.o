<?php
error_reporting(0);
  session_start();
  $role_id = $_SESSION['role_id'];
  if($role_id == 1 OR $role_id ==2)
  {
  ?>
<?php include 'common/header.php'; ?>
<!-- /4. $MAIN_MENU -->

	<div id="content-wrapper">
		<ul class="breadcrumb breadcrumb-page">
			<div class="breadcrumb-label text-light-gray">You are here: </div>
			<li><a href="#">Home</a></li>
			<li class="active"><a href="#">Dashboard</a></li>
		</ul> <!-- / #content-wrapper -->

    <div id="myCarousel" class="carousel slide col-md-12" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/unemployment.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Unemployment</h3>
        <p>Unemployment in India is a social issue and unemployment records in India are kept by the Ministry of Labour and Employment of India</p>
      </div>
    </div>

    
    <div class="item">
      <img src="img/problem.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Problem</h3>
        <p>Problems In India</p>
      </div>
    </div>

   
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
<div class="col-md-12" style="height:30px;"></div> 
	 <div class="col-md-12">
        <div class="panel panel-dark panel-light-green">
          <div class="panel-heading">
            <span class="panel-title">New Help Requests</span>
            <div class="panel-heading-controls">
             <!-- / .pagination -->
            </div> <!-- / .panel-heading-controls -->
          </div> <!-- / .panel-heading -->
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Profile Picture</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Person</th>
                <th>Contact No.</th>
                <th>Username</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody class="valign-middle">
             <?php
                    $active_flag = 1;
                    $i = 1;
                      $q= $d->select('members',"active_flag = '$active_flag'");
                        while($data= mysqli_fetch_row($q))
                        {
                        ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td>
                  <img src="img/<?php echo $data['8']; ?>" alt="" style="width:26px;height:26px;" class="rounded">
                </td>
                <td><?php echo $data['1']; ?></td>
                <td><?php echo $data['2']; ?></td>
                <td><?php echo $data['3']; ?></td>
                <td><?php echo $data['4']; ?></td>
                <td><?php echo $data['6']; ?></td> 
                  <input type="hidden" name="active_flag" value="<?php $data['9'];?>">
                 <td><a href="update_master.php?c_id=<?php echo $data[0]; ?>"><input  type="submit" class="btn btn-info" name="approve" value="Approve"></a></td>
                <td><a href="delete_master1.php?c_id=<?php echo $data[0]; ?>"><button class="btn btn-danger">Decline</button></a></td>
              </tr>
              <?php $i++; } ?>
            </tbody>
          </table>
        </div> <!-- / .panel -->
        <a href="pdf_master.php?approvecompany" class="btn btn-info">Export PDF</a>
        <div class="col-xmd-12" style="height:20px;"></div>
      </div>
         <div class="col-md-12">
        <div class="panel panel-dark panel-light-green">
          <div class="panel-heading">
            <span class="panel-title">New User Approval Requests</span>
            <div class="panel-heading-controls">
             <!-- / .pagination -->
            </div> <!-- / .panel-heading-controls -->
          </div> <!-- / .panel-heading -->
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Profile Picture</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Created Date</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody class="valign-middle">
             <?php
                    $active_flag = 1;
                    $i = 1;
                      $q= $d->select('users',"active_flag = '$active_flag'");
                        while($data= mysqli_fetch_row($q))
                        {
                        ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td>
                  <img src="img/<?php echo $data['6']; ?>" alt="" style="width:26px;height:26px;" class="rounded">
                </td>
                <td><?php echo $data['1']; ?></td>
                <td><?php echo $data['2']; ?></td>
                <td><?php echo $data['4']; ?></td>
                <td><?php echo $data['8']; ?></td>
                  <input type="hidden" name="active_flag" value="<?php $data['9'];?>">
                 <td><a href="update_master.php?reg_id=<?php echo $data[0]; ?>"><input  type="submit" class="btn btn-info" name="approve" value="Approve"></a></td>
                <td><a href="delete_master1.php?reg_id=<?php echo $data[0]; ?>"><button class="btn btn-danger">Decline</button></a></td>
              </tr>
              <?php $i++; } ?>
            </tbody>
          </table>
        </div> <!-- / .panel -->
         <a href="pdf_master.php?approveuser" class="btn btn-info">Export PDF</a>
        <div class="col-xmd-12" style="height:20px;"></div>
      </div>
      <div class="col-md-12">
        <div class="panel panel-dark panel-light-green">
          <div class="panel-heading">
            <span class="panel-title">Unsolved Helps
</span>
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
                <th>Help</th>
                <th>Time Duration</th>
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
                 <td><a href="update_master.php?cart_id=<?php echo $data[0]; ?>"><input  type="submit" class="btn btn-info" name="approve" value="Retrival"></a></td>
                <td><a href="delete_master1.php?cart_id=<?php echo $data[0]; ?>"><button class="btn btn-danger">Decline</button></a></td>
              </tr>
              <?php $i++; } ?>
            </tbody>
          </table>
        </div> <!-- / .panel -->
        <a href="pdf_master.php?approvecart" class="btn btn-info">Export PDF</a>
        <div class="col-xmd-12" style="height:20px;"></div>
      </div>
      <div class="col-md-12">
        <div class="panel widget-tasks panel-dark-gray">
          <div class="panel-heading">
            <span class="panel-title">NGO Details</span>
            <div class="panel-heading-controls">
             <!-- / .pagination -->
            </div> <!-- / .panel-heading-controls -->
          </div> <!-- / .panel-heading -->
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>NGO Name</th>
                <th>Event Title</th>
                <th>Event Date</th>
                <th>Event Time</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody class="valign-middle">
             <?php
                    $active_flag = 1;
                    $i = 1;
                      $q= $d->select('booking');
                        while($data= mysqli_fetch_row($q))
                        {
                        ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['2']; ?></td>
                <td><?php echo $data['3']; ?></td>
                <td><?php echo $data['4']; ?></td>
                <td><?php echo $data['5']; ?></td>
                <td><?php echo $data['6']; ?></td>
              </tr>
              <?php $i++; } ?>
            </tbody>
          </table>
        </div> <!-- / .panel -->
        <a href="pdf_master.php?approvecart" class="btn btn-info">Export PDF</a>
        <div class="col-xmd-12" style="height:20px;"></div>
      </div>
</div>
<?php include 'common/footer.php'; ?>
<?php
session_start();
if( isset($_SESSION['username'])==false)
{
	header("location:pages-signin.php?msg1=Login First");
}
?>
<?php }
else
{ ?>
<?php include 'common/header.php' ?>
<div id="content-wrapper">
     <div id="myCarousel" class="carousel slide col-md-12" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/HUMAN-RESOURCE-MANAGEMENT1.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/procrastination-productivity.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/27450462_ml.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/26912432_ml.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/solution-small-img.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
<div class="col-md-12" style="height:30px;"></div>
  <div class="well col-xs-12"><h4>Available Facilities</h4></div>
  <div class="col-md-12">
  <div class="row text-center">
 
  <?php
                    
                      $q= $d->select('facilities');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
        <div class="col-md-4">
      <div class="thumbnail">
        <img src="img/<?php echo $data[2]; ?>" width="400" height="300">
        <br> <p><strong><?php echo $data['1']; ?></strong></p>
          </div>
  </div>
      
<?php  }?>   
</div>
</div>

 <div class="well col-xs-12"><h4>Current Events</h4></div>
  <?php
                    
                      $q= $d->select('booking');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<div class="row text-center">
 <div class="col-sm-4">
      <div class="thumbnail alert alert-info">
      <h3><center><i><?php echo $data['3']; ?></i></center></h3>
      <h4>Organized by : <strong><?php echo $data['2']; ?></strong></h4>
      <h4>Date : <strong><?php echo $data['4']; ?></strong></h4>
      <h4>Time : <strong><?php echo $data['5']; ?></strong></h4>
      <h4>Amount : <strong><?php echo $data['6']; ?>/-</strong></h4>
      </div>
      </div>
    </div>
<?php  }?>
</div>
<?php include 'common/footer.php' ?>
<?php } ?>