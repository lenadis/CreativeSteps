<?php
	include("db.php");
	include("functions.php");
	
	$author = $_POST['author'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$stmt=$db->prepare("INSERT INTO messages (created_at, author, email, phone, message) VALUES (NOW(), :author, :email, :phone, :message)");
	
	$stmt->bindValue(':author', $author);
	$stmt->bindValue(':email', $email);
	$stmt->bindValue(':phone', $phone);
	$stmt->bindValue(':message', $message);
	$stmt->execute();
	
	sendEmail ("A new message was sent", "Hi, $author just sent you a new message on maarjakoobas.com \n Message:\n\n $message");
	
	header("Location:messagesent.php");
?>