<?php
//1. เชื่อมต่อ database: 
include('db_reg.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
// ตรวจสอบถ้าว่างให้เด้งไปหน้าหลักและไม่แก้ไขข้อมูล
// if($_POST["computer_id"]==''){
// echo "<script type='text/javascript'>"; 
// echo "alert('Error Contact Admin !!');"; 
// echo "window.location = 'list_com.php'; "; 
// echo "</script>";
// }
 
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$computer_id = $_POST["computer_id"];
	$serial_computer = $_POST["serial_computer"];
	$cpu_computer = $_POST["cpu_computer"];
	$Main_Memory = $_POST["Main_Memory"];
	$storage_computer = $_POST["storage_computer"];	
	$brand = $_POST["brand"];
	$Os_computer = $_POST["Os_computer"];
	$ms_office = $_POST["ms_office"];
	$anti_virus = $_POST["anti_virus"];
	$Asset_no = $_POST["Asset_no"];
	$responsible= $_POST["responsible"];
	$section= $_POST["section"];
	$location= $_POST["location"];
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE computer SET  
			serial_computer='$serial_computer' ,
			cpu_computer='$cpu_computer' , 
			Main_Memory='$Main_Memory' ,
			storage_computer='$storage_computer' ,
			brand='$brand',
			Os_computer='$Os_computer',
			ms_office='$ms_office',
			Asset_no='$Asset_no',
			responsible='$responsible',
			section='$section',
			location='$location'

			WHERE computer_id='$computer_id' ";
 
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($conn); //ปิดการเชื่อมต่อ database 
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'list_com.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = 'list_com.php'; ";
	echo "</script>";
}
?>
