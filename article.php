<?php
    include 'header.php';
?>


<h1>Article page</h1>  


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
    Site developed by: @kevoocodes
 -->