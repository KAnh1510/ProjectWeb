<?php
$fullname = $email = $msg = $phone_number = $address = '';
if(!empty($_POST)) {
	$id = getPost('id');
	$fullname = getPost('fullname');
	$email = getPost('email');
	$phone_number = getPost('phone_number');
	$address = getPost('address');
	$password = getPost('password');
	if($password != '') {
		$password = getSecurityMD5($password);
	}

	$created_at = $updated_at = date('y-m-d H:i:s');
	$role_id = getPost('role_id');


	if($id > 0) {
		//update
		$userItem = executeResult ("select * from user where email = '$email' and id <> $id",true);

		if($userItem != null) {
			$msg = 'Email này đã tồn tại trong tài khoản khác, vui lòng kiểm tra lại!!';
		} else {
			if ($password != '') {
				// code...
			$sql = "update user set fullname = '$fullname',email = '$email', phone_number= '$phone_number', address='$address', passwword ='$password', role_id = '$role_id', updated_at='$updated_at' where id = $id ";
		} else {
			$sql = "update user set fullname = '$fullname',email = '$email', phone_number= '$phone_number',role_id = '$role_id', address='$address', updated_at='$updated_at' where id = $id ";
		}
		execute($sql);
		header('Location: index.php');
		die();
		}
		
	} else {
		// insert
		$userItem = executeResult ("select * from user where email = '$email'",true);

		if($userItem != null) {
			$msg = 'Email đã được đăng kí trên hệ thống';
		} else {
			$sql = "insert into user (fullname, email,phone_number,address, password,role_id, created_at, updated_at, deleted) values ('$fullname','$email','$phone_number','$address','$password','$role_id','$created_at', '$updated_at', 0 )";
			execute($sql);
			
			header('Location: index.php');
			die();
		}
	}
		
}