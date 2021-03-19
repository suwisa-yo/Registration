<?
require_once('db_reg.php');
$db = new Database('registration','root','','localhost'); // เชื่อมต่อฐานข้อมูล
$result = $db->insert('computer',$_POST); 
?>