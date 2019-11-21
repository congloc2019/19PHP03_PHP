<?php 
		if (isset($_POST['register'])) {
			$Username = $_POST['Username'];
			$Body = $_POST['Body'];
			$avatar = 'default.png';
			if ($_FILES['avatar']['error'] == 0) {
				$avatar = $_FILES['avatar']['name'];
				move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'.$avatar);
			}
			$sqlInsert = "INSERT INTO users(Username, Body, avatar) VALUES ('$Username', '$Body', '$avatar')";
			if (mysqli_query($connect, $sqlInsert) === TRUE) {
				// chuyen trang
				header('Location: list.php');
			}
		}
		
<!DOCTYPE html>
<html>
<head>
	<title>bai12</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Form chỉnh sửa</h1>
	<?php include 'dulieu.php';?>
	<form action="#" method="POST" enctype="multipart/form-data">
		Username:
		<input type="text" name="Username"><br><br>
		Body:
		<input type="text" name="Body"><br><br>
		File:
		<input type="file" name="Avatar"><br><br>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>