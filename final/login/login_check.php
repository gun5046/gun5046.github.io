<?php 
	require_once("sess.php");
        if($_POST){
                $user = $_POST['username'];
                $pass = $_POST['password'];
            if($user == "user" && $pass=="1234"){
			
                $_SESSION['logged_in'] = true;
                $_SESSION['logged_user'] = $user;
                header('Location: http://localhost/final/index2.php');
                exit;
            }
            else{
			
                header('Location: http://localhost/final/login/login_error.php');
				exit;
				
            }
        }
	?>