<?php
session_start();
    include 'nav.php';
?>
    <div class="row page">
        <div class="col-md-12 teach-col">
            <div class="page-content text-center">
                <?php
                    if(isset($_SESSION['user_type']) && $_SESSION['user_type']=='creator'){
                    //we are creators
                ?>
                
                 <div>
  <img src="img/<?php echo $_SESSION['user_type']; ?>" alt="picture"/>
</div>   
                    <h2>HERE ARE YOUR COURSES</h2> 
                    
                        <?php 
                           
                            $sql = "SELECT * FROM artists LIMIT 5";
                            $result = $conn->query($sql);
                            $counter = 0;
                            while ($row = $result->fetch_assoc()) { 
                                $counter++; 
                                if ($counter <= 2) {
                               ?>
                        <div class="col-xs-6 nopadding maxheightandwidth">
                        <?php
                            echo "<img src=artists/".$row["fileName"]." "."class='img-responsive maxheight250px' alt='artist'> </div>";
                            } 
                        else {
                            ?>
                
                <p><a href='createcourse.php'>Add a new one</a></p>
                    <?php
                } else {
                    //not logged in OR basic user
                    ?>
                <p class="big-center"> TEACH </p>
                <a class="subtitle btn btn-default" href="signupcreators.php"> Sign up </a> <br>
                <a class="subtitle btn btn-default" href="logincreator.php"> Log in </a> <br>
                <?php
                }
?>
            </div>
        </div>
    </div>
</body>
</html>