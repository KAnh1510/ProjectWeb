<?php
	require_once('../../utils/ultility.php');
	require_once('../../database/dbhelper.php');

$fullname = $email = $msg = '';

if(!empty($_POST)) {
	$fullname = getPost('fullname');
	$email = getPost('email');
	$pwd = getPost('password');

	if(empty($fullname) || empty($email) || empty($pwd) || strlen($pwd) < 6) {
	}else {
		$userExist = executeResult ("select * from user where email = '$email'",true);
		if($userExist != null) {
			$msg = 'Email đã được đăng kí trên hệ thống';
		} else {
			$created_at = $updated_at = date('y-m-d H:i:s');
			//sử dụng mã hóa 1 chiều -> mã hóa md5
			$pwd = getSecurityMD5($pwd);

			$sql = "insert into user (fullname, email, password,role_id, created_at, updated_at) values ('$fullname','$email','$pwd',2,'$created_at', '$updated_at')";
			execute($sql);
			header('Location: login.php');
			die();
		}
	}
}