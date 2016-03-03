<?php
    session_start();
    include 'nav.php';
    include 'db.php';
?>
    <div class="row page">
        <div class="col-md-12 teach-col">
            <div class="page-content text-center">
                <?php
                    if(isset($_SESSION['user_type']) && $_SESSION['user_type']=='creator'){
                    //we are creators
                ?>
                
                 <div>
  <img src="img/<?php echo $_SESSION['user_type'] . "/" . $_SESSION['user_id'] . ".jpg"; ?>" alt="picture"/>
</div>   
                <h2>HERE ARE YOUR COURSES</h2>
                <h2><?php 
                    $temp = $_SESSION['user_id'];
                    $query = $db->prepare("SELECT * FROM course WHERE creator_id= '".$temp. "'");
                    $query->execute();
                    $result = $query;
                        foreach ($query as $row) {
                            //var_dump($row);
                            echo $row["name"];
                            echo "<br>";
                            echo $row["description"];
                            echo "<br>";
                        }
}
                ?></h2>
                    
                <div class="col-xs-6 nopadding maxheightandwidth">
                
                
                <p><a href='createcourse.php'>Add a new one</a></p>
                   
                <p class="big-center"> TEACH </p>
                <a class="subtitle btn btn-default" href="signupcreators.php"> Sign up </a> <br>
                <a class="subtitle btn btn-default" href="logincreator.php"> Log in </a> <br>
                <?php
                
?>
            </div>
        </div>
    </div>
</body>
</html>