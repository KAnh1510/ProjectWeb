<?php
	require_once('../../utils/ultility.php');
	require_once('../../database/dbhelper.php');


if(!empty($_POST)) {
	
	$action = getPost('action');

	switch ($action) {
		case 'delete':
			deleteUser();
			break;
		
		default:
			// code...
			break;
	}
}
function deleteUser() {
	$id = getPost('id');
	$updated_at = date("Y-m-d H:i:s");
	$sql = "update user set deleted = 1, updated_at ='$updated_at' where id = '$id'";
	execute($sql);
}