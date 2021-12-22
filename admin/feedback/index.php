  <?php
    $title = 'Quản Lý Phản Hồi';
    $baseUrl = '../';
    require_once('../layout/header.php');

    $sql ="select * from feedback order by created_at desc";
    $data = executeResult($sql);
?>

<div class="heading" style="margin-bottom: 40px;">
    <h2>Quản Lý Phản Hồi</h2>
</div>

<table class="table__content">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ & Tên</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Nội dung</th>
                    <th>Ngày tạo</th>
                    <th class="hidden"></th>
                </tr>
            </thead>
            <tbody>
<?php
    $index = 0;
    foreach ($data as $item) {
        echo'<tr>
                    <th>'.(++$index).'</th>
                    <td>'.$item['fullname'].'</td>
                    <td>'.$item['email'].'</td>
                    <td>'.$item['phone_number'].'</td>
                    <td>'.$item['note'].'</td>
                    <td>'.$item['created_at'].'</td>
                    <td class="btn__border-hidden">';
        if($item['status'] == 0) {
            echo '<button class ="btn" style="background-color: #129936;" onclick = "markRead('.$item['id'].')">Đã đọc</button>';
        }
        echo '
                    </td>
                </tr>';
    }
?>
    </tbody>
</table>

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

