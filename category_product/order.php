<?php
	if(isset($_POST['user_id'])) {
		$user_id = $_POST['user_id'];
		require_once('../database/dbhelper.php');
		$sql = 'UPDATE order_user SET status = 1 WHERE user_id = '.$user_id.'';
		execute($sql);

		if(isset($_POST['total'])) {
			$total = $_POST['total'];
			$create_time = date('y-m-d H:i:s');
			$sql = "INSERT INTO orders (user_id, total, create_time) VALUES ('$user_id', '$total', '$create_time')";
			execute($sql);
			echo $sql;
		echo "Bạn đã đặt đơn hàng thành công";
		}
	}
?>