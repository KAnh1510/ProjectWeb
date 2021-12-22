  <?php
    $title = 'Thông tin chi tiết đơn hàng';
    $baseUrl = '../';
    require_once('../layout/header.php');

    $orderId = getGet('id');

		$sql =" select order_user.*, product.title,product.thumbnail, product.price from product join order_user on product.id = order_user.product_id where order_user.product_id ='".$orderId."'";

    // $sql ="select order_user.*, product.title, product.thumbnail from order_user left join product on 
    //         product.id = order_user.product_id where order_user.order_id ='".$orderId."'";
    $data = executeResult($sql,true);
	echo($data);
    $sql ="select * from orders where id = $orderId";
    $orderItem = executeResult($sql,true);
?>
<style type="text/css">
    .link_back {
        margin-bottom: 20px;
        float: right;
        display: flex;
    }

    .icon_back {
        color: var(--while-color);
        font-size: 1.1rem;
        padding: 5px;
    }
    
    .back {
        font-size: 1.1rem;
        color: var(--while-color);
    }
    
    .link_back:hover .back,
    .link_back:hover .icon_back {
        color: var(--secondary-color);
    }

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="heading" style="margin-bottom: 70px;">
    <h2>Chi Tiết Đơn Hàng</h2>
    <a href="index.php" style="text-decoration: none;" class="link_back" >
        <ion-icon class="icon_back" name="chevron-back-outline"></ion-icon>
        <p class="back"> Quay lại</p>
    </a>
</div>
<div class="row" >
    <div class="col-md-8 table-responsive">
        <table class="table__content ">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Thumbnail</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
<?php
    $index = 0;
    foreach ($data as $item) {
        echo'<tr>
							<th>'.(++$index).'</th>
							<td><img src = "'.$item['thumbnail'].'" style ="height: 120px; display:flex; margin: 10px auto;"/></td>
							<td>'.$item['title'].'</td>
							<td>'.$item['price'].'</td>
							<td>'.$item['num'].'</td>
							<td>'.$item['total'].'</td>
					</tr>';
    }
?>
					<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<th></th>
							<td><?=$orderItem['total']?></td>
					</tr>
			</tbody>
		</table>
	</div>

    <div class="col-md-4">
        <table class="table__content ">
            <tr>
                <th>Họ & Tên: </th>
                <td><?=$orderItem['fullname']?></td>
            </tr>
            <tr>
                <th>Email: </th>
                <td><?=$orderItem['email']?></td>
            </tr>
            <tr>
                <th>Địa Chỉ: </th>
                <td><?=$orderItem['address']?></td>
            </tr>
            <tr>
                <th>Phone: </th>
                <td><?=$orderItem['phone_number']?></td>
            </tr>
        </table>
        
    </div>
</div>


<script type="text/javascript">
    function markRead(id) {
        $.post('form_delete.php', {
            'id': id,
            'action': 'mark'
        }, function(data) {
            location.reload()
        })
    }
</script>

<?php
    require_once($baseUrl.'layout/footer.php');
?>

