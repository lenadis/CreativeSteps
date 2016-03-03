<?php

include 'db.php';


// Escape user inputs for security
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$interests = $_POST['interests'];
$age = $_POST['age'];
$photo = $_POST['photo'];


$stmt = $db->prepare("INSERT INTO user (name, email, pass, interests, age, photo) 
                     VALUES (:name, :email, :pass, :interests, :age, :photo)" );

$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':pass', $pass);
$stmt->bindValue(':interests', $interests);
$stmt->bindValue(':age', $age);
$stmt->bindValue(':photo', $_FILES['photo']['name']);


$uploaddir = "img/userprofilephotos/";
$uploadfile = $uploaddir . basename($_FILES['photo']['name']);
        
echo '<pre>';
        
if(move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)){
    echo "File valid, photo successfully uploaded";
    }
else {
    echo "File not valid, please try another photo";
    }
       

if ($stmt->execute()){
    header("Location: loginuser.php");
}
else {
    echo("ERRORERROEREROERO");
}
?>