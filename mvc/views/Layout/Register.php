<?php
require_once "Header.php";
?>
<html>

<head>
    <title>Món ăn nổi bật Delicious</title>
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
    <link rel="icon" href="./mvc/public/css/img_doan/favicon.png" type="image/x-icon">
    <style>
        .Content_Register {
            background-image: url(./mvc/public/css/img_doan/bg_all.png);
            background-repeat: repeat;
            padding-top: 20px;

        }

        .page_login {
            margin-top: 0px;
            border: 1px solid #ebebeb;
            background-color: #fff;
            border-radius: 5px;
            margin: 0% 15%;
            margin-bottom: 20px;
            position: relative;
        }

        .login {
            padding: 25px 25px 10px 25px;
        }



        .login input {
            height: 40px;
            padding: 10px 20px;
            color: #333;
            border: 1px solid #ebebeb;
            border-radius: 5px;
            background-color: #f8f8f8;
            font-size: 20px;
        }

        .login input::placeholder {
            font-size: 16px;
            vertical-align: center;
        }

        .btn_login {
            background-color: #ef7147;
            color: #fff;
            padding: 0 20px;
            text-align: center;
            white-space: nowrap;
            outline: none !important;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            height: 40px;
            font-size: 13px;
        }

        .btn_login:hover {
            background-color: #fff;
            color: #ef7147;
            border: 1px solid #ef7147;

        }

        .register_ex {
            border-top: 1px solid #ebebeb;
        }

        label {
            font-size: 13px;

        }

        .trangchu {
            font-size: 13px;
            color: #ef7147;
            margin-left: 15%;

        }

        .trangchu a {
            color: #000;
            text-decoration: none;

        }

        .trangchu a:hover {
            color: #ef7147;
        }

        .register_account {
            color: #000;
            font-size: 16px;
            margin-left: 15%;
            padding-top: 20px;
            padding-bottom: 10px;
        }

        .login_here {
            font-size: 13px;
        }

        .icon_login {
            padding-bottom: 25px;
        }

        .img_facebook {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="Content_Register">
        <p class="trangchu"><a href="#">Trang chủ</a> <span style="color:#000!important;">/</span> Đăng ký tài khoản</p>
        <h1 class="register_account">ĐĂNG KÝ TÀI KHOẢN</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form">
                <div class="page_login">
                    <div class="login">
                        <form action="<?php echo URL ?>Register/register" method="POST">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <label>Họ:</label><br>
                                    <input name="ho" type="text" class="form-control form-control-lg" placeholder="Họ">
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <label>Tên:</label><br>
                                    <input name="ten" type="text" class="form-control form-control-lg" placeholder="Tên">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <label>Email:</label><br>
                                    <input name="email" type="text" class="form-control form-control-lg" placeholder="Email">
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <label>Mật Khẩu:</label><br>
                                    <input name="password" type="password" class="form-control form-control-lg" placeholder="Mật khẩu">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                </div>
                            </div>
                            <button name="register" class="btn_login mb-2 mt-3" type="submit" value="Đăng ký">Đăng ký</button>
                            <br><label style="display: none; display: <?php echo $data['display'] ?> !important">
                                Email đã tồn tại!
                            </label>
                            <!-- <br><label style="display: none; display: <?php echo $data['display'] ?> !important">
                                Độ dài mật khẩu phải lớn hơn 5!
                            </label> -->
                        </form>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  mt-4 ">

                                <div class="register_ex">
                                    <p class="login_here mt-2">Bạn đã có tài khoản, hãy Đăng nhập <a href="" style="color:#ef7147; text-decoration: none;">tại đây</a></p>
                                </div>
                                <!-- <div class="block">
                                    <p class="text-center" style="font-size: 13px;">Hoặc đăng nhập bằng</p>
                                    <div class="icon_login text-center">
                                        <a href="#" class="fbook ">
                                            <img class="img_facebook" width="190px" height="35px" src="./mvc/public/css/img_doan/fb-btn.svg" alt="">
                                        </a>
                                        <a href="#" class="google">
                                            <img style="margin-bottom: 20px;" width="190px" height="35px" src="./mvc/public/css/img_doan/gp-btn.svg" alt="">
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
require_once "Footer.php";
?>