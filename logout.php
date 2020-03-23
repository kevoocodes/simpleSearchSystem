<?php 
session_start(); //start a session
session_unset();  //insert a session
session_destroy();   //destroy a session
header('location: login.php'); //location after session destroyed





// Site developed by: @kevoocodes