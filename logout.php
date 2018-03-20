<?php

	session_start();

	session_destroy();
	header("location:pages-signin.php?msg=Logout Successful");

?>
