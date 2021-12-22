<?php
	require_once('../utils/ultility.php');
	require_once('../database/dbhelper.php');
	$baseUrl = $title = $product_id = $user_id = $category_name = $product_name = $product_price = $product_count = '';
	if(!empty($_GET)) {
		if($_GET['user_id']) {
			$user_id = $_GET['user_id'];
		}
		if($_GET['product_id']) {
			$product_id = $_GET['product_id'];
		}
		if(!empty($_POST)) {
			if($_POST['product_count']) {
					$product_count = $_POST['product_count'];
			}
			$sql = "update order_user set count = '".$product_count."' where user_id = '".$user_id."' and product_id = '".$product_id."'";
			execute($sql);
			header("Location:./manage_product.php?user_id=".$user_id."&product_id=".$product_id."");
		}
		else {
			$sql = "SELECT order_user.count, category.name category_name, product.title product_title, product.price FROM order_user JOIN product ON order_user.product_id = product.id JOIN category ON category.id = product.category_id WHERE order_user.user_id = ".$user_id." AND order_user.product_id = ".$product_id."";
			$orderList = executeResult($sql,true);
			$category_name = $orderList['category_name'];
			$product_name = $orderList['product_title'];
			$product_price = number_format($orderList['price'],0,',','.');
			$product_count = $orderList['count'];
		}
	}
	require_once($baseUrl.'header__user.php');
?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/css/service.css">
	<link rel="stylesheet" href="../asset/css/user.css">
	<div class="content" style="padding: 100px 250px;">
		<form method = "post" enctype="multipart/form-data" >
			<div class="row">
				<div class="col-md-9 col-12">
					<div class="form-group" style="margin-bottom: 30px;">
						<label for="category_name" style="float: left;">Dịch vụ:</label>
						<input type="text" class="form-control" id="category_name" name="category_name" value="<?=$category_name?>" readonly>
					</div>

					<div class="form-group" style="margin-bottom: 30px;">
						<label for="product_name" style="float: left;">Sản phẩm:</label>
						<input type="text" class="form-control" id="product_name" name="product_name" value="<?=$product_name?>" readonly>
					</div>

					<div class="form-group" style="margin-bottom: 30px;">
						<label for="product_price" style="float: left;">Giá:</label>
						<input type="text" class="form-control" id="product_price" name="product_price" value="<?=$product_price?>" readonly>
					</div>
					

					<div class="form-group" style="margin-bottom: 30px;">
						<label for="product_count" style="float: left;">Số lượng:</label>
						<input required="true" type="number" class="form-control" id="product_count" name="product_count" value="<?=$product_count?>">
					</div>

					<button class="btn btn-success">Lưu Thay Đổi</button>
				</div>
			</div>
		</form>
	</div>

	<div class="contact" id="contact">
				<div class="address">
					<h4>Dịch vụ cưới hỏi trọn gói ABC</h4>
					<p>Cơ Sở chính : Số14 – Ngách 445/10 Lạc Long Quân- 0979 51 00 52</p>
					<p>Nhà riêng : Số 2 – Ngách 406/18 Âu Cơ – 0983 818 493</p>
					<p>Kho phụ 1 ( Trung chuyển thiết bị phục vụ) : Vĩnh Ngọc – Đông Anh – Hà Nội</p>
					<p>Kho phụ 2 ( Trung chuyển thiết bị phục vụ) : Thanh Bình – Hà Đông – Hà Nội</p>
				</div>
				<div class="pages">
					<h4>Pages</h4>
					<a href="">Dịch Vụ</a>
					<a href="">Liên Hệ</a>
				</div>
				<div class="map"></div>
			</div>
			<footer class="footer">
				<span class="copyright">
					© Bản quyền - ABC Wedding - 
					<a href="">ABC Team</a>
				</span>
				<div class="brand">
					<a href=""><i class="fab fa-facebook"></i></a>
					<a href=""><i class="fab fa-facebook-messenger"></i></a>
				</div>
			</footer>
		</div>
		<script
			type="text/javascript"
			src="https://code.jquery.com/jquery-1.11.0.min.js"
		></script>
		<script
			type="text/javascript"
			src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
		></script>
		<script
			type="text/javascript"
			src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
		></script>
		<script type="text/javascript" src="../asset/js/user.js"></script>
	</body>
</html>