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

$parts = explode('.', $_FILES['photo']['name']);
//Splits up the filename where dots are.
$last = array_pop($parts);
$allowed = array('jpg');
if(in_array($last, $allowed)){

    if ($stmt->execute()){
        $uploadfile = $uploaddir . basename($db->lastInsertId() . ".jpg");

        if(move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)){
    
        }
    }
    else {
        echo "File not valid, please try another photo";
    }
    $_SESSION['course_id']=$db->lastInsertId();
    header("Location: coursepage.php");
}
else {
    echo("Wrong type of file uploaded, we only accept jpg.");
}

    
?>

