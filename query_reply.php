
<?php 
/*this is after the query reply onclick event and onclick event the emailid come//s
from the reply button*/
	extract(array_map("test_input" , $_GET));

	$query = $d->select("query","email='$email'");

	$data = mysqli_fetch_array($query);

	?>