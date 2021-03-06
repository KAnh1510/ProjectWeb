<?php
	require_once('../utils/ultility.php');
	require_once('../database/dbhelper.php');
	$user_id = $product_id = '';
	$baseUrl = '';
	$title = '';
	if(!empty($_GET)) {
		if($_GET['user_id']) {
			$user_id = $_GET['user_id'];
		}
	}

	$sql = "SELECT order_user.product_id, order_user.user_id, order_user.count, category.name category_name, product.title product_title, product.price FROM order_user JOIN product ON order_user.product_id = product.id JOIN category ON category.id = product.category_id WHERE order_user.user_id = ".$user_id."";
	$orderList = executeResult($sql);
	$total = 0;
	foreach ($orderList as $order) {
		$total += $order['price'] * $order['count'];
	}

	$fullname = $email = $phone_number = $address = $note =  '';
	if(!empty($_POST)) {
		if(isset($_POST['fullname'])) {
			$fullname = $_POST['fullname'];
		}

		if(isset($_POST['email'])) {
			$email = $_POST['email'];
		}

		if(isset($_POST['phone_number'])) {
			$phone_number = $_POST['phone_number'];
		}

		if(isset($_POST['address'])) {
			$address = $_POST['address'];
		}

		if(isset($_POST['note'])) {
			$note = $_POST['note'];
		}

		$create_time = date('y-m-d H:i:s');

		$sql = "insert into orders (user_id, fullname, phone_number, email, address, note, total, create_time) values ('$user_id', '$fullname', '$phone_number', '$email', '$address', '$note', '$total', '$create_time')";
		execute($sql);
		$sql = 'update order_user set status = 1 where user_id = '.$user_id.'';
		execute($sql);
		header('Location: ordered_list.php?user_id='.$user_id.'');

	}
	require_once($baseUrl.'header__user.php');
?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">	
	<link rel="stylesheet" href="../asset/css/service.css">
	<link rel="stylesheet" href="../asset/css/user.css">
	<style>
		th,td {
			padding: 5px 10px; 
		}
		.order__footer {
			margin-top: 20px;
		}
	</style>
	<h4 style="padding:100px 0 40px 0; text-align: center;">Thông tin đơn hàng</h4>
	<div class="order row"  style="padding: 0 150px;" >
	<div class="col-md-6 col-12" style="padding-right:30px">
			<form method = "post">
				<div class="form-group">
					<label for="usr" style=" float: left;">Họ và Tên:</label>
					<input required="true" type="text" class="form-control" id="usr" name="fullname">
				</div>
				<div class="form-group">
						<label for="email" style="float: left;">Email:</label>
						<input required="true" type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
						<label for="phone_number" style="float: left;">SĐT:</label>
						<input required="true" type="tel" class="form-control" id="phone_number" name="phone_number">
				</div>
				<div class="form-group">
						<label for="address" style="float: left;">Địa chỉ:</label>
						<input required="true" type="text" class="form-control" id="address" name="address">
				</div>
				<div class="form-group" style="margin-bottom: 30px; display: flex;flex-direction:column;">
					<label for="pwd" style="float:left;">Ghi chú:</label>
					<textarea class="form-control" rows="5" name="note" id="note"></textarea>
				</div>
				<input type="hidden" name="total" value="<?=$total?>">
				<button class="btn btn-success" style="margin-bottom: 40px;">Đặt Hàng</button>
			</form>
		</div>
		<div class="order__left col-md-6" style="padding-top: 35px;">
			<table style="padding-top: 50px;">
				<thead>
					<th>Dịch vụ</th>
					<th>Sản phẩm</th>
					<th>Giá</th>
					<th>Số Lượng</th>
					<th>Tổng</th>
				</thead>
				<tbody>
				<?php
					$sum_price = 0;
					$sql = "SELECT order_user.product_id, order_user.user_id, order_user.count, category.name category_name, product.title product_title, product.price FROM order_user JOIN product ON order_user.product_id = product.id JOIN category ON category.id = product.category_id WHERE order_user.user_id = ".$user_id."";
					$orderList = executeResult($sql);
					foreach ($orderList as $order) {
						echo '
							<tr>
								<td>'.$order['category_name'].'</td>
								<td>'.$order['product_title'].'</td>
								<td>'.number_format($order['price'],0,',','.').'</td>
								<td>'.$order['count'].'</td>
								<td>'.number_format($order['price']* $order['count'],0,',','.').'</td>
								</tr>
								';
								$sum_price += $order['price']* $order['count'];
							}
					echo '
						<tr>
							<td colspan = "5"><b>Tổng tiền: '.number_format($sum_price,0,',','.').'</b></td>
						</tr>
					';
				?>
				</tbody>
			</table>
			<div class="order__footer">
				<a href="./manage_product.php?user_id=<?=$user_id?>" style="color: #000;"> <i>Quay Lại</i></a>
			</div>			
		</div>

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