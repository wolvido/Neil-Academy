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

<form method="post" action="check.php">
<div style="width: 400px;">
</div>
<div style="padding-bottom: 18px;">What does HTML stand for?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_1_0" name="data_1" value="Home Tool Markup Language"/> Home Tool Markup Language</span><br/>
<span><input type="radio" id="data_1_1" name="data_1" value="Hyper Text Markup Language"/> Hyper Text Markup Language</span><br/>
<span><input type="radio" id="data_1_2" name="data_1" value="Hyperlinks and Text Markup Language"/> Hyperlinks and Text Markup Language</span><br/>
</div>
<div style="padding-bottom: 18px;">Choose the correct HTML element for the largest heading:<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_2_0" name="data_2" value="<heading>"/> &lt;heading&gt; </span><br/>
<span><input type="radio" id="data_2_1" name="data_2" value="<h6>"/> &lt;h6&gt; </span><br/>
<span><input type="radio" id="data_2_2" name="data_2" value="<h1>"/> &lt;h6&gt; </span><br/>
</div>
<div style="padding-bottom: 18px;">What is the correct HTML element for inserting a line break?<br/>
<span><input type="radio" id="data_3_0" name="data_3" value="<break>"/> &lt;break&gt;</span><br/>
<span><input type="radio" id="data_3_1" name="data_3" value="<lb>"/> &lt;lb&gt;</span><br/>
<span><input type="radio" id="data_3_2" name="data_3" value="<br>"/> &lt;br&gt;</span><br/>

<div style="padding-bottom: 18px;">Inline elements are normally displayed without starting a new line.<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_5_0" name="data_4" value="True"/> True</span><br/>
<span><input type="radio" id="data_5_1" name="data_4" value="False"/> False</span><br/>
</div>
<div style="padding-bottom: 18px;">Block elements are normally displayed without starting a new line.<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_6_0" name="data_5" value="True"/> True</span><br/>
<span><input type="radio" id="data_6_1" name="data_5" value="False"/> False</span><br/>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
<div>
</div>
</form>

<script type="text/javascript">
function validateForm() {
if (!document.getElementById('data_1_0').checked && !document.getElementById('data_1_1').checked && !document.getElementById('data_1_2').checked ) {
alert('What does HTML stand for? is required!');
return false;}
if (!document.getElementById('data_2_0').checked && !document.getElementById('data_2_1').checked && !document.getElementById('data_2_2').checked ) {
alert('Choose the correct HTML element for the largest heading: is required!');
return false;}
if (!document.getElementById('data_4_0').checked && !document.getElementById('data_4_1').checked && !document.getElementById('data_4_2').checked ) {
alert('What is the correct HTML for creating a hyperlink? is required!');
return false;}
if (!document.getElementById('data_5_0').checked && !document.getElementById('data_5_1').checked ) {
alert('Inline elements are normally displayed without starting a new line. is required!');
return false;}
if (!document.getElementById('data_6_0').checked && !document.getElementById('data_6_1').checked ) {
alert('Block elements are normally displayed without starting a new line. is required!');
return false;}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }

</script>
</body>
</html>