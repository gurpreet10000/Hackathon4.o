<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();

extract(array_map("test_input" , $_GET));

$q= $d->select('regform','reg_id='.$reg_id);
$data= mysqli_fetch_array($q);
                        

?>
 <form method="post" enctype="multipart/form-data" action="update_master.php">
	   <fieldset >
	       <legend>Registration Form</legend>
               <table>
                   <tr>
                       <td> <input type="hidden"  name="reg_id" value="<?php echo $data[0]; ?>"  /></td>
                   </tr>
                   <tr>
                       <td>First Name :</td>
                       <td> <input type="text" name="fname" value="<?php echo $data[1]; ?>" placeholder="First Name" /></td>
                   </tr>
                   <tr>
                       <td> Last Name :</td>
                       <td><input type="text" name="lname" value="<?php echo $data[2]; ?>" placeholder="Last Name"/></td>
                   </tr>
                   <tr>
                       <td>Gender :</td>
                       <td> 
                       <?php
                         if ($data['3'] == 'male')
                        {
                            echo "<input type='radio' name='r1' value='male'  checked> Male <input type='radio' name='r1' value='female' > Female ";
                        }
                        else
                        {
                            echo "<input type='radio' name='r1' value='male'> Male <input type='radio' name='r1' value='female' checked> Female ";
                        } 
                        ?>
   
                       
                       </td> 
                   </tr>
                   <tr>
                       <td>Email ID :</td>
                       <td><input type="email" value="<?php echo $data[4]; ?>" name="email" placeholder="Email ID" /></td>
                   </tr>
                   <tr>
                       <td>Password :</td>
                       <td><input type="password" name="pwd" value="<?php echo $data[5]; ?>" placeholder="Password"/></td>
                   </tr>
                   <tr>
                       <td>Confirm Password : </td>
                       <td><input type="password" name="cpwd" /></td>
                   </tr>
                   <tr>
                       <td>Address : </td>
                       <td><input value="<?php echo $data[7]; ?>" type="textarea" cols="5" rows="6" name="address"/></td>
                   </tr>
                   <tr>
                       <td>Date Of Birth :</td>
                       <td><input type="date" name="dob" value="<?php echo $data[8]; ?>" /></td>
                   </tr>
                   <tr>
                       <td>Security Question :</td>
                       <td> <select name="seq" >
			        <option>What Is Your Nick name.</option>
				<option>What Is Your  Book?</option>
				<option>What Is Your Place?</option> 
			 </select></td>
                   </tr>
                   <tr>
                       <td>Security Answer :</td>
                       <td><input type="text" name="sn" value="<?php echo $data['reg_secans']; ?>"/> </td>
                   </tr>
                   <tr>
                       <td>Contact No :</td>
                       <td><input type="number" name="cno" value="<?php echo $data['reg_mobileno']; ?>"/> </td>
                   </tr>
                 <tr>
                    <th align="left">Hobby</th>
                    <td>
                        
                        
                        <?php
                         if ($data['reg_hobby'] == 'reading' )
                        {
                            echo "<input type='checkbox' name='hobby[]' value='reading'  checked> Reading <input type='checkbox' name='hobby[]' value='tennis'  > Tennis <input type='checkbox' name='hobby[]' value='cooking'> Cooking
                      ";
                        }
                        elseif ($data['reg_hobby'] == 'tennis' )
                        {
                              echo "<input type='checkbox' name='hobby[]' value='reading' > Reading <input type='checkbox' name='hobby[]' value='tennis'  checked> Tennis <input type='checkbox' name='hobby[]' value='cooking'> Cooking ";
                        } 
                         elseif ($data['reg_hobby'] == 'cooking' )
                        {
                              echo "<input type='checkbox' name='hobby[]' value='reading' > Reading <input type='checkbox' name='hobby[]' value='tennis'  > Tennis <input type='checkbox' name='hobby[]' value='cooking' checked> Cooking ";
                        }
                        elseif ($data['reg_hobby'] == 'reading,tennis,cooking' )
                        {
                              echo "<input type='checkbox' name='hobby[]' value='reading' checked> Reading <input type='checkbox' name='hobby[]' value='tennis'  checked> Tennis <input type='checkbox' name='hobby[]' value='cooking' checked> Cooking ";
                        }
                         elseif ($data['reg_hobby'] == 'reading,tennis' )
                        {
                              echo "<input type='checkbox' name='hobby[]' value='reading' checked> Reading <input type='checkbox' name='hobby[]' value='tennis'  checked> Tennis <input type='checkbox' name='hobby[]' value='cooking' > Cooking ";
                        }
                         elseif ($data['reg_hobby'] == 'reading,cooking' )
                        {
                              echo "<input type='checkbox' name='hobby[]' value='reading' checked> Reading <input type='checkbox' name='hobby[]' value='tennis'  > Tennis <input type='checkbox' name='hobby[]' value='cooking' checked> Cooking ";
                        }
                         elseif ($data['reg_hobby'] == 'tennis,cooking' )
                        {
                              echo "<input type='checkbox' name='hobby[]' value='reading' > Reading <input type='checkbox' name='hobby[]' value='tennis'  checked> Tennis <input type='checkbox' name='hobby[]' value='cooking' checked> Cooking ";
                        }
                         elseif ($data['reg_hobby'] == '' )
                        {
                              echo "<input type='checkbox' name='hobby[]' value='reading' > Reading <input type='checkbox' name='hobby[]' value='tennis'  > Tennis  ";
                        }
                        ?>
                        
                       
                    
               
               </td>
                </tr>
                <tr>
                    <th align="left">Photo</th>
                    <td>
                     <input type="file" name="file" id="file" >
               
               </td>
                </tr>
                   <tr>
                       <td><input type="submit" value="submit" name="update_reg" /> 
			 <input type="reset"  value="Reset" /> 
			 </td>
                       
                   </tr>
                   
               </table>
	   </fieldset>
	</form>
