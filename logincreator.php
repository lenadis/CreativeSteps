<?php
include 'db.php';
include 'nav.php';

//Escape user inputs for security
//$name = mysqli_real_escape_string($conn, $_POST['name']);
//
//attempt insert query execution
//$sql = "INSERT INTO creator (name) VALUES ('$name')";
//if(mysqli_query($conn, $sql)){
//    echo "Records added successfully.";
//} else {
//    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
//}
?>
<div class="background bg-blue page"></div>

<p class="subtitle text-center"> Please log in to the creative world of CreativeSteps </p>
<form action="actions/insertlogincreator.php" method="post" class="padding-left">
    <div class="form-group">
    <label>
       <p> email: <p>
        <input type="email" name="email">
    </label>
    </div>
    <div class="form-group">
    <label>
        <p> password: </p>
        <input type="pass" name="pass">
    </label>
    </div>
    <input type="submit" value="Log In">
</form>
<?php

?>