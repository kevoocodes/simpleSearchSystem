<?php
    include 'header.php';
?>

<div class="index">
<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Write Your Search">
    <button type="submit" name="submit-search">Search</button>
</form>
</div>

<div class="article-container">
    <?php
        $sql = "SELECT * from article";
        $result =  mysqli_query($conn,$sql);  
        
        $queryResult = mysqli_num_rows($result);

        if($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='article-box'>
                    <h3>". $row['title'] ."</h3>
                    <p>". $row['text'] ."</p>
                    <p>". $row['date'] ."</p>
                    <p>". $row['authors'] ."</p>
                </div>" ;
            }
        }
    ?>
</div>
    
</body>
</html>


<!-- 
        Site Developed by: @kevoocodes
-->