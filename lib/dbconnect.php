<?php

class dbConnect
{
    function connect()
    {
        $connection=mysqli_connect("localhost","root","","pixeladmin");
				return $connection;
    }
}

?>