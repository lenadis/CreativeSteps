<?php
include 'db.php';
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
       
        <form action="insertusers.php" enctype="multipart/form-data" method="post">
            <p>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" required>
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" required>
            </p>
            <p>
                <label for="pass">Password: </label>
                <input type="password" name="pass" id="pass" required>
            </p> 
            <p>
                <label for="age">Age: </label>
                <input type="number" name="age" id="age" required>
            </p>
            <p>
                <label for="photo">Photo: </label>
                <input type="file" name="photo" id="photo" required>
            </p>
            <p>
                <label for="interests">Interests </label>
                <input type="text" name="interests" id="interests" required>
            </p>
            
            <input type="submit" value="Submit">
        
        
        </form>
         

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
