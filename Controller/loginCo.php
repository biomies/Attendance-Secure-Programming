<?php
session_start();
require_once('../connect.php');
if(isset($_POST['login']))
{
	//start of try block

	//try{

		//checking empty fields
		// if(empty($_POST['username'])){
		// 	throw new Exception("Username is required!");
			
		// }
		// if(empty($_POST['password'])){
		// 	throw new Exception("Password is required!");
			
		// }
		//establishing connection with db and things
		if(isset($_POST['username'])&&isset($_POST['password'])){
			
            //user wants to login
            if ($stmt = $connection->prepare('SELECT type, password FROM admininfo WHERE username = ?')) {
                
                $stmt->bind_param('s', $_POST['username']);
                $stmt->execute();
                
                $stmt->store_result();
                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($type,$password);
                    $stmt->fetch();
					
        if (password_verify($_POST['password'],$password)) {
		//checking login info into database
		// $query="SELECT * from admininfo where username='$_POST[username]' and password='$_POST[password]' and type='$_POST[type]'";
		// $result=$connection->query($query);
		// $row=$result->num_rows;
		if($type==$_POST['type']){
		if($type == 'teacher'){
			$_SESSION['usname']=$_POST['username'];
			$_SESSION['name']="oasis";
			header('location: ../teacher/index.php');
		}

		else if($type == 'student'){
			$_SESSION['usname']=$_POST['username'];
			$_SESSION['name']="oasis";
			header('location: ../student/index.php');
		}

		else if($type == 'admin'){
			$_SESSION['usname']=$_POST['username'];
			$_SESSION['name']="oasis";
			header('location: ../admin/index.php');
		}
		}else{
			echo"Wrong role";
			header('location: ../index.php');
		}

		
	}else{
		//throw new Exception("Username,Password or Role is wrong, try again!");
		$_SESSION['error']="Username,Password or Role is wrong, try again!";
		header('location: ../index.php');
		}	
			}else{
				$_SESSION['error']="Username,Password or Role is wrong, try again!";
				header('location: ../index.php');
			}
				}else{
				$_SESSION['error']="Username,Password or Role is wrong, try again!";
				header('location: ../index.php');
}
		}else{
			$_SESSION['error']="Username,Password or Role is wrong, try again!";
		header('location: ../index.php');
		}
	
	}else{
		$_SESSION['error']="Username,Password or Role is wrong, try again!";
		header('location: ../index.php');
	}

	//end of try block
	//catch(Exception $e){
		//$error_msg=$e->getMessage();
	//}
	//end of try-catch
//}

?>