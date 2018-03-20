<?php
include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
$a1;

	//update register table
	if(isset($_POST["update_reg"]))
     {
        extract(array_map("test_input" , $_POST));
        
        $imagetype=$_FILES["file"]['type'];
        $imagesize=$_FILES["file"]['size'];
        $image_Arr = $_FILES['file'];	

        move_uploaded_file($image_Arr['tmp_name'],'images/'.$image_Arr['name']);
        $file_name = $image_Arr['name'];
        
        
       	$m->set_data('name',$name);
        $m->set_data('email',$email);
        $m->set_data('username',$username);
        $m->set_data('password',$password);
        $m->set_data('file',$file_name); 
        
        
        $a1= array ('name'=> $m->get_data('name'),
            'email'=> $m->get_data('email'),
            'username'=>$m->get_data('username'),
            'password'=> $m->get_data('password'),
            'file'=> $m->get_data('file_name'));

        // print_r($a1);
       $update=$d->update("users",$a1 ,"reg_id='$reg_id'"); 
	    if($update>0)
	    {
	        header('location:view.php?msg=Updated');
	    }
		else {
		        header('location:view.php?msg1=not update');

		}
    }

    //start here if new table update

else if(isset($_POST["feedback_update"]))
     {
        extract(array_map("test_input" , $_POST));
        
        $m->set_data('name',$name);
        $m->set_data('email',$email);
        $m->set_data('subject',$subject);
        $m->set_data('comments',$comments);
        
        
        $a1= array ('name'=> $m->get_data('name'),
            'email'=> $m->get_data('email'),
            'subject'=>$m->get_data('subject'),
            'comments'=> $m->get_data('comments'));

        // print_r($a1);
       $update=$d->update("feedback",$a1 ,"name='$name'"); 
        if($update>0)
        {
            header('location:feedback.php?msg=Updated');
        }
        else {
                header('location:feedback.php?msg1=not update');

        }
    }
else if(isset($_POST["update_image"]))
     {
        extract(array_map("test_input" , $_POST));
        
        $imagetype=$_FILES["file"]['type'];
        $imagesize=$_FILES["file"]['size'];
        $image_Arr = $_FILES['file'];
            
        move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
        $file_name = $image_Arr['name'];

        $m->set_data('file_name',$file_name);
        
        $a1= array ('file'=> $m->get_data('file_name'));

        // print_r($a1);
        session_start();
        $username = $_SESSION['username'];
        $update=$d->update("users",$a1,"username='$username'"); 
        if($update>0)
        {
            header('location:account.php?msg=Image Updated');
        }
        else {
                header('location:account.php?msg1=Image not changed');

        }
    }
else if(isset($_POST["update_password"]))
     {
        extract(array_map("test_input" , $_POST));

        $m->set_data('password',$password);
        
        $a1= array ('password'=> $m->get_data('password'));

        // print_r($a1);
        session_start();
        $username = $_SESSION['username'];
        $update=$d->update("users",$a1 ,"username='$username'"); 
        if($update>0)
        {
            header('location:account.php?msg=Password Updated');
        }
        else {
                header('location:account.php?msg1=Password not changed');

        }
    }
else if(isset($_POST["update_email"]))
     {
        extract(array_map("test_input" , $_POST));

        $m->set_data('email',$email);
        
        $a1= array ('email'=> $m->get_data('email'));

        // print_r($a1);
        session_start();
        $username = $_SESSION['username'];
        $update=$d->update("users",$a1 ,"username='$username'"); 
        if($update>0)
        {
            header('location:account.php?msg=EmailID Updated');
        }
        else {
                header('location:account.php?msg1=EmailID not changed');

        }
    }
else if(isset($_GET["reply"]))
{
    extract(array_map("test_input" , $_GET));

    $m->set_data('answer',$answer);

    $a1 = array('answer'=> $m->get_data('answer'));

    print_r($a1);

    $update=$d->update("faq",$a1 ,"faq_id='$faq_id'"); 
        if($update>0)
        {
            header('location:pages-faq.php?msg=Reply Send');
        }
        else {
                header('location:pages-faq.php?msg1=Please try Again');

        }
    }
else if(isset($_GET["c_id"]))
{
    extract(array_map("test_input" , $_GET));

    $m->set_data('active_flag',$active_flag);

    $a1 = array('active_flag'=>$m->get_data('active_flag'));

    print_r($a1);

    $update=$d->update("members",$a1 ,"c_id='$c_id'"); 
        if($update>0)
        {
            header('location:index.php?msg=Account Approved');
        }
        else {
                header('location:index.php?msg1=Please try Again');

        }
}
else if(isset($_POST["update_image1"]))
     {
        extract(array_map("test_input" , $_POST));
        
        $imagetype=$_FILES["file"]['type'];
        $imagesize=$_FILES["file"]['size'];
        $image_Arr = $_FILES['file'];
            
        move_uploaded_file($image_Arr['tmp_name'],'img/' .$image_Arr['name']);
        $file_name = $image_Arr['name'];

        $m->set_data('file_name',$file_name);
        
        $a1= array ('file'=> $m->get_data('file_name'));

        // print_r($a1);
        session_start();
        $username = $_SESSION['username'];
        $update=$d->update("members",$a1,"username='$username'"); 
        if($update>0)
        {
            header('location:account.php?msg=Image Updated');
        }
        else {
                header('location:account.php?msg1=Image not changed');

        }
    }
