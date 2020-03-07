<?php
session_start();

$course = $_POST['continue'];
$username = $_SESSION['another'];

$db = mysqli_connect('localhost', 'root', '', 'power');

$query = "INSERT INTO `usercourse`(`user`, `course`) VALUES ('$username', '$course')";

mysqli_query($db, $query);

$_SESSION['course'] = $course;


header('location: ../learn_videos/index.php');


?>