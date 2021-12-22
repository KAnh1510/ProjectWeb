<?php
	session_start();

	require_once('../../utils/ultility.php');
	require_once('../../database/dbhelper.php');
	require_once('process_form_login.php');
	
	// $user = getUserToken();
	// if($user != null) {
	// 	header('Location: ../');
	// 	die();
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<meta charset =' utf-8 '>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./register.css">
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center" style="color:#061414">Đăng Nhập</h2>
				<h6 class="text-center" style="color:red;"><?=$msg?></h6>
			</div>
			<form action="login.php" method = "post" >
				<div class="panel-body">
					<div class="form-group">
					<div class="form-group">
						<label for="email"><b>Email:</b></label>
						<input required="true" type="email" class="form-control" id="email" name="email" value="<?=$email?>">
					</div>
					<div class="form-group">
						<label for="pwd"><b>Mật Khẩu:</b></label>
						<input required="true" type="password" class="form-control" id="pwd" name="password" minlength="6">
					</div>
					<p>
						<a href="register.php" style="color: black;"><i>Đăng kí tài khoản</i></a>
					</p>
					<button class="btn btn-success">Đăng Nhập</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>