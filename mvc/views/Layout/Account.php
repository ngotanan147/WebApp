<?php
require_once "Header.php";
?>

<html>

<head>
    <title> Sweet Potato Tart Delicious</title>
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
    <link rel="icon" href="img_doan/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <style>
        .Content_Detail {
            background-image: url(img_doan/bg_all.png);
            background-repeat: repeat;
            padding-top: 20px;
            padding-bottom: 50px;
        }

        .Detail_Product_All {
            margin-top: 0px;
            margin: 0% 10%;
            margin-bottom: 20px;
            position: relative;
        }

        .chitiet {
            font-size: 13px;
            color: #ef7147;
            margin-left: 10%;

        }

        .chitiet a {
            color: #000;
            text-decoration: none;

        }

        .chitiet a:hover {
            color: #ef7147;
        }


        .aside_vanchuyen {
            padding: 15px 10px 10px 20px;
            border: 1px solid #ebebeb;
            border-radius: 10px;
            background: #fff;
        }

        .tab_all {
            width: 100%;
            background-color: #fff;
        }

        .table_cart {
            width: 100%;
            font-size: 13px;
            line-height: 37px;
            color: #252525;
            margin-bottom: 30px;
            margin-top: 15px;
        }

        .thead_default tr th {
            padding: 5px;
            font-size: 14px;
            color: #55595c;
            background-color: #eceeef;
            text-align: center;
            font-weight: 400;
        }

        .thead_default tr {
            color: #333333;
            text-align: center;
            border: #ebebeb thin solid;
            line-height: 1.5;
            font-family: Arial;
            font-size: 16px;
            font-weight: bold;
            background: #ebebeb;
        }

        .thead_default {
            width: 100%;
            color: #333333;
            text-align: center;
            line-height: 1.5;
            font-family: Arial;
            font-size: 16px;
            font-weight: bold;
            background: #ebebeb;
            min-width: 60px;
        }

        @media only screen and (max-width: 760px) {
            .tdody_content {}

            .tdody_content td td {
                color: #fff;
            }
        }

        .tdody_content tr {
            text-align: center;
        }

        .font_some {
            width: 20px;
            text-align: center;
            color: #ef7147;
            float: left;
            line-height: 24px;
            margin-right: 10px;
        }

        .form_signup p span {
            font-size: 14px;
        }

        .tdody_content tr td {
            padding: 5px;

        }
    </style>
</head>

<body>
    <div class="Content_Detail">
        <div class="Detail_Product_All">
            <p class="chitiet"><a href="#">Trang chủ</a> <span style="color:#000!important;">/</span> Trang khách
                hàng </p>
            <h1>TRANG KHÁCH HÀNG</h1>
            <p>Xin chào, <a>Chiến Trần</a></p>

            <div class="row">
                <div class="col-12 col-lg-9 col-md-12 col-sm-12 products">
                    <div class="row">
                        <div class="my_account col-sm-12 col-lg-12 col-md-12">
                            <div class="dashboard">
                                <div class="recent_orders">
                                    <div class="tab_all">
                                        <table class="table_cart">
                                            <thead class="thead_default">
                                                <tr>
                                                    <th>Đơn hàng</th>
                                                    <th>Ngày</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Giá trị đơn hàng</th>
                                                    <th>Tình trạng thanh toán</th>
                                                    <th>Tình trạng vận chuyển</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tdody_content">
                                                <tr>
                                                    <td>#0001</td>
                                                    <td>28/11/2020</td>
                                                    <td>Hà Nội, Việt Nam</td>
                                                    <td>70.000₫</td>
                                                    <td>Chưa thanh toán</td>
                                                    <td>Chưa giao hàng</td>

                                                </tr>
                                            </tbody>
                                            <tbody class="tdody_content">
                                                <tr>
                                                    <td>#0001</td>
                                                    <td>28/11/2020</td>
                                                    <td>Hà Nội, Việt Nam</td>
                                                    <td>70.000₫</td>
                                                    <td>Chưa thanh toán</td>
                                                    <td>Chưa giao hàng</td>

                                                </tr>
                                            </tbody>
                                            <tbody class="tdody_content">
                                                <tr>
                                                    <td>#0001</td>
                                                    <td>28/11/2020</td>
                                                    <td>Hà Nội, Việt Nam</td>
                                                    <td>70.000₫</td>
                                                    <td>Chưa thanh toán</td>
                                                    <td>Chưa giao hàng</td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="left-content col-xs-12 col-sm-12 col-lg-3 col-md-12 col-12">
                    <div class="aside_vanchuyen mb-4">
                        <div class="aside_content">
                            <div class="vanchuyen">
                                <div class="icon" style="display: flex;">
                                    <p style="padding-left: 5px;">TÀI KHOẢN CỦA TÔI</p>
                                </div>
                                <div class="form_signup">
                                    <p>Tên tài khoản : Chiến Trần!</p>
                                    <p>
                                        <i class="fa fa-home font_some"></i>
                                        <span>Địa chỉ:</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-mobile font_some"></i>
                                        <span>Điện thoại:</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-map-marker font_some"></i>
                                        <span>Địa chỉ 1:</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-yelp font_some"></i>
                                        <span>Công ty :</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-plane font_some"></i>
                                        <span>Quốc gia : </span>
                                    </p>
                                    <p>
                                        <i class="fa fa-code font_some"></i>
                                        <span>Zip code: </span>
                                    </p>
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