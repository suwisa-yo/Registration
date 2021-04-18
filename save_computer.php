<?php include ('db_reg.php'); 

date_default_timezone_set('Asia/Bangkok');
//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
$date1 = date("Ymd_his");
//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());

//รับชื่อไฟล์จากฟอร์ม 
$img = (isset($_REQUEST['img']) ? $_REQUEST['img'] : '');

$upload=$_FILES['img'];
if($upload <> '') { 

//โฟลเดอร์ที่เก็บไฟล์
$path="images/";
//ตัวขื่อกับนามสกุลภาพออกจากกัน
$type = strrchr($_FILES['img']['name'],".");
//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
$newname =$numrand.$date1.$type;

$path_copy=$path.$newname;
$path_file_img="images/".$newname;
//คัดลอกไฟล์ไปยังโฟลเดอร์
if(move_uploaded_file($_FILES['img']['tmp_name'],"images/".$_FILES["img"]["tmp_name"]))
{

$serial_computer=$_POST['serial_computer'];
$cpu_computer=$_POST['cpu_computer'];
$Main_Memory=$_POST['Main_Memory'];
$storage_computer=$_POST['storage_computer'];
$brand=$_POST['brand'];
$Os_computer=$_POST['Os_computer'];
$ms_office = $_POST['ms_office'];
$anti_virus = $_POST['anti_virus'];       
$Asset_no = $_POST['Asset_no'];
$responsible = $_POST['responsible'];
$section= $_POST['section'];
$location= $_POST['location'];

}

	$sql = " INSERT INTO computer(serial_computer,cpu_computer,Main_Memory,storage_computer,brand,Os_computer,ms_office,anti_virus,Asset_no,responsible,section,location,img)
	      VALUES('$serial_computer','$cpu_computer','$Main_Memory','$storage_computer','$brand','$Os_computer','$ms_office' ,'$anti_virus','$Asset_no','$responsible','$section','$location','$img')";
	
	$result = mysqli_query($conn,$sql);
	//ปิดการเชื่อมต่อ database
	

	mysqli_close($conn);

// if ($result){
// 	echo "<script type='text/javascript'>";
// 	echo"alert('Register Success')";
// 	echo"window.location = 'add_com.php'";
// 	echo "</script>";
//  }
//  else {
// //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
//      	echo "<script type='text/javascript'>";
//    		echo "alert('error!');";
// 		echo "window.location = 'add_com.php'; ";
// 		echo"</script>";

 }

?>