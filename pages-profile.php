<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();

extract(array_map("test_input" , $_GET));

$q= $d->select('users','reg_id='.$reg_id);
$data= mysqli_fetch_array($q);
                        

?>
 <form method="post" action="update_master.php">
	   <fieldset >
	       <legend>Registration Form</legend>
               <table>
                   <tr>
                       <td> <input type="hidden"  name="reg_id" value="<?php echo $data[0]; ?>"  /></td>
                   </tr>
                   <tr>
                       <td>First Name :</td>
                       <td> <input type="text" name="name" value="<?php echo $data[1]; ?>" placeholder="Name" /></td>
                   </tr>
                   <tr>
                       <td>Email ID :</td>
                       <td><input type="email" value="<?php echo $data[2]; ?>" name="email" placeholder="Email ID" /></td>
                   </tr>
                   <tr>
                        <td>Username</td>
                        <td><input type="text" value="<?php echo $data[3]; ?>" name="username" placeholder="Username"></td>
                   </tr>
                   <tr>
                       <td>Password :</td>
                       <td><input type="password" name="password" value="<?php echo $data[4]; ?>" placeholder="Password"/></td>
                   </tr>
                       <td>Photo : </td>
                       <td><input type="file" name="file" value="<?php echo $data[5] ?>;" placeholder="Profile Image"></td>
                   <tr>
                       <td><input type="submit" value="submit" name="update_reg" /> 
			 <input type="reset"  value="Reset" /> 
			 </td>
                       
                   </tr>
                   
               </table>
	   </fieldset>
	</form>
