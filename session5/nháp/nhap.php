<html>
<body>
  
<form method="get">
<h2>Ví dụ 2 nút submit 1 form --- dammio.com</h2>
Tên: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" name="btnSubmit" id="btnSubmit" value="Action1" />
<input type="submit" name="btnSubmit" id="btnSubmit" value="Action2" />
</form>
 
<?php
 
if (isset($_GET['btnSubmit'])) // Kiểm tra nút có giá trị dữ liệu
{
    if($_GET['btnSubmit'] == 'Action1') 
    {
        echo 'Đây là nút Submit 1';
        //Thực hiện đoạn mã tiếp theo --- dammio.com
    }
 
    if($_GET['btnSubmit'] == 'Action2') 
    {   
        echo "Đây là nút Submit 2";
        //Thực hiện đoạn mã tiếp theo
    }
}
?>
</body>
</html>