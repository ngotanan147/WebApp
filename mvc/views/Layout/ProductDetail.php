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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?php echo URL ?>/mvc/public/css/ProductDetail.css">
    <link rel="stylesheet" href="<?php echo URL ?>/mvc/public/css/RatingStar.css">
    <style>

    </style>
</head>

<body>
    <div class="Content_Detail">
        <div class="Detail_Product_All">
            <div class="">
                <p class="chitiet ml-0">
                    <a href="<?php echo URL ?>Product">Sản phẩm</a>
                    <span style="color:#000!important;">/</span>
                    Sweet Potato Tart </p>

            </div>


            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 products">
                    <div class="detail_product">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 details-product-image">
                            <form action="">
                                <div class="row">
                                    <div class="product-detail-left product-images col-xs-12 col-sm-5 col-md-5 col-lg-5">
                                        <div class="row">
                                            <div class="col_large_default large-image">
                                                <a href="" class="large_image_url checkurl" style="padding:10px; border: 1px solid #ddd">
                                                    <img style="max-width: 100%; max-height: 100%;" src="<?php echo URL ?>/mvc/assets/img/<?php echo $data["product_image"] ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 details-pro mt-2">
                                        <h3 class="title-product"><?php echo $data["product_name"] ?></h3>
                                        <div class="tinhtrang pt-2">
                                            <p>
                                                <span>Giá: </span>
                                                <span style="color: #ef7147" id="price">Loading...</span>
                                            </p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="justify-content-center mt-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card pt-2 pb-2">
                                                            <div class="card-body text-center p-0">
                                                                <span class="myratings"></span>
                                                                <span>(</span><span class="totalrating"></span><span>)</span>
                                                                <fieldset class="rating">
                                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                                    <label class="full starr starr5" for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                                    <label class="full starr starr4" for="star4" title="Pretty good - 4 stars"></label>
                                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                                    <label class="full starr starr3" for="star3" title="Meh - 3 stars"></label>
                                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                                    <label class="full starr starr2" for="star2" title="Kinda bad - 2 stars"></label>
                                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                                    <label class="full starr starr1" for="star1" title="Sucks big time - 1 star"></label>
                                                                    <input type="radio" class="reset-option" name="rating" value="reset" />
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact pt-3">
                                            <a class="addtocart" href="<?php echo URL ?>cart/store/<?php echo $data["product_id"] ?>">
                                                <button style="background: #ef7147; border: 1px solid #ef7147" type="button" class=" btn-primary">Thêm vào giỏ</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab_width_full" style="padding-top: 50px;">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 tab_ord">
                                    <div class="product_tab">
                                        <ul class="tabs_title">
                                            <li class="tab_link pt-3">
                                                <h3>
                                                    <span style="color:#ef7147; ">Chi tiết sản phẩm</span>
                                                </h3>
                                            </li>
                                        </ul>
                                        <div class="tab_float">
                                            <div class="tab_content">
                                                <div class="rte">
                                                    <p><?php echo $data["product_description"] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related_module">
                        <div class="row">
                            <div class="icon_banh" style="text-align: center;margin-bottom: 10px; width: 100%;">
                                <a href="" class="icon_banh_wrapper">
                                    <img src="<?php echo URL ?>mvc/public/img_doan/icon-banh.png" alt="" style="margin:auto; display: block;">
                                </a>
                            </div>
                            <div class="title_module_main text-center mt-4">
                                <h2><span class="foood_together" href="">Món ăn cùng loại</span></h2>
                            </div>
                            <div class="wrap_owl mt-4 mb-5">
                                <div class="row">
                                    <script>
                                        array = [];
                                    </script>
                                    <?php
                                    foreach ($data["same_product"] as $key => $value) {
                                    ?>
                                        <div class="owl_item col-lg-6 col-md-6 col-xs-12">
                                            <div class="item_product_main">
                                                <div class="items">
                                                    <div class="image">
                                                        <a href="<?php echo URL ?>productDetail/detail/<?php echo $value["product_id"] ?>">
                                                            <img src="<?php echo URL ?>/mvc/assets/img/<?php echo $value["product_image"] ?>" alt="" width="100%" height="250px">
                                                        </a>
                                                    </div>
                                                    <div class="infor mt-3" style="width: 100%">
                                                        <h3 class="title">
                                                            <span><?php echo $value["product_name"] ?></span>
                                                        </h3>
                                                        <div class="box_price d-flex">
                                                            <div>
                                                                <span class="special_price">
                                                                    <span id="price<?php echo $value["product_id"] ?>" class="prices" style="color: #ef7147;font-size: 20px;">100.000đ</span>
                                                                </span>
                                                            </div>

                                                            <div class="text-right w-100">
                                                                <a class="addtocart" href="<?php echo URL ?>cart/store/<?php echo $value["product_id"] ?>">
                                                                    <button id="btn-same" type="submit" class=" btn-primary">
                                                                        Thêm vào giỏ
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            array.push({
                                                id: <?php echo $value["product_id"] ?>,
                                                price: <?php echo $value["product_price"] ?>,
                                            })
                                        </script>
                                    <?php

                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="left-content col-xs-12 col-sm-12 col-lg-3 col-md-3">
                    <div class="aside_vanchuyen mb-4">
                        <div class="aside_content">
                            <div class="vanchuyen">
                                <div class="icon" style="display: flex;">
                                    <img src="<?php echo URL ?>mvc/public/img_doan/service_1.png" alt="" style="width: 25px; height: 25px;">
                                    <p style="padding-left: 5px;">VẬN CHUYỂN MIỄN PHÍ</p>
                                </div>
                                <p style="font-size: 14px; font-family: Arial,'Helvetica Neue',Helvetica,sans-serif;color: #333;"><span> - Nội thành HCM: </span> với đơn hàng trên <b> 300.000đ</b></p>
                                <p style="font-size: 14px; font-family: Arial,'Helvetica Neue',Helvetica,sans-serif;color: #333;"><span> - Đặc biệt: </span> Miễn phí cho sinh viên UIT</p>
                            </div>
                        </div>
                    </div>
                    <div class="aside_vanchuyen">
                        <div class="aside_content">
                            <div class="vanchuyen">
                                <div class="icon" style="display: flex;">
                                    <img src="<?php echo URL ?>mvc/public/img_doan/service_2.png" alt="" style="width: 25px; height: 25px;margin-top:5px;">
                                    <p style="font-size: 14px; font-family: Arial,'Helvetica Neue',Helvetica,sans-serif;color: #333; padding-left: 15px;">Giao hàng tận nơi và nhanh chóng</p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="aside_vanchuyen mb-5">
                        <div class="aside_content">
                            <div class="vanchuyen">
                                <div class="icon" style="display: flex;">
                                    <img src="<?php echo URL ?>mvc/public/img_doan/service_3.png" alt="" style="width: 15px; height: 30px;margin-top:5px;">
                                    <p style="font-size: 14px; font-family: Arial,'Helvetica Neue',Helvetica,sans-serif;color: #333; padding-left: 15px;">Thu tiền tại nhà, đảm bảo an toàn</p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="sidebar_extra">
                        <div class="sidebar_title">
                            <div class="title">
                                <h2 class="title_sidebar">
                                    <a href="">MÓN ĂN NỔI BẬT</a>
                                </h2>
                            </div>
                        </div>
                        <div class="cover_item_sidebar">
                            <script>
                                array2 = [];
                            </script>
                            <?php
                            foreach ($data["popular_product"] as $key => $value) {
                            ?>
                                <div class="item_sidebar">
                                    <div class="wrap_img">
                                        <a href="<?php echo URL ?>productDetail/detail/<?php echo $value["product_id"] ?>" class="img_sidebar">
                                            <img src="<?php echo URL ?>/mvc/assets/img/<?php echo $value["product_image"] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="infor">
                                        <h3>
                                            <a href="<?php echo URL ?>productDetail/detail/<?php echo $value["product_id"] ?>"><?php echo $value["product_name"] ?></a>
                                        </h3>
                                        <div class="box_price">
                                            <span class="special_price">
                                                <span id="price<?php echo $value["product_id"] ?>" class="product_price">300.000₫</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    array2.push({
                                        id: <?php echo $value["product_id"] ?>,
                                        price: <?php echo $value["product_price"] ?>,
                                    })
                                </script>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade dangnhap" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header p-2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBody">
                    <div class="text-center">
                        <h3 class="mb-3">Đăng nhập để bình chọn</h3>
                        <a href="<?php echo URL ?>login">
                            <button style="padding: 5px 10px; outline:none; border: none; border-radius: 5px;" class="btn-primary">Đăng nhập</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var avg_rate = <?php echo $data["avg_rate"] ?>;
    var total_rate = <?php echo $data["total_rate"] ?>;

    $(".myratings").html(avg_rate);
    $(".totalrating").html(total_rate);

    function updateStarColor(value) {
        if (Math.round(value) == 0) {
            console.log("");
        } else {
            for (var i = 1; i <= Math.round(value); i++) {
                $(".starr" + i).css("color", "#FFD700");
            }
        }
    }

    updateStarColor(avg_rate);

    $(document).ready(function() {

        $("input[type='radio']").click(function(event) {
            var product_id = <?php echo $data["product_id"] ?>;
            var href = "<?php echo URL ?>productDetail/rate/" + product_id + "/" + $(this).val();
            var xhr = new XMLHttpRequest();
            xhr.onload = function() {
                if (xhr.readyState === xhr.DONE) {
                    if (xhr.status === 200) {
                        console.log(xhr.responseText.trim());
                        if (xhr.responseText.trim() == "error") {
                            $(".dangnhap").modal('show');
                        } else {
                            arr = xhr.responseText.trim().split("/");
                            $(".myratings").html(arr[0]);
                            $(".totalrating").html(arr[1]);
                            // updateStarColor(arr[0]);
                            swal("Bình chọn thành công!", "", "success");
                        }

                    }
                }
            }
            xhr.open('GET', href, true);
            xhr.send();
        });
    });
</script>
<script>
    $(".addtocart").click(function(event) {
        event.preventDefault();
        var href = $(this).attr("href");
        var xhr = new XMLHttpRequest();

        xhr.onload = function() {
            if (xhr.readyState === xhr.DONE) {
                if (xhr.status === 200) {
                    arr = xhr.responseText.trim().split("/");
                    console.log(arr);

                    if (arr[0] == "Success") {
                        swal("Đã thêm vào giỏ hàng!", "", "success");
                    } else {
                        swal("Hết hàng!", "", "warning");
                    }
                }
                $("#soluong").html(arr[1]);
            }
        }

        xhr.open('GET', href, true);
        xhr.send();
    })
</script>

<script>
    function format(n) {
        return (n * 1000).toLocaleString('vi', {
            style: 'currency',
            currency: 'VND'
        })
    }

    array.forEach(item => {
        $("#price" + item.id).html(format(item.price));
    });
    array2.forEach(item => {
        $("#price" + item.id).html(format(item.price));
    });

    $("#price").html(format(<?php echo $data["product_price"] ?>));

    $("#inc").click(function() {
        var value = $("#quantity1").val();
        value++;
        $("#quantity1").val(value);
    });

    $("#dec").click(function() {
        var value = $("#quantity1").val();
        value--;
        if (value < 1) {
            $("#quantity1").val(1);
            return;
        }
        $("#quantity1").val(value);
    });
</script>

</html>

<?php
require_once "Footer.php";
?>