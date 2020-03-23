<?php
include 'header.php';
include 'session.php';
// session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="Fullstack developer" content="Kelvin Aron">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            background-color: #f2f2f2;
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
            height: 500px;
        }

        h2{
            margin-left: 20px;
            font-weight: 200px;
        }

        .nav{
            margin-top: 20px;
        }

        .nav a {
            padding: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
     
        <div class="nav">
            <a href="dashboard.php">Dashboard</a>
            <a href="addarticle.php">Add article</a>
            <a href="">View article</a>
            <a href="logout.php">Logout</a>
        </div>

        <h2>Welcome as <?php echo $_SESSION['role']; ?></h2>
    </div>
</body>
</html>



<!-- 
    Site developed by: @kevoocodes
 -->