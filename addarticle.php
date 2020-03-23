<?php

include 'header.php'; //connect with header page
include 'connection.php';
include 'session.php';
$output = NULL;
error_reporting(0);


if(isset($_POST['submit']))
    //declare variables
    $title = $_POST['title'];
    $title = trim($title);

    $text = $_POST['text'];
    $text = trim($text);

    $author = $_POST['author'];
    $author = trim($author);

    if(empty($title) || empty($text) || empty($author)){
        $output = "**Please fill the blank space";
    }else{
        $insert = "INSERT INTO article(title,text,authors,date) VALUES('$title','$text','$author',NOW())";
        $query = mysqli_query($conn,$insert);

        if($query){
            $output = "**Article Inserted";
        }else{
            $output = "**Article Not Inserted";
        }
    }
?>

<style>
  .container{
            background-color: #f2f2f2;
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
            height: 600px;
            margin-bottom: 50px;
        }

        h2{
            text-align: center;
            font-weight: 100;
            padding-top: 20px;
        }

        form{
            border: 1px solid gray;
        }

        .abc{
            width: 100%;
            margin-bottom: 20px;
        }

        /* h1{
            text-align: center;
        } */

        input{
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
            height: 30px;
            padding-left: 10px;
        }

        textarea{
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
            /* height: 30px; */
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
    
<div class="container">
    
    <h2>Adding Article</h2>
        <form action="" method="POST">

            <div class="abc">
            <label for="" id="label">Title</label><br>
            <input type="text" name="title">
            </div>

            <div class="abc">
                <label for="" id="label">Write article here</label><br>
                <textarea name="text" id="" cols="30" rows="10" placeholder=""></textarea>
            </div>

            <div class="abc">
                <label for="" id="label">Author</label><br>
                <input type="text" name="author">
            </div>

            <div class="abc">
                <input type="submit" name="submit" value="Add Article">
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

