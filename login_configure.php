<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="login_configure.php" method="post">
		<input type="submit" value="logout" name="logout">
	</form>	
</body>
</html>

<?php
session_start();
if($_SESSION['uemail']){
	echo $_SESSION['uemail'];
	if(isset($_POST['logout'])){

		header('location:login.php');
		session_destroy();
	}
}

else{
	echo "You are not logged in";
}

?>