<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
		<div class="alert alert-info">
			<h4><strong>Add Role</h4></strong>
		</div>
		<div>
			<form name="role" method="post" action="insert_master.php">
			<input type="text" name="role" placeholder=" Add Role" id="role_id" class="form-group input-lg col-md-6">
			<input type="submit" value="Add" name="role_add" class="btn btn-success col-md-offset-1" style="height:45px">
			</form>
		</div>
		<div class="col-xmd-12" style="height:20px;"></div>
		<div class="alert alert-warning">
			<h4><strong>View Roles From Here</strong></h4>
		</div>
		  <div class="panel panel-dark panel-light-green">
          <div class="panel-heading">
            <span class="panel-title">All Roles are available here !! </span>
            <div class="panel-heading-controls">
             <!-- / .pagination -->
            </div> <!-- / .panel-heading-controls -->
          </div> <!-- / .panel-heading -->
          <table class="table">
            <thead>  
                <tr>
                    <td><h4><strong>Role Id</strong></h4></td>
                    <td><h4><strong>Role Type</strong></h4></td>
                    <td><h4><strong>Created Date</strong></h4></td>
                    <td colspan="2"><h4><strong>Action</strong></h4></td>
                </tr>
                </thead>
                <tbody class="valign-middle">
<?php
                    
                      $q= $d->select('role');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
                           <tr>
                               <td><?php echo $data[0]; ?></td>
                               <td><?php echo $data[1]; ?></td>
                               <td><?php echo $data[3]; ?></td>
                               <td><a href="delete_master1.php?role_id=<?php echo $data[0]; ?>">Delete</a></td>
                           </tr>
                           <?php
                        }
                        
                    ?>
                    </tbody>
                    </table>
                    </div>
                    </h4>
                     <a href="pdf_master.php?role" class="btn btn-info">Export PDF</a>
                    </div>
                    </div>

<?php include 'common/footer.php'; ?>