<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
 

     $a1;
     if(isset($_POST["reg_admin"]))
     {
        extract(array_map("test_input" , $_POST));
        
            $imagetype=$_FILES["file"]['type'];
            $imagesize=$_FILES["file"]['size'];
            $image_Arr = $_FILES['file'];
            
            move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
            $file_name = $image_Arr['name'];
        
        session_start();
        $_SESSION['email'] = $email;

        $m->set_data('name',$name);
        $m->set_data('email',$email);
        $m->set_data('role_id',$role_id);
        $m->set_data('username',$username);
        $m->set_data('password',$password);
        $m->set_data('file_name',$file_name);
        $m->set_data('active_flag',$active_flag);

       
        
        $a1= array ('name'=> $m->get_data('name'),
                    'email'=> $m->get_data('email'),
                    'role_id'=>$m->get_data('role_id'),
                    'username'=> $m->get_data('username'),
                    'password'=> $m->get_data('password'),
                    'file'=>$m->get_data('file_name'),
                    'active_flag'=>$m->get_data('active_flag'));
        
        // print_r($a1);
       $insert=$d->insert('users',$a1); 
    if($insert>0)
    {
        header("location:pages-signin.php?msg=Inserted.");
    }
    else {
        header("location:pages-signup.php?msg=Not Inserted.");
        
     }
    }

    else if(isset($_POST["reg_company"]))
    {
        extract(array_map("test_input" , $_POST));

        $imagetype=$_FILES["photo"]['type'];
        $imagesize=$_FILES["photo"]['size'];
        $image_Arr = $_FILES['photo'];
            
        move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
        $file_name = $image_Arr['name'];


        $m->set_data('cname',$cname);
        $m->set_data('email',$email);
        $m->set_data('cperson',$cperson);
        $m->set_data('contactno',$contactno);
        $m->set_data('address',$address);
        $m->set_data('username',$username);
        $m->set_data('password',$password);
        $m->set_data('file_name',$file_name);
        $m->set_data('active_flag',$active_flag);

    $a1 = array('cname'=>$m->get_data('cname'),
                'email'=>$m->get_data('email'),
                'cperson'=>$m->get_data('cperson'),
                'contactno'=>$m->get_data('contactno'),
                'address'=>$m->get_data('address'),
                'username'=>$m->get_data('username'),
                'password'=>$m->get_data('password'),
                'file'=>$m->get_data('file_name'),
                'active_flag'=>$m->get_data('active_flag'));

           $insert=$d->insert('members',$a1); 
    if($insert>0)
    {
        header("location:pages-companysignin.php?msg=Inserted.");
    }
    else {
        header("location:pages-companysignup.php?msg=Not Inserted.");

     }
    }
