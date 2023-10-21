<?php

$db_host= "localhost";
$db_user= "root";
$db_pass= "";
$db_name= "school";

$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(!$con){
    die("Database connection failed." .mysqli_error($con));
}

?>