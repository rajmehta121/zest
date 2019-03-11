<?php
	session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL); 
	require 'vendor/autoload.php';
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['name'] = $_POST['name'];
        	if($_POST['submit'] == 'teacher')
        	{
			echo "request received";
			$email = $_POST['email'];
            		$name = $_POST['name'];
            		$mob_no = $_POST['phoneno'];
            		$dob = $_POST['dob'];
            		$username = $_POST['username'];
            		$password = $_POST['password'];
            		$qualifications = $_POST['qualifications'];
			try{
				$connection = new MongoDB\Client("mongodb://localhost:27017");
				echo "connection successful"; 
				$db = $connection->zest;
				echo "Connection successful";				
                		$teacher = $db -> teacher;
				$query = array("teacher_name" => $name,"email" => $email,"username" => $username,"dob" => $dob,"password" => 					$password,"mobile" => $mob_no,"qualifications" => $qualifications);
				$teacher->insertOne(["teacher_name" => $name,"email" => $email,"username" => $username,"dob" => 					$dob,"password" =>$password,"mobile" => $mob_no,"qualifications" => $qualifications]);
				$result = $teacher->find(['name'=>$name]);
				echo "accessed collection";
				echo "query performed";
				echo "connection closed";
                		header('Location:home.php');
                		exit();
			}
			catch(Exception $e)
			{
				echo $e;
			}
        	}
        	elseif($_POST['submit'] == 'student')
        	{
            		$email = $_POST['email'];
            		$name = $_POST['name'];
            		$mob_no = $_POST['phoneno'];
            		$dob = $_POST['dob'];
            		$username = $_POST['username'];
            		$password = $_POST['password'];
            		$college = $_POST['college'];
			try
			{            		
				$connection = new MongoDB\Client('mongodb://localhost:27017');
                		$db = $connection->zest;
                		$query = array("student_name" => $name,"email" => $email,"username" => $username,"dob" => $dob,"password" => 						$password,"mobile" => $mob_no,"college" => $college);
                		$student = $db -> student;
                		$student -> insertOne($query);
                		//$connection->close();
                		header('Location:home.php');
				exit();
            		}
			catch(Exception $e)
			{
				echo $e;
			}
		}
	        else
        	{
        	    $username = $_POST['username'];
				$password = $_POST['password'];
				try
				{
					$connection = new MongoDB\Client("mongodb://localhost:27017");
					$db = $connection->zest;
					$teacher = $db->teacher;
					$student = $db->student;
					$query = array("username" => $username,"password" => $password);
					if($teacher->findOne($query) || $student->findOne($query))
					{
						//$connection->close();
						header('Location:home.php');
						exit();
					}
					else
					{
						//$connection->close();
						header('Location:login-signup.html');
						exit();
					}
				}
				catch(Exception $e)
				{
					echo $e;
				}
        	}
?>
