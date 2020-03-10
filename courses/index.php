<!DOCTYPE html>
<html>

<head>
</head>

<body>

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
echo "<p>Available Courses<p>";
while ($row2 = $course->fetch_assoc()) {
    
    foreach($row2 as $value) echo "<td>$value</td>";
    if(in_array($value, $user_data_array)){

        echo"<form method='post' action = 'apply_course.php'>
        <input type='hidden' name='continue' value='$value'/>
        <input type='submit' name='signup' value='continue video course'/>
        </form>";

    }else{
    
        echo"<form method='post' action = 'apply_course.php'>
        <input type='hidden' name='continue' value='$value'/>
        <input type='submit' name='signup' value='apply video course'/>
        </form>";
    }
    echo"<br>";

}
//


?>
<p><a href="admin.php">link</a></p>

</body>
</html>