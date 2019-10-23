<?php
$name="Đặng Công Lộc";

$city="Đà Nẵng";

$mobile="0123456789";

Echo "<i style='font-size:30px';>Tên:</i> <b style='font-size:30px; color:blue'>$name.</b> <br>";

Echo "Nơi sinh :<i> $city.</i><br>";

Echo "SĐT : <u>$mobile. </u><br>";

$month = 3;
$year=2019;
switch($month){
case 1:
	echo "<p style='color:blue'>Tháng 1 có 31 ngày</p>";
	break;
case 2:
	if($year%4==0){
	echo "<b style='color:blue'>tháng 2 có 28 ngày</b><br>";}
	else{echo "<b style='color:red'>tháng 2 có 29 ngày</b> ";}
	break;
case 3:
	echo "<b style='color:#2E2EFE'>Tháng 3 có 31 ngày</b>";
	break;
case 4:
	echo "Tháng 4 có 30 ngày";
	break;
case 5:
	echo "Tháng 5 có 30 ngày";
	break;
case 6:
	echo "Tháng 6 có 30 ngày";
	break;
case 7:
	echo "Tháng 7 có 31 ngày";
	break;
case 8:
	echo "Tháng 8 có 31 ngày";
	break;
case 9:
	echo "Tháng 9 có 30 ngày";
	break;
case 10:
	echo "Tháng 10 có 31 ngày";
	break;
case 11:
	echo "Tháng 11 có 30 ngày";
	break;
case 12:
	echo "Tháng 12 có 31 ngày";
	break;

default:
	echo "vui lòng nhập lại";
	break;
}
	
?>
