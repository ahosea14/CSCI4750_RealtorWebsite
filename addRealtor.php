<?php
require_once('./user_connection.php');

$firstName = filter_input(INPUT_POST,'firstName');
$lastName = filter_input(INPUT_POST,'lastName');
$number = filter_input(INPUT_POST,'number');
$bio = filter_input(INPUT_POST,'bio');




$filename = $_FILES["photo"]["name"];

$tempname = $_FILES["photo"]["tmp_name"];  

$folder = "images/".$filename; 
$photo = $folder;  
 if (move_uploaded_file($tempname, $folder)) {

	$msg = "Image uploaded successfully";

}else{

	$msg = "Failed to upload image";

}


$query = 'INSERT INTO realtors (RealtorFirstName, RealtorLastName, PhoneNumber, Bio, Photo) VALUES (:firstName, :lastName, :number, :bio, :photo)';

$statement = $db->prepare($query);
$statement->bindValue(':firstName', $firstName);
$statement->bindValue(':lastName', $lastName);
$statement->bindValue(':number', $number);
$statement->bindValue(':bio', $bio);
$statement->bindValue(':photo', $photo);
$statement->execute();
$statement->closeCursor();

include('adminPage.php');

?>