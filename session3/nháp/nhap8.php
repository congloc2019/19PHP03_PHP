
<html>
<head>
<meta charset="utf-8" />
<title>Form nhập thông tin</title>
</head>
<body>
<form method="POST">
Username:
<input type=text name=Username /><?php echo "username"?><br><br>
Gende:
<input type=radio name=Gende>Men
<input type=radio name=Gende>Women<br><br>
Mail:
<input type=text name=Mail /><br><br>
City:
<input type=text name=City /><br><br>
Bithday:
<input type=date name=Bithday /><br><br>
<input type=submit name=Register />Register<br>


<?php

echo "<p style='color:red'>Bai8</p>";
$errHoten = $errGioitinh = $errDiachi = $errEmail = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
if(empty($_POST['hoten']) == false) {

} else {
echo "vui long nhập"
}
}
	
?>