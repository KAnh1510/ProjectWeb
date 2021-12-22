  <?php
    $title = 'Thêm/Sửa Tài Khoản Người Dùng';
    $baseUrl = '../';
    require_once($baseUrl.'layout/header.php');

    require_once('form_save.php');
    
    $id = '';
    $id = getGet('id');
    if ($id != '' && $id > 0) {
        // code...
        $userItem = executeResult ("select * from user where id = '$id'",true);
        if($userItem != null) {
            $fullname = $userItem['fullname'];
            $email = $userItem['email'];
            $phone_number = $userItem['phone_number'];
            $address = $userItem['address'];
            $role_id = $userItem['role_id'];
        } else {
            $id = 0;
        }
    }
    $sql = "select * from role";
    $roleItems = executeResult($sql);

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="heading">
    <h1 style="font-size: 1.8rem;">Thêm/Sửa Tài Khoản Người Dùng</h1>
</div>
<div class="panel panel-primary" style="background-color: var(--primary-color) ;">
    <div class="panel-heading">
        <h6 style="color:red;"><?=$msg?></h6>
    </div>   
    <div class="panel-body">
        <form action="" method = "post" onsubmit="return validateForm();">
            <div class="form-group">
                <label for="usr" style="color: #fff; float: left;">Họ và Tên:</label>
                <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$fullname?>">
                <input type="text" id="id" name="id" value="<?=$id?>" class="form-control" hidden="true">
            </div>
            <div class="form-group">
                <label for="usr" style="color: #fff; float: left;">Role:</label>
                <select class="form-control" name="role_id" id="role_id" required="true">
                    <option value="">-- Chọn --</option>
                    <?php 
                        foreach($roleItems as $role) {
                            if ($role['id'] == $role_id) {
                                // code...
                                echo '<option selected value = "'.$role['id'].'"> '.$role['name'].' </option>';
                            }
                            echo '<option value = "'.$role['id'].'"> '.$role['name'].' </option>';
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="email" style="color: #fff;float: left;">Email:</label>
                <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$email?>">
            </div>
            <div class="form-group">
                <label for="phone_number" style="color: #fff;float: left;">SĐT:</label>
                <input required="true" type="tel" class="form-control" id="phone_number" name="phone_number" value="<?=$phone_number?>">
            </div>
            <div class="form-group">
                <label for="address" style="color: #fff;float: left;">Địa Chỉ:</label>
                <input required="true" type="text" class="form-control" id="address" name="address" value="<?=$address?>">
            </div>
            <div class="form-group">
                <label for="pwd" style="color: #fff;float: left;">Mật Khẩu:</label>
                <input <?=($id > 0 ? '' :'required="true"')?> type="password" class="form-control" id="pwd" name="password" minlength="6">
            </div>
            <div class="form-group">
                <label for="confirmation_pwd" style="color: #fff;float: left;">Xác minh mật khẩu:</label>
                <input <?=($id >0 ? '' :'required="true"')?> type="password" class="form-control" id="confirmation_pwd">
            </div>
            <button class="btn btn-success">Đăng kí</button>
        </form>
    </div>
</div>

<script type="text/javascript">
        function validateForm() {
            $pwd = $('#pwd').val();
            $confirmPwd= $('#confirmation_pwd').val();
            if($pwd != $confirmPwd) {
                alert('Mật Khẩu Không khớp, vui vòng kiểm tra lại!');
                return false
            }
            return true;
        }
    </script>


<?php
    require_once($baseUrl.'layout/footer.php');
?>

