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
                <img alt="profilephoto" src=""
                    
                    <h2>HERE ARE YOUR COURSES</h2>
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