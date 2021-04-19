
<?php
include('db_reg.php');
$sql = "DELETE FROM computer WHERE computer_id='" . $_GET["computer_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>";
	echo "alert('Record deleted successfully');";
	echo "window.location = 'list_com.php'; ";
	echo "</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
