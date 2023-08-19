<?php
require_once "db-connection.php";

$data = file_get_contents("php://input");
$data = json_decode($data);

$query = "INSERT INTO `feedback`(`id`, `sender-name`, `email`, `message-name`, `message`) VALUES (NULL,'$data->senderName','$data->email','$data->msgName','$data->msg')";
$query = mysqli_query($link, $query);

echo $query;
?>