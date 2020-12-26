<?php

?>

<html>

<head>
    <title>Dilicious</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo URL ?>/mvc/public/css/Header_Footer.css">
    <style>
        .rangcua {
            float: left;
            background-image: url('http://bizweb.dktcdn.net/100/332/765/themes/801707/assets/rang-cua.png?1608023825787');
            background-repeat: repeat-x;
            height: 7px;
            width: 100%;
            display: block;
            position: absolute;
            z-index: 3;
        }

        .active {
            display: block;
        }
    </style>
</head>

<body>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                    <div class="top_left">
                        <span>
                            Hotline:
                            <a href="#">0123 456 789</a>
                        </span>
                    </div>
                </div>
                <div class="hidden-xs hidden-sm col-md-3 col-lg-3">
                    <div class="header_search">
                        <form action="<?php echo URL ?>Search" method="POST" enctype="multipart/form-data">
                            <input name="name_search" type="text" placeholder="Tìm sản phẩm">
                            <button name="search" class="btn_search" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="hidden-xs col-sm-6 col-md-2 col-lg-2 pt-2">
                    <ul class="top_right">
                        <?php
                        if (!isset($_SESSION['email'])) {
                        ?>
                            <li>
                                <a href="<?php echo URL ?>login">Đăng nhập</a>
                            </li>
                            <li>
                                <a>&</a>
                            </li>
                            <li>
                                <a href="<?php echo URL ?>register">Đăng ký</a>
                            </li>
                        <?php } else {
                        ?>
                            <?php
                            ?>
                            <li>
                                <a href="<?php echo URL ?>Account">Tài khoản</a>
                            </li>
                            <li>
                                <a href="">&</a>
                            </li>
                            <li>
                                <a href="<?php echo URL ?>Logout">Đăng xuất</a>
                            </li>
                        <?php
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header p-3" style="width: 100%;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark menu">
                <div class="mr-5 logo">
                    <a href="<?php echo URL ?>">
                        <img src="https://scontent.fsgn2-5.fna.fbcdn.net/v/t1.0-9/127914547_1774476856062536_2273316599748914912_n.jpg?_nc_cat=104&ccb=2&_nc_sid=0debeb&_nc_ohc=EDCDaNKA3ioAX_WJfhf&_nc_ht=scontent.fsgn2-5.fna&oh=29359fdd246e3b236d93769c4cb55247&oe=5FE9AA01" alt="">
                    </a>
                </div>
                <button class="navbar-toggler" type="button">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars" style="color:#fff; font-size:28px;"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo URL ?>" class="nav-link">
                                <i class="fa fa-home"></i>
                                Trang chủ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL ?>Product" class="nav-link">
                                <i class="fa fa-birthday-cake"></i>
                                Sản phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL ?>GioiThieu" class="nav-link">
                                <i class="fa fa-info-circle"></i>
                                Giới thiệu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL ?>blog" class="nav-link">
                                <i class="fa fa-pencil-square-o"></i>
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL ?>Contact" class="nav-link">
                                <i class="fa fa-phone"></i>
                                Liên hệ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL ?>Cart" class="nav-link">
                                <div class="cart">
                                    <i class="fa fa-shopping-cart" style="font-size: 22px; color: #ef7147;"></i>
                                    <span>(</span>
                                    <span id="soluong" style="color:#333"><?php
                                                                            $total = 0;
                                                                            if (!isset($_SESSION['email'])) {
                                                                                if (isset($_SESSION['cart'])) {
                                                                                    if (count($_SESSION['cart']) != 0) {
                                                                                        foreach ($_SESSION['cart'] as $key => $value) {
                                                                                            $total += $value['quantity'];
                                                                                        }
                                                                                    }
                                                                                }
                                                                            } else {
                                                                                if (!empty($data["quantity"])) {
                                                                                    $total = $data["quantity"];
                                                                                }
                                                                            }
                                                                            echo $total;
                                                                            ?></span>
                                    <span>)</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="rangcua"></div>
</body>

</html>

<script>
    $(".navbar-toggler").click(function() {
        $(".navbar-collapse").toggle("normal", function() {
            // Animation complete.
        });
    });
</script>