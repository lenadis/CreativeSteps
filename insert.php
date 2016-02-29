<?php

include 'db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_POST['name']);

//attempt insert query execution
$sql = "INSERT INTO creator (name) VALUES ('$name')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
