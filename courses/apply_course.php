<?php
session_start();
if(isset($_POST['continue'])){
$course = $_POST['continue'];
}else{
$course = $_POST['apply'];
};

//another session for the username
$username = $_SESSION['another'];

$db = mysqli_connect('localhost', 'root', '', 'power');

$query = "INSERT INTO `usercourse`(`user`, `course`) VALUES ('$username', '$course')";

mysqli_query($db, $query);

$_SESSION['course'] = $course;
$_SESSION['user'] =  $_SESSION['another'];

header('location: ../learn_videos/index.php');

?>