<?php
require_once('./user_connection.php');

$propertyID = filter_input(INPUT_POST,'propertyID');


	


$query = "DELETE FROM properties WHERE PropertyID = ".$propertyID;

$statement = $db->prepare($query);
$statement->execute();
$statement->closeCursor();

include('adminPage.php');

?>