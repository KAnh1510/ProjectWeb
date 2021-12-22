<?php
    $title = 'Thêm/Sửa Sản Phẩm';
    $baseUrl = '../';
    require_once($baseUrl.'layout/header.php');

    require_once('form_save.php');
    
    $id = getGet('id');
    if ($id != '' && $id > 0) {
			// code...
			$userItem = executeResult ("select * from category where id = '$id' ",true);
			if($userItem != null) {
				$name = $userItem['name'];
				$h4Content = $userItem['h4_content'];
				$h5Content = $userItem['h5_content'];
			} else {
				$id = 0;
			}
    } else {
				$id = 0;
			}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link rel="stylesheet" href="<?=$baseUrl?>../asset/css/dashboard.css">
<div class="heading">
    <h1 style="font-size: 1.8rem;">Thêm/Sửa Danh Mục</h1>
</div>
<div class="panel panel-primary" style="background-color: var(--primary-color) ;">   
	<div class="panel-body">
		<form method = "post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-12 col-12">
					<div class="form-group" style="margin-bottom: 30px;">
						<label for="usr" style="color: var(--while-color); float: left;">Tên Danh mục:</label>
						<input required="true" type="text" class="form-control" id="usr" name="name" value="<?=$name?>">
						<input type="text" id="id" name="id" value="<?=$id?>" class="form-control" hidden="true">
					</div>
					<div class="form-group" style="margin-bottom: 30px; display: flex;flex-direction:column;">
						<label for="pwd" style="color:var(--while-color);float: left;">Mô tả 1:</label>
						<textarea class="form-control" rows="6" name="h4_content" style="color:var(--while-color);"  id="description1"><?=$h4Content?></textarea>
					</div>
					<div class="form-group" style="margin-bottom: 30px;display: flex;flex-direction:column;">
						<label for="pwd" style="color:var(--while-color);float: left;">Mô tả 2:</label>
						<textarea class="form-control" rows="7" name="h5_content" style="color:var(--while-color);" id="description2"><?=$h5Content?></textarea>
					</div>
					<button class="btn btn-success">Lưu Danh mục</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	$('#description1').summernote({
			placeholder: 'Nhập nội dung dữ liệu',
			tabsize: 2,
			height: 200,
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'underline', 'clear']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['table', ['table']],
				['insert', ['link', 'picture', 'video']],
				['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
	$('#description2').summernote({
			placeholder: 'Nhập nội dung dữ liệu',
			tabsize: 2,
			height: 200,
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'underline', 'clear']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['table', ['table']],
				['insert', ['link', 'picture', 'video']],
				['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>


<?php
    require_once($baseUrl.'layout/footer.php');
?>