else if(isset($_POST['reg_product']))
{
    extract(array_map("test_input" , $_POST));

            $imagetype=$_FILES["file"]['type'];
            $imagesize=$_FILES["file"]['size'];
            $image_Arr = $_FILES['file'];
            
            move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
            $file_name = $image_Arr['name'];

    $m->set_data('pname',$pname);
    $m->set_data('brand',$brand);
    $m->set_data('file_name',$file_name);

    $a1 = array('pname'=>$m->get_data('pname'),
                'product'=>$m->get_data('brand'),
                'image'=>$m->get_data('file_name'));

    $insert=$d->insert('product',$a1);

    if($insert>0)
    {
        header("location:productadd.php?msg=product Added");
    }
    else
    {
        header("location:pages-signup.php?msg=not inserted");
    }
}
else if(isset($_POST['reg_service']))
{
    extract(array_map("test_input" , $_POST));

            $imagetype=$_FILES["file"]['type'];
            $imagesize=$_FILES["file"]['size'];
            $image_Arr = $_FILES['file'];
            
            move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
            $file_name = $image_Arr['name'];

    $m->set_data('sname',$sname);
    $m->set_data('file_name',$file_name);

    $a1 = array('sname'=>$m->get_data('sname'),
                'image'=>$m->get_data('file_name'));

    $insert=$d->insert('services',$a1);

    if($insert>0)
    {
        header("location:services.php?msg=product Added");
    }
    else
    {
        header("location:services.php?msg=not inserted");
    }
}
else if(isset($_POST['reg_service']))
{
    session_start();
    extract(array_map("test_input" , $_POST));

    $m->set_data('sname',$sname);
    $m->set_data('file_name',$file_name);

    $a1 = array('sname'=>$m->get_data('sname'),
                'image'=>$m->get_data('file_name'));

    $insert=$d->insert('services',$a1);

    if($insert>0)
    {
        header("location:services.php?msg=product Added");
    }
    else
    {
        header("location:services.php?msg=not inserted");
    }
}
    else if(isset($_POST["send"]))
     {
        extract(array_map("test_input" , $_POST));

            session_start();
        if( isset($_SESSION['username'])==false)
        {
          header("location:pages-signin.php?msg1=Login First");
            }
            $file = $_SESSION['file']; 

            $by1 = $_SESSION['username'];

        $m->set_data('message',$message);
        $m->set_data('name',$name);
        $m->set_data('file',$file);
        $m->set_data('by1',$by1);

        $a1= array ('message'=> $m->get_data('message'),
                    'name'=>$m->get_data('name'),
                    'image'=>$m->get_data('file'),
                    'by1'=>$m->get_data('by1'));
        
        // print_r($a1);
       $insert=$d->insert('message',$a1); 
    if($insert>0)
    {
        header("location:messages.php?msg=Inserted.");
    }
    else {
        header("location:message.php?msg=Not Inserted.");

     }
    }
 else if(isset($_POST["feedback"]))
     {
        extract(array_map("test_input" , $_POST));

        $m->set_data('name',$name);
        $m->set_data('email',$email);
        $m->set_data('subject',$subject);
        $m->set_data('comments',$comments);

        $a1= array ('name'=>$m->get_data('name'),
                    'email'=>$m->get_data('email'),
                    'subject'=>$m->get_data('subject'),
                    'comments'=>$m->get_data('comments'));
        
        // print_r($a1);
       $insert=$d->insert('feedback',$a1); 
    if($insert>0)
    {
        header("location:feedback.php?msg=Inserted.");
    }
    else {
        header("location:feedback.php?msg=Not Inserted.");

     }
    }
