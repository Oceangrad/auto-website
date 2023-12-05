<?php
require_once "db-connection.php";

$data = file_get_contents("php://input");
$data = json_decode($data);

$query = "SELECT * FROM `auto-requests` WHERE userID = $data->userID AND autoID = $data->carID";
$query = mysqli_query($link, $query);

$requests = mysqli_fetch_assoc($query);
if($requests == NULL){
    $query = "INSERT INTO `auto-requests`(`id`, `userID`, `autoID`) VALUES (NULL,$data->userID,$data->carID)";
    $query = mysqli_query($link, $query);

    echo $query;
}
else{
    echo 0;
}


?>
