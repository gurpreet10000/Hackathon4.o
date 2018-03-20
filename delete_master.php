<?php
include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
	// delete user user active flag
	if($_GET['reg_id']) {
		extract(array_map("test_input" , $_GET));
		$q= $d->delete1("user",1,"reg_id=$reg_id");
		 if($q>0)
		    {
		        header('location:view.php?msg=Deleted');
		    }
		    else
		    {
		        header('location:view.php?msg=Not Deleted');
		    }
  }

  // delete other table 
  else if($_GET['c_id']) {
		extract(array_map("test_input" , $_GET));
		$q= $d->delete1("members",1,"c_id=$c_id");
		 if($q>0)
		    {
		        header('location:index.php?msg=Deleted');
		    }
		    else
		    {
		        header('location:index.php?msg=Not Deleted');
		    }
  }
?>

