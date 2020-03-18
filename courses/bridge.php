<?php
session_start();

//variables
$user = $_SESSION['user'];
$course = $_SESSION['course'];
$_SESSION['user'] =  $user;
$_SESSION['course'] = $course;

$path = $_POST['apply'];
echo $path;

if($path == 'PHP'){
    header('location: php_assessment.php');
}
if($path == 'JAVA'){
    header('location: java_assessment.php');
}
if($path == 'SQL'){
    header('location: sql_assessment.php');
}
if($path == 'HTML'){
    header('location: html_assessment.php');
}
?>