<?php
include 'db.php';
include 'nav.php';
?>
<div class="row page">
<div class="col-md-6 red-col">
    <div class="page-content2 text-center">

    <p class="big-center"> We love you! </p> <br> 
    <p class="title"> Thank you for contributing your skills and time to Creative Steps. Together we can increase creatity and imagination in children.</p>
    </div>
</div>

<div class="col-md-6 lightred-col">
    <div class="page-content2">
    <div class="content3">
        <form action="insertcreators.php" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group"
                <label for="pass">Password: </label>
                <input type="password" name="pass" id="pass" class="form-control" required>
            </div> 
            <div class="form-group">
                <label for="age">Age: </label>
                <input type="number" name="age" id="age" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="profession">Profession: </label>
                <input type="text" name="profession" id="profession" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description: </label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            <div>
                <label for="photo">Photo: </label>
                <input type="file" name="photo" id="photo" required>
            </div> <br>
            
            <input type="submit" value="Submit">
        </form>
        </div>
    </div>
    </div>
</div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
