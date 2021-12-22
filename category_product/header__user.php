<?php
    require_once('../utils/ultility.php');
		require_once('../database/dbhelper.php');
    $sql ="select * from category";
    $menuItems = executeResult($sql);
		$user = executeResult("select fullname from user where id = ".$user_id."", true);
		$user_name = $user['fullname'];
?>
<!doctype html>
<html lang="en">
	<head>
		<title>Danh sách sản phẩm <?php
				echo $title;
			?></title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../asset/font/fontawesome-free-5.15.4-web/css/all.css">
		<link
				rel="stylesheet"
				type="text/css"
				href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
			/>
		<link rel="stylesheet" href="../asset/css/base.css">
	</head>
	<body>
		<div class="menu_bar">
			<a href="#">
				<img class="logo-img" src="../asset/image/logo.png" alt="">
			</a>
			<ul>
					<li class="active"><a href="../screen_user/index.php?user_id=<?=$user_id?>">Trang Chủ</a></li>
					<li>
						<a href="#">Dịch Vụ</a>
						<div class="sub_menu-1">
							<ul>
			<?php
				foreach($menuItems as $item) {
					echo '<li>
									<a href="./index.php?id='.$item['id'].'&user_id='.$user_id.'">'.$item['name'].'</a>
								</li>';
				}
			?>
							</ul>
						</div>
					</li>
					<li><a href="#contact">Liên Hệ</a></li>
					<li style="text-decoration: underline;">Xin chào <?php echo $user_name;?></li>
					<li><a href="../index.php">Đăng xuất</a></li>
					<li><a href="./manage_product.php?user_id=<?=$user_id?>"><i class="fas fa-shopping-cart" style="color: var(--while-color);"></i></a></li>
				</ul>	
		</div>