<?php
require_once "Header.php";
?>
<html>

<head>
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
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="text-center">
            <h2>Kết quả tìm kiếm</h2>
        </div>
        <div class="row">
            <script>
                array = [];
            </script>
            <?php
            if (!empty($data["result"])) {
                foreach ($data["result"] as $key => $value) {
            ?>
                    <div class="owl_item col-lg-4 col-md-4 col-6">
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
            } else {
                echo "<h3 class='mt-5 mb-5'>Không có kết quả phù hợp</h3>";
                echo "<div style='height: 20px; width: 1px'></div>";
            }
            ?>
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

    array.forEach(item => {
        $("#price" + item.id).html(format(item.price));
    });
</script>

<?php
require_once "Footer.php";
?>