<?php
require_once "Header.php";
?>

<html>

<head>
    <title>Dilicious</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
        /**/

        .text_center {
            background-image: url("/img_doan/bg_all.png");
            padding-bottom: 10px;
        }

        .rang_cua {
            background-image: url(/img_doan/rang-cua.png);
            width: 100%;
            height: 7px;
            position: relative;
        }

        .content {
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            font-size: 14px;
            line-height: 24px;
        }

        .home a {
            color: #333;
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            position: relative;
        }

        .title_head {
            font-size: 1rem;
            font-weight: 500;
            color: #333;
            text-transform: uppercase;
            padding-top: 30px;
        }

        .head_content {
            padding-top: 20px;
        }

        .head_content li {
            display: inline;
        }

        .head_content li a {
            text-decoration: none;
        }

        .head_content li a :hover {
            color: #ef7147;
        }

        .content_page {
            margin-bottom: 60px;
        }

        .content-page {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>

    <div class="text_center pb-0" style="height:auto">
        <div class="container">
            <div class="content">
                <div class="head_content">
                    <ul style="padding: 0;">
                        <li class="home">
                            <a href="">
                                <span>Trang chủ</span>
                            </a>
                            <span style="color: #333;">&nbsp;/&nbsp;</span>
                        </li>
                        <li>
                            <span style="color:#ef7147;;">Giới thiệu</span>
                        </li>
                    </ul>
                </div>
                <div class="title_head">
                    <p>GIỚI THIỆU</p>
                </div>

                <div>
                    <div class="content-page rte" style="">
                        <div>
                            <span style="font-size:14px;">
                                <h3 style="font-family:Arial,Helvetica,sans-serif;">
                                    - Website made by Ngô Tấn An.
                                </h3>
                            </span>
                        </div>
                        <div class="pt-3">
                            <span style="font-size:14px;">
                                <h3 style="font-family:Arial,Helvetica,sans-serif;">
                                    - Supporter: Minh Hiếu, Minh Chiến, Xuân Đà.
                                </h3>
                            </span>
                        </div>
                        <div class="text-center pt-5">
                            <span class="pt-5" style="font-size:14px;">
                                <h3 style="font-family:Arial,Helvetica,sans-serif;">
                                    - From UIT with love!
                                </h3>
                            </span>
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