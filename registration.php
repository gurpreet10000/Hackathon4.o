<html>
<head>
<title>Registration Form</title>
</head>

<body>

    <form method="post" enctype="multipart/form-data" action="insert_master.php">
	   <fieldset >
	       <legend>Registration Form</legend>
               <table>
                   <tr>
                       <td>First Name :</td>
                       <td> <input type="text" name="fname" placeholder="First Name" /></td>
                   </tr>
                   <tr>
                       <td> Last Name :</td>
                       <td><input type="text" name="lname" placeholder="Last Name"/></td>
                   </tr>
                   <tr>
                       <td>Gender :</td>
                       <td> <input type="radio"  name="r1" value="male"/>Male
                           <input type="radio"  name="r1" value="female"/>Female</td> 
                   </tr>
                   <tr>
                       <td>Email ID :</td>
                       <td><input type="email" name="email" placeholder="Email ID" /></td>
                   </tr>
                   <tr>
                       <td>Password :</td>
                       <td><input type="password" name="pwd" placeholder="Password"/></td>
                   </tr>
                   <tr>
                       <td>Confirm Password : </td>
                       <td><input type="password" name="cpwd" /></td>
                   </tr>
                   <tr>
                       <td>Address : </td>
                       <td><input type="textarea" cols="5" rows="6" name="address"/></td>
                   </tr>
                   <tr>
                       <td>Date Of Birth :</td>
                       <td><input type="date" name="dob" /></td>
                   </tr>
                   <tr>
                       <td>Security Question :</td>
                       <td> <select name="seq" multiple="multiple">
			        <option>What Is Your Nick name.</option>
				<option>What Is Your  Book?</option>
				<option>What Is Your Place?</option> 
			 </select></td>
                   </tr>
                   <tr>
                       <td>Security Answer :</td>
                       <td><input type="text" name="sn" /> </td>
                   </tr>
                   <tr>
                       <td>Contact No :</td>
                       <td><input type="number" name="cno" /> </td>
                   </tr>
                   <tr>
                       <td>Hobby :</td>
                       <td><input type="checkbox" name="hobby[]" value="reading" > Reading
      
                        <input type="checkbox" name="hobby[]" value="tennis"> Tennis
                        <input type="checkbox" name="hobby[]" value="cooking"> Cooking</td>
                   </tr>
                    <tr>
                    <th align="left">Photo</th>
                    <td>
                     <input type="file" name="file" id="file" >
               
               </td>
                </tr>
                   <tr>
                       <td><input type="submit" value="submit" name="submit" /> 
			 <input type="reset"  value="Reset" /> 
			 </td>
                       
                   </tr>
                   
               </table>
	   </fieldset>
	</form>
</body>
</html>
        

