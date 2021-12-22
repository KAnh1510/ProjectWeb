<?php 
	if(isset($_POST['user_id']) && isset($_POST['product_id'])) {
		$user_id = $_POST['user_id'];
		$product_id = $_POST['product_id'];
		require_once('../database/dbhelper.php');
		$sql = 'DELETE FROM order_user WHERE user_id = '.$user_id.' AND product_id = '.$product_id.'';
		execute($sql);
		echo "Bạn đã xóa thành công";
	}
?>