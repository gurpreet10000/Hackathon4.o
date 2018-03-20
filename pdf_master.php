<?php

if(isset($_GET['role'])){
if (!function_exists('generate_pdf_UserDetails')) {

    function generate_pdf_UserDetails() {
        include_once 'lib/dao.php';

        $d = new dao();

       // $s = $v->select('state,city','state.state_id=city.state_id and state.active_flag=0=city.active_flag=0 ');
        $s = $d->select('role','active_flag=0');

        //$ary = mysql_fetch_array($s);
        //extract($ary);

        ob_start();
        ?>
        <html>
            <body >
                <style>
                    body{margin:0;padding:50px;}
                    td,th{padding:8px;}
                    span{font-weight:bold; display:block; text-align:left;}
                </style>
                <table width="1024" border="1" cellspacing="-1" bgcolor="#CCCCFF">
                    <tr>
                        <td colspan="4" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h4>User Details</h4></strong></p></td>
                    </tr>
                    <tr>
                <th>Role Type</th>
                <th>Created</th>
                    </tr>
                    
                                            <?php  while($data= mysqli_fetch_array($s))   {  ?>
                    <tr>
                        
                                                <td><?php echo $data['role']; ?></td>
                                                <td><?php echo $data['created_date']; ?></td>
                                                
                                        </tr>
                                        <?php } ?>
                    
                </table>

            </body>
        </html>
        <?php
        $return = ob_get_contents();
        ob_end_clean();
        return $return;
    }

}
$content = generate_pdf_UserDetails();
if (!$content)
    die('Invalid User ID');
require_once('PDF/html2pdf.class.php');
ob_start();
$html2pdf = new HTML2PDF('P', 'A3', 'en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('role_type.pdf');
echo $content;
}
if(isset($_GET['user'])){
if (!function_exists('generate_pdf_UserDetails')) {

    function generate_pdf_UserDetails() {
        include_once 'lib/dao.php';

        $d = new dao();

       // $s = $v->select('state,city','state.state_id=city.state_id and state.active_flag=0=city.active_flag=0 ');
        $s = $d->select('users','active_flag=0');

        //$ary = mysql_fetch_array($s);
        //extract($ary);

        ob_start();
        ?>
        <html>
            <body >
                <style>
                    body{margin:0;padding:50px;}
                    td,th{padding:8px;}
                    span{font-weight:bold; display:block; text-align:left;}
                </style>
                <table width="1024" border="1" cellspacing="-1" bgcolor="#CCCCFF">
                    <tr>
                        <td colspan="8" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h4>Admin Details</h4></strong></p></td>
                    </tr>
                    <tr>
                <th>Reg_ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role_id</th>
                <th>Username</th>
                <th>File</th>
                <th>Created Date</th>
                <th>Updated Date</th>
                    </tr>
                    
                                            <?php  while($data= mysqli_fetch_array($s))   {  ?>
                    <tr>
                        
                                                <td><?php echo $data['reg_id']; ?></td>
                                                <td><?php echo $data['name']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['role_id']; ?></td>
                                                <td><?php echo $data['username']; ?></td>
                                                <td><?php echo $data['file']; ?></td>
                                                <td><?php echo $data['date']; ?></td>
                                                <td><?php echo $data['updated_date']; ?></td>
                                                
                                        </tr>
                                        <?php } ?>
                    
                </table>

            </body>
        </html>
        <?php
        $return = ob_get_contents();
        ob_end_clean();
        return $return;
    }

}
$content = generate_pdf_UserDetails();
if (!$content)
    die('Invalid User ID');
require_once('PDF/html2pdf.class.php');
ob_start();
$html2pdf = new HTML2PDF('P', 'A3', 'en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('users.pdf');
echo $content;
}

if(isset($_GET['company'])){
if (!function_exists('generate_pdf_UserDetails')) {

    function generate_pdf_UserDetails() {
        include_once 'lib/dao.php';

        $d = new dao();

       // $s = $v->select('state,city','state.state_id=city.state_id and state.active_flag=0=city.active_flag=0 ');
        $s = $d->select('company','activeflag=0');

        //$ary = mysql_fetch_array($s);
        //extract($ary);

        ob_start();
        ?>
        <html>
            <body >
                <style>
                    body{margin:0;padding:50px;}
                    td,th{padding:8px;}
                    span{font-weight:bold; display:block; text-align:left;}
                </style>
                <table width="1024" border="1" cellspacing="-1" bgcolor="#CCCCFF">
                    <tr>
                        <td colspan="9" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h4> Details</h4></strong></p></td>
                    </tr>
                    <tr>
                <th>Company_ID</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Conatct Person</th>
                <th>Contact No</th>
                <th>Address</th>
                <th>Username</th>
                <th>Logo</th>
                <th>created Date</th>
                    </tr>
                    
                                            <?php  while($data= mysqli_fetch_array($s))   {  ?>
                    <tr>
                        
                                                <td><?php echo $data['c_id']; ?></td>
                                                <td><?php echo $data['cname']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['cperson']; ?></td>
                                                <td><?php echo $data['contactno']; ?></td>
                                                <td><?php echo $data['address']; ?></td>
                                                <td><?php echo $data['username']; ?></td>
                                                <td><?php echo $data['file']; ?></td>
                                                <td><?php echo $data['ttime']; ?></td>
                                                
                                        </tr>
                                        <?php } ?>
                    
                </table>

            </body>
        </html>
        <?php
        $return = ob_get_contents();
        ob_end_clean();
        return $return;
    }

}
$content = generate_pdf_UserDetails();
if (!$content)
    die('Invalid User ID');
require_once('PDF/html2pdf.class.php');
ob_start();
$html2pdf = new HTML2PDF('P', 'A3', 'en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('company.pdf');
echo $content;
}
if(isset($_GET['product'])){
if (!function_exists('generate_pdf_UserDetails')) {

    function generate_pdf_UserDetails() {
        include_once 'lib/dao.php';

        $d = new dao();

       // $s = $v->select('state,city','state.state_id=city.state_id and state.active_flag=0=city.active_flag=0 ');
        $s = $d->select('product','active_flag=0');

        //$ary = mysql_fetch_array($s);
        //extract($ary);

        ob_start();
        ?>
        <html>
            <body >
                <style>
                    body{margin:0;padding:50px;}
                    td,th{padding:8px;}
                    span{font-weight:bold; display:block; text-align:left;}
                </style>
                <table width="1024" border="1" cellspacing="-1" bgcolor="#CCCCFF">
                    <tr>
                        <td colspan="5" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h4>Product Details</h4></strong></p></td>
                    </tr>
                    <tr>
                <th>product Id</th>
                <th>Product Name</th>
                <th>Product</th>
                <th>Image</th>
                <th>Created Date</th>
                    </tr>
                    
                                            <?php  while($data= mysqli_fetch_array($s))   {  ?>
                    <tr>
                        
                                                <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['pname']; ?></td>
                                                <td><?php echo $data['product']; ?></td>
                                                <td><?php echo $data['image']; ?></td>
                                                <td><?php echo $data['tdate']; ?></td>
                                                
                                        </tr>
                                        <?php } ?>
                    
                </table>

            </body>
        </html>
        <?php
        $return = ob_get_contents();
        ob_end_clean();
        return $return;
    }
}
$content = generate_pdf_UserDetails();
if (!$content)
    die('Invalid User ID');
require_once('PDF/html2pdf.class.php');
ob_start();
$html2pdf = new HTML2PDF('P', 'A3', 'en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('product.pdf');
echo $content;
}
if(isset($_GET['approvecompany'])){
if (!function_exists('generate_pdf_UserDetails')) {

    function generate_pdf_UserDetails() {
        include_once 'lib/dao.php';

        $d = new dao();

       // $s = $v->select('state,city','state.state_id=city.state_id and state.active_flag=0=city.active_flag=0 ');
        $s = $d->select('company','active_flag=0');

        //$ary = mysql_fetch_array($s);
        //extract($ary);

        ob_start();
        ?>
        <html>
            <body >
                <style>
                    body{margin:0;padding:50px;}
                    td,th{padding:8px;}
                    span{font-weight:bold; display:block; text-align:left;}
                </style>
                <table width="1024" border="1" cellspacing="-1" bgcolor="#CCCCFF">
                    <tr>
                        <td colspan="6" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h4>Companies Account Approval Requests</h4></strong></p></td>
                    </tr>
                    <tr>
                <th>Logo</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Contact Person</th>
                <th>Contact No.</th>
                <th>Username</th>
                    </tr>
                    
                                            <?php  while($data= mysqli_fetch_array($s))   {  ?>
                    <tr>
                                                <td><?php echo $data['file']; ?></td>
                                                <td><?php echo $data['cname']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['cperson']; ?></td>
                                                <td><?php echo $data['contactno']; ?></td>
                                                <td><?php echo $data['username']; ?></td>
                                                
                                        </tr>
                                        <?php } ?>
                    
                </table>

            </body>
        </html>
        <?php
        $return = ob_get_contents();
        ob_end_clean();
        return $return;
    }
}
$content = generate_pdf_UserDetails();
if (!$content)
    die('Invalid User ID');
require_once('PDF/html2pdf.class.php');
ob_start();
$html2pdf = new HTML2PDF('P', 'A3', 'en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('product.pdf');
echo $content;
}
if(isset($_GET['approveuser'])){
if (!function_exists('generate_pdf_UserDetails')) {

    function generate_pdf_UserDetails() {
        include_once 'lib/dao.php';

        $d = new dao();

       // $s = $v->select('state,city','state.state_id=city.state_id and state.active_flag=0=city.active_flag=0 ');
        $s = $d->select('users','active_flag=0');

        //$ary = mysql_fetch_array($s);
        //extract($ary);

        ob_start();
        ?>
        <html>
            <body >
                <style>
                    body{margin:0;padding:50px;}
                    td,th{padding:8px;}
                    span{font-weight:bold; display:block; text-align:left;}
                </style>
                <table width="1024" border="1" cellspacing="-1" bgcolor="#CCCCFF">
                    <tr>
                        <td colspan="6" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h4>Companies Account Approval Requests</h4></strong></p></td>
                    </tr>
                    <tr>
                <th>Profile Picture</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Created Date</th>
                    </tr>
                    
                                            <?php  while($data= mysqli_fetch_array($s))   {  ?>
                    <tr>
                                                <td><img src="img/<?php echo $data['file']; ?>"></td>
                                                <td><?php echo $data['name']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['username']; ?></td>
                                                <td><?php echo $data['date']; ?></td>
                                                
                                        </tr>
                                        <?php } ?>
                    
                </table>

            </body>
        </html>
        <?php
        $return = ob_get_contents();
        ob_end_clean();
        return $return;
    }
}
$content = generate_pdf_UserDetails();
if (!$content)
    die('Invalid User ID');
require_once('PDF/html2pdf.class.php');
ob_start();
$html2pdf = new HTML2PDF('P', 'A3', 'en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('product.pdf');
echo $content;
}
if(isset($_GET['approvecart'])){
if (!function_exists('generate_pdf_UserDetails')) {

    function generate_pdf_UserDetails() {
        include_once 'lib/dao.php';

        $d = new dao();

       // $s = $v->select('state,city','state.state_id=city.state_id and state.active_flag=0=city.active_flag=0 ');
        $s = $d->select('cart');

        //$ary = mysql_fetch_array($s);
        //extract($ary);

        ob_start();
        ?>
        <html>
            <body >
                <style>
                    body{margin:0;padding:50px;}
                    td,th{padding:8px;}
                    span{font-weight:bold; display:block; text-align:left;}
                </style>
                <table width="1024" border="1" cellspacing="-1" bgcolor="#CCCCFF">
                    <tr>
                        <td colspan="4" style="text-align:center;"><p style="word-wrap:break-word; width:100px;"><strong><h4>Companies Account Approval Requests</h4></strong></p></td>
                    </tr>
                    <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Product / Service</th>
                <th>Return Date</th>
                    </tr>
                    
                                            <?php  while($data= mysqli_fetch_array($s))   {  ?>
                    <tr>
                                                <td><?php echo $data['username']; ?></td>
                                                <td><?php echo $data['email']; ?></td>   
                                                <td><?php echo $data['product']; ?></td>
                                                <td><?php echo $data['r_date']; ?></td>                     
                                        </tr>
                                        <?php } ?>
                    
                </table>

            </body>
        </html>
        <?php
        $return = ob_get_contents();
        ob_end_clean();
        return $return;
    }
}
$content = generate_pdf_UserDetails();
if (!$content)
    die('Invalid User ID');
require_once('PDF/html2pdf.class.php');
ob_start();
$html2pdf = new HTML2PDF('P', 'A3', 'en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('product.pdf');
echo $content;
}
?>