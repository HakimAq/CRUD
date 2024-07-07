<?php
 $serverName = "localhost";
 $userName = "root";
 $password = "";
 $database = "customer";

 $conn = mysqli_connect( $serverName, $userName, $password, $database);

 if ( ! $conn){
    die ("connection failed". mysqli_connect_error());
 } else {
    echo "connected sucessfully";
 }
 ?>