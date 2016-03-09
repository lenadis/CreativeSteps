<?php

include 'db.php';


// Escape user inputs for security
$name = $_POST['name'];
$email = $_POST['email'];
$pass = sha1($_POST['pass']);
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
        
//if($_FILES['photo']['error']!=0) 
$parts = explode('.', $_FILES['photo']['name']);
//Splits up the filename where dots are.
$last = array_pop($parts);
$allowed = array('jpg');
if(in_array($last, $allowed)){

    
    if ($stmt->execute()){

        $uploadfile = $uploaddir . basename($db->lastInsertId() . "." . $last);

        if(move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)){

        }
}
    else {
        echo "File not valid, please try another photo";
    }
    header("Location: logincreator.php");
}
else {
    echo("Wrong type of file uploaded, we only accept jpg.");
}
?>