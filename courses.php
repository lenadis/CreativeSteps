<?php
	// set the 'pageID' variable which is used in 'nav.php'
	// to set the class of body.
	$pageID = 'courses';
   	session_start();
    include 'db.php';
   	include 'nav.php';
?>	
    <div class="container">

	    <div class="row">
	    	<p class="big-center2"> Subjects </p>
	    	<div class="row padding-top-bottom">
	    		<div class="col-md-3">
	    			<a href=""><img class="icon"src="img/artwhite.png"></a>
	    			<a href=""><p class="subtitle text-center padding-top-bottom"> Art </p></a>
	    		</div>
	    		<div class="col-md-3">
	    			<a href=""><img class="icon" src="img/drawingwhite.png"></a>
	    			<a href=""><p class="subtitle text-center padding-top-bottom"> Creative writing</p></a>
	    		</div>
	    		<div class="col-md-3">
	    			<a href=""><img class="icon"src="img/sewingwhite.png"></a>
	    			<a href=""><p class="subtitle text-center padding-top-bottom"> Design </p></a>
	    		</div>
	    		<div class="col-md-3">
	    			<a href=""><img class="icon"src="img/guitarwhite.png"></a>
	    			<a href=""><p class="subtitle text-center padding-top-bottom"> Music </p></a>
	    		</div>
	    	</div>
	    </div>
	    <p class="big-center"> Popular courses </p>
	    <div class="row"> 
            <!-- Photo name of classes and maybe description? or show more button loop? -->	
            <?php 
                $query = $db->prepare("SELECT * FROM course");
                $query->execute();
                $result = $query;
                    foreach ($query as $row) {
                        //var_dump($row);
                        ?><div class="col-md-4 text-center">
                            <img class="course-img" src="img/course/<?php echo $row['course_id'] . ".jpg"; ?>"><h3><?php
                            echo $row["name"];
                            ?></h3><h5><?php
                            echo $row["description"];
                        ?></h5></div><?php
                    }

                ?>
	        
	        <div> <img class="right-socialmedia"src="img/socialmedia.png"></div>

	    </div>      
	</div>