else if(isset($_POST["update_password1"]))
     {
        extract(array_map("test_input" , $_POST));

        $m->set_data('password',$password);
        
        $a1= array ('password'=> $m->get_data('password'));

        // print_r($a1);
        session_start();
        $username = $_SESSION['username'];
        $update=$d->update("members",$a1 ,"username='$username'"); 
        if($update>0)
        {
            header('location:account.php?msg=Password Updated');
        }
        else {
                header('location:account.php?msg1=Password not changed');

        }
    }
else if(isset($_POST["update_email1"]))
     {
        extract(array_map("test_input" , $_POST));

        $m->set_data('email',$email);
        
        $a1= array ('email'=> $m->get_data('email'));

        // print_r($a1);
        session_start();
        $username = $_SESSION['username'];
        $update=$d->update("members",$a1 ,"username='$username'"); 
        if($update>0)
        {
            header('location:account.php?msg=EmailID Updated');
        }
        else {
                header('location:account.php?msg1=EmailID not changed');

        }
    }
else if(isset($_POST["reply1"]))
     {
        extract(array_map("test_input" , $_POST));

        $m->set_data('reply',$reply);
        session_start();
        $email = $_SESSION['email1'];
        $a1= array ('reply'=> $m->get_data('reply'));
        print_r($a1);
        $update=$d->update("post_query",$a1 ,"email='$email'"); 
        if($update>0)
        {
            header('location:post-queries.php?msg=Reply Send');
        }
        else {
                header('location:post-queries.php?msg1=Please try again');

        }
    }
else if(isset($_POST["answer1"]))
     {
        extract(array_map("test_input" , $_POST));

        $m->set_data('answer',$answer);
        session_start();
        $faq_id = $_SESSION['faq_id'];
        $a1= array ('answer'=> $m->get_data('answer'));
        print_r($a1);
        $update=$d->update("faq",$a1 ,"faq_id='$faq_id'"); 
        if($update>0)
        {
            header('location:pages-faq.php?msg=Reply Send');
        }
        else {
                header('location:pages-faq.php?msg1=Please try again');

        }
    }
else if(isset($_GET["reg_id"]))
{
    extract(array_map("test_input" , $_GET));

    $m->set_data('active_flag',$active_flag);

    $a1 = array('active_flag'=>$m->get_data('active_flag'));

    print_r($a1);

    $update=$d->update("users",$a1 ,"reg_id='$reg_id'"); 
        if($update>0)
        {
            header('location:index.php?msg=Account Approved');
        }
        else {
                header('location:index.php?msg1=Please try Again');

        }
}
else if(isset($_POST["updatepass"]))
     {
        extract(array_map("test_input" , $_POST));
        
        $m->set_data('password',$password);
        
        $a1= array ('Password'=> $m->get_data('password'));

        // print_r($a1);
       $update=$d->update("users",$a1 ,"email='$email'"); 
        if($update>0)
        {
            header('location:pages-signin.php?msg=Updated');
        }
        else {
                header('location:pages-signin.php?msg1=not update');

        }
    }
else if(isset($_POST["updatepass1"]))
     {
        extract(array_map("test_input" , $_POST));
        
        $m->set_data('password',$password);
        
        $a1= array ('password'=> $m->get_data('password'));

        // print_r($a1);
       $update=$d->update("members",$a1 ,"email='$email'"); 
        if($update>0)
        {
            header('location:pages-companysignin.php?msg=Updated');
        }
        else {
                header('location:pages-companysignin.php?msg1=not update');

        }
    }
if(isset($_POST["updatead"]))
     {
        extract(array_map("test_input" , $_POST));
        
        $imagetype=$_FILES["file"]['type'];
        $imagesize=$_FILES["file"]['size'];
        $image_Arr = $_FILES['file'];   

        move_uploaded_file($image_Arr['tmp_name'],'images/'.$image_Arr['name']);
        $file_name = $image_Arr['name'];
        
        
        $m->set_data('title',$title);
        $m->set_data('url',$url);
        $m->set_data('file_name',$file_name); 
        $m->set_data('description',$description);
        
        
        $a1= array ('title'=> $m->get_data('title'),
            'url'=> $m->get_data('url'),
            'file'=>$m->get_data('file_name'),
            'description'=> $m->get_data('description'));

        // print_r($a1);
       $update=$d->update("advertisemenet",$a1 ,"ad_id='$ad_id'"); 
        if($update>0)
        {
            header('location:advertisement.php?msg=Updated');
        }
        else {
                header('location:advertisement.php?msg1=not update');

        }
    }
?> 


