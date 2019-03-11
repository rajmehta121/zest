<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
require 'vendor/autoload.php';
$connection = new MongoDB\Client('mongodb://localhost:27017');
$db = $connection->zest;
$pdb = $db->posts;
$filter = array();
$options = array("sort" => array("time" => -1));
$result = $pdb->find($filter,$options);
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" href="http://gambolthemes.net/html/workwise/css/animate.css">
	<link rel="stylesheet" type="text/css" href="http://gambolthemes.net/html/workwise/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://gambolthemes.net/html/workwise/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="http://gambolthemes.net/html/workwise/css/responsive.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
</head>
<body oncontextmenu="return false;">
	<div class="wrapper">
        <header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="home.php" title=""><span style="text-decoration: none;color: white;font-size: 28px;font-family: 'Pacifico', cursive">Zest</span></a>
					</div><!--logo end-->
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-search"></i></button>
						</form>
					</div><!--search-bar end-->
					
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
							<img src="http://gambolthemes.net/html/workwise/images/resources/user.png" alt="">
							<a href="#" title="" >
							<?php 
								$sname = $_SESSION["name"]; 
								print_r($sname); 
							?>
							</a>
							<i class="fas fa-sort-down"></i>
						</div>
						<div class="user-account-settingss">
							<h3>Setting</h3>
							<ul class="us-links">
								<li><a href="profile-account-setting.html" title="">Account Setting</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Faqs</a></li>
								<li><a href="#" title="">Terms &amp; Conditions</a></li>
							</ul>
							<h3 class="tc"><a href="logout.php" target = "_self" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->	

		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin" style="position: fixed;width: 270px">
									<div class="user-data full-width" style="height: 400px"><br>
                                        <center><a href="pitchHome.php" style="text-decoration:none;color:#FEDC56;font-size: 30px;padding-left:20px;padding-right: 20px; border: solid;border-color: #1122a3;background-color: #1122a3;border-radius: 30px">Pitch</a></center><br>
                                        <span style="font-size: 30px;line-height: 50px;font-style: bold">Topics</span><br>
                                        <a href="" style="text-decoration: none;color: black">General</a><br>
                                        <a href="" style="text-decoration: none;color: black">Science</a><br>
                                        <a href="" style="text-decoration: none;color: black">&nbsp;&nbsp;&nbsp;&nbsp;Engineering</a><br>
                                        <a href="" style="text-decoration: none;color: black">&nbsp;&nbsp;&nbsp;&nbsp;Medical</a><br>
                                        <a href="" style="text-decoration: none;color: black">&nbsp;&nbsp;&nbsp;&nbsp;BSC</a><br>
                                        <a href="" style="text-decoration: none;color: black">&nbsp;&nbsp;&nbsp;&nbsp;Architecture</a><br>
                                        <a href="" style="text-decoration: none;color: black">Commerce</a><br>
                                        <a href="" style="text-decoration: none;color: black">Arts</a><br>
                                        <a href="" style="text-decoration: none;color: black;font-size: 30px;line-height: 50px;font-style: bold">Notices</a>
                                    </div>
                                </div>
							</div>
							<div class="col-lg-6 col-md-8 no-pd">
								<div class="main-ws-sec" style="min-width: 700px">
									<div class="posts-section">
                                        <?php
                                            foreach($result as $cursor)
                                            {
                                                echo"
                                                <div class=\"post-bar\">
                                                    <div class=\"post_topbar\">
                                                        <div class=\"usy-dt\">
                                                            <img src=\"http://gambolthemes.net/html/workwise/images/resources/us-pic.png\" alt=\"\">
                                                            <div class=\"usy-name\">";
                                                            if(strcmp($cursor['authorType'],"teacher") == 0)
                                                            {
                                                                $post_author_name = $cursor['author']["teacher_name"];
                                                            }
                                                            else
                                                            {
                                                                $post_author_name = $cursor['author']['student_name'];
                                                            }
                                                            $time = $cursor['time'];
                                                            $type = $cursor['authorType'];
                                                            $title = $cursor['title'];
                                                            $description = $cursor['description'];

                                                                echo "<h3>$post_author_name</h3>
                                                                <span><img src=\"http://gambolthemes.net/html/workwise/images/clock.png\" alt=\"\">$time</span>
                                                            </div>
                                                        </div>
                                                        <div class=\"ed-opts\">
                                                            <a href=\"#\" title=\"\" class=\"ed-opts-open\"><i class=\"fas fa-ellipsis-v\" style=\"font-size: 20px\"></i></a>
                                                            <ul class=\"ed-options\">
                                                                <li><a href=\"#\" title=\"\">Edit Post</a></li>
                                                                <li><a href=\"#\" title=\"\">Unsaved</a></li>
                                                                <li><a href=\"#\" title=\"\">Unbid</a></li>
                                                                <li><a href=\"#\" title=\"\">Close</a></li>
                                                                <li><a href=\"#\" title=\"\">Hide</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class=\"epi-sec\">
                                                        <ul class=\"descp\">
                                                            <li><img src=\"http://gambolthemes.net/html/workwise/images/icon8.png\" alt=\"\"><span>$type</span></li>
                                                            <li><img src=\"http://gambolthemes.net/html/workwise/images/icon9.png\" alt=\"\"><span>India</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"job_descp\">
                                                        <h3>$title</h3>
                                                        <p>$description</p>
                                                        <ul class=\"skill-tags\">";
                                                        foreach($cursor['topics'] as $topic){
                                                            echo "<li><a href=\"#\" title=\"\">$topic</a></li>";}	
                                                        echo "</ul>
                                                    </div>
                                                    <div class=\"job-status-bar\">
                                                        <ul class=\"like-com\">
                                                            <li>
																<a href=\"#\"><i class=\"fas fa-heart\"></i> Like</a>&nbsp
																<img src=\"http://gambolthemes.net/html/workwise/images/liked-img.png\" alt=\"\">
                                                                <span>".rand(0,100)."</span>
                                                            </li> 
                                                            <li><a href=\"#\" title=\"\" class=\"com\" style =\"top:60%\"><img src=\"http://gambolthemes.net/html/workwise/images/com.png\" alt=\"\"> Comment ".rand(0,30)."</a></li>
                                                        </ul>
                                                        <a><i class=\"fas fa-eye\"></i>Views ".rand(30,500)."</a>
                                                    </div>
                                                </div>";
                                            }
                                        ?>
									</div><!--posts-section end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3 pd-right-none no-pd">
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>
		<div class="chatbox-list" style="right: 89.5px;">
			<div class="chatbox">
				<div class="chat-mg bx">
					<a href="#" title=""><img src="http://gambolthemes.net/html/workwise/images/chat.png" alt=""></a>
					<span>2</span>
				</div>
				<div class="conversation-box">
					<div class="con-title">
						<h3>Messages</h3>
						<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
					</div>
					<div class="chat-list">
						<div class="conv-list active">
							<div class="usrr-pic">
								<img src="http://gambolthemes.net/html/workwise/images/resources/usy1.png" alt="">
								<span class="active-status activee"></span>
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="http://gambolthemes.net/html/workwise/images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>1:55 PM</span>
							</div>
							<span class="msg-numbers">2</span>
						</div>
						<div class="conv-list">
							<div class="usrr-pic">
								<img src="http://gambolthemes.net/html/workwise/images/resources/usy2.png" alt="">
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="http://gambolthemes.net/html/workwise/images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>11:39 PM</span>
							</div>
						</div>
						<div class="conv-list">
							<div class="usrr-pic">
								<img src="http://gambolthemes.net/html/workwise/images/resources/usy3.png" alt="">
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="http://gambolthemes.net/html/workwise/images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>0.28 AM</span>
							</div>
						</div>
					</div><!--chat-list end-->
				</div><!--conversation-box end-->
			</div>
		</div><!--chatbox-list end-->
        <div class="footer-data" style="background-color: #313131;height: 203px"><br><br>
            <a href="home.php" title="" style="float: left" ><span style="text-decoration: none;color: white;font-size: 60px;font-family: 'Pacifico', cursive;margin-left: 15px">Zest</span></a>
            <ul class="us-links" style="float: right;position: absolute;margin-left: 250px">
                <li style="color: white">Some Useful Links</li>
				<li><a href="profile-account-setting.html" title="" style="color: white">Account Setting</a></li>
                <li><a href="#" title="" style="color: white">Privacy</a></li>
                <li><a href="#" title="" style="color: white">Faqs</a></li>
				<li><a href="#" title="" style="color: white">Terms &amp; Conditions</a></li>
            </ul>
        </div>
	</div><!--theme-layout end-->



<script type="text/javascript" src="http://gambolthemes.net/html/workwise/js/jquery.min.js"></script>
<script type="text/javascript" src="http://gambolthemes.net/html/workwise/js/popper.js"></script>
<script type="text/javascript" src="http://gambolthemes.net/html/workwise/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://gambolthemes.net/html/workwise/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="http://gambolthemes.net/html/workwise/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="http://gambolthemes.net/html/workwise/js/scrollbar.js"></script>
<script type="text/javascript" src="http://gambolthemes.net/html/workwise/js/script.js"></script>
</body>
</html>
