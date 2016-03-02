<?php

include 'db.php';


// Escape user inputs for security
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$profession = $_POST['interests'];
$age = $_POST['age'];
//$photo = $_POST['photo'];


$stmt = $db->prepare("INSERT INTO user (name, email, pass, interests, age) 
                     VALUES (:name, :email, :pass, :interests, :age)" );

$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':pass', $pass);
$stmt->bindValue(':age', $age);
//$stmt->bindValue(':photo', $photo);
$stmt->bindValue(':interests', $interests);

if ($stmt->execute()){
    header("Location: loginuser.php");
}
else {
    echo("ERRORERROEREROERO");
}
?>