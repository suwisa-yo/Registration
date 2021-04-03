<?php include ('db_reg.php'); 
$serial_computer=$_POST['serial_computer'];
$cpu_computer=$_POST['cpu_computer'];
$Main_Memory=$_POST['Main_Memory'];
$storage_computer=$_POST['storage_computer'];
$brand=$_POST['brand'];
$Os_computer=$_POST['Os_computer'];
$ms_office = $_POST['ms_office'];
$anitVirus = $_POST['anitVirus'];
$Asset_no = $_POST['Asset_no'];
$responsible = $_POST['responsible'];
$section= $_POST['section'];
$location= $_POST['location'];
	$sql = " INSERT INTO computer(serial_computer,cpu_computer,Main_Memory,storage_computer,brand,Os_computer,ms_office,anitVirus,Asset_no,responsible,section,location)
	VALUES('$serial_computer','$cpu_computer','$Main_Memory','$storage_computer','$brand','$Os_computer','$ms_office','$anitVirus','$Asset_no','$responsible','$section','$location')";
	
	$result = mysqli_query($conn,$sql);
	//ปิดการเชื่อมต่อ database
	mysqli_close($conn);

// 	if ($result){
//  		echo "<script type='text/javascript'>";
// 		echo"alert('Register Success');";
// 	    echo"window.location = 'add_com.php';";
// 		echo "</script>";
//    }
//    else {
//   //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
//        echo "<script type='text/javascript'>";
//        echo "alert('error!');";
//      echo "window.location = 'add_com.php'; ";
//       echo"</script>";

// }
 
 
?>