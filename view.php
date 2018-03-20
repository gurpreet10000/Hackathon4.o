<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
 

?>
<?php include 'common/header.php'; ?>
<div id="content-wrapper">
    <form method="post" action="multiple_dlt.php">
            <table width="1000" class="table-stripped table-hover ">
               
                <a href="registration.php">Insert</a>        
                
                <tr>
                    <td><input type="submit" name="submit" value="Deleteall"></td>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email Id</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Photo</td>
                    <td colspan="2">Action</td>
                </tr>
<?php
                    
                      $q= $d->select('users');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
                           <tr>
                               <td><input type="checkbox" name="check[]" value="<?php echo $data[0]; ?>"></td>
                               <td><?php echo $data[0]; ?></td>
                               <td><?php echo $data[1]; ?></td>
                               <td><?php echo $data[2]; ?></td>
                               <td><?php echo $data[3]; ?></td>
                               <td><?php echo $data[4]; ?></td>
                               <td><?php echo $data[5]; ?></td>
                                    
                             
                               <td><a href="pages-profile.php?reg_id=<?php echo $data[0]; ?>">Edit</a></td>
                               <td><a href="delete_master1.php?reg_id=<?php echo $data[0]; ?>">Delete</a></td>
                           </tr>
                          </table>
                           <?php
                        }
                        
                    ?>
                    <a href="pdf_master.php?user" class="btn ntn-info">Export PDF</a>
                    </div>
<?php include'common/footer.php'; ?>