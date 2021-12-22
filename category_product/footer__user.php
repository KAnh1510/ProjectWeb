<?php
    require_once($baseUrl.'header__user.php');
		$fullname = $email = $phone_number = $note ='';

	if(!empty($_POST)) {
		$id = getPost('id');
		$fullname = getPost('fullname');
		$email = getPost('email');
		$phone_number = getPost('phone_number');
		$note = getPost('note');
		$created_at = $updated_at = date('y-m-d H:i:s');

		$sql =" insert into feedback (fullname, email, phone_number, note,created_at,updated_at, status) values ('$fullname', '$email','$phone_number','$note','$created_at', '$updated_at',1)";
		execute($sql);
}
		$sql ="select * from feedback";
    $data = executeResult($sql);
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<div class="feedback row" style="border-top: 1px solid #ccc; margin: 0 100px;">
		<div class="col-md-6 col-12">
			<h3>Phản Hồi Khách Hàng:</h3>
			<form method = "post">
				<div class="form-group">
					<label for="usr" style=" float: left;">Họ và Tên:</label>
					<input required="true" type="text" class="form-control" id="usr" name="fullname">
					<input type="text" id="id" name="id" value="<?=$id?>" class="form-control" hidden="true">
				</div>
				<div class="form-group">
						<label for="email" style="float: left;">Email:</label>
						<input required="true" type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
						<label for="phone_number" style="float: left;">SĐT:</label>
						<input required="true" type="tel" class="form-control" id="phone_number" name="phone_number">
				</div>
				<div class="form-group" style="margin-bottom: 30px; display: flex;flex-direction:column;">
					<label for="pwd" style="float:left;">Bình luận:</label>
					<textarea class="form-control" rows="5" name="note" id="note"></textarea>
				</div>
				<button class="btn btn-success">Bình Luận</button>
			</form>
		</div>
		<div class="col-md-6 col-12">
			<h5> Bình Luận: </h5>
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