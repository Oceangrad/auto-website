<?php
require_once "db-connection.php";

$data = [];
$query = 'SELECT * FROM `catalog`';

$query = mysqli_query($link, $query);
while($car = mysqli_fetch_assoc($query)){
    array_push($data, $car);
}

$data = json_encode($data);

echo $data;

?>
