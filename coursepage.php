<?php
    session_start();
    include 'nav.php';
    include 'db.php';
?>	
<div class="container">
	<div class="row page">
        <div class="col-md-6 blue-col">
            <div class="page-content3 text-center">
            	<p class="big-center"> Photography 101</p>
            	<img class="course-img" src="img/course/<?php echo $_SESSION['course_id'] . ".jpg"; ?>"> <br><!-- Course pic from db -->
            	<p class="right"> Length/stars <!-- length/stars from db --> </p> <br>
                <p class="bodytext"> 
                	Course description from db 
				</p>
				<p class="title"> Reviews </p>
				<div>
					<!-- add reviews from db -->
				</div>
            </div>
        </div>

        <div class="col-md-6 lightblue-col">
            <div class="page-content3">
            	<p class="title"> Classes </p>
				<ul>
					<li><img class="classicon"src="img/greetingcircle.png">
					<a href="classpage.php"> Introduction <!-- Class1 inside the course from db --> </a></li><br>
					<li><img class="classicon"src="img/projectcircle.png"> 
					<a href=""> Our project <!-- Class2 inside the course from db --> </a></li><br>
					<li><img class="classicon"src="img/cameracircle.png"> 
					<a href=""> Your camera <!-- Class3 inside the course from db --> </a></li><br>
					<li><img class="classicon"src="img/zoomcircle.png"> 
					<a href=""> Angles and zoom <!-- Class4 inside the course from db --> </a></li><br> 
					<li><img class="classicon"src="img/spotlightcircle.png"> 
					<a href=""> Lights <!-- Class5 inside the course from db --> </a></li><br> 
					<li><img class="classicon"src="img/diplomacircle.png"> 
					<a href=""> Awesome, you made it! <!-- FinalClass inside the course from db --> </a></li> 
				</ul>
            </div>
        </div>

</body>
</html>