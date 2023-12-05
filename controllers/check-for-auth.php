<?php
require_once "db-connection.php";

$data = $_POST;

$query = "SELECT * FROM `user` WHERE `lastName` = '".$data['lastName']."' AND `password` = '".$data['password']."'";
$query = mysqli_query($link, $query);

$users = mysqli_fetch_assoc($query);

if(is_countable($users) && count($users) > 0){
    $_SESSION['isAuth'] = true;
    $_SESSION['userID'] = $users['id'];
}
    
?>