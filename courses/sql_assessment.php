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
<div style="padding-bottom: 18px;">What Does Sql stand for?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_1_0" name="data_1" value="Strong Question Language"/> Strong Question Language</span><br/>
<span><input type="radio" id="data_1_1" name="data_1" value="Structured Query Language"/> Structured Query Language</span><br/>
<span><input type="radio" id="data_1_2" name="data_1" value="Super Query Language"/> Super Query Language</span><br/>
</div>
<div style="padding-bottom: 18px;">Which SQL statement is used to update data in a database?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_2_0" name="data_2" value="Save"/> Save</span><br/>
<span><input type="radio" id="data_2_1" name="data_2" value="Modify"/> Modify</span><br/>
<span><input type="radio" id="data_2_2" name="data_2" value="Update"/> Update</span><br/>
</div>
<div style="padding-bottom: 18px;">Which SQL statement is used to extract data from a database?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_3_0" name="data_3" value="Get"/> Get</span><br/>
<span><input type="radio" id="data_3_1" name="data_3" value="Select"/> Select</span><br/>
<span><input type="radio" id="data_3_2" name="data_3" value="Extract"/> Extract</span><br/>
</div>
<div style="padding-bottom: 18px;">Which SQL statement is used to insert new data in a database?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_4_0" name="data_4" value="INSERT INTO"/> INSERT INTO</span><br/>
<span><input type="radio" id="data_4_1" name="data_4" value="INSERT TO"/> INSERT TO</span><br/>
<span><input type="radio" id="data_4_2" name="data_4" value="INSERT NEW"/> INSERT NEW</span><br/>
</div>
<div style="padding-bottom: 18px;">With SQL, how do you select all the columns from a table named "person"?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_5_0" name="data_5" value="SELECT Persons"/> SELECT Persons</span><br/>
<span><input type="radio" id="data_5_1" name="data_5" value="SELECT [ALL] FROM Persons"/> SELECT [ALL] FROM Persons</span><br/>
<span><input type="radio" id="data_5_2" name="data_5" value="SELECT * FROM Persons"/> SELECT * FROM Persons</span><br/>
</div>
<div style="padding-bottom: 18px;">The OR operator displays a record if ANY conditions listed are true. The AND operator displays a record if ALL of the conditions listed are true<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_6_0" name="data_6" value="True"/> True</span><br/>
<span><input type="radio" id="data_6_1" name="data_6" value="False"/> False</span><br/>
</div>
<div style="padding-bottom: 18px;">Which SQL statement is used to return only different values?<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_7_0" name="data_7" value="SELECT UNIQUE"/> SELECT UNIQUE</span><br/>
<span><input type="radio" id="data_7_1" name="data_7" value="SELECT DISTINCT"/> SELECT DISTINCT</span><br/>
<span><input type="radio" id="data_7_2" name="data_7" value="SELECT DIFFERENT"/> SELECT DIFFERENT</span><br/>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
<div>
<div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email">form to email</a></div>
<script src="https://www.100forms.com/js/FORMKEY:SEKMZRG9QFDQ" type="text/javascript"></script>
</div>
</form>

<script type="text/javascript">
function validateForm() {
if (!document.getElementById('data_1_0').checked && !document.getElementById('data_1_1').checked && !document.getElementById('data_1_2').checked ) {
alert('What Does Sql stand for? is required!');
return false;}
if (!document.getElementById('data_2_0').checked && !document.getElementById('data_2_1').checked && !document.getElementById('data_2_2').checked ) {
alert('Which SQL statement is used to update data in a database? is required!');
return false;}
if (!document.getElementById('data_3_0').checked && !document.getElementById('data_3_1').checked && !document.getElementById('data_3_2').checked ) {
alert('Which SQL statement is used to extract data from a database? is required!');
return false;}
if (!document.getElementById('data_4_0').checked && !document.getElementById('data_4_1').checked && !document.getElementById('data_4_2').checked ) {
alert('Which SQL statement is used to insert new data in a database? is required!');
return false;}
if (!document.getElementById('data_5_0').checked && !document.getElementById('data_5_1').checked && !document.getElementById('data_5_2').checked ) {
alert('With SQL, how do you select all the columns from a table named "person"? is required!');
return false;}
if (!document.getElementById('data_6_0').checked && !document.getElementById('data_6_1').checked ) {
alert('The OR operator displays a record if ANY conditions listed are true. The AND operator displays a record if ALL of the conditions listed are true is required!');
return false;}
if (!document.getElementById('data_7_0').checked && !document.getElementById('data_7_1').checked && !document.getElementById('data_7_2').checked ) {
alert('Which SQL statement is used to return only different values? is required!');
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