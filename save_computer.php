<?php include ('db_reg.php'); 
$serial_computer = $_POST['serial_computer'];
	$sql = " INSERT INTO computer
	(serial_computer)
	VALUES
	('$serial_computer')";
	
	$result = mysqli_query($conn,$sql);
	//ปิดการเชื่อมต่อ database
	mysqli_close($conn);

	if ($result){
		echo "<script type='text/javascript'>";
		echo"alert('Register Success');";
	    echo"window.location = 'add_com.php';";
		echo "</script>";
    }
    else {
    //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
        echo "<script type='text/javascript'>";
        echo "alert('error!');";
        echo "window.location = 'add_com.php'; ";
        echo"</script>";

}
 
 
?>