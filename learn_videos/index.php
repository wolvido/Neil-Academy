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
echo "<p>$course<p>";

$get_video_data = "SELECT * FROM `course_vids` WHERE course = '$course'";
$video = mysqli_query($db, $get_video_data);

$progress = 0;
while ($row = $video->fetch_assoc())
{
    $progress += 1;
    echo"<p>lesson $progress<p>";
    foreach($row as $value) echo "<td>$value</td>";
    echo"<br>";
}
?>
<p><a href="admin.php">link</a></p>

</body>
</html>