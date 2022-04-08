<?php

$fullname = $email = $msg = $role_id = '';

if(!empty($_POST)) {
	$email = getPost('email');
	$pwd = getPost('password');
	
	$sql = "select * from user where email = '$email' and password = '$pwd'";
	$userExist = executeResult ($sql,true);
		
	if($userExist == null) {
		$msg ='Đăng nhập không thành công, vui lòng kiểm tra lại email hoặc mật khẩu!!';
	} else {
		
		$created_at = date('Y-m-d H:i:s');

		$_SESSION['user'] = $userExist;

		$userId = $userExist['id'];

		if($userExist['role_id'] == 1) {
			header('Location: ../index.php?user_id='.$userExist['id'].'');
		}
		else {
			header("Location: ../../screen_user/index.php?user_id=".$userExist['id']."");
		}
		die();
	}

}