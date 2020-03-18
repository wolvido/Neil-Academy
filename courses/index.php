<!DOCTYPE html>
<html>
<?php
session_start();
?>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
        <!-- header and stuff with the logo and shit -->
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
                                    <a class="nav-link"  >Courses</a>
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
        <!-- end of header and shit -->
            <div class="jumbotron vertical-center">
            <div class="row">
                <!--the whole right column  -->
                <div class="col-lg-3">

                    <div class="container">
                        <nav class="x" data-test-id="side-nav">
                            <section class="x">

                            
                                <h2 class="x">My stuff</h2>
                                <ul>
                                <!-- course video -->
                                
                                    <li>
                                        <form action="course.php" method="POST">
                                          <input type='hidden' name='course_show' value='course_show'/>
                                          <input type='submit' class='form-submit' name='course' value='Courses'/>
                                          </form>
                                    </li>
                                    <!-- assesment -->
                                    <li>
                                        <form action="assessment.php" method="POST">
                                          <input type='hidden' name='assessment_show' value='assessment_show'/>
                                          <input type='submit' class='form-submit' name='assessment' value='Assessment'/>
                                          </form>
                                    </li>
                                </ul>
                            </section>
                            <section class="x">
                                <h2 class="x">My account</h2>
                                <ul>
                                    <li>
                                    <form action="progress.php" method="POST">
                                          <input type='hidden' name='progress_show' value='progress_show'/>
                                          <input type='submit' class='form-submit' name='progress' value='Progress'/>
                                          </form>
                                    </li>
                                    <li>
                                        <a class="_8ry3zep" data-test-id="side-nav-profile">
                                            <span class="form-submit">Profile</span></a>
                                    </li>
                                </ul>
                                
                            </section>
                        </nav>
                    </div>
                  </div>
                    <!--  -->
                    <div class="container">

<?php
$username = "";
$username = $_SESSION['username'];
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'power');

//another session for use in apply_course.php
$_SESSION['another'] = $username;

$get_course_data = "SELECT `course` FROM `course`";
$course = mysqli_query($db, $get_course_data);

//user_data_array will contain the courses the user has, it will be used to check if the user has applied to the course
$user_data_array = array(); 
$user_data_query = "SELECT course FROM `usercourse` WHERE user = '$username'";
$user_data = mysqli_query($db, $user_data_query);
while($row = $user_data->fetch_assoc()) {
//puts all result of row['course'] in the array
$user_data_array[] = $row['course'];
}

echo "<div class='col-lg-12'>";

//if assessment
if(isset($_SESSION['show'])){
if($_SESSION['show'] == 'assessment_show'){
    echo "<h2 class = 'text-uppercase mt-4 mb-5'>Assessment</h2>";
    while ($row2 = $course->fetch_assoc()) {
        foreach($row2 as $value) echo "<p>$value</p>";
        //if in_array check if the user has apllied to the course
        if(in_array($value, $user_data_array)){
        echo"<div class='icon'><span class='flaticon-earth'></span></div>";
        echo" <form method='post' class='register-form' action = 'bridge.php'>
        <input type='hidden' name='apply' value='$value'/>
        <input type='submit' class='form-submit' name='no' value='start Assessment'/>
        </form>
        <p><a href='admin.php'>learn more</a></p>";
        }
}
}else{
//if courses
if($_SESSION['show'] == 'course_show'){
//list all the courses, courses tab
echo "<h2 class = 'text-uppercase mt-4 mb-5'>Courses</h2>";
while ($row2 = $course->fetch_assoc()) {
foreach($row2 as $value) echo "  <p>$value</p>";
//if in_array check if the user has apllied to the course
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
<input type='hidden' name='apply' value='$value'/>
<input type='submit' class='form-submit' name='signup' value='apply video course'/>
</form>
<p><a href='admin.php'>learn more</a></p>";
}
echo"<br>";
}}else{
    //progress tab
    echo "<h2 class = 'text-uppercase mt-4 mb-5'>Progress until completion</h2>";
    while ($row2 = $course->fetch_assoc()) {
    foreach($row2 as $value);
    //if in_array check if the user has apllied to the course
    if(in_array($value, $user_data_array)){

    //percentage of video completion algo
        //counts user total watched video
        if ($watched_video_query = mysqli_query($db, "SELECT `video` FROM `user_watched_videos` WHERE user = '$username' AND course = '$value'")) {
        $watched_videos =  mysqli_num_rows($watched_video_query);
        }
        //counts total video
        if ($total_video_query = mysqli_query($db, "SELECT video FROM `course_vids` WHERE course = '$value'")) {
        $total_videos =  mysqli_num_rows($total_video_query);
        }
        $progress_percentage = ($watched_videos/$total_videos)*100;
        $progress_bar = ($watched_videos/$total_videos)*10;
        if(is_nan($progress_percentage)){
            echo "
            <div class='row clock_sec clockdiv' id='clockdiv'>
            <div class = 'col-lg-$progress_bar'>
            <h2 class='mb-3'>$value</h2>
            <div class='col clockinner clockinner1'>
                        <h1 class='seconds'>0%</h1>
                      </div>
                      </div>
                      </div>
            <p><a href='admin.php'>learn more</a></p>";
        }else{
    echo"
    <div class='row clock_sec clockdiv' id='clockdiv'>
    <div class = 'col-lg-$progress_bar'>
    <h2 class='mb-3'>$value</h2>
    <div class='col clockinner clockinner1'>
                <h1 class='seconds'>$progress_percentage%</h1>
              </div>
              </div>
            </div>
    <p><a href='admin.php'>learn more</a></p>";
    }
}
}}}};
//
echo "</div>";
?>

                    </div>
                </div>
      
  
    </body>

</html>