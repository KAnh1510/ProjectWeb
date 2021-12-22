<?php
    require_once('../utils/ultility.php');
		require_once('../database/dbhelper.php');
		$fullname = $email = $phone_number = $note = $user_name = $user_id = '';
	if(!empty($_GET)) {
		$user_id = $_GET['user_id'];
		$sql = "select * from user where id = ".$user_id."";
		$userList = executeResult($sql);
		$user_name = $userList[0]['fullname'];
	}
	if(!empty($_POST)) {
		$id = getPost('id');
		$fullname = getPost('fullname');
		$email = getPost('email');
		$phone_number = getPost('phone_number');
		$note = getPost('note');
		$created_at = date('y-m-d H:i:s');

		$sql =" insert into feedback (fullname, email, phone_number, note,created_at) values ('$fullname', '$email','$phone_number', '$note', '$created_at')";
		execute($sql);
	}
    $sql ="select * from category";
    $menuItems = executeResult($sql);

		$sql ="select * from feedback";
    $data = executeResult($sql);
?>
<!doctype html>
<html lang="en">
	<head>
		<title>Trang chủ - Dịch Vụ cho Thuê Đồ Đám Cưới</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../asset/font/fontawesome-free-5.15.4-web/css/all.css">
		<link
				rel="stylesheet"
				type="text/css"
				href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
			/>
		<link rel="stylesheet" href="../asset/css/user.css">
		<link rel="stylesheet" href="../asset/css/base.css">
	</head>
	<body>
		<div class="menu_bar">
			<a href="#">
				<img class="logo-img" src="../asset/image/logo.png" alt="">
			</a>
			<ul>
					<li class="menu_bar-item active"> 
						<a href="./index.php">Trang Chủ</a> 
					</li>
					<li >
						<a href="">Dịch Vụ</a>
						<div class="sub_menu-1">
							<ul>
			<?php
				foreach($menuItems as $item) {
					echo '<li>
									<a href="../category_product/index.php?id='.$item['id'].'&user_id='.$user_id.'">'.$item['name'].'</a>
								</li>';
				}
			?>
							</ul>
						</div>
					</li>
					<li class="menu_bar-item"> 
						<a href="#contact">Liên Hệ</a>
					</li>
					<li style="text-decoration: underline;">Xin chào <?php echo $user_name;?></li>
					<li>
						<a href="../index.php">Đăng xuất</a>
					</li>
					<li><a href="../category_product/manage_product.php?user_id=<?=$user_id?>"><i class="fas fa-shopping-cart" style="color: var(--while-color);"></i></a></li>
				</ul>	
		</div>
		<div class="content">	
			<div class="slider">
				<div class="slider_item">
					<img src="../asset/image/slider_1.jpg" alt="">
					<div class="slider__cover"></div>
					<div class="info">
						<h2 class="info__name">ABC Wedding</h2>
						<p>Cung cấp các dịch vụ cưới hỏi trọn gói  chuyên nghiệp !</p> 
						<p>Số 14 – Ngách 445/10 Lạc Long Quân – Tây Hồ – Hà Nội – 0979 51 00 52</p>
					</div>
				</div>
				<div class="slider_item">
					<img src="../asset/image/slider_2.jpg" alt="">
					<div class="slider__cover"></div>
					<div class="info">
						<h2 class="info__name">ABC Wedding</h2>
						<p>Cung cấp các dịch vụ cưới hỏi trọn gói  chuyên nghiệp !</p> 
						<p>Số 14 – Ngách 445/10 Lạc Long Quân – Tây Hồ – Hà Nội – 0979 51 00 52</p>
					</div>
				</div>
				<div class="slider_item">
					<img src="../asset/image/slider_3.jpg" alt="">
					<div class="slider__cover"></div>
				<div class="info">
						<h2 class="info__name">ABC Wedding</h2>
						<p>Cung cấp các dịch vụ cưới hỏi trọn gói  chuyên nghiệp !</p> 
						<p>Số 14 – Ngách 445/10 Lạc Long Quân – Tây Hồ – Hà Nội – 0979 51 00 52</p>
					</div>
				</div>
				<div class="slider_item">
					<image src="../asset/image/slider_4.jpg" alt="">
						<div class="slider__cover"></div>
				<div class="info">
					<h2 class="info__name">ABC Wedding</h2>
					<p>Cung cấp các dịch vụ cưới hỏi trọn gói  chuyên nghiệp !</p> 
					<p>Số 14 – Ngách 445/10 Lạc Long Quân – Tây Hồ – Hà Nội – 0979 51 00 52</p>
				</div>
				</div>
				<div class="slider_item">
					<img src="../asset/image/slider_5.jpg" alt="">
					<div class="slider__cover"></div>
				<div class="info">
					<h2 class="info__name">ABC Wedding</h2>
					<p>Cung cấp các dịch vụ cưới hỏi trọn gói  chuyên nghiệp !</p> 
					<p>Số 14 – Ngách 445/10 Lạc Long Quân – Tây Hồ – Hà Nội – 0979 51 00 52</p>
				</div>
				</div>
				<div class="slider_item">
					<img src="../asset/image/slider_6.jpg" alt="">
					<div class="slider__cover"></div>
					<div class="info">
						<h2 class="info__name">ABC Wedding</h2>
						<p>Cung cấp các dịch vụ cưới hỏi trọn gói  chuyên nghiệp !</p> 
						<p>Số 14 – Ngách 445/10 Lạc Long Quân – Tây Hồ – Hà Nội – 0979 51 00 52</p>
					</div>
				</div>
			</div>
			<div class="intro">
				<div class="intro_item">
					<h1>Dịch vụ cưới hỏi trọn gói</h1>
					<p>
					<span>Dịch vụ cưới hỏi trọn gói</span>
					ABC phục vụ tất cả các 
					<a href=""><span>dịch vụ cưới hỏi trọn gói</span></a>
					trọn gói từ a – z. Thành lập từ năm 2012 đến nay, chúng tôi đã tích lũy được nhiều kinh nghiệm – tổ chức –  lên kế hoạch cho một lễ cưới hỏi.Thương hiệu dịch vụ Cưới hỏi trọn gói ABC đã được khách hàng tin tưởng và khẳng định. Địa chỉ số 14 – Ngách 445/10 Lạc Long Quân – Tây Hồ – Hà Nội – Địa chỉ tin cậy để có 1 
					<a href="">
						<span> cưới hỏi trọn gói</span>
					</a>
					</p>
				</div>
				<div class="intro_item">
					<h2>Dịch vụ cưới hỏi trọn gói đầy đủ - đa dạng</h2>
					<p>
						<span>ABC Wedding</span>
						<span> – Cùng với những kinh nghiệm và ưu thế vượt trội của một công ty trang trí cưới hỏi, sự kiện hàng đầu hiện nay. Không chỉ được biết đến là một trung tâm cưới hỏi. Shop điện hoa chuyên nghiệp. Với đầy đủ các dịch vụ trang trí cưới hỏi tại nhà, dịch vụ trang trí đám cưới theo yêu cầu, thiết kế và lên ý tưởng cưới…</span>
					</p>
					<p>
						<span>Với một đội ngũ nhân viên trẻ, tận tụy đầy nhiệt huyết luôn đồng hành cùng cô dâu chú rể trong suốt quá trình từ lên ý tưởng, cho đến thực hiện ý tưởng một cách hoàn hảo nhất.</span>
					</p>
					<p style = "color: red;">
						ABC Wedding !
					</p>
				</div>
			</div>
			<div class="selection">
				<div class="title">Lựa chọn dịch vụ cưới hỏi</div>
				<div class="select_list">
					<div class="select_item">
						<a class="item_link">
							<div class="item_img">
								<img src="../asset/image/select_1.jpg" alt="">
							</div>
						</a>
						<a href="" class="item__title">Bàn ghế đám cưới</a>
					</div>
					<div class="select_item">
						<a class="item_link">
							<div class="item_img">
								<img src="../asset/image/select_2.jpg" alt="">
							</div>
						</a>
						<a href="" class="item__title">Nhà bạt đám cưới</a>
					</div>
					<div class="select_item">
						<a class="item_link">
							<div class="item_img">
								<img src="../asset/image/select_3.jpg" alt="">
							</div>
						</a>
						<a href="" class="item__title">Phụ Kiện Cưới Hỏi</a>
					</div>
					<div class="select_item">
						<a class="item_link">
							<div class="item_img">
								<img src="../asset/image/select_4.jpg" alt="">
							</div>
						</a>
						<a href="" class="item__title">Nhân Sự cưới Hỏi</a>
					</div>
					<div class="select_item">
						<a class="item_link">
							<div class="item_img">
								<img src="../asset/image/select_5.jpg" alt="">
							</div>
						</a>
						<a href="" class="item__title">Hoa xe cưới</a>
					</div>
					<div class="select_item">
						<a class="item_link">
							<div class="item_img">
								<img src="../asset/image/select_6.jpg" alt="">
							</div>
						</a>
						<a href="" class="item__title">Phông cưới hỏi đẹp</a>
					</div>
					<div class="select_item">
						<a class="item_link">
							<div class="item_img">
								<img src="../asset/image/select_7.jpg" alt="">
							</div>
						</a>
						<a href="" class="item__title">Đặt tráp ăn hỏi</a>
					</div>
					<div class="select_item">
						<a class="item_link">
							<div class="item_img">
								<img src="../asset/image/select_8.jpg" alt="">
							</div>
						</a>
						<a href="" class="item__title">Cổng hoa lụa</a>
					</div>
					<div class="select_item">
						<a class="item_link">
							<div class="item_img">
								<img src="../asset/image/select_9.jpg" alt="">
							</div>
						</a>
						<a href="" class="item__title">Xe cưới hỏi</a>
					</div>
				</div>
			</div>
			<div class="advantages">
				<div class="advantage__item">
					<div class="icon__item"><i class="fas fa-thumbs-up"></i></div>
					<div class="advantage__title">DỊCH VỤ UY TÍN</div>
					<p class="advantage__desc">Chúng tôi luôn luôn khẳng định một điều, khách hàng đến với ABC sẽ phải được phục vụ đúng với cam kết và còn hơn thế nữa!</p>
				</div>
				<div class="advantage__item">
					<div class="icon__item"><i class="fas fa-paint-brush"></i></div>
					<div class="advantage__title">THIẾT KẾ CHUYÊN NGHIỆP</div>
					<p class="advantage__desc">Nơi sáng tạo kết hợp với nghệ thuật và cảm xúc làm nên những tác phẩm đám cưới chỉ dành riêng cho bạn.</p>
				</div>
				<div class="advantage__item">
					<div class="icon__item"><i class="far fa-lightbulb"></i></div>
					<div class="advantage__title">LÀM VIỆC LINH HOẠT</div>
					<p class="advantage__desc">Xây dựng theo mô hình “One-stop shop” đến với chúng tôi các bạn hoàn toàn có thể yên tâm được phục vụ mọi nhu cầu về cưới hỏi dù là nhỏ nhất.</p>
				</div>
				<div class="advantage__item">
					<div class="icon__item"><i class="fas fa-dollar-sign"></i></div>
					<div class="advantage__title">TỐI ƯU CHI PHÍ</div>
					<p class="advantage__desc">Chúng tôi luôn lắng nghe và thấu hiểu để thực hiện những đám cưới với một tiêu chuẩn cao nhất có thể và quan trọng là với một chi phí hợp lý.</p>
				</div>
			</div>
			<div class="feedback">
				<div>
					<h3>Phản Hồi Khách Hàng:</h3>
					<form method = "post" enctype="multipart/form-data">
						<div class="form-item">
							<label for="usr" style=" float: left;">Họ và Tên:</label>
							<input required="true" type="text" class="form-control" id="usr" name="fullname">
							<input type="text" id="id" name="id" value="<?=$id?>" class="form-control" hidden="true">
						</div>
						<div class="form-item">
								<label for="email" style="float: left;">Email:</label>
								<input required="true" type="email" class="form-control" id="email" name="email" >
						</div>
						<div class="form-item">
								<label for="phone_number" style="float: left;">SĐT:</label>
								<input required="true" type="tel" class="form-control" id="phone_number" name="phone_number" >
						</div>
						<div class="form-item" style="margin-bottom: 30px; display: flex;flex-direction:column;">
							<label for="pwd" style="float:left;">Bình Luận:</label>
							<textarea class="form-control" rows="5" name="note" id="note"></textarea>
						</div>
						<button class="btn-cmt">Bình Luận</button>
					</form>
				</div>
				<div class="comment">
					<h5 style="font-size: 16px; margin-bottom: 20px;"> Bình Luận: </h5>
				<?php
foreach ($data as $item) {
echo'
		<div style="padding-left: 40px;">
			<p style="margin:0;"><b>'.$item['fullname'].'</b></p>
			<p style="margin:0;color:#888;font-size:12px">'.$item['created_at'].'</p>
			<p style="margin:10px 0 20px 20px ;">'.$item['note'].'</p>
		</div>';
}
?>
				</div>
			</div>

			<div class="contact" id="contact">
				<div class="address">
					<h3>Dịch vụ cưới hỏi trọn gói ABC</h3>
					<p>Cơ Sở chính : Số14 – Ngách 445/10 Lạc Long Quân- 0979 51 00 52</p>
					<p>Nhà riêng : Số 2 – Ngách 406/18 Âu Cơ – 0983 818 493</p>
					<p>Kho phụ 1 ( Trung chuyển thiết bị phục vụ) : Vĩnh Ngọc – Đông Anh – Hà Nội</p>
					<p>Kho phụ 2 ( Trung chuyển thiết bị phục vụ) : Thanh Bình – Hà Đông – Hà Nội</p>
				</div>
				<div class="pages">
					<h3>Pages</h3>
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