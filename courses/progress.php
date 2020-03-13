<?php
session_start();
//bounce data back so i wont need to use js
if (isset($_POST['progress_show'])){
$show =  $_POST['progress_show'];

$_SESSION['show'] = $show;
}else{
    $_SESSION['show'] = false; 
}
header('location: index.php');

?>