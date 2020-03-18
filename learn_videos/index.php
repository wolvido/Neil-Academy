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
<div class="popular_courses">

<div class="">
<div class="col-lg-5">
<a class="navbar-brand logo_h" href="../index.php"><img alt="" src="../img/logo.png"></a>

<?php
session_start();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'power');

//setting variables
$course = $_SESSION['course'];
$user = $_SESSION['user'];


echo "<h2 class='text-uppercase mt-4 mb-5'>$course</h2>";

$get_video_data = "SELECT video FROM `course_vids` WHERE course = '$course'";
$video = mysqli_query($db, $get_video_data);

$lvl = 0;

//

while ($row = $video->fetch_assoc()){

    $lvl += 1;
    echo"<p>lesson $lvl<p>";
    foreach($row as $value)
    echo"<form method='post' class='register-form' action = 'play.php'>
        <input type='hidden' name='play' value='$value'/>
        <input type='hidden' name='lesson' value='$lvl'/>
        <input type='submit' class='form-submit' name='signup' value='play video'/>
        </form>";

    echo"<br>";
}
$_SESSION['user'] = $user;
$_SESSION['course'] = $course;
?>

<p><a href="admin.php">link</a></p>

</div>
</div>
</div>

</body>
</html>