else if(isset($_POST['role_add']))
{
    session_start();
    extract(array_map("test_input" , $_POST));

    $m->set_data('role',$role);

    $a1 = array('role'=>$m->get_data('role'));

    $insert=$d->insert('role',$a1);

    if($insert>0)
    {
        header("location:role.php?msg=Role Added");
    }
    else
    {
        header("location:role.php?msg= Role not inserted");
    }
}
else if(isset($_POST['upload']))
{
    extract(array_map("test_input" , $_POST));

            $imagetype=$_FILES["file"]['type'];
            $imagesize=$_FILES["file"]['size'];
            $image_Arr = $_FILES['file'];
            
            move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
            $file_name = $image_Arr['name'];

    $m->set_data('file_name',$file_name);
    $m->set_data('title',$title);

    $a1 = array('image'=>$m->get_data('file_name'),
                'title'=>$m->get_data('title'));

    $insert=$d->insert('gallery',$a1);

    if($insert>0)
    {
        header("location:gallery.php?msg=Image Uploaded");
    }
    else
    {
        header("location:gallery.php?msg=Please Try Again");
    }
}
else if(isset($_POST['send_query']))
{
    extract(array_map("test_input" , $_POST));

            $imagetype=$_FILES["document"]['type'];
            $imagesize=$_FILES["document"]['size'];
            $image_Arr = $_FILES['document'];
            
            move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
            $file_name = $image_Arr['name'];

            session_start();
            $name = $_SESSION['username'];
            $email = $_SESSION['email'];


    $m->set_data('name',$name);
    $m->set_data('email',$email);
    $m->set_data('title',$title);
    $m->set_data('description',$description);        
    $m->set_data('file_name',$file_name);
    $m->set_data('active_flag',$active_flag);

    $a1 = array('name'=>$m->get_data('name'),
                'email'=>$m->get_data('email'),
                'title'=>$m->get_data('title'),
                'description'=>$m->get_data('description'),
                'file'=>$m->get_data('file_name'),
                'active_flag'=>$m->get_data('active_flag'));

    $insert=$d->insert('post_query',$a1);

    if($insert>0)
    {
        header("location:post-queries.php?msg=Query Posted");
    }
    else
    {
        header("location:post-queries.php?msg1=Please Try Again");
    }
}
else if(isset($_POST['questions']))
{
    extract(array_map("test_input" , $_POST));

    $m->set_data('question',$question);

    $a1 = array('question'=>$m->get_data('question'));

    $insert=$d->insert('faq',$a1);

    if($insert>0)
    {
        header("location:pages-faq.php?msg=Question Submitted");
    }
    else
    {
        header("location:pages-faq.php?msg1=Please Try Again");
    }
}
else if(isset($_POST['booking']))
{
    extract(array_map("test_input" , $_POST));

    session_start();
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];

    $m->set_data('username',$username);
    $m->set_data('email',$email);
    $m->set_data('pname',$pname);
    $m->set_data('date',$date);
    $m->set_data('active_flag',$active_flag);

    $a1 = array('username'=>$m->get_data('username'),
                'email'=>$m->get_data('email'),
                'product'=>$m->get_data('pname'),
                'r_date'=>$m->get_data('date'),
                'active_flag'=>$m->get_data('active_flag'));


    $insert=$d->insert('cart',$a1);
    if($insert>0)
    {
        header("location:bookings.php?msg=Product Registered");
    }
    else
    {
        header("location:bookings.php?msg1=Please Try Again");
    }
}
else if(isset($_POST['booking1']))
{
    extract(array_map("test_input" , $_POST));

    session_start();
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];

    $m->set_data('username',$username);
    $m->set_data('email',$email);
    $m->set_data('s_id',$s_id);
    $m->set_data('date',$date);
    $m->set_data('active_flag',$active_flag);

    $a1 = array('username'=>$m->get_data('username'),
                'email'=>$m->get_data('email'),
                'product'=>$m->get_data('s_id'),
                'r_date'=>$m->get_data('date'),
                'active_flag'=>$m->get_data('active_flag'));


    $insert=$d->insert('cart',$a1);
    if($insert>0)
    {
        header("location:bookings.php?msg=Service Registered");
    }
    else
    {
        header("location:bookings.php?msg1=Please Try Again");
    }
}
else if(isset($_POST['upload1']))
{
    extract(array_map("test_input" , $_POST));

            $imagetype=$_FILES["file"]['type'];
            $imagesize=$_FILES["file"]['size'];
            $image_Arr = $_FILES['file'];
            
            move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
            $file_name = $image_Arr['name'];


    $m->set_data('title',$title);    
    $m->set_data('url',$url);  
    $m->set_data('file_name',$file_name);
    $m->set_data('description',$description);  

    $a1 = array('title'=>$m->get_data('title'),
                'url'=>$m->get_data('url'),
                'file'=>$m->get_data('file_name'),
                'description'=>$m->get_data('description'));

    $insert=$d->insert('advertisemenet',$a1);

    if($insert>0)
    {
        header("location:advertisement.php?msg=Ad Posted");
    }
    else
    {
        header("location:advertisement.php?msg1=Please Try Again");
    }
}
else if(isset($_POST['addnews']))
{
    extract(array_map("test_input" , $_POST));


    $m->set_data('title',$title);    
    $m->set_data('description',$description);  

    $a1 = array('title'=>$m->get_data('title'),
                'description'=>$m->get_data('description'));

    $insert=$d->insert('news',$a1);

    if($insert>0)
    {
        header("location:news.php?msg=News Posted");
    }
    else
    {
        header("location:news.php?msg1=Please Try Again");
    }
}
else if(isset($_POST['addfacility']))
{
    extract(array_map("test_input" , $_POST));

     $imagetype=$_FILES["file"]['type'];
            $imagesize=$_FILES["file"]['size'];
            $image_Arr = $_FILES['file'];
            
            move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
            $file_name = $image_Arr['name'];
  
    $m->set_data('fname',$fname); 
    $m->set_data('file_name',$file_name); 

    $a1 = array('fname'=>$m->get_data('fname'),
                'photo'=>$m->get_data('file_name'));

    $insert=$d->insert('facilities',$a1);

    if($insert>0)
    {
        header("location:facilities.php?msg=Facility Added");
    }
    else
    {
        header("location:facilities.php?msg1=Please Try Again");
    }
}
 else if(isset($_POST["book"]))
     {
        extract(array_map("test_input" , $_POST));

        $m->set_data('cname',$cname);
        $m->set_data('etitle',$etitle);
        $m->set_data('edate',$edate);
        $m->set_data('etime',$etime);
        $m->set_data('amount',$amount);

        $a1= array ('cname'=>$m->get_data('cname'),
                    'etitle'=>$m->get_data('etitle'),
                    'edate'=>$m->get_data('edate'),
                    'etime'=>$m->get_data('etime'),
                    'amount'=>$m->get_data('amount'));
        
       $insert=$d->insert('booking',$a1); 
    if($insert>0)
    {
        header("location:bookings1.php?msg=Details send");
    }
    else {
        header("location:bookings1.php?msg=Please try again");

    }
    }
?>

