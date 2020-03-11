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

$username = "";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'power');

$username = $_SESSION['username'];

$_SESSION['another'] = $username;

$get_course_data = "SELECT `course` FROM `course`";
$course = mysqli_query($db, $get_course_data);

//
$user_data_array = array(); 

$user_data_query = "SELECT course FROM `usercourse` WHERE user = '$username'";

$user_data = mysqli_query($db, $user_data_query);

while($row = $user_data->fetch_assoc()) {
    $user_data_array[] = $row['course'];
 }
//


//list all the courses
echo "<h2 class = 'text-uppercase mt-4 mb-5'>Available Courses</h2>";
while ($row2 = $course->fetch_assoc()) {
    
    foreach($row2 as $value) echo "  <p>$value</p>";
    if(in_array($value, $user_data_array)){
        echo"<form method='post' class='register-form' action = 'apply_course.php'>
        <input type='hidden' name='continue' value='$value'/>
        <div class='icon'><span class='flaticon-earth'></span></div>
        <input type='submit' class='form-submit' name='signup' value='continue video course'/>
        </form>";

    }else{
        echo"<form method='post' class='register-form' action = 'apply_course.php'>
        <input type='hidden' name='continue' value='$value'/>
        <div class='icon'><span class='flaticon-earth'></span></div>
        <input type='submit' class='form-submit' name='signup' value='apply video course'/>
        </form>";
    }
    echo"<br>";

}
//


?>
<p><a href="admin.php">link</a></p>
</div>
</div>
</div>



</body>
</html>