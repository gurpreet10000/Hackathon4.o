<?php include 'common/header.php'; ?>
	<div id="content-wrapper">
		<div class="col-md-12">
        <div class="panel panel-dark panel-dark-gray">
          <div class="panel-heading">
            <span class="panel-title">Available Ads</span>
            <div class="panel-heading-controls">
             <!-- / .pagination -->
            </div> <!-- / .panel-heading-controls -->
          </div> <!-- / .panel-heading -->
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
      			<th>Title</th>
      			<th>Description</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody class="valign-middle">
             <?php
                    $i = 1;
                      $q= $d->select('news');
                        while($data= mysqli_fetch_row($q))
                        {
                        ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['1']; ?></td>
                <td><?php echo $data['2']; ?></td>
                 <td><a href="newsupdate.php?news_id=<?php echo $data[0]; ?>"><input  type="submit" class="btn btn-info" name="approve" value="Modify"></a></td>
                <td><a href="delete_master1.php?news_id=<?php echo $data[0]; ?>"><button class="btn btn-danger">Delete</button></a></td>
              </tr>
              <?php $i++; } ?>
            </tbody>
          </table>
        </div> <!-- / .panel -->
        </div>
	</div>
<?php include 'common/footer.php'; ?>
