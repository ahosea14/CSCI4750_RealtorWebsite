<?php
require_once('./user_connection.php');

$address = filter_input(INPUT_POST,'address');
$price = filter_input(INPUT_POST,'price');
$bedrooms = filter_input(INPUT_POST,'bedrooms');
$bathrooms = filter_input(INPUT_POST,'bathrooms');
$footage = filter_input(INPUT_POST,'footage');
$description = filter_input(INPUT_POST,'description');


	


$filename = $_FILES["photo"]["name"];

$tempname = $_FILES["photo"]["tmp_name"];  

$folder = "images/".$filename; 
$photo = $folder;  
 if (move_uploaded_file($tempname, $folder)) {

	$msg = "Image uploaded successfully";

}else{

	$msg = "Failed to upload image";

}


$query = 'INSERT INTO properties (Address, Price, Bedrooms, Bathrooms, SquareFt, Description, Photo) VALUES (:address, :price, :bedrooms, :bathrooms, :footage, :description, :photo)';

$statement = $db->prepare($query);
$statement->bindValue(':address', $address);
$statement->bindValue(':price', $price);
$statement->bindValue(':bedrooms', $bedrooms);
$statement->bindValue(':bathrooms', $bathrooms);
$statement->bindValue(':footage', $footage);
$statement->bindValue(':description', $description);
$statement->bindValue(':photo', $photo);
$statement->execute();
$statement->closeCursor();

include('adminPage.php');

?>