<?php
require_once('./user_connection.php');

$address = filter_input(INPUT_POST,'address');
$price = filter_input(INPUT_POST,'price');
$bedrooms = filter_input(INPUT_POST,'bedrooms');
$bathrooms = filter_input(INPUT_POST,'bathrooms');
$footage = filter_input(INPUT_POST,'footage');
$description = filter_input(INPUT_POST,'description');
$propertyID = filter_input(INPUT_POST,'propertyID');


	


$filename = $_FILES["photo"]["name"];

$tempname = $_FILES["photo"]["tmp_name"];  

$folder = "images/".$filename; 
$photo = $folder;  
 if (move_uploaded_file($tempname, $folder)) {

	$msg = "Image uploaded successfully";

}else{

	$msg = "Failed to upload image";

}


$query = "UPDATE properties SET Address=".$address.", Price=".$price.", Bedrooms=".$bedrooms.", Bathrooms=".$bathrooms.", SquareFt = ".$footage.", Description=".$description." WHERE PropertyID = ".$propertyID;

$statement = $db->prepare($query);
$statement->execute();
$statement->closeCursor();

include('adminPage.php');

?>