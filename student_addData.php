<?php
$id = $_POST['id'];
$fname = $_POST['firstname'];
$gname = $_POST['gname'];
$email = $_POST['email'];
$addrs = $_POST['raddress'];
$phone = $_POST['phone'];
$inst = $_POST['institute'];
$gender = $_POST['gender'];

$con = mysqli_connect('localhost','root','','student_data');
$query = "INSERT INTO student_table VALUES ('$id','$fname','$gname','$email','$addrs','$phone','$inst','$gender')";
$run = mysqli_query($con,$query);
if($run){
	?>
		<script type="text/javascript">
			alert("Successfully Added");
		</script>
		<meta http-equiv = "refresh" content = "0; url = student_form.php" />
	<?php

}
else{
	if ($con->error)
	{
		?>
		<script type="text/javascript">
			alert("The Entered ID already exist");
		</script>
		<meta http-equiv = "refresh" content = "0; url = student_form.php" />
		<?php
	}
}

?>