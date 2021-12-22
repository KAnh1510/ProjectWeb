<?php
	require_once('../../utils/ultility.php');
	require_once('../../database/dbhelper.php');


if(!empty($_POST)) {
	
	$action = getPost('action');

	switch ($action) {
		case 'delete':
			deleteCategory();
			break;
	}
}
function deleteCategory() {
	$id = getPost('id');

	$sql = "delete from product where id = '$id'";
	execute($sql);
}