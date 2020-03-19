<?php
session_start();
//bounce data back so i wont need to use js
if (isset($_POST['profile_show'])){
$show =  $_POST['profile_show'];

$_SESSION['show'] = $show;
}else{
    $_SESSION['show'] = false; 
}
header('location: index.php');

?>