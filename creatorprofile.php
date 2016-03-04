<?php
    $pageID = 'creatorprofile';
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
            </div>    
            <div>
                <img class="creator-img img-center padding-top" src="img/<?php echo $_SESSION['user_type'] . "/" . $_SESSION['user_id'] . ".jpg"; ?>" alt="picture"/>
                <p class="big-center"><?php echo $_SESSION['name'] ?></p>
            </div>   
                <p class="subtitle padding-courses">HERE ARE YOUR COURSES</p>
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
                <div>
                <br><a class="subtitle padding-courses"href='createcourse.php'>Add a new one</a>  
                </div> 
                <?php
                
?>
            </div>
        </div>
    </div>
</body>
</html>