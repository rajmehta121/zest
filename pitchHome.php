<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pitch</title>
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
	<style>
		.add_post {
  max-width: 610px;
  top: 25px !important;
  max-height: 100%;
}
.add_post h2 {
  text-align:center;
  font: 700 30px/1 "Lato", sans-serif;
  color: #263843;
  padding:10px;
}
.add_post .input_group .input-field input {
  border: 1px solid #e0e5e8 !important;
  border-radius: 5px;
  background: #fff;
  font: 400 24px/62px "Lato", sans-serif;
  color: #758690;
  box-shadow: none !important;
  padding: 0 20px;
  box-sizing: border-box;
  outline: none;
  margin-bottom: 10px;
  height: auto;
  margin-left: 10px;
  margin-bottom: 7px;
  width: 95%;
}
.add_post .input_group .input-field input.placeholder {
  color: #758690;
}
.add_post .input_group .input-field input:-moz-placeholder {
  color: #758690;
}
.add_post .input_group .input-field input::-webkit-input-placeholder {
  color: #758690;
}
.add_post .input_group .input-field .textarea {
  border: 1px solid #e0e5e8;
  border-radius: 5px;
  background: #fff;
  font: 400 18px/30px "Lato", sans-serif;
  color: #758690;
  box-shadow: none;
  min-height: 160px;
  outline: none;
  padding: 20px;
  padding-top: 8px;
  resize: none;
  margin-left: 10px;
  margin-bottom: 7px;
  width: 95%;
}
.add_post .input_group .input-field .textarea.placeholder {
  color: #758690;
}
.add_post .input_group .input-field .textarea:-moz-placeholder {
  color: #758690;
}
.add_post .input_group .input-field .textarea::-webkit-input-placeholder {
  color: #758690;
}
.add_post .input_group .upload_photo {
  background: #fff;
  border: 1px solid #e0e5e8;
  border-radius: 5px;
  overflow: hidden;
  margin: 0;
  margin-left: 10px;
  margin-bottom: 7px;
  width: 95%;
}
.add_post .input_group .upload_photo .tab_nav li {
  height: auto;
}
.add_post .input_group .upload_photo .tab_nav li a {
  font: 400 14px/37px "Lato", sans-serif;
  color: #758690;
  text-transform: uppercase;
  padding: 0 20px;
  border: 1px solid #fff;
  border-top: 0;
  text-align: left;
  height: 45px;
}
.add_post .input_group .upload_photo .tab_nav li a i {
  font-size: 22px;
  margin-right: 15px;
  position: relative;
  top: 3px;
}
.add_post .input_group .upload_photo .tab_nav li a.active {
  border-color: #e0e5e8;
}
.add_post .input_group .upload_photo .tabs_content {
  padding: 30px;
}
.add_post .input_group .upload_photo .tabs_content .photo_u {
  border: 2px dashed #cdd7df;
  text-align: center;
  padding: 35px;
  cursor: pointer;
}
.add_post .input_group .upload_photo .tabs_content .photo_u h4 {
  font: 400 18px/24px "Lato", sans-serif;
  color: #263843;
  padding-top: 5px;
}
.add_post .input_group .upload_photo .tabs_content .photo_u h4 small {
  font-size: 14px;
  color: #758690;
  display: block;
}
.add_post .input_group .select_option {
  margin-top: 10px;
}
.add_post .input_group .select_option .select-wrapper {
  position: relative;
}
.add_post .input_group .select_option .select-wrapper .caret:after {
  content: "\f123";
  position: absolute;
  font-family: "Ionicons";
  font-size: 14px;
  right: 20px;
  z-index: 1;
  color: #758690;
}
.add_post .input_group .select_option input {
  line-height: 50px;
  font-size: 16px;
  font-weight: bold;
}
.add_post .input_group .select_option ul li span {
  color: #263843;
}
.add_post .input_group .select_option .chips-placeholder {
  border: 0;
  margin-bottom: 10px;
  box-shadow: none;
}
.add_post .input_group .select_option .chips-placeholder input {
  margin: 0;
  width: 100% !important;
  padding: 0 20px !important;
  box-shadow: none;
}
.add_post .input_group .add_link {
  position: relative;
}
.add_post .input_group .add_link input {
  line-height: 50px;
  font-size: 16px;
  font-weight: bold;
  padding-right: 100px;
}
.add_post .input_group .add_link span {
  position: absolute;
  top: 13px;
  right: 20px;
  font-size: 16px;
  color: #758690;
  font-weight: bold;
}
.add_post .input_group .submit_btn_area {
  margin-left: -5px;
  margin-right: -5px;
}
.add_post .input_group .submit_btn_area .col {
  padding: 0 5px;
}
.add_post .input_group .submit_btn_area button {
  font: 900 14px/50px "Lato", sans-serif;
  color: #758690;
  border: 1px solid #e0e5e8;
  border-radius: 3px;
  display: block;
  background: #fff;
  width: 95%;
  margin-left: 10px;
  margin-bottom: 10px;
  text-transform: uppercase;
}
.add_post .input_group .submit_btn_area button i {
  font-size: 22px;
  margin-right: 11px;
  position: relative;
  top: 2px;
}
.add_post .input_group .submit_btn_area .publish {
  background: #73d387;
  line-height: 60px;
  font-size: 18px;
  color: #fff;
  border: 0;
}
.add_post .input_group .yes_no {
  padding: 20px 0;
}
.add_post .input_group .yes_no h4 {
  font: 700 20px/38px "Lato", sans-serif;
  color: #263843;
  float: left;
  display: inline-block;
  padding-right: 20px;
}
.add_post .input_group .yes_no .flipswitch {
  margin: 0;
  background: #73d387;
  box-shadow: none;
  width: 105px !important;
  height: 40px !important;
  margin-right: 20px;
  display: inline-block;
}
.add_post .input_group .yes_no .flipswitch .jq-flipper {
  top: 2px !important;
  z-index: 1 !important;
  width: 50px !important;
  height: 36px !important;
  background: #fff;
  text-transform: uppercase;
  font-family: "Lato", sans-serif;
  font-weight: bold;
  margin-left: 2px;
}
.add_post .input_group .yes_no .flipswitch .jq-flipswitch-text-left {
  line-height: 36px !important;
  width: 50px !important;
  font-size: 12px;
  text-align: center;
  color: #fff;
  font-weight: bold;
  padding-top: 2px;
  padding-left: 3px;
}
.add_post .input_group .yes_no .flipswitch .jq-flipswitch-text-right {
  line-height: 36px !important;
  width: 50px !important;
  color: #758690;
  font-size: 12px;
  font-weight: bold;
  text-align: center;
  padding-top: 2px;
  padding-right: 3px;
}
.add_post .input_group .yes_no .flipswitch.jq-flipswitch.jq-flipper-left .jq-flipswitch-text-left {
  color: #758690 !important;
}
.add_post .input_group .yes_no .flipswitch.jq-flipswitch.jq-flipper-left .jq-flipswitch-text-right {
  color: #fff !important;
}
.contain {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.contain input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}
        
