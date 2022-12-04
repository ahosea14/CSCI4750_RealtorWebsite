<?php
require_once('./user_connection.php');

$realtorID = filter_input(INPUT_POST,'realtorID');


	


$query = "DELETE FROM realtors WHERE RealtorID = ".$realtorID;

$statement = $db->prepare($query);
$statement->execute();
$statement->closeCursor();

include('adminPage.php');

?>