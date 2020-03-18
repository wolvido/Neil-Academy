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
<div style="padding-bottom: 18px;">What does PHP stand for?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_7_0" name="data_1" value="Personal Hypertext Processor"/> Personal Hypertext Processor</span><br/>
<span><input type="radio" id="data_7_1" name="data_1" value="Private Home Page"/> Private Home Page</span><br/>
<span><input type="radio" id="data_7_2" name="data_1" value="PHP: Hypertext Preprocessor"/> PHP: Hypertext Preprocessor</span><br/>
</div>
<div style="padding-bottom: 18px;">All variables in PHP starts with which symbol?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_8_0" name="data_2" value="%"/> %</span><br/>
<span><input type="radio" id="data_8_1" name="data_2" value="&"/> &</span><br/>
<span><input type="radio" id="data_8_2" name="data_2" value="$"/> $</span><br/>
<span><input type="radio" id="data_8_3" name="data_2" value="@"/> @</span><br/>
</div>
<div style="padding-bottom: 18px;">What is the correct way to end a PHP statement?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_9_0" name="data_3" value=";"/> ;</span><br/>
<span><input type="radio" id="data_9_1" name="data_3" value=")"/> )</span><br/>
<span><input type="radio" id="data_9_2" name="data_3" value="</php>"/> </php></span><br/>
<span><input type="radio" id="data_9_3" name="data_3" value="."/> .</span><br/>
</div>
<div style="padding-bottom: 18px;">In PHP you can use both single quotes (' ') and double quotes (" ") for strings<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_10_0" name="data_4" value="True"/> True</span><br/>
<span><input type="radio" id="data_10_1" name="data_4" value="False"/> False</span><br/>
</div>

<div style="padding-bottom: 18px;">How do you write "Hello World" in PHP<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_12_0" name="data_5" value="System.out.println('Hello World');"/> System.out.println("Hello World");</span><br/>
<span><input type="radio" id="data_12_1" name="data_5" value="echo 'Hello Wrold';"/> echo "Hello Wrold";</span><br/>
<span><input type="radio" id="data_12_2" name="data_5" value="Document.Write('Hello Wrold');"/> Document.Write("Hello Wrold");</span><br/>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
<div>
<div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email">form to email</a></div>
<script src="https://www.100forms.com/js/FORMKEY:2MX6GKGUWZWW" type="text/javascript"></script>
</div>
</form>

<script type="text/javascript">
function validateForm() {
if (!document.getElementById('data_7_0').checked && !document.getElementById('data_7_1').checked && !document.getElementById('data_7_2').checked ) {
alert('What does PHP stand for? is required!');
return false;}
if (!document.getElementById('data_8_0').checked && !document.getElementById('data_8_1').checked && !document.getElementById('data_8_2').checked && !document.getElementById('data_8_3').checked ) {
alert('All variables in PHP starts with which symbol? is required!');
return false;}
if (!document.getElementById('data_9_0').checked && !document.getElementById('data_9_1').checked && !document.getElementById('data_9_2').checked && !document.getElementById('data_9_3').checked ) {
alert('What is the correct way to end a PHP statement? is required!');
return false;}
if (!document.getElementById('data_10_0').checked && !document.getElementById('data_10_1').checked ) {
alert('In PHP you can use both single quotes (' ') and double quotes (" ") for strings is required!');
return false;}
if (!document.getElementById('data_11_0').checked && !document.getElementById('data_11_1').checked && !document.getElementById('data_11_2').checked ) {
alert('PHP server scripts are surrounded by delimiters, which is? is required!');
return false;}
if (!document.getElementById('data_12_0').checked && !document.getElementById('data_12_1').checked && !document.getElementById('data_12_2').checked ) {
alert('How do you write "Hello World" in PHP is required!');
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