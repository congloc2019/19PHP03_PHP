<style type="text/css">
	.error {
	color: red;
	}
</style>

<?php
$errHoten = $errGioitinh = $errDiachi = $errEmail = $errCity = ""; 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
if(empty($_POST['hoten']) == false) {

} else {
$errHoten = "Họ tên không được rỗng";
}
 
if(empty($_POST['gioitinh']) == false) {

} else {
$errGioitinh = "Giới tính phải chọn";
}
 
if(empty($_POST['diachi']) == false) {

} else {
$errDiachi = "Địa chỉ không được rỗng";
}
 
if(empty($_POST['email']) == false) {

} else {
$errEmail = "Email không được rỗng";
}
}
?>
<html>
<head>
<meta charset="utf-8" />
<title>Form nhập thông tin</title>
</head>
<body>
<form method="POST">
Họ tên: 
<input type="text" name="hoten" />*<?php echo $errHoten; ?><br />
Giới tính: 
<input type="radio" name="gioitinh" value="nam" /> Nam 
<input type="radio" name="gioitinh" value="nu" /> Nữ *<?php echo $errGioitinh; ?><br/>
Địa chỉ:
<input type="text" name="diachi" />*<?php echo $errDiachi; ?><br />
Email:
<input type="text" name="email" />*<?php echo $errEmail; ?><br />
<input type="submit" value="Gửi" />
City:
<select name="City">
					<option value="Hà Nội">Hà Nội</option>
					<option value="Hồ Chí Minh">Hồ Chí Minh</option>
					<option value="Đà Nẵng">Đà Nẵng</option>
					<option value="Quảng Nam">Quảng Nam</option>
					*<?php echo $errCity; ?></select>
</form>
</body>
</html>