<?php
session_start();
// If user already login, then go to robot terminal
if(isset($_SESSION['userName']))
	header('Location: robot.php');
?>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/index.css">
   <style type="text/css"></style>
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
   <script type="text/javascript" src="index.js"></script>
</head>
<body>
	<div id="main_area">
		<h1>Robot program terminal</h1>
		<form id = "login_form">
			<label for="login_input">Login</label>
			<input type="input" name="loginInput" id="login_input"><br>
			<label for="pass_input">Password</label>
			<input type="password" name="passInput" id="pass_input"><br>
			<input type="button" id="submit_button" value="Login"><br>
		</form>
	</div>
</body>
</html>