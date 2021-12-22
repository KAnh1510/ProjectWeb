  <?php
    $title = 'Quản Lý Người Dùng';
    $baseUrl = '../';
    require_once('../layout/header.php');

    $sql ="select user.*, role.name as role_name from role, user where user.role_id = role.id ";
    $data = executeResult($sql);
?>

<div class="heading">
    <h2>Quản Lý Người Dùng</h2>

    <a href="editor.php">
        <button class="btn btn-add">Thêm Tài Khoản</button> 
    </a>
</div>

<table class="table__content">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ & Tên</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Địa chỉ</th>
                    <th>Quyền</th>
                    <th class="hidden"></th>
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
                    <td>'.$item['address'].'</td>
                    <td>'.$item['role_name'].'</td>
                    <td class="btn__border-hidden">
                        <a href="editor.php?id='.$item['id'].'">
                            <button class ="btn btn-edit">Sửa</button>
                        </a>
                    </td>
                    <td class="btn__border-hidden">';
        if( $item['role_id'] != 1) {
            echo '<button onclick = "deleteUser('.$item['id'].')" class ="btn btn-delete">Xóa</button>';
        }
            echo '
                    </td>
                </tr>';
    }
?>
    </tbody>
</table>

<script type="text/javascript">
    function deleteUser(id) {
        option = confirm('Bạn cs chắc chắn muốn xóa tài khoản này không?')
        if(!option) return
        $.post('form_delete.php', {
            'id': id,
            'action': 'delete'
        }, function(data) {
            location.reload();
        })
    }
</script>

<?php
    require_once($baseUrl.'layout/footer.php');
?>

