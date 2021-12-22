<?php
	require_once('../utils/ultility.php');
	require_once('../database/dbhelper.php');
	$user_id = $product_id = '';
	$baseUrl = '';
	$title = '';
	if(!empty($_GET)) {
		if($_GET['product_id']) {
			$product_id = $_GET['product_id'];
		}

		if($_GET['user_id']) {
			$user_id = $_GET['user_id'];
		}
		// Check xem trong db có tài khoản và sản phẩm này chưa nếu chưa có 1 trong 2 thì insert
		$sql = 'select * from order_user';
		$OrderUserList = executeResult($sql);
		$check = 0;
		foreach ($OrderUserList as $order) {
			if($order['user_id']  == $user_id && $order['product_id']  == $product_id) {
				$check++;
			}
		}
		if($check == 0 && $product_id != '') {
			$sql = 'insert into order_user(user_id, product_id, count, status) values ('.$user_id.', '.$product_id.', 1, 0)';
			execute($sql);
		}
		header("Location: ./manage_product.php?user_id=".$user_id."");
	}
?>