<!DOCTYPE html>
<?php
session_start();
$user = $_SESSION['user'];
$course = $_SESSION['course'];
$_SESSION['user'] =  $user;
$_SESSION['course'] = $course;
?>
<html>
<head>
</head>

<body>

<form method="post" action="check.php" onSubmit="return validateForm();">
<div style="width: 400px;">
</div>
<div style="padding-bottom: 18px;">What is a correct syntax to output "Hello World" in Java?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_1_0" name="data_1" value="System.out.println('Hello World');"/> System.out.println("Hello World");</span><br/>
<span><input type="radio" id="data_1_1" name="data_1" value="Console.WriteLine('Hello World');"/> Console.WriteLine("Hello World");</span><br/>
<span><input type="radio" id="data_1_2" name="data_1" value="print ('Hello World');"/> print ("Hello World");</span><br/>
</div>
<div style="padding-bottom: 18px;">Java is short for "JavaScript".<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_2_0" name="data_2" value="True"/> True</span><br/>
<span><input type="radio" id="data_2_1" name="data_2" value="False"/> False</span><br/>
</div>
<div style="padding-bottom: 18px;">How do you insert COMMENTS in Java code?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_3_0" name="data_3" value="/* This is a comment"/> /* This is a comment</span><br/>
<span><input type="radio" id="data_3_1" name="data_3" value="# This is a comment"/> # This is a comment</span><br/>
<span><input type="radio" id="data_3_2" name="data_3" value="// This is a comment"/> // This is a comment</span><br/>
</div>
<div style="padding-bottom: 18px;">How do you create a variable with the numeric value 5?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_4_0" name="data_4" value="float x = 5;"/> float x = 5;</span><br/>
<span><input type="radio" id="data_4_1" name="data_4" value="x = 5;"/> x = 5;</span><br/>
<span><input type="radio" id="data_4_2" name="data_4" value="int x = 5;"/> int x = 5;</span><br/>
</div>
<div style="padding-bottom: 18px;">The value of a string variable can be surrounded by single quotes.<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_5_0" name="data_5" value="True"/> True</span><br/>
<span><input type="radio" id="data_5_1" name="data_5" value="False"/> False</span><br/>
</div>
<div style="padding-bottom: 18px;">Which operator can be used to compare two values?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_6_0" name="data_6" value="<>"/> <></span><br/>
<span><input type="radio" id="data_6_1" name="data_6" value="=="/> ==</span><br/>
<span><input type="radio" id="data_6_2" name="data_6" value="><"/> ><</span><br/>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
<div>
<div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email">form to email</a></div>
<script src="https://www.100forms.com/js/FORMKEY:YYX6M8BWDT84" type="text/javascript"></script>
</div>
</form>

<script type="text/javascript">
function validateForm() {
if (!document.getElementById('data_1_0').checked && !document.getElementById('data_1_1').checked && !document.getElementById('data_1_2').checked ) {
alert('What is a correct syntax to output "Hello World" in Java? is required!');
return false;}
if (!document.getElementById('data_2_0').checked && !document.getElementById('data_2_1').checked ) {
alert('Java is short for "JavaScript". is required!');
return false;}
if (!document.getElementById('data_3_0').checked && !document.getElementById('data_3_1').checked && !document.getElementById('data_3_2').checked ) {
alert('How do you insert COMMENTS in Java code? is required!');
return false;}
if (!document.getElementById('data_4_0').checked && !document.getElementById('data_4_1').checked && !document.getElementById('data_4_2').checked ) {
alert('How do you create a variable with the numeric value 5? is required!');
return false;}
if (!document.getElementById('data_5_0').checked && !document.getElementById('data_5_1').checked ) {
alert('The value of a string variable can be surrounded by single quotes. is required!');
return false;}
if (!document.getElementById('data_6_0').checked && !document.getElementById('data_6_1').checked && !document.getElementById('data_6_2').checked ) {
alert('Which operator can be used to compare two values? is required!');
return false;}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>

</body>

</html>