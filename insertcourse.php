<?php
session_start();
include 'db.php';


// Escape user inputs for security
$name = $_POST['name'];
$date = $_POST['date'];
//$photo = $_POST['photo'];
$subject = $_POST['subject'];
$price = $_POST['price'];
$description = $_POST['description'];


$stmt = $db->prepare("INSERT INTO course (creator_id, course_id, name, date, subject, price, description, photo) 
                     VALUES (:creator_id, :course_id, :name, :date, :subject, :price, :description, :photo)" );

$stmt->bindValue(':creator_id', $_SESSION['user_id']);
$stmt->bindValue(':course_id', $_SESSION['course_id']);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':date', $date);
$stmt->bindValue(':subject', $subject);
$stmt->bindValue(':price', $price);
$stmt->bindValue(':description', $description);
$stmt->bindValue(':photo', $_FILES['photo']['name']);

$uploaddir = "img/course/";
        
echo '<pre>';

if ($stmt->execute()){
    
    $uploadfile = $uploaddir . basename($db->lastInsertId() . ".jpg");

    if(move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)){
    
    }
    else {
        echo "File not valid, please try another photo";
    }
    header("Location: coursepage.php");
}
else {
    echo("ERRORERROEREROERO");
}

        
//if(move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)){
//    echo "File valid, photo successfully uploaded";
//    }
//else {
//    echo "File not valid, please try another photo";
//    }
//
//if ($stmt->execute()){
//    header("Location: homepage.php");
//}
//else {
//    echo("ERRORERROEREROERO");
//}
    
?>

