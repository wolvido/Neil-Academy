<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
session_start();


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'power');

// creating variables
$video = $_POST['play'];

$user = $_SESSION['user'];

$check = false;

echo $video;

//check if video is watched
$watched_data_array = array(); 
$check_watched_query = "SELECT video FROM `user_watched_videos` WHERE user = '$user'";
$watched_data = mysqli_query($db, $check_watched_query);

while($row = $watched_data->fetch_assoc()) {
    $watched_data_array[] = $row['video'];
 }
//check db if video is watched
if (in_array($video,$watched_data_array)){
echo"you have watched this video before";
$check = true;
//else add it on the database
}else{ 
$watched_video_query = "INSERT INTO `user_watched_videos`(`user`, `video`) VALUES ('$user','$video')";
mysqli_query($db, $watched_video_query);
}

// for progress update
$user_progress = 0; 
$user_data_query = "SELECT `video_progress` FROM `progress` WHERE username = '$user'";
$user_data = mysqli_query($db, $user_data_query);
while($row = $user_data->fetch_assoc()) {
    $user_progress = $row['video_progress'];
 }

 //add 1 for progress if video not watched
$user_progress += 1;
$query_update = "UPDATE `progress` SET `video_progress`='$user_progress' WHERE username = '$user'";
if($check){
    echo".";
}else{
    mysqli_query($db, $query_update);
}
//
?>

</body>
</html>