<?php
require_once "db-connection.php";

$query = 'SELECT * FROM `catalog` WHERE `id` = '.$_GET['carID'];

$query = mysqli_query($link, $query);

$data = mysqli_fetch_assoc($query);
?>
