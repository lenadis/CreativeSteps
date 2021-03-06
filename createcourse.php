<?php
include 'db.php';
include 'nav.php';
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
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
<div class="background bg-blue page"></div>
<div class="row">
    <div class="col-md-12 padding-top">
    <div>
        <p class="subtitle text-center"> Please log in to the creative world of CreativeSteps </p>
    </div>
        <form action="insertcourse.php" enctype="multipart/form-data" method="post" id="form">
                <label for="name" class="contact-label">Name: </label>
                <input type="text" name="name" id="name" required>
                <label for="email" class="contact-label">Date: </label>
                <input type="date" name="date" id="date" required>
                <label for="photo" class="contact-label">Photo: </label>
                <input type="file" name="photo" id="photo" required>
                <label for="subject" class="contact-label">
                    Subject: 
                    <select name="subject">
                        <option>Photography</option>
                        <option>Design</option>
                        <option>Sewing</option>
                        <option>Baking</option>
                        <option>Other</option>
                    </select>
                </label>
                <label for="price" class="contact-label">Price: </label>
                <input type="number" name="price" id="price" required>
                <label for="description" class="contact-label">Description:
                <textarea name="description"required></textarea>
                </label>
            
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
