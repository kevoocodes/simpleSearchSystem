<?php
session_start();
include'connection.php';  //include to the database

//check if not session
if (!isset($_SESSION['role'])){
    header('location: login.php');
}

?>



<!-- 
    Site developed by: @kevoocodes
 -->