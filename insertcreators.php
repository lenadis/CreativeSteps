<?php

include 'db.php';


// Escape user inputs for security
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$age = $_POST['age'];
//$photo = $_POST['photo'];
$profession = $_POST['profession'];
$description = $_POST['description'];

$stmt = $db->prepare("INSERT INTO creator (name, email, pass, age, profession, description) 
                     VALUES (:name, :email, :pass, :age, :profession, :description)" );

$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':pass', $pass);
$stmt->bindValue(':age', $age);
//$stmt->bindValue(':photo', $photo);
$stmt->bindValue(':profession', $profession);
$stmt->bindValue(':description', $description);

if ($stmt->execute()){
    header("Location: logincreator.php");
}
else {
    echo("ERRORERROEREROERO");
}
?>