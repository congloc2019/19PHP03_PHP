
<form method='POST'> 
       <h2>Nhập tên đăng nhập:</h2>
	   <input type="text" name="ten_dang_nhap"> 
       <input type="submit" value="Đăng nhập"> 
       </form>
       <?php  
         //Lấy name từ chuỗi truy vấn và lưu trữ vào trong biến cục bộ
		$name = $_POST['ten_dang_nhap'];  
		echo "<h3>Chúc mừng $name đã đăng nhập thành công!</h3>";  
		?>
