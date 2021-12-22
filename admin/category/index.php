<?php
    $title = 'Quản Lý Danh Mục Sản Phẩm';
    $baseUrl = '../';
    require_once($baseUrl.'layout/header.php');

    $sql ="select * from category";
    $data = executeResult($sql);
?>

<div class="heading" >
    <h2>Quản Lý Danh Mục Sản Phẩm</h2>
</div>

<a href="editor.php">
    <button class="btn btn-add">Thêm Sản Phẩm</button> 
</a>

<div class="category__list" > 
    <table class="table__content" style="width: 55%; margin: 34px 0 0 0;">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Danh Mục</th>
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
			<td>'.$item['name'].'</td>
			<td class="btn__border-hidden">
				<a href="editor.php?id='.$item['id'].'"><button class ="btn btn-edit">Sửa</button></a>
			</td>
			<td class="btn__border-hidden"><button onclick = "deleteCategory('.$item['id'].')" class ="btn btn-delete">Xóa</button>
			</td>
	</tr>';
}
?>
     </tbody>
    </table>

</div>


<script type="text/javascript">
    function deleteCategory(id) {
        option = confirm('Bạn có chắc chắn muốn xóa danh mục này không?')
        if(!option) return

        $.post('form_delete.php', {
            'id': id,
            'action': 'delete'
        }, function(data) {
            if(data != null && data != '') {
                alert(data);
                return;
            }
            location.reload();
        })
    }
</script>

<?php
    require_once($baseUrl.'layout/footer.php');
?>
