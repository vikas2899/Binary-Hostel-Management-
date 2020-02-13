<?
   $email=$_POST["email"]
   $password=$_POST["pass"]
       if($email=='samyakj666@gmail.com'){
           if($password=='samyak123'){
               session_start();
               header('Location: index.html');
           }
       }else{
           echo "Please enter valid emailId or password"
       }
?>