<?php
       //ตรวจสอบว่ามีการส่งค่าตัวแปร $_POST['value'] หรือไม่
    if(!isset($_POST['value'])){
        exit();
    }
    //ตั้งค่าการเชื่อมต่อฐานข้อมูล
    $database_host             = 'localhost';
    $database_username         = 'root';
    $database_password         = '';
    $database_name             = 'registration';
 
    $mysqli = new mysqli($database_host, $database_username, $database_password, $database_name);
//กำหนด charset ให้เป็น utf8 เพื่อรองรับภาษาไทย
    $mysqli->set_charset("utf8");
 
//กรณีมี Error เกิดขึ้น
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
    
    //MySqli Select Query
    $value = '%'.$_POST['value'].'%';
    $result = $mysqli->prepare("SELECT * FROM computer WHERE serial_computer  LIKE  ?");
    $result->bind_param("s",$value);
    $result->execute();
    $result->bind_result($serial_computer ,$cpu_computer);
    
    while($result->fetch()){
        echo"<tr>";
            echo "<td>".$serial_computer ."</td>";
            echo "<td>".$cpu_computer."</td";
        echo"</tr>";
    }
?>