<?php

include __DIR__ . '/../database.php';

$id_room = $_GET['id'];

$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);


if($conn && $result->num_rows > 0) {
  $room = $result->fetch_assoc();
} elseif($result) {
  echo 'No results';
} else {
  echo 'Query error';
}

$conn->close();

 ?>
