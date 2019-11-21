<!DOCTYPE html>
<html>
<head>
	<title>aac</title>
</head>
<body>
<form action="" method="post">
    Username: 
    <input type="text" name="fullname" value="">
    Body: 
    <input type="text" name="Body" value="">
    Note: 
    <input type="text" name="Note" value="">
    Gende: 
    <input type="radio" name="fullname" value="">
    Họ tên: 
    <input type="text" name="fullname" value="">
    <button type="submit">Gửi</button>
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["fullname"])) {
        echo "<span style='color:red;'>Error: Họ tên cần phải điền</span>";
    } else {
        echo $_POST["fullname"];
    }
}
?>
</body>
</html>