<?php
	require_once('../utils/ultility.php');
	require_once('../database/dbhelper.php');
	$user_id = 0;
	$baseUrl = '';
	$title = '';
	if(!empty($_GET)) {
		if($_GET['user_id']) {
			$user_id = $_GET['user_id'];
		}
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
	<div class="order" style="padding: 150px 250px;">
		<div class="order__left">
			<table style="width:100%;">
				<thead>
					<th>Dịch vụ</th>
					<th>Sản phẩm</th>
					<th>Giá</th>
					<th>Số Lượng</th>
					<th>Tổng</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
				<?php
					$sql = "SELECT order_user.product_id, order_user.user_id, order_user.count, category.name category_name, product.title product_title, product.price FROM order_user JOIN product ON order_user.product_id = product.id JOIN category ON category.id = product.category_id WHERE order_user.user_id = ".$user_id."";
					$orderList = executeResult($sql);
					foreach ($orderList as $order) {
						echo '
							<tr>
								<td>'.$order['category_name'].'</td>
								<td>'.$order['product_title'].'</td>
								<td>'.number_format($order['price'],0,',','.').'</td>
								<td>'.$order['count'].'</td>
								<td>'.number_format($order['price']* $order['count'],0,',','.') .'</td>
								<td>
									<a href="./edit_manage_product.php?user_id='.$order['user_id'].'&product_id='.$order['product_id'].'">
										<button class="btn btn-warning">Sửa</button>
									</a>
								</td>
								<td>
									<button class="btn btn-danger" onclick="deleteItem('.$order['product_id'].', '.$order['user_id'].')">Xóa</button>
								</td>
							</tr>
						';
					}
				?>
				</tbody>
			</table>
			<div class="order__footer">
				<a href="./index.php?id=<?=$item['id']?>&user_id=<?=$user_id?>" style="color: #000;"> <i>Tiếp tục đặt hàng</i></a>
				<a href="./product_list_order.php?user_id=<?=$user_id?>">
				<button class="btn btn-success">Đặt Hàng</button>
				</a>
			</div>			
		</div>
	</div>

	<script type="text/javascript">
        function deleteItem(product_id, user_id) {
            option = confirm('Bạn có chắc chắn muốn xóa không?');
            if(!option) {
                return;
            }
            $.post('delete.php', {
                'product_id': product_id,
								'user_id': user_id
            }, function(data) {
                alert(data)
                location.assign("manage_product.php?user_id=<?=$user_id?>")
            })
        }
  	</script>

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