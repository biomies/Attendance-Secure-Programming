
<?php
session_start();
require_once('../connect.php');


  try{
    
      if(isset($_POST['signup'])){

        if(empty($_POST['email'])){
          $_SESSION['error'][]="Email cann't be empty.";
				header('location: ../signup.php');
        }

        if(empty($_POST['uname'])){
           $_SESSION['error'][]="Username cann't be empty.";
				header('location: ../signup.php');
        }

        if(empty($_POST['pass'])){
           $_SESSION['error'][]="Password cann't be empty.";
				header('location: ../signup.php');
        }
        
        if(empty($_POST['fname'])){
           $_SESSION['error'][]="Name cann't be empty.";
				header('location: ../signup.php');
        }
        if(empty($_POST['phone'])){
           $_SESSION['error'][]="Phone cann't be empty.";
				header('location: ../signup.php');
        }
        if(empty($_POST['type'])){
           $_SESSION['error'][]="Role cann't be empty.";
				header('location: ../signup.php');
        }

        $password=$_POST['pass'];
        $hash=password_hash($password,PASSWORD_DEFAULT);

        $result = mysqli_query($connection,"INSERT into admininfo(username,password,email,fname,phone,type) values('$_POST[uname]','$hash','$_POST[email]','$_POST[fname]','$_POST[phone]','$_POST[type]')");
        $success_msg="Signup Successfully!";

        header('location: ../index.php');
  }
}
  catch(Exception $e){
    $error_msg =$e->getMessage();
  }

?>