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

	$sql = "select count(*) as total from product where category_id = $id and deleted = 0";

	$data = executeResult($sql, true);
	
	// var_dump($data);
	$total = $data['total'];
	if($total > 0) {
		echo 'Danh mục đang chứa sản phẩm, không được xoá!!!';
		die();
	}

	$sql = "delete from category where id = $id";
	execute($sql);
}