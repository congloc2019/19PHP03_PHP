
<?php
$errName = $errDescription  = $errEmail = $errDateout = $errDatein = $errFile =  ""; 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
if(empty($_POST['Name']) == false) {

} else {
$errName = "Tên không được rỗng";
}
if(empty($_POST['Description']) == false) {

} else {
$errDescription = "Description không được rỗng";
}

if(empty($_POST['Email']) == false) {

} else {
$errEmail = "Email không được rỗng";
}
if(empty($_POST['Dateout']) == false) {

} else {
$errDateout = "Dateout không được rỗng";
}
if(empty($_POST['Datein']) == false) {

} else {
$errDatein = "Datein không được rỗng";
}
if(empty($_POST['File']) == false) {

} else {
$errFile = "File không được rỗng";
}

}
?>
<html>
<head>
<meta charset="utf-8" />
<title>Form nhập thông tin</title>
</head>
<body>
<form action="" method="POST">
Name: 
<input type="text" name="Name" placeholder="name" /><span class=err><?php echo $errName; ?></span><br />
Description:
<br> 
<textarea cols="40" rows="3" name="message"></textarea><span class=err><?php echo $errDescription; ?></span><br />
File: 
<input type="File" name="File" placeholder="File"/><span class=err><?php echo $errFile; ?></span><br />
Datein 
<input type="date" name="Datein" placeholder="datein"/><span class=err><?php echo $errDatein; ?></span><br />

Dateout
<input type="date" name="Dateout" placeholder="dateout"/><span class=err><?php echo $errDateout; ?></span><br />
Email:
<input type="text" name="email" placeholder="email"/><span class=err><?php echo $errEmail; ?></span><br />
<input type="submit" value="Gửi" />
</form>
<style>
.err{
	color:red;
}
</style>
</body>
</html>
