<?php
		require_once('../utils/ultility.php');
		require_once('../database/dbhelper.php');
		$user_id = $id = $title = $h4_content = $h5_content = $count = '';
		if(!empty($_GET)) {
			if($_GET['id']) {
					$id = $_GET['id'];
			}
			if($_GET['user_id']) {
				$user_id = $_GET['user_id'];
		}
			$sql ="select category.h4_content, category.h5_content, category.name from category WHERE category.id = '".$id."'";
    	$categoryItem = executeResult($sql,true);
			$title = 	$categoryItem['name'];
			$h4_content = $categoryItem['h4_content'];
			$h5_content = $categoryItem['h5_content'];
		}
    $baseUrl = '';
    require_once($baseUrl.'header__user.php');
		
?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../asset/css/service.css">
	<link rel="stylesheet" href="../asset/css/user.css">

	<div class="service__page row" style = "margin: 80px 100px;">
		<div class="service__page-content col-md-9 col-12">
			<div class="page__intro">
				<p style="color:#cf1b15; font-weight: 500;">ABC Wedding – Dịch vụ đám cưới với nhiều mẫu mã từ bình dân đến cao cấp tiêu chuẩn khách sạn 5 sao tại các Quận Hà Nội như Đống Đa, Cầu Giấy, Hoàn Kiếm, Tây Hồ, Ba Đình.</p>
			</div>
			<h4 class="page__title" style ="text-transform:uppercase; font-weight: bold;">Cho thuê 
			<?php
				echo $title;
			?>
			cưới hỏi</h4>
			<p class="page__title-sub">
					<?php
							echo $h4_content;
					?>
			</p>
			<h5 style ="text-transform:uppercase; font-weight: bold;margin: 20px 0 14px 0;">CẦN THUÊ 
			<?php
				echo $title;
			?>
			– HÃY ĐẾN ABC</h5>
			<p class="page__title-sub" >
			<?php
							echo $h5_content;
					?>
			</p>
			<img src="../asset/image/color.jpg" style ="max-width: 70%;" alt="">
			<h5 style ="text-transform:uppercase; font-weight: bold; margin: 50px 0 30px 0; text-align: center;">
			<?php
				echo $title;
			?>
			ĐÁM CƯỚI THÔNG DỤNG</h5>
			<ul class="page__list">
<?php
		$sql ="select product.id product_id, product.category_id, product.title, product.description, product.price, product.thumbnail from product join category on category.id = product.category_id WHERE product.category_id = '".$id."'";
		$tableItems = executeResult($sql);
		foreach($tableItems as $item) {
			echo '
				<li class="page__list-item row" style="margin: 30px 0">
					<div class="col-md-6 col-12">
						<div style="display: flex;">
							<h5 style="margin-bottom: 20px;display: inline;">'.$item['title'].'</h5>
							<div class="add__border">
								<div class="add__border-heaing"></div>
							</div>
						</div>
						<p>Giá tiền: <span style="color:#cf1b15; font-weight:500; margin-top: 20px;">'.number_format($item['price'],0,',','.').' VNĐ/1 bộ</span></p>
						<p>'.$item['description'].'</p>
						<a href="insert.php?product_id='.$item['product_id'].'&user_id='.$user_id.'">
							<button class="btn btn-success">Đặt Hàng</button>
						</a>
					</div>
					<div class="item__thumbnail col-md-5 col-12">
						<img src="'.$item['thumbnail'].'" style="width:100%;" alt="">
					</div>
				</li>
					';
	}
?>
			</ul>
		</div>
		<div class="service__list col-md-3" style="border-left: 1px solid #c1c1c1">
			<ul>
			<?php
				foreach($menuItems as $item) {
					echo '<li style="list-style: none ;margin:10px;">
							<a style="color: var(--back-color); font-weight: 500; text-transform: uppercase;" href="./index.php?id='.$item['id'].'&user_id='.$user_id.'">'.$item['name'].'</a>
						</li>';
				}
			?>
			</ul>
		</div>
	</div>
<?php
    require_once($baseUrl.'footer__user.php');
?>