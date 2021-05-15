<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
 //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//$images = $_REQUEST['images']; //รับค่าไฟล์จากฟอร์ม	

//ฟังก์ชั่นวันที่
        date_default_timezone_set('Asia/Bangkok');
	$date = date("Ymd");	
//ฟังก์ชั่นสุ่มตัวเลข
         $numrand = (mt_rand());
//เพิ่มไฟล์
// $upload=$_FILES['img'];
// if($upload <> '') {   //not select file
// //โฟลเดอร์ที่จะ upload file เข้าไป 
// $path="images/";  

// //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
//  $type = strrchr($_FILES['img']['name'],".");
	
// //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม

// $newname = $date.$numrand.$type;
// // $path_copy=$path.$newname;
// $path_link="images/".$newname;

$serial_computer=$_POST['serial_computer'];
$cpu_computer=$_POST['cpu_computer'];
$Main_Memory=$_POST['Main_Memory'];
$storage_computer=$_POST['storage_computer'];
$storage_detail=$_POST['storage_detail'];
$brand=$_POST['brand'];
$type_com=$_POST['type_com'];
$Os_computer=$_POST['Os_computer'];
$ms_office = $_POST['ms_office'];
$anti_virus = $_POST['anti_virus'];       
$Asset_no = $_POST['Asset_no'];
$responsible = $_POST['responsible'];
$section= $_POST['section'];
$location= $_POST['location'];
// //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
// move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);  	
// 	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	// $sql = "INSERT INTO computer (serial_computer,cpu_computer,Main_Memory,storage_computer,brand,Os_computer,ms_office,anti_virus,Asset_no,responsible,section,location) ,img
	// 	VALUES('$serial_computer','$cpu_computer','$Main_Memory','$storage_computer','$brand','$Os_computer','$ms_office','$anti_virus','$Asset_no','$responsible','$section','$location','$newname')";
	$sql = "INSERT INTO computer (serial_computer,cpu_computer,Main_Memory,storage_computer,storage_detail,brand,type_com,Os_computer,ms_office,anti_virus,Asset_no,responsible,section,location) 
		VALUES('$serial_computer','$cpu_computer','$Main_Memory','$storage_computer','$storage_detail','$brand','$type_com','$Os_computer','$ms_office','$anti_virus','$Asset_no','$responsible','$section','$location')";
		
		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($conn);
	//javascript แสดงการ upload file
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Upload File Succesfuly');";
	echo "window.location = 'list_com.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
	echo "</script>";
}
?>