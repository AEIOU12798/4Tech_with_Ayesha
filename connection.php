<?php

$serverAddress='localhost';
$userName='root';
$password='';
$dbName='project';

$con= new mysqli($serverAddress,$userName,$password,$dbName);

 if($con-> connect_error){
     die("connection error");
 }


?>