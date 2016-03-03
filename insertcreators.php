<?php

include 'db.php';


// Escape user inputs for security
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$age = $_POST['age'];
$profession = $_POST['profession'];
$description = $_POST['description'];
//$photo = $_POST['photo'];

$stmt = $db->prepare("INSERT INTO creator (name, email, pass, age, profession, description, photo) 
                     VALUES (:name, :email, :pass, :age, :profession, :description, :photo)" );

$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':pass', $pass);
$stmt->bindValue(':age', $age);
$stmt->bindValue(':profession', $profession);
$stmt->bindValue(':description', $description);
$stmt->bindValue(':photo', $_FILES['photo']['name']);

$uploaddir = "img/creator/";
        
echo '<pre>';
        

if ($stmt->execute()){
    
    $uploadfile = $uploaddir . basename($db->lastInsertId() . ".jpg");

    if(move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)){
    
    }
    else {
        echo "File not valid, please try another photo";
    }
    header("Location: logincreator.php");
}
else {
    echo("ERRORERROEREROERO");
}
?>