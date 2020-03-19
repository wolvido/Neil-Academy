<!DOCTYPE html>

<html>
<head>
</head>

<body>
<a class="navbar-brand logo_h" href="index.php"><img src="../img/logo.png" alt=""/></a>

<?php
session_start();
//variables
$user = $_SESSION['user'];
$course = $_SESSION['course'];



//get the score
$correct = array(
"PHP: Hypertext Preprocessor", 
"$", ";", "True",
 "echo 'Hello Wrold';",
 "Hyper Text Markup Language",
"<br>","Hyper Text Markup Language",
"<br>","true","false" 
,"Structured Query Language"
,"Update"
,"Select"
,"INSERT INTO"
,"SELECT * FROM Persons"
,"SELECT DISTINCT"
,"System.out.println('Hello World');"
,"// This is a comment"
,"int x = 5;"
,"=="
);



$score = 0;
if(isset($_POST['data_1'])){
if(in_array($_POST['data_1'],$correct)){
$score += 1;
}
}

if(isset($_POST['data_2'])){
if(in_array($_POST['data_2'],$correct)){
$score += 1;
}
}

if(isset($_POST['data_3'])){
if(in_array($_POST['data_3'],$correct)){
$score += 1;
}
}

if(isset($_POST['data_4'])){
if(in_array($_POST['data_4'],$correct)){
$score += 1;
}
}

if(isset($_POST['data_5'])){
if(in_array($_POST['data_5'],$correct)){
$score += 1;
}
}

if(isset($_POST['data_6'])){
    if(in_array($_POST['data_6'],$correct)){
    $score += 1;
    }
}

if(isset($_POST['data_7'])){
    if(in_array($_POST['data_7'],$correct)){
    $score += 1;
    }
}


//send the score to db
$db = mysqli_connect('localhost', 'root', '', 'power');
$query = "INSERT INTO `assessment`(`user`, `finished_assessment`, `score`) VALUES ('$user','$course','$score')";
mysqli_query($db, $query);

if($course == 'SQL'){
    $progress_bar = ($score/7)*10;
    echo "<div class='row clock_sec clockdiv' id='clockdiv'>
<div class = 'col-lg-$progress_bar'>
<h2 class='mb-3'>$course</h2>
<div class='col clockinner clockinner1'>
<h1 class='seconds'>$score out of 7</h1>
</div>
</div>
</div>";

}
if($course == 'JAVA'){
    $progress_bar = ($score/6)*10;
    echo "<div class='row clock_sec clockdiv' id='clockdiv'>
<div class = 'col-lg-$progress_bar'>
<h2 class='mb-3'>$course</h2>
<div class='col clockinner clockinner1'>
<h1 class='seconds'>$score out of 6</h1>
</div>
</div>
</div>";

}
if($course == 'HTML'){
    $progress_bar = ($score/5)*10;
    echo "<div class='row clock_sec clockdiv' id='clockdiv'>
<div class = 'col-lg-$progress_bar'>
<h2 class='mb-3'>$course</h2>
<div class='col clockinner clockinner1'>
<h1 class='seconds'>$score out of 5</h1>
</div>
</div>
</div>";

}
if($course == 'PHP'){
    $progress_bar = ($score/5)*10;
    echo "<div class='row clock_sec clockdiv' id='clockdiv'>
<div class = 'col-lg-$progress_bar'>
<h2 class='mb-3'>$course</h2>
<div class='col clockinner clockinner1'>
<h1 class='seconds'>$score out of 5</h1>
</div>
</div>
</div>";
}

$_SESSION['user'] =  $user;
$_SESSION['course'] = $course;
?>
</body>

</html>