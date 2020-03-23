<?php 
include 'connection.php'; // connection to the database
$output = NULL; //This  is for error
session_start();

if(isset($_POST['submit'])){

    //DECLARE VARIABLES
	$username =  $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        $output = "**Please Fill the blank space";
    }else{
        $sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
        $query = mysqli_query($conn,$sql); //query to the database
        $check = mysqli_num_rows($query); //number of rows

        if($check > 0) {
            $row = mysqli_fetch_array($query);
            $role = $row['username'];

            $_SESSION['role'] = $role; 
            
            header('location: dashboard.php');
        }else{
            $output = "**Username and Password do not match";
        }

    }
    
    
    
		//select to the database
		// $sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
		
		// $query = mysqli_query($conn,$sql);
		
		// $check = mysqli_num_rows($query);
		// if($check > 0){
        //     $row = mysqli_fetch_array($query);
        //     $_SESSION['id'] = $row['id'];
            
        //     $role = $row['username'];
        //      $_SESSION['name'] = $role;
    
        //     echo "<script>alert('Welcome'); window.location = 'dashboard.php'</script>";
        // }else{
        //     $output = "**Email and Password Dont match";
        // }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
            border: 1px solid gray;
        }

        .abc{
            width: 100%;
            margin-bottom: 20px;
        }

        h1{
            text-align: center;
        }

        input{
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
            height: 30px;
            padding-left: 10px;
        }

        #label{
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
        }


        .container input[type=submit]{
            width: 62%;
        }

        .error p{
            width: 60%;
            margin-right: 20%;
            margin-left: 20%;
            color: red;
        }


    </style>
</head>
<body>
    
    <div class="container">
    <h1>Admin Login</h1>
        <form action="" method="POST">
            <div class="abc">
                <label for="" id="label">Username</label><br>
                <input type="text" name="username">
            </div>

            <div class="abc">
                <label for="" id="label">Password</label> <br>
                <input type="Password" name="password">
            </div>

            <div class="abc">
                <input type="submit" name="submit" value="Login">
            </div>

            <div class="error">
                <p><?php echo $output; ?></p>
            </div>
        </form>
    </div>
</body>
</html>






<!--
    Site developed by: @kevoocodes
 -->