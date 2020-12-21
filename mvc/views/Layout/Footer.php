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
    <style>
        .top-header .row {
            align-items: center;
            padding: 10px;
        }

        .top-header {
            border-bottom: 1px dashed #c3c3c3;
        }

        .top_right {
            float: right;
            margin: 0;
            padding: 0;
        }

        .top_right li {
            float: left;
            list-style: none;
            margin-right: 5px;
        }

        .top_right li a {
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            color: #8d8d8d;
            transition: 0.3s;
        }

        .top_right li a:hover {
            color: #ef7147;
        }

        .top_left span a {
            font-size: 18px;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            font-weight: 700;
            color: #ef7147;
            text-decoration: none;
            line-height: 45px;
        }

        .header_search form input {
            padding: 0 35px 0 15px;
            background: #eeeeee;
            position: relative;
            box-shadow: none;
            height: 30px;
            width: 100%;
            float: left;
            font-size: 14px;
            outline: none;
            border: 1px solid #ccc;
        }

        .fa-search::before {
            content: "\f002";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .btn {
            position: absolute;
            color: #ef7147;
            background: #eeeeee;
            border-top-right-radius: 2px;
            border-bottom-right-radius: 2px;
            width: 37px;
            height: 30px;
            top: 0px;
            right: 15px;
            line-height: 30px;
            border: 1px solid #ccc;
            border-left: none;
        }

        .fa-home::before {
            content: "\f015";
        }

        .fa-birthday-cake::before {
            content: "\f1fd";
        }

        .fa-info-circle::before {
            content: "\f05a";
        }

        .fa-pencil-square-o {
            content: "\f044";
        }

        .fa-phone {
            content: "\f095";
        }

        .navbar-dark .navbar-nav .nav-item {
            padding: 10px 15px;
            border-radius: 10px;
        }

        .navbar-dark .navbar-nav .nav-item:hover {
            background: #dff9fb;
            cursor: pointer;
        }

        .navbar-dark .navbar-nav .nav-link {
            text-decoration: none;
            font-family: "UTMBryantLGBold", sans-serif;
            font-size: 18px;
            color: #333;
            line-height: 1.222;
            padding: 0px 10px 0px;
            transition: 0.3s;
        }

        .navbar-dark .navbar-nav .nav-item:hover .nav-link {
            color: #ef7147;
        }


        .navbar-toggler-icon {
            background: #ef7147;
            border: none;
        }

        .navbar-toggler {
            padding: 0;
        }

        .navbar-toggler:focus {
            outline: 4px auto #ef7147;
        }

        .footer {
            background-image: url("https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.0-9/128756396_1774476849395870_6357438844642245972_o.jpg?_nc_cat=106&ccb=2&_nc_sid=0debeb&_nc_ohc=pYQLesmzvooAX8i3RWw&_nc_ht=scontent.fsgn2-3.fna&oh=7e3f48b78cc5308bf7cc5ef10eb17d3d&oe=5FE79071");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
        }

        .footer span {
            color: #aaaaa9;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            font-size: 16px;
            margin-left: 5px;
        }

        .menu_footer ul {
            padding: 0;
        }

        .menu_footer ul li {
            padding: 8px 0px 8px 0px;
            list-style: none;
        }

        .menu_footer ul li a {
            color: #aaaaa9;
            text-decoration: none;
            transition: 0.3s;
        }

        .menu_footer ul li a:hover {
            color: #ef7147;
        }

        .facebook {
            width: 50px;
            height: 50px;
            font-size: 30px;
            background: #333;
            border-radius: 50%;
            text-align: center;
            transition: 0.3s;
            cursor: pointer;
            position: relative;
        }

        .fa-facebook {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .facebook:hover {
            background: #ef7147 !important;
        }

        .facebook:hover .fa-facebook {
            color: #fff !important;
        }


        .instagram {
            width: 50px;
            height: 50px;
            font-size: 30px;
            background: #333;
            border-radius: 50%;
            text-align: center;
            transition: 0.3s;
            cursor: pointer;
            position: relative;
        }

        .fa-instagram {
            position: absolute;
            top: 49%;
            left: 50%;
            transform: translate(-50%, -50%);
        }


        .instagram:hover {
            background: #ef7147 !important;
        }

        .instagram:hover .fa-instagram {
            color: #fff !important;
        }


        .footer form input[type="text"] {
            border-radius: 4px;
            height: 34px;
            width: 100%;
            border: none;
            background-color: #fff;
            margin-bottom: 8px;
            padding-left: 15px;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            font-size: 14px;
            outline: none;
        }

        .footer form input[type="button"] {
            width: 100px;
            height: 34px;
            border-radius: 4px;
            text-transform: uppercase;
            color: #fff;
            background: #ef7147;
            border: 1px solid #ef7147;
            transition: 0.3s;
        }

        .footer form input[type="button"]:hover {
            background: #fff;
            color: #ef7147;
        }

        @media only screen and (max-width: 1200px) {
            .navbar-dark .navbar-nav .nav-item {
                padding: 10px 10px;
            }

            .navbar-dark .navbar-nav .nav-link {
                font-size: 14px;
            }
        }


        @media only screen and (max-width: 500px) {
            .logo img {
                width: 150px;
            }
        }

        @media only screen and (max-width: 320px) {
            .logo img {
                width: 122px;
            }
        }

        @media only screen and (max-width: 991px) {
            .navbar-dark .navbar-nav {
                padding-top: 10px
            }

            .navbar-dark .navbar-nav .nav-item {
                padding-top: 5px;
                padding-left: 0 !important;
            }

            .navbar-dark .navbar-nav .nav-link {
                font-size: 18px;
            }

            .cart {
                margin-right: 5px;
            }
        }
    </style>
</head>

<body>
    <div class="footer p-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 pt-2">
                    <div class="ml-2">
                        <h4 style="color: #fff">Liên hệ</h4>
                    </div>
                    <div class="p-2">
                        <i class="fa fa-map-marker" style="color: #ef7147"></i>
                        <span>Khu phố 6, P.Linh Trung, Q.Thủ Đức, Tp.Hồ Chí Minh</span><br>
                    </div>
                    <div class="p-2">
                        <i class="fa fa-phone" style="color: #ef7147"></i>
                        <span>0123 456 789</span><br>
                    </div>
                    <div class="p-2">
                        <i class="fa fa-envelope" style="color: #ef7147"></i>
                        <span>ngotanan147@gmail.com</span><br>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pl-3 pt-2">
                    <div>
                        <h4 class="text-white">Menu</h4>
                    </div>
                    <div class="menu_footer">
                        <ul class="">
                            <li>
                                <a href="#">Trang chủ</a>
                            </li>
                            <li>
                                <a href="#">Sản phẩm</a>
                            </li>
                            <li>
                                <a href="#">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-2">
                    <h4 class="text-white">SOCIAL MEDIA</h4>
                    <div class="icon d-flex">
                        <div class="facebook mr-2">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true" style="color: #fff; transition: 0.3s;"></i></a>
                        </div>
                        <div class="instagram">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true" style="color: #fff; transition: 0.3s;"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pt-2">
                    <h4 class="text-white">ĐĂNG KÍ NHẬN TIN</h4>
                    <form action="">
                        <div class="pt-2">
                            <input type="text" placeholder="Email"><br>
                        </div>
                        <div class="pt-2">
                            <input type="button" value="Đăng kí">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>