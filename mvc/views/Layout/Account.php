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
            color: #ef7147 !important;
        }

        .chitiet2:hover {
            color: #ef7147 !important;
            text-decoration: none;
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
            color: #ef7147;
            background-color: #eceeef;
            text-align: center;
            font-weight: bold;
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
        <p class="chitiet"><a href="<?php echo URL ?>">Trang chủ</a> <span style="color:#000!important;">/</span> Trang khách
            hàng </p>
        <div class="chitiet" style="color:#000!important;">
            <h3>Hóa đơn của bạn</h3>

        </div>
        <div class="Detail_Product_All">
            <div class="row">
                <div class="col-12 col-lg-9 col-md-12 col-sm-12 products">
                    <div class="row">
                        <div class="my_account col-sm-12 col-lg-12 col-md-12">
                            <div class="dashboard">
                                <div class="recent_orders">
                                    <div class="tab_all">
                                        <table class="table table-bordered table-hover text-center" style="font-size: 16px">
                                            <thead class="">
                                                <tr>
                                                    <th>STT</th>
                                                    <th>ID</th>
                                                    <th>Thời gian</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Giá trị đơn hàng</th>
                                                </tr>
                                            </thead>
                                            <script>
                                                var array = [];
                                            </script>
                                            <?php
                                            $stt = 1;
                                            if (isset($data["bill"])) {
                                                foreach ($data["bill"] as $key => $value) {

                                            ?>
                                                    <tbody class="tdody_content">
                                                        <tr>
                                                            <td><?php echo $stt; ?></td>
                                                            <td>#<?php echo $value["bill_id"]; ?></td>
                                                            <td><?php echo date("Y/m/d H:i:s", strtotime($value["date"])); ?></td>
                                                            <td><?php echo $value["address"]; ?></td>
                                                            <td id="price<?php echo $value["bill_id"]; ?>"></td>

                                                            <td>
                                                                <a id="<?php echo $value["bill_id"]; ?>" class="xemchitiet" href="">
                                                                    Xem chi tiết
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <script type="text/javascript">
                                                        array.push({
                                                            id: <?php echo $value["bill_id"]; ?>,
                                                            price: <?php echo $value["total"] ?>
                                                        })
                                                    </script>
                                            <?php $stt++;
                                                }
                                            }

                                            ?>
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
                                    <?php
                                    if (!empty($data["user"])) {
                                    ?>
                                        <p>Tên tài khoản : <?php echo $data["user"]["user_name"] ?></p>
                                        <p>
                                            <i class="fa fa-envelope font_some"></i>
                                            <span>Email: <?php echo $data["user"]["user_email"] ?></span>
                                        </p>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết hóa đơn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBody">

                </div>
            </div>
        </div>
    </div>

</body>

</html>

<script>
    function format(n) {
        return (n * 1000).toLocaleString('vi', {
            style: 'currency',
            currency: 'VND'
        })
    }

    $(".xemchitiet").click(function(event) {
        event.preventDefault();
        var id = $(this).attr("id");
        var href = "<?php echo URL ?>Account/showBillDetail/" + id;
        var xhr = new XMLHttpRequest();

        xhr.onload = function() {
            if (xhr.readyState === xhr.DONE) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    // console.log(data);

                    var dataFromJson = data.map(item => `  
                        <tbody>
                            <tr>
                                <td>${item.product_name}</td>
                                <td> 
                                    <img src="./mvc/assets/img/${item.product_image}" alt="" width="75" height="auto">
                                </td>
                                <td>${format(item.price)}</td>
                                <td>${item.quantity}</td>
                            </tr>
                        </tbody>
                    `).join("");
                    var html = `
                    <table id="bd" class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>
                    ` + dataFromJson + `</table>`;

                    $(".modal").modal('show');
                    $("#modalBody").html(html);

                }
            }
        }

        xhr.open('GET', href, true);
        xhr.send();
    })



    array.forEach(item => {
        $("#price" + item.id).html(format(item.price));
    })
</script>

<?php
require_once "Footer.php";
?>