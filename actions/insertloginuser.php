<?php
include("../db.php");
session_start();
$email = $_POST['email'];
$pass = sha1($_POST['pass']);

$stmt = $db->prepare('SELECT * FROM user WHERE email=:email AND pass=:pass');
$stmt->bindValue(':email', $email);
$stmt->bindValue(':pass', $pass);
$stmt->execute();

if($user = $stmt->fetchObject()){
    $_SESSION['name']=$name->name;
    $_SESSION['user_id']=$user->user_id;
    $_SESSION['user_type']="user";
    header("location: ../index.php"); 
} else {
    die("Your username or password was incorrect");
}


?>