
<?php
	session_start();
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "registration";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strSQL = "SELECT * FROM user WHERE username = '".mysqli_real_escape_string($objCon,$_POST['username'])."' 
	and password = '".mysqli_real_escape_string($objCon,$_POST['txtpassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["username"] = $objResult["username"];
			$_SESSION["status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "user")
			{
				header("location:index.php");
			}
			else
			{
				header("location:login.php");
			}
	}
	mysqli_close($objCon);
?>
