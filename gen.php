<?php
// ใช้ฟังก์ชัน substr
$prefix="89";
$start = 0;
$end = 10;
$last = $start + $end;

for ($i = $start;$i <= $last; $i++){
	$x_number = $i;
	$x_number += 1;
	//$x_string =  substr($prefix."00000000000000".$x_number,-13,13);
	//echo (string)$x_number;
	// ใช้ฟังก์ชัน str_pad
	$last_number = str_pad($x_number, 11, "0", STR_PAD_LEFT);
	$last_number = $prefix.$last_number;
	echo $last_number."<br>";
	// โครงสร้าง str_pad
	// str_pad($ชื่อตัวแปรหมายเลขสมาชิก,จำนวนหลักที่ต้องการ,"ตัวที่ต้องการเติมเข้าไปให้เต็มหลักที่กำหนด เช่น # หรือ 0",ด้านที่ต้องการให้เติม ซ้าย ขวา หรือ ทั้งสองข้าง);
}
 //รอเชื่อมกับ function check digit
?>
