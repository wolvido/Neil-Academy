<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="../img/favicon.png" type="../image/png" />
    <title>Neil Academy</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../loginSignup/css/style.css">
    <link rel="stylesheet" href="../loginSignup/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="">
<div class="col-lg-5">
<a class="navbar-brand logo_h" href="../index.php"><img alt="" src="../img/logo.png"></a>
<?php
session_start();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'power');

// creating variables
$lesson = $_POST['lesson'];
$video = $_POST['play'];
$user = $_SESSION['user'];
$course = $_SESSION['course'];

$check = false;

echo"<p>Lesson $lesson</p>";

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
echo"you have finished this video before";
$check = true;
//else add it on the database
}else{ 
$watched_video_query = "INSERT INTO `user_watched_videos`(`user`, `video`,'course') VALUES ('$user','$video','$course')";
mysqli_query($db, $watched_video_query);
}

// for progress update
$user_progress = 0; 
$user_data_query = "SELECT `video_progress` FROM `progress` WHERE username = '$user' AND course = '$course'";
$user_data = mysqli_query($db, $user_data_query);
while($row = $user_data->fetch_assoc()) {
    $user_progress = $row['video_progress'];
 }

 //add 1 for progress if video not watched
$user_progress += 1;
$query_update = "UPDATE `progress` SET `video_progress`='$user_progress' WHERE username = '$user' AND course = '$course'";
if($check){
    echo".";
}else{
    mysqli_query($db, $query_update);
}
//
?>
</div>
</div>
</div>

</body>
</html>