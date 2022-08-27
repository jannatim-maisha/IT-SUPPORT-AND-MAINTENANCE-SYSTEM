<?php

$db_host ="localhost";

$db_user="root";
$db_password="";
$db_name="newisms";
$db_port=3306;


//creating connection

$conn= new mysqli($db_host,$db_user,$db_password,$db_name,$db_port);


//connection check 


if($conn->connect_error){


die("connection failed");
}
// }else {


//     echo "Connect";
// }






?>