<?php
session_start();
    include 'nav.php';
?>

<!--     <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <img class="logo" src="img/creativestepslogoW.png">
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav pull-right">
                <li><a href="#"> About us</a></li>
                <li><a href="#"> Courses </a></li>
                <li><a href="#"> Sign up </a></li>
                <li><a href="#"> Log in </a></li>
              </ul>
            </div>
        </div>
    </nav>
 -->    <div class="row page">
        <div class="col-md-6 learn-col">
            <div class="page-content text-center">
                <p class="big-center"> LEARN </p>
                <a class="subtitle btn btn-default" href="signupusers.php"> Sign up</a> <br>
                <a class="subtitle btn btn-default" href="loginuser.php"> Log in </a> <br>

            </div>
        </div>
        <div class="col-md-6 teach-col">
            <div class="page-content text-center">
                <?php
                if(isset($_SESSION['user_type']) && $_SESSION['user_type']=='creator'){
                    //we are creators
                    ?>
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