/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
	</style>
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
							<button type="submit"><i class="fas fa-search"></i></button>
						</form>
					</div><!--search-bar end-->
					
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
							<img src="http://gambolthemes.net/html/workwise/images/resources/user.png" alt="">
							<a href="#" title="">
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
							<h3 class="tc"><a href="logout.php" title="">Logout</a></h3>
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
									<div class="user-data full-width">
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
								<div class="main-ws-sec" style="min-width: 600px">
									<div class="posts-section">
										<!-- Pitch section begin-->
										<div class="post-bar">
											<div class="add_post">
										        <h2>Pitch in Information/Doubt</h2> 
										        <form class="input_group" action = "pitch.php" method = "post" enctype = "multipart/form-data" style="height: 100%">
                                                    <div style="margin-left: 20px">
                                                    <label class="contain">Science
                                                      <input type="checkbox" name="topics_list[]" multiple value="Science">
                                                      <span class="checkmark"></span>
                                                    </label>
                                                    <label class="contain">Engineering
                                                      <input type="checkbox" name="topics_list[]" multiple value="Engineering">
                                                      <span class="checkmark"></span>
                                                    </label>
                                                    <label class="contain">Medical
                                                      <input type="checkbox" name="topics_list[]" multiple value="Medical">
                                                      <span class="checkmark"></span>
                                                    </label>
                                                    <label class="contain">Commerce
                                                      <input type="checkbox" name="topics_list[]" multiple value="Commerce">
                                                      <span class="checkmark"></span>
                                                    </label>
                                                    <label class="contain">Architecture
                                                      <input type="checkbox" name="topics_list[]" multiple value="Architecture">
                                                      <span class="checkmark"></span>
                                                    </label>
                                                    <label class="contain">Arts
                                                      <input type="checkbox" name="topics_list[]" multiple value="Arts">
                                                      <span class="checkmark"></span>
                                                    </label>
                                                    </div>
                                                    <br>
										            <div class="input-field">
										                <input type="text" class="validate" placeholder="Add a tittle" name="title" required> 
										                <textarea class="textarea" placeholder="Add some description" name = "description"></textarea>
										            </div> 
										            <div class="upload_photo row"> 
										                <div id="photo" class="col s12 tabs_content active">
										                    <div class="photo_u">
										                        <img src="images/upload.png" alt="">
										                        <h4><input type="file" name = "attachments" multiple></h4>
										                    </div>
										                </div>
										            </div> 
										            <div class="row submit_btn_area"> 
										               <div class="col s12"> <br>
										                    <input type="submit" name="Submit" value="Submit"  style="width: 20%;background-color: #e44d3a;color: white;font-size: 15px;height: 44px;margin-left: 10px;margin-top: 20px;padding: 10px;border-radius: 15px">
										               </div>
										            </div>
										        </form> 
									        </div>
								        </div>
										<!-- Pitch section end-->
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

