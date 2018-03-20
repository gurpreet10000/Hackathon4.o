<?php
include_once 'lib/dao.php';
include 'lib/model.php';


$d = new dao();
$m = new model();
$a=0;

if($_GET["reg_id"]) {
	extract(array_map("test_input" , $_GET));
	$q= $d->delete("users","reg_id='$reg_id'");
	 if($q>0)
	    {
	        header('location:manage.php?msg=User Deleted');
	    }
	    else
	    {
	        echo "not deleted";
	    }
  }
 else if($_GET["c_id"]) {
	extract(array_map("test_input" , $_GET));
	$q= $d->delete("members","c_id='$c_id'");
	 if($q>0)
	    {
	        header('location:manage.php?msg=Company Deleted');
	    }
	    else
	    {
	        echo "not deleted";
	    }
  }
 else if($_GET["g_id"]) {
	extract(array_map("test_input" , $_GET));
	$q= $d->delete("gallery","g_id='$g_id'");
	 if($q>0)
	    {
	        header('location:gallery.php?msg=Image Deleted');
	    }
	    else
	    {
	        echo "not deleted";
	        header('location:gallery.php?msg=Image not Deleted');
	    }
  }
else if($_GET["id"]) {
	extract(array_map("test_input" , $_GET));
	$q= $d->delete("product","id='$id'");
	 if($q>0)
	    {
	        header('location:productadd.php?msg=Product Removed');
	    }
	    else
	    {
	        echo "not deleted";
	        header('location:productadd.php?msg=Product is removed');
	    }
  }
 else if($_GET["s_id"]) {
	extract(array_map("test_input" , $_GET));
	$q= $d->delete("services","s_id='$s_id'");
	 if($q>0)
	    {
	        header('location:services.php?msg=Service Removed');
	    }
	    else
	    {
	        echo "not deleted";
	        header('location:services.php?msg=Service is not removed');
	    }
  }
 else if($_GET["role_id"]) {
	extract(array_map("test_input" , $_GET));
	$q= $d->delete("role","role_id='$role_id'");
	 if($q>0)
	    {
	        header('location:role.php?msg=Role Removed');
	    }
	    else
	    {
	        echo "not deleted";
	        header('location:role.php?msg=Role is not removed');
	    }
  }
else if($_GET["query_id"]) {
	extract(array_map("test_input" , $_GET));
	$q= $d->delete("post_query","query_id='$query_id'");
	 if($q>0)
	    {
	        header('location:post-queries.php?msg=Query Deleted');
	    }
	    else
	    {
	        header('location:post-queries.php?msg=Query Not Deleted Please try again !!');
	    }
  }
else if($_GET["cart_id"]) {
	extract(array_map("test_input" , $_GET));
	$q= $d->delete("cart","cart_id='$cart_id'");
	 if($q>0)
	    {
	        header('location:index.php?msg=Cart Deleted');
	    }
	    else
	    {
	        header('location:index.php?msg=Please Try Again');
	    }
  }
else if($_GET["ad_id"]) {
	extract(array_map("test_input" , $_GET));
	$q= $d->delete("advertisemenet","ad_id='$ad_id'");
	 if($q>0)
	    {
	        header('location:advertisement1.php?msg=Ad Removed');
	    }
	    else
	    {
	        header('location:advertisement1.php?msg=please try again');
	    }
  }
 else if($_GET["news_id"]) {
	extract(array_map("test_input" , $_GET));
	$q= $d->delete("news","news_id='$news_id'");
	 if($q>0)
	    {
	        header('location:news1.php?msg=News Deleted');
	    }
	    else
	    {
	        header('location:news1.php?msg1=please try again');
	    }
  }
?>