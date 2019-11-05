
<html>
<head>
	<title>form8</title>
	<meta charset="utf-8">
</head>
<body>
	<form method=="POST">
	Username:
	<input type="text" name="Username" value=" " /><span class="error"><?php echo $errUsername; ?></span><br><br>
	Body:
	<input type="text" name="Body" value=" " /><span class="error"><?php echo $errBody; ?><br><br>
	File:
	<input type="file" name="File" value=" " /><span class="error"><?php echo $errFile; ?><br><br>
	Dayin:
	<input type="date" name="Dayin" value=" " /><span class="error"><?php echo $errDatein; ?><br><br>
	Dayoff:
	<input type="date" name="Dayout" value=" " /><span class="error"><?php echo $errDateout; ?><br><br>
	<input type="submit" name="register" /> 
	</form>
	<style type="text/css">
	.error {
	color: red;
	}
</style
</body>
</html>

<?php
$errUsername = $errBody = $errFile = $errDatein = $errCity = ""; 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
if(empty($_POST['Username']) == false) {

} else {
$errHoten = "Username không được rỗng";
}
 
if(empty($_POST['Body']) == false) {

} else {
$errGioitinh = "Body phải chọn";
}
 
if(empty($_POST['File']) == false) {

} else {
$errDiachi = "File không được rỗng";
}
 
if(empty($_POST['Datein']) == false) {

} else {
$errEmail = "Dateinlkhông được rỗng";
}
if(empty($_POST['Dateout']) == false) {

} else {
$errEmail = "Dateout không được rỗng";
}
}
?>