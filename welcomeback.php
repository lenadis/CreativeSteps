<?php
    $pageID = 'welcomeback';
    include 'nav.php';
    include 'db.php';
    session_start();
?>
<!--     <div>
        <a href="" "right"> the image for user </a>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="big-center2"> Welcome back </p> 
                <p class="user-name"> 
                <?php
                    $query = $db->prepare("SELECT * FROM creator WHERE");
                    $query->execute();
                    $result = $query;?>
                <h3><?php
                            echo $row["name"];
                            ?></h3></p>
            </div>
        </div> 
        <div class="text-center">
        <img class="camera"src="img/camerawhite.png"> 
        <div class="progress">
          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:80%">
            <p class="font-shadows">80% Complete</p> 
          </div>
        </div>
        <a class="subtitle btn btn-default" href="classpage.php"> Continue photography 101 <!-- PHP coursename --> </a> 
        </div>
    </div>

</body>	
</html>