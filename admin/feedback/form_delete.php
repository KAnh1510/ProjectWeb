<?php
	require_once('../../utils/ultility.php');
	require_once('../../database/dbhelper.php');


if(!empty($_POST)) {
	
	$action = getPost('action');

	switch ($action) {
		case 'mark':
			deleteUser();
			break;
	}
}
function deleteUser() {
	$id = getPost('id');
	$created_at = date("Y-m-d H:i:s");
	$sql = "update feedback set status = 1, created_at = '$created_at' where id = '$id'";
	execute($sql);
}