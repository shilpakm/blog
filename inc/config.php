<?php

$host = "localhost";

$user = "root";

$password = "";

$dbname = "simpleblog";

if($con = mysql_connect($host,$user,$password))
{
		if(!mysql_select_db($dbname,$con))
		{
			die("error in database selection");
		}
		
}
else
{
	
	die("error in host");
}



?>