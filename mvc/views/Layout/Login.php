<?php
require_once "Header.php";
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
        .login {
            background: url('./mvc/views/html/img_doan/bg_all.png');
            background-repeat: repeat;
            padding: 20px;
            width: 100%;
        }

        .tool-bar a {
            font-size: 14px;
            color: #333;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            text-decoration: none;
        }

        .tieude h3 {
            font-size: 1.42857em;
            font-weight: 500;
            color: #333;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 18px;
        }

        .btn1 {
            background: #ef7147;
            color: #fff;
            outline: none;
            border: solid 0.3px #ef7147;
            padding: 8px 13px;
            border-radius: 5px;
        }

        .btn1:hover {
            border: solid 0.3px #ef7147;
            outline: none;
            color: #ef7147;
            background: #fff;
            border-radius: 5px;
        }

        .register {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ebebeb;
        }

        .social {
            display: flex;
        }

        .form {
            background: #fff;
            border-radius: 3px;
            padding: 25px 25px 10px 25px;
        }
    </style>
</head>

<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 tool-bar mt-3">
                    <a href="">Trang Chủ</a>
                    <span>/</span>
                    <a href="" style="color: #ef7147">Đăng nhập tài khoản</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mt-4 tieude">
                    <h3>Đăng nhập tài khoản</h3>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form">
                        <form action="<?php echo URL ?>Login/log" method="POST">
                            <div class="form-group">
                                <label>Nếu bạn đã có tài khoản, đăng nhập ở đây</label><br>
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Username" name="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Mật khẩu:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
                            </div>
                            <button type="submit" name="login" class="btn1" id="dangnhap">Đăng Nhập</button>
                            <label id="msg" class="pt-2" for="" style="display: none;display: <?php echo $data['success'] ?> !important; color: red;">
                                Đăng nhập thất bại, xin vui lòng kiểm tra lại thông tin!
                            </label>
                        </form>

                        <div class="register">
                            <label for="">Bạn chưa có tài khoản, hãy Đăng ký <a href="<?php echo URL ?>Register" style="color:#ef7147;">tại
                                    đây</a> </label>
                        </div>

                        <div class="social-network">
                            <p>Hoặc đăng nhập bằng</p>
                            <div class="social text-center">
                                <div class="fb" style="margin-left: 10px;">
                                    <img width="40px" height="40px" src="https://img.icons8.com/fluent/48/000000/facebook-new.png" />
                                </div>
                                <div class="gg" style="margin-left: 10px;">
                                    <img width="40px" height="40px" src="https://img.icons8.com/fluent/48/000000/google-logo.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form">
                        <div class="form-group">
                            <label>Bạn quên mật khẩu? Nhập địa chỉ Email để lấy lại mật khẩu.</label><br>
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            <button type="submit" class="btn1 mt-3">Lấy lại mật khẩu</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    // $("#dangnhap").click(function(event) {
    //     event.preventDefault();
    //     var href = "<?php echo URL ?>Login/log";
    //     var xhr = new XMLHttpRequest();

    //     xhr.onload = function() {
    //         if (xhr.readyState === xhr.DONE) {
    //             if (xhr.status === 200) {
    //                 res = xhr.responseText.trim();
    //                 console.log(res);
    //                 if (res == "error") {
    //                     $("#msg").css("display", "block");
    //                 }
    //             }
    //         }
    //     }

    //     xhr.open('GET', href, true);
    //     xhr.send();
    // })
</script>

<?php
require_once "Footer.php";
?>