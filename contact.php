<?php 
	include 'nav.php';
?>
	<div class="row page">
        <div class="col-md-6 red-col">
            <div class="padding-top">
                <p class="big-center">Get in touch</p>
                <section>
                    <form  id="form" action="insertmessage.php" method="post">
                        <label>
                            Name
                            <input type="text" name="author">
                        </label>
                        <label>
                            Email
                            <input type="email" name="email">
                        </label>
                        <label>
                            Phone
                            <input type="tel" name="phone">
                        </label>
                        <label>
                            Message
                            <textarea name="message"></textarea>
                        </label>
                        <input id="send" type="submit" value="Send">
                </section>
            </div>
        </div>
        <div class="col-md-6 lightred-col">
            <div class="padding-top">
                <p class="big-center">Visit us</p>
                <div class="map-center">
                    <iframe class="map-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1124.5231264837525!2d12.583789958189858!3d55.68818360708638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652531e9198d29f%3A0x5cf326cd2cd344db!2sSankt+Pauls+Gade+56%2C+1313+K%C3%B8benhavn+K!5e0!3m2!1sen!2sdk!4v1457017781876" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div> <img class="right-socialmedia"src="img/socialmedia.png"></div>
 
            </div>
    	</div>
    </div>
</body>
</html>