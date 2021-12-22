<?php
    $title = 'Quản lý Sản Phẩm';
    $baseUrl = '../';
    require_once($baseUrl.'layout/header.php');

    $sql ="select product.*, category.name as category_name from category, product where category_id = category.id";
    $data = executeResult($sql);
?>

<div class="heading">
    <h2>Quản Lý Sản Phẩm</h2>
</div>

<a href="editor.php">
    <button class="btn btn-add">Thêm Sản Phẩm</button> 
</a>

<table class="table__content">
            <thead>
                <tr>
                    <th>STT</th>
					<th>Thumbnail</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Danh Mục</th>
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
                    <td><img src = "'.$item['thumbnail'].'" style="height: 80px; display:flex; margin: 10px auto;"></td>
                    <td>'.$item['title'].'</td>
                    <td>'.number_format($item['price']).' VNĐ</td>
                    <td>'.$item['category_name'].'</td>
                    <td class="btn__border-hidden">
                        <a href="editor.php?id='.$item['id'].'">
                            <button class ="btn btn-edit">Sửa</button>
                        </a>
                    </td>
                    <td class="btn__border-hidden">
                        <button onclick = "deleteProduct('.$item['id'].')" class ="btn btn-delete">Xóa</button>
                    </td>
                </tr>';
    }
?>
    </tbody>
</table>

<script type="text/javascript">
    function deleteProduct(id) {
        option = confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')
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