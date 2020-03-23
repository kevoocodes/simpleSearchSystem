<?php

// declare variables
$server = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// connection to the database
$conn = new mysqli($server,$username,$password,$dbname);

// Test connection
if(!$conn){
    echo "Not connected";
}

?>



<!-- 
    Site developed by: @kevoocodes
 -->