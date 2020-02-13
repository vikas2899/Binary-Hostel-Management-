<?php
session_start();
if(isset($_SESSION['uemail'])){
  header('location:login_configure.php');
}
?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: DodgerBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: SlateBlue;
}

div {
   margin-top: 10px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 350px;
  border-radius: 5px;
  background-color: #f0f8ff;
  padding: 80px;
  align-content: center;
  height: 250px;
  width: 400px;
}
h1{
  text-align: center;
  color: #00BFFF;
}
</style>
<body>

<h1 style="font-family: century gothic;">Admin Login</h1>

<div>
  <form action="login.php" method="post">
    <label for="name">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email">

    <label for="password">Password</label>
    <input type="text" id="password" name="password" placeholder="Enter your password">
  
    <input type="submit" value="Submit" name="submit">
  </form>
</div>

</body>
</html>
<?php
$con = mysqli_connect('localhost','root','','admin_data');
if(isset($_POST["submit"])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $query = "SELECT * FROM admin_table WHERE email='$email' AND password='$pass'";
  $run=mysqli_query($con,$query);
  $row = mysqli_num_rows($run);
  if($row<1){
?>
  <script type="text/javascript">
    alert("Wrong Username or Password");
    </script>
  <?php 
  }
  else{
    $data = mysqli_fetch_assoc($run);
    $id = $data['email'];
    $_SESSION['uemail'] = $id;
    header('location:login_configure.php');
  }
}
?>