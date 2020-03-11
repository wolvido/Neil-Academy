<!DOCTYPE html>
<html>
<?php
session_start();
?>
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
<!--  -->

<nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="../index.php"><img alt="" src="../img/logo.png"></a>
            <button class="navbar-toggler" aria-expanded="false" aria-controls="navbarSupportedContent" aria-label="Toggle navigation" type="button" data-target="#navbarSupportedContent" data-toggle="collapse">
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">About</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a class="nav-link dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="courses.html">Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="course-details.html">Course Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="elements.html">Elements</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a class="nav-link dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="#" data-toggle="dropdown">Blog</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="single-blog.html">Blog Details</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link search" id="search" href="#">
                    <li class="ti-search"></li>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

<!--  -->
<div class="popular_courses">

<div class="col-lg-5">

<!--  -->
<div class="jumbotron vertical-center">
<div class="container">
<nav class="_1yfus1e" data-test-id="side-nav">
<section class="_1ozlbq6">
<h2 class="_18undph9">My stuff</h2>
<ul>
<li>
<a class="_158ir6wt" href="/profile/kaid_489907232336901976641526/courses" data-test-id="side-nav-courses">
<span class="_g20yn58">Courses</span>
</a>
</li>
</ul>
</section>
<section class="_1ozlbq6">
<h2 class="_18undph9">My account</h2>
<ul>
<li><a class="_8ry3zep" href="/profile/kaid_489907232336901976641526/progress" data-test-id="side-nav-progress"><span class="_xy39ea8">Progress</span></a></li><li><a class="_8ry3zep" href="/profile/kaid_489907232336901976641526/" data-test-id="side-nav-profile"><span class="_xy39ea8">Profile</span></a></li><li><a class="_8ry3zep" href="/profile/kaid_489907232336901976641526/teachers" data-test-id="side-nav-teachers">
<span class="_xy39ea8">Teachers</span>
</a>
</li>
</ul>
</section>
</nav>
</div>
<!--  -->
<?php


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

echo "<div class = 'container'>";

//list all the courses
echo "<h2 class = 'text-uppercase mt-4 mb-5'>My Courses</h2>";
while ($row2 = $course->fetch_assoc()) {
    
    foreach($row2 as $value) echo "  <p>$value</p>";
    if(in_array($value, $user_data_array)){
        echo"<div class='icon'><span class='flaticon-earth'></span></div>";
        echo" <form method='post' class='register-form' action = 'apply_course.php'>
        <input type='hidden' name='continue' value='$value'/>
        <input type='submit' class='form-submit' name='signup' value='continue video course'/>
        </form>
        <p><a href='admin.php'>learn more</a></p>";
    }else{
        echo"<div class='icon'><span class='flaticon-earth'></span></div>";
        echo "<form method='post' class='register-form' action = 'apply_course.php'>
        <input type='hidden' name='continue' value='$value'/>
        <input type='submit' class='form-submit' name='signup' value='apply video course'/>
        </form>
        <p><a href='admin.php'>learn more</a></p>";
    }
    echo"<br>";

}
//
echo "</div>";
?>

</div>
</div>
</div>



</body>
</html>