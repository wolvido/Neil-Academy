<?php

$db = mysqli_connect('localhost', 'root', '', 'power');

$course = $_POST["course"];
$embed = $_POST["embed"];

$query = "INSERT INTO `course_vids`(`course`, `video`) VALUES ('$course','$embed')";

mysqli_query($db, $query);

?>