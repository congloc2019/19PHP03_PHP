<style type="text/css">
	.error {
		color: red;
	}
</style>


<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="POST">
		<table>
				
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username" placeholder="Username">*<?php echo $errUsername; ?><br /></td>
			</tr>
			<tr>
				<td>Gender :</td>
				<td>Nam <input type="radio" name="gender" value="Nam">, Nữ <input type="radio" name="gender" value="Nữ">*<?php echo $errGender; ?></td>
			</tr>
			<tr>
				<td>City :</td>
				<td><select name="City">
					<option value="Hà Nội">Hà Nội</option>
					<option value="Hồ Chí Minh">Hồ Chí Minh</option>
					<option value="Đà Nẵng">Đà Nẵng</option>
					<option value="Quảng Nam">Quảng Nam</option>
					*<?php echo $errCity; ?></select>
				</td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td>Date:</td>
				<td><input type="date" name="date" value=""></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Dang ky"></td>
			</tr>
 
		</table>
		
	</form>
	
</body>
</html>


<?php
$errUsernamen = $errGender = $errerrCity = $errEmail = "";
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
