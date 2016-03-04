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
                     <h2><?php echo $_SESSION['name'] ?></h2>
</div>   
                <h2>HERE ARE YOUR COURSES</h2>
                <?php 
                    $temp = $_SESSION['user_id'];
                    $query = $db->prepare("SELECT * FROM course WHERE creator_id= '".$temp. "'");
                    $query->execute();
                    $result = $query;
                        foreach ($query as $row) {
                            //var_dump($row);
                            ?><h3><?php
                            echo $row["name"];
                            ?></h3><h5><?php
                            echo $row["description"];
                            ?></h5><?php
                        }
}
                ?>
                <br><a href='createcourse.php'>Add a new one</a>   
                <div class="col-xs-6 nopadding maxheightandwidth">
                
                   
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