<?php
	session_start();

	require_once('../../utils/ultility.php');
	require_once('../../database/dbhelper.php');
	require_once('process_form_register.php');

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Kí</title>
	<meta charset =' utf-8 '>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./register.css
	">
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="text-center" style="color:#061414">Đăng Kí Tài Khoản</h2>
				<h6 class="text-center" style="color:red;"><?=$msg?></h6>
			</div>
			<div class="panel-body">
					<form action="register.php" method = "post" onsubmit="return validateForm();">
					<div class="form-group">
						<label for="usr"><b>Họ và Tên:</b></label>
						<input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$fullname?>">
					</div>
					<div class="form-group">
						<label for="email"><b>Email:</b></label>
						<input required="true" type="email" class="form-control" id="email" name="email" value="<?=$email?>">
					</div>
					<div class="form-group">
						<label for="pwd"><b>Mật Khẩu:</b></label>
						<input required="true" type="password" class="form-control" id="pwd" name="password" minlength="6">
					</div>
					<div class="form-group">
						<label for="confirmation_pwd"><b>Xác minh mật khẩu:</b></label>
						<input required="true" type="password" class="form-control" id="confirmation_pwd">
					</div>
					<p>
						<a href="login.php" style="color: black;"><i>Tôi đã có tài khoản</i></a>
					</p>
					<button class="btn btn-success">Đăng kí</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function validateForm() {
			$pwd = $('#pwd').val();
			$confirmPwd= $('#confirmation_pwd').val();
			if($pwd != $confirmPwd) {
				alert('Mật Khẩu Không khớp, vui vòng kiểm tra lại!');
				return false
			}
			return true;
		}
	</script>
</body>
</html>