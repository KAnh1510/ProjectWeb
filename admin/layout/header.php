<?php
    session_start();
    require_once($baseUrl.'../utils/ultility.php');
    require_once($baseUrl.'../database/dbhelper.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="<?=$baseUrl?>../asset/css/dashboard.css">
    <link rel="stylesheet" href="<?=$baseUrl?>../asset/css/base.css">
    <link rel="stylesheet" type="text/css" href="<?=$baseUrl?>../asset/font/fontawesome-free-5.15.4-web/css/all.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>


<body>
    
    <div class="sidebar">
        <ul>
            <li class="list">
                <b></b>
                <b></b>
                <a href="<?=$baseUrl?>">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="list ">
                <b></b>
                <b></b>
                <a href="<?=$baseUrl?>category">
                    <span class="icon"><ion-icon name="folder-outline"></ion-icon></span>
                    <span class="title">Danh Mục Sản Phẩm</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="<?=$baseUrl?>product">
                    <span class="icon"><ion-icon name="clipboard-outline"></ion-icon></span>
                    <span class="title">Sản Phẩm</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="<?=$baseUrl?>order">
                    <span class="icon"><ion-icon name="cart-outline"></ion-icon></span>
                    <span class="title">Quản lý Đơn hàng</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="<?=$baseUrl?>feedback">
                    <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                    <span class="title">Quản Lý Phản Hồi</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="<?=$baseUrl?>user">
                    <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                    <span class="title">Quản Lý Người Dùng</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="<?=$baseUrl?>authen/login.php">
                    <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
                    <span class="title">Thoát</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main" >
        <div class="navbar-top">
            <form class="form__search">
                <span class="icon"><ion-icon name="search-outline"></ion-icon></span>
                <input type="text" placeholder="Tìm Kiếm Sản Phẩm" >
            </form>
        </div>
