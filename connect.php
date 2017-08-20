<?php
$servername="localhost"
$username="root";
$password="";
$db="bilite";
$con=new_mysqli($severname,$username,$password,$db);

if($con->connect_query)
	echo $con_query;
?>