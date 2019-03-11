<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
require 'vendor/autoload.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $connection = new MongoDB\Client('mongodb://localhost:27017');
    $db = $connection->zest;
    $tdb = $db->teacher;
    $query = array('username'=>$_SESSION['username']);
	if(!empty($tdb->findOne($query)))
	{
        $query1 = array('teacher_name'=>true);
		$author_name = $tdb->findOne($query,$query1); 
        $author_type = "teacher";
        echo "1";
    }
	else
	{
        $sdb = $db->student;
        $query1 = array('student_name'=>true);
		$author_name = $sdb->findOne($query,$query1);
        $author_type = "student";
        echo "2";
	}
    $author_username = $_SESSION['username'];
    $topics = $_POST['topics_list'];
	$title = $_POST['title'];
    $time = date("d-M-y",time());
	$upvotes = 0;
	$downvotes = 0;
	$comments = array();
    $description = "";
    $attachments = "";
    if($_POST['description'])
    {
        $description = $_POST['description'];
    }
    /*if($_FILES)
    {
        echo "3";
        $target_dir = "";
        if(count($_FILES['attachments']['name']) == 1)
        {
            echo "4";
            $target_file = $target_dir.basename($_FILES["attachments"]["name"]);
            $uploadOk = 1;
            $attachments = $target_file;
            if(file_exists($target_file)) {
				header('location:pitch.html');
				exit();
            }
            if(move_uploaded_file($_FILES["attachments"]["tmp_name"], $target_file)){echo "6";} 
            else
            {
                echo "9";
              header('location:pitch.html');
              exit();
            }           
        }
        elseif(count($_FILES['attachments']['name']) > 1)
        {
            for($i = 0; $i < count($_FILES['attachments']['name']); $i++)
            {
                echo "5";
                $target_file = $target_dir . basename($_FILES["attachments"]["name"][$i]);
				$uploadOk = 1;
				$attachments += $target_file;
                if (file_exists($target_file)) {
					$uploadOk = 0;
					header("location:pitch.html");
					exit();
                }
                if (move_uploaded_file($_FILES["attachments"]["tmp_name"][$i], $target_file)) 
                {
                    echo "8";
					$uploadOk = 1;
                } 
                else
                {
                    echo "7";
					header('location:pitch.html');
					exit();
                }
			}
        }
    }*/

	$posts = $db->posts;
	$query = array("title" => $title,"author" => $author_name, "username" => $author_username, "time" => $time, "topics" => $topics, "upvotes" => $upvotes, "downvotes" => $downvotes,"comments" => $comments, "description"=>$description,"attachments" => $attachments,"authorType"=>$author_type);
    $posts->insertOne($query);
    header('location:home.php');
    exit();
}
?>
