<?php
	require_once('../../utils/ultility.php');
	require_once('../../database/dbhelper.php');


if(!empty($_POST)) {
	
	$action = getPost('action');

	switch ($action) {
		case 'update_status':
			updateStatus();
			break;
	}
}
function updateStatus() {
	$id = getPost('id');
	$status = getPost('status');

	$sql = "update orders set status = $status where id = '$id'";
	execute($sql);
}