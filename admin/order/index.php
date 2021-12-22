  <?php
    $title = 'Quản Lý Đơn Hàng';
    $baseUrl = '../';
    require_once('../layout/header.php');

    $sql ="select * from orders order by create_time desc";
    $data = executeResult($sql);
?>

<div class="heading" style="margin-bottom: 40px;">
    <h2>Quản Lý Đơn Hàng</h2>
</div>

<table class="table__content">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ & Tên</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Địa chỉ</th>
                    <th>Nội Dung</th>
                    <th>Tổng Tiền</th>
                    <th>Ngày Tạo</th>
                    <th class="hidden"></th>
                </tr>
            </thead>
            <tbody>
<?php
    $index = 0;
    foreach ($data as $item) {
        echo'<tr>
                    <th>'.(++$index).'</th>
                    <td><a href="detail.php?id='.$item['id'].'" style = "color: var(--while-color);">
                        '.$item['fullname'].'
                    </a></td>
                    <td><a href="detail.php?id='.$item['id'].'" style = "color: var(--while-color);">
                        '.$item['email'].'
                    </a></td>
                    <td><a href="detail.php?id='.$item['id'].'" style = "color: var(--while-color);">
                        '.$item['phone_number'].'
                    </a></td>
                    <td>'.$item['address'].'</td>
                    <td>'.$item['note'].'</td>
                    <td>'.$item['total'].'</td>
                    <td>'.$item['create_time'].'</td>
                    <td class="btn__border-hidden">';
        if($item['status'] == 0) {
            echo '<button class ="btn btn-sm" style="background-color: #129936;" onclick = "changeStatus('.$item['id'].',1)">Duyệt</button>
            <button class ="btn btn-sm btn-delete"  onclick = "changeStatus('.$item['id'].',2)">Hủy</button>';
        } else if($item['status'] == 1) {
            echo '<label class = "badge badge-success">Đã Duyệt</label>';
        } else {
            echo '<label class = "badge badge-danger">Đã Hủy</label>';
        }
        echo '
                    </td>
                </tr>';
    }
?>
    </tbody>
</table>

<script type="text/javascript">
    function changeStatus(id,status) {

        $.post('form_update.php', {
            'id': id,
            'status': status,
            'action': 'update_status'
        }, function(data) {
            location.reload();
        })
    }
</script>

<?php
    require_once($baseUrl.'layout/footer.php');
?>

