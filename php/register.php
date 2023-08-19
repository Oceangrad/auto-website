<?php
require_once "db-connection.php";

$data = $_POST;

$query = "INSERT INTO `user`(`id`, `lastName`, `firstName`, `password`) VALUES (NULL,'".$data['lastName']."','".$data['firstName']."','".$data['password']."')";
$query = mysqli_query($link, $query);
    
?>