<?php include 'common/header.php'; ?>
<?php
include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>`
<div id="content-wrapper">
           <div class="panel panel-dark panel-light-green">
          <div class="panel-heading">
            <span class="panel-title"><i class="panel-title-icon fa fa-smile-o"></i>All Users Details</span>
            <div class="panel-heading-controls">
             <!-- / .pagination -->
            </div> <!-- / .panel-heading-controls -->
          </div> <!-- / .panel-heading -->
          <table class="table">
            <thead> 
                <tr>
                    <td><h4><strong>Problem Picture</strong></h4></td>
                    <td><h4><strong>Name</strong></h4></td>
                    <td><h4><strong>Email Id</strong></h4></td>
                    <td><h4><strong>Username</strong></h4></td>
                    <td colspan="2"><h4><strong>Action</strong></h4></td>
                </tr>
                </thead>
                <tbody class="valign-middle">
<?php
                      $active_flag = 0;
                      $q= $d->select('users',"active_flag=$active_flag");
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
                           <tr>
                               <td><img src="img/<?php echo $data[6]; ?>" width="50px" height="50px" style="border-radius:50px"></td>
                               <td><?php echo $data[1]; ?></td>
                               <td><?php echo $data[2]; ?></td>
                               <td><?php echo $data[4]; ?></td>    
                               <td><a href="manage.php?reg_id=<?php echo $data[0]; ?>"><button class="btn btn-info">Edit</button></a></td>
                               <td><a href="delete_master1.php?reg_id=<?php echo $data[0]; ?>"><button class="btn btn-warning">Delete</button></a></td>
                           </tr><tr>&nbsp;</tr>
                           <?php } ?>
                    </tbody>
                     </table>
        </div> <!-- / .panel -->
         <a href="pdf_master.php?user" class="btn btn-info">Export PDF</a>
      </div>
                    <br>
                    <div class="col-md-12">
        <div class="panel panel-dark panel-light-green">
          <div class="panel-heading">
            <span class="panel-title"><i class="panel-title-icon fa fa-smile-o"></i>All Companies Details</span>
            <div class="panel-heading-controls">
             <!-- / .pagination -->
            </div> <!-- / .panel-heading-controls -->
          </div> <!-- / .panel-heading -->
          <table class="table">
            <thead>
                    <tr>
                    <td><h4><strong>Logo</strong></h4></td>
                    <td><h4><strong>Company Name</strong></h4></td>
                    <td><h4><strong>Email</strong></h4></td>
                    <td><h4><strong>Contact Person</strong></h4></td>
                    <td><h4><strong>Contact No.</strong></h4></td>
                    <td><h4><strong>Address</strong></h4></td>
                    <td><h4><strong>Username</strong></h4></td>
                    <td><h4><strong>Created Date</strong></h4></td>
                    <td colspan="2"><h4><strong>Action</strong></h4></td>
                    </tr>
                    </thead>
                     <tbody class="valign-middle">
                    <?php
                      $active_flag = 0;
                      $q= $d->select('members',"active_flag = '$active_flag'");
                        while($data= mysqli_fetch_row($q))
                        {
                        ?>
                <tr>
                    <td><img src="img/<?php echo $data['8']; ?>" alt="" style="width:26px;height:26px;" class="rounded"></td>
                    <td><?php echo $data['1']; ?></td>
                    <td><?php echo $data['2']; ?></td>
                    <td><?php echo $data['3']; ?></td>
                    <td><?php echo $data['4']; ?></td>
                    <td><?php echo $data['5']; ?></td>
                    <td><?php echo $data['6']; ?></td>
                    <td><?php echo $data['10']; ?></td>
                     <td><a href="manage.php?reg_id=<?php echo $data[0]; ?>"><button class="btn btn-info">Edit</button></a></td>
                               <td><a href="delete_master1.php?c_id=<?php echo $data[0]; ?>"><button class="btn btn-warning">Delete</button></a></td> 
                               </tr>
                    <?php } ?>
                   </tbody>
          </table>
        </div> <!-- / .panel -->
        <a href="pdf_master.php?company" class="btn btn-info">Export PDF</a>
      </div>

<?php include'common/footer.php'; ?>