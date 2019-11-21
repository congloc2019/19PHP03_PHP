<?php 
$x=5;
$y=2;
$c=$x/$y;
if(is_int($c) == true){
	echo "số chẵn";
}
else{
	echo "số lẻ";
}
?>
<br>
<?php
$x = "3.14128"; // $x đang ở dạng chuỗi.
$x = is_int($x);
var_dump($x);
?>
