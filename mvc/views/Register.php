<?php
require_once "./mvc/views/html/Header.html";
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
    <link rel="icon" href="./mvc/views/html/img_doan/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./mvc/views/html/Register.css">
</head>

<body>

    <div class="Content_Register">
        <p class="trangchu"><a href="#">Trang chủ</a> <span style="color:#000!important;">/</span> Đăng ký tài khoản</p>
        <h1 class="register_account">ĐĂNG KÝ TÀI KHOẢN</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form">
                <div class="page_login">
                    <div class="login">
                        <form action="http://localhost:8080/Doanweb/Register/register" method="POST">
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
                            <button name="register" class="btn_login mb-3 mt-3" type="submit" value="Đăng ký" >Đăng ký</button>
                           
                        </form>
                        <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  mt-4 ">
                                   
                                    <div class="register_ex">
                                        <p class="login_here mt-2">Bạn đã có tài khoản, hãy Đăng nhập <a href=""
                                                style="color:#ef7147; text-decoration: none;">tại đây</a></p>
                                    </div>
                                    <div class="block">
                                        <p class="text-center" style="font-size: 13px;">Hoặc đăng nhập bằng</p>
                                        <div class="icon_login text-center">
                                            <a href="#" class="fbook ">
                                                <img class="img_facebook" width="190px" height="35px"
                                                    src="./mvc/views/html/img_doan/fb-btn.svg" alt="">
                                            </a>
                                            <a href="#" class="google">
                                                <img style="margin-bottom: 20px;" width="190px" height="35px"
                                                    src="./mvc/views/html/img_doan/gp-btn.svg" alt="">
                                            </a>
                                        </div>
                                    </div>
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
require_once "./mvc/views/html/Footer.html";
?>