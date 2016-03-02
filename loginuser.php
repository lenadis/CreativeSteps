<?php

include 'db.php';




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

<form action="actions/login.php" method="post">
    <label>
        email:
        <input type="email" name="email">
    </label>
    <label>
        password:
        <input type="pass" name="pass">
    </label>
    <input type="submit" value="Log In">
</form>
<?php

?>