<?php
// require_once "./mvc/views/html/Header.html";
require_once "Header.php";
?>

<html>

<head>
    <title>Dilicious</title>
    <add key="webpages:Enabled" value="true" />
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./mvc/views/html/TrangChu.css">
    <style>
        .item_list {
            background: #fff !important;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <!-- Món ăn nổi bật -->
    <div class="monannoibat">
        <div class="icon_cupcake text-center">
            <img src="./mvc/views/html/img_doan/cupcake.png" alt="" style="max-width: 100%;height: auto;">
        </div>
        <div class="monannoibat_title text-center">
            <h2 style="display:inline-block;">
                <a href="#">Sản phẩm đã xem</a>
            </h2>
        </div>
        <!-- Món ăn nổi bật - Slider -->
        <div class="slider">
            <div class="slider-sub">
                <div class="container-fluid p-5">
                    <div class="swiper-container">
                        <!-- <div class="swiper-wrapper" style="height:auto">

                            <script>
                                function format(n) {
                                    return (n * 1000).toLocaleString('vi', {
                                        style: 'currency',
                                        currency: 'VND'
                                    })
                                }

                                var array = [];
                            </script>

                            <?php
                            if (!empty($data["product"])) {
                                while ($row = mysqli_fetch_array($data["product"])) {
                            ?>
                                    <div class="swiper-slide" style="max-height: 480px;">
                                        <div class="image">
                                            <a class="image_product" href="">
                                                <img src="./mvc/assets/img/<?php echo $row["product_image"] ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="infoLeft">
                                                <h3 class=title>
                                                    <a href="">
                                                        <?php echo $row["product_name"] ?>
                                                    </a>
                                                </h3>
                                                <div class="box_price">
                                                    <span class="special_price">
                                                        <span id="<?php echo $row["product_id"] ?>" class="price product-price">Error</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="infoRight">
                                                <a href="#">
                                                    <button>Thêm vào giỏ</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div> -->
                        <div class="swiper-wrapper" style="height:auto">
                            <script>
                                function format(n) {
                                    return (n * 1000).toLocaleString('vi', {
                                        style: 'currency',
                                        currency: 'VND'
                                    })
                                }
                                var array = [];
                            </script>

                            <?php

                            $seenProduct_data[] = $data['cookies'];
                            $cookie_data = json_encode($seenProduct_data);
                            
                            if (isset($_COOKIE["Seen_product"])) {
                                echo $_COOKIE["Seen_product"];
                            } else {
                                setcookie('Seen_product', $cookie_data, time() + (86400 * 30));
                            }



                            // if (isset($_COOKIE["Seen_product"])) {
                            //     $cookie_data = stripslashes($_COOKIE["Seen_product"]);
                            //     $seenProduct_data = json_decode($cookie_data, true);
                            //     foreach ($seenProduct_data as $keys => $values) {
                            //         echo $values["product_name"];
                            //     }
                            // }
                            ?>


                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 5,
        spaceBetween: 30,
        breakpoints: {
            '1': {
                slidesPerView: 1,
                spaceBetween: 40,
            },
            '700': {
                slidesPerView: 2,
                spaceBetween: 40,
            },

            '900': {
                slidesPerView: 3,
                spaceBetween: 40,
            },

            '1100': {
                slidesPerView: 3,
                spaceBetween: 40,
            },

            '1300': {
                slidesPerView: 3,
                spaceBetween: 40,
            },

        },
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<script type="text/javascript">
    // arrJson = JSON.stringify(array);
    // console.log(arrJson);

    // var request = new XMLHttpRequest();
    // request.open('GET', arrJson);
    // request.onload = function() {
    //     var data = JSON.parse(request.responseText);
    //     console.log(data);
    // }
    // request.send();

    array.forEach(item => {
        $("#" + item.id).html(format(item.price));
    })

    for (let i = 1; i <= 5; i++) {
        $(".tab-link" + i).click(function() {
            $(".tab-link" + i).addClass("current");
            $(".tab" + i).addClass("current");
            for (let j = 1; j <= 5; j++) {
                if (i != j) {
                    $(".tab" + j).removeClass("current");
                    $(".tab-link" + j).removeClass("current");
                }
            }
        })
    }
</script>



<?php
require_once "./mvc/views/html/Footer.html";
?>