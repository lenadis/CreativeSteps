<?php
session_start();
include 'db.php';
print_r($_SESSION);

// Escape user inputs for security
$name = $_POST['name'];
$date = $_POST['date'];
//$photo = $_POST['photo'];
$subject = $_POST['subject'];
$price = $_POST['price'];
$description = $_POST['description'];


$stmt = $db->prepare("INSERT INTO course (creator_id, name, date, subject, price, description) 
                     VALUES (:creator_id,:name, :date, :subject, :price, :description)" );

$stmt->bindValue(':creator_id', $_SESSION['user_id']);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':date', $date);
//$stmt->bindValue(':photo', $photo);
$stmt->bindValue(':subject', $subject);
$stmt->bindValue(':price', $price);
$stmt->bindValue(':description', $description);

if ($stmt->execute()){
    header("Location: homepage.php");
}
else {
    echo("ERRORERROEREROERO");
}
    

?>
