  <?php
    $title = 'Thêm/Sửa Sản Phẩm';
    $baseUrl = '../';
    require_once($baseUrl.'layout/header.php');

    require_once('form_save.php');
    
    $id = getGet('id');
    if ($id != '' && $id > 0) {
        // code...
        $userItem = executeResult ("select * from product where id = '$id'",true);
        if($userItem != null) {
            $thumbnail = $userItem['thumbnail'];
            $title = $userItem['title'];
            $price = $userItem['price'];
            $category_id = $userItem['category_id'];
            $description = $userItem['description'];
        } else {
            $id = 0;
        }
    } else {
            $id = 0;
        }
    $sql = "select * from category";
    $categoryItems = executeResult($sql);

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<div class="heading">
    <h1 style="font-size: 1.8rem;">Thêm/Sửa Sản Phẩm</h1>
</div>
<div class="panel panel-primary" style="background-color: var(--primary-color) ;">   
    <div class="panel-body">
        <form method = "post" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-md-9 col-12">
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label for="usr" style="color: var(--while-color); float: left;">Tên Sản Phẩm:</label>
                        <input required="true" type="text" class="form-control" id="usr" name="title" value="<?=$title?>">
                        <input type="text" id="id" name="id" value="<?=$id?>" class="form-control" hidden="true">
                    </div>

                    <div class="form-group" style="margin-bottom: 30px; display: flex;flex-direction:column;">
                        <label for="pwd" style="color:var(--while-color);float:left;">Mô tả:</label>
                        <textarea class="form-control" rows="5" name="description" id="description"><?=$description?></textarea>
                    </div>
                    <button class="btn btn-success">Lưu Sản Phẩm</button>
                </div>

                <div class="col-md-3 col-12">
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label for="thumbnail" style="color:var(--while-color);float: left;">Thumbnail:</label>
                        <input required="true" type="text" class="form-control" id="thumbnail" name="thumbnail" value="<?=$thumbnail?>" onchange = "updateThumbnail()">
                        <img id="thumbnail_img" src="<?=$thumbnail?>" style="max-height: 180px; margin-bottom: 15px; margin-top: 18px;">
                        <!-- <input required="true" multiple="true"  type="file" class="form-control" id="galery" name="galery" value=""> -->
                    </div>
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label for="usr" style="color: var(--while-color); float: left;">Danh mục sản phẩm:</label>
                        <select class="form-control" name="category_id" id="category_id" required="true">
                            <option value="">-- Chọn --</option>
                            <?php 
                                foreach($categoryItems as $item) {
                                    if ($item['id'] == $category_id) {
                                        // code...
                                        echo '<option selected value = "'.$item['id'].'"> '.$item['name'].' </option>';
                                    }
                                    echo '<option value = "'.$item['id'].'"> '.$item['name'].' </option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label for="price" style="color:var(--while-color);float: left;">Giá:</label>
                        <input required="true" type="text" class="form-control" id="price" name="price" value="<?=$price?>">
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</div>

<script type="text/javascript">
    function updateThumbnail() {
        $('#thumbnail_img').attr('src', $('#thumbnail').val())
    }

    $('#description').summernote({
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

