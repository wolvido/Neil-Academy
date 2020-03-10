<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
session_start();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'power');

$course = $_SESSION['course'];
$user = $_SESSION['user'];

echo "<p>$course<p>";

$get_video_data = "SELECT video FROM `course_vids` WHERE course = '$course'";
$video = mysqli_query($db, $get_video_data);

$lvl = 0;

//

while ($row = $video->fetch_assoc()){

    $lvl += 1;
    echo"<p>lesson $lvl<p>";
    foreach($row as $value)
    echo"<form method='post' action = 'play.php'>
        <input type='hidden' name='play' value='$value'/>
        <input type='submit' name='signup' value='play video'/>
        </form>";

    echo"<br>";
}

$_SESSION['user'] = $user;


?>
<p><a href="admin.php">link</a></p>
</body>

</html>