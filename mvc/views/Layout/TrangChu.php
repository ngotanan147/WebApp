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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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


    <!-- Slider carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./mvc/views/html/img_doan/imgSlider.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./mvc/views/html/img_doan/imgSlider.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./mvc/views/html/img_doan/imgSlider.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Món ăn nổi bật -->
    <div class="monannoibat">
        <div class="icon_cupcake text-center">
            <img src="./mvc/views/html/img_doan/cupcake.png" alt="" style="max-width: 100%;height: auto;">
        </div>
        <div class="monannoibat_title text-center">
            <h2 style="display:inline-block;">
                <a href="#">Món ăn nổi bật</a>
            </h2>
        </div>
        <!-- Món ăn nổi bật - Slider -->
        <div class="slider">
            <div class="slider-sub">
                <div class="container-fluid p-5">
                    <div class="swiper-container">
                        <div id="noibac" class="swiper-wrapper" style="height:auto">
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
                                foreach ($data["product"] as $key => $value) {
                            ?>
                                    <div class="swiper-slide" style="max-height: 480px;">
                                        <div class="image">
                                            <a class="image_product" href="<?php echo URL ?>Product/productDetail/<?php echo $value["product_id"] ?>">
                                                <img src="./mvc/assets/img/<?php echo $value["product_image"] ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="infoLeft">
                                                <h3 class=title>
                                                    <a href="">
                                                        <?php echo $value["product_name"] ?>
                                                    </a>
                                                </h3>
                                                <div class="box_price sdsdsds">
                                                    <span class="special_price">
                                                        <span id="<?php echo $value["product_id"] ?>" class="price product-price">Error</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="infoRight">
                                                <a class="addtocart" id="product<?php echo $value["product_id"] ?>" href="<?php echo URL ?>cart/store/<?php echo $value["product_id"] ?>">
                                                    <button>Thêm vào giỏ</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        array.push({
                                            id: <?php echo $value["product_id"] ?>,
                                            price: <?php echo $value["product_price"] ?>
                                        })
                                    </script>
                            <?php }
                            } ?>
                        </div>
                        <!-- Add Pagination -->

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Món ăn được ưa chuộng -->
        <div class="danhsachmonan">
            <div class="icon_cupcake text-center">
                <img src="./mvc/views/html/img_doan/cupcake.png" alt="" style="max-width: 100%;height: auto;">
            </div>
            <div class="monannoibat_title text-center">
                <h2 style="display:inline-block;">
                    <a href="">Danh sách món ăn</a>
                </h2>
            </div>
            <div class="listt">
                <div class="list_monan text-center">
                    <ul class="tabs d-none d-md-block d-lg-block">
                        <!-- d-none d-md-flex d-lg-flex -->
                        <li class="tab-link1 current"><a href="javascript:;">Bánh</a></li>
                        <li class="tab-link2 "><a href="javascript:;">Trà</a></li>
                        <li class="tab-link3 "><a href="javascript:;">Kem tươi</a></li>
                        <li class="tab-link4 "><a href="javascript:;">Cà phê</a></li>
                        <li class="tab-link5 "><a href="javascript:;">Nước ép</a></li>
                    </ul>
                    <div class="select-container d-lg-none d-md-none">
                        <select class="select" name="items" id="items">
                            <option value="1">Bánh</option>
                            <option value="2">Trà</option>
                            <option value="3">Kem tươi</option>
                            <option value="4">Cà phê</option>
                            <option value="5">Nước ép</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="container mb-5 monan">
                <div class="tab1 current">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-5 p-0">
                            <div class="item_list">
                                <div class="image">
                                    <a href=""><img src="./mvc/views/html/img_doan/dsmonan.jpg" alt="" style="max-width: 100%; max-height: 100%"></a>
                                </div>
                                <div class="info" style="display:flex">
                                    <div class="infoLeft">
                                        <h3 class=title>
                                            <a href="">
                                                Fruit Cream Puff
                                            </a>
                                        </h3>
                                        <div class="box_price">
                                            <span class="special_price">
                                                <span class="price product-price">150.000₫</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="infoRight">
                                        <button>Thêm vào giỏ</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-5 p-0">
                            <div class="item_list">
                                <div class="image">
                                    <a href=""><img src="./mvc/views/html/img_doan/dsmonan.jpg" alt="" style="max-width: 100%; max-height: 100%"></a>
                                </div>
                                <div class="info" style="display:flex">
                                    <div class="infoLeft">
                                        <h3 class=title>
                                            <a href="">
                                                Fruit Cream Puff
                                            </a>
                                        </h3>
                                        <div class="box_price">
                                            <span class="special_price">
                                                <span class="price product-price">150.000₫</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="infoRight">
                                        <button>Thêm vào giỏ</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-5 p-0">
                            <div class="item_list">
                                <div class="image">
                                    <a href=""><img src="./mvc/views/html/img_doan/dsmonan.jpg" alt="" style="max-width: 100%; max-height: 100%"></a>
                                </div>
                                <div class="info" style="display:flex">
                                    <div class="infoLeft">
                                        <h3 class=title>
                                            <a href="">
                                                Fruit Cream Puff
                                            </a>
                                        </h3>
                                        <div class="box_price">
                                            <span class="special_price">
                                                <span class="price product-price">150.000₫</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="infoRight">
                                        <button>Thêm vào giỏ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5 p-0">
                            <div class="item_list">
                                <div class="image">
                                    <a href=""><img src="./mvc/views/html/img_doan/dsmonan.jpg" alt="" style="max-width: 100%; max-height: 100%"></a>
                                </div>
                                <div class="info" style="display:flex">
                                    <div class="infoLeft">
                                        <h3 class=title>
                                            <a href="">
                                                Fruit Cream Puff
                                            </a>
                                        </h3>
                                        <div class="box_price">
                                            <span class="special_price">
                                                <span class="price product-price">150.000₫</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="infoRight">
                                        <button>Thêm vào giỏ</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab2">

                </div>
                <div class="tab3">

                </div>
                <div class="tab4">

                </div>
                <div class="tab5">

                </div>
            </div>

        </div>
        <div style="background-img: url('https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.0-9/cp0/127243818_1774477089395846_1556559475064294708_n.jpg?_nc_cat=109&ccb=2&_nc_sid=0debeb&_nc_ohc=cSecq6N2ccwAX8-SQV2&_nc_ht=scontent.fsgn2-4.fna&oh=0c58f35c01385ae8ce27458b39bb289a&oe=5FEE4B84')">
            <div class="monannoibat_title text-center ">
                <div class="icon_cupcake text-center">
                    <img class="pt-5" src="./mvc/views/html/img_doan/cupcake.png" alt="" style="max-width: 100%;height: auto;">
                </div>
                <h2 style="display:inline-block;">
                    <a href="">Blog</a>
                </h2>
                <div class="slider" style="">
                    <div class="slider-sub">
                        <div class="container-fluid p-5">
                            <div class="swiper-container">
                                <div class="swiper-wrapper" style="height:auto">
                                    <div class="swiper-slide" style="max-height: 480px;">
                                        <div class="image">
                                            <a class="image_product" href="">
                                                <img src="./mvc/views/html/img_doan/monannoibat (1).jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="infoLeft">
                                                <h3 class=title>
                                                    <a href="">
                                                        Title of blog
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="infoRight">
                                                <button>Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="max-height: 480px;">
                                        <div class="image">
                                            <a class="image_product" href="">
                                                <img src="./mvc/views/html/img_doan/monannoibat (2).jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="infoLeft">
                                                <h3 class=title>
                                                    <a href="">
                                                        Title of blog
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="infoRight">
                                                <button>Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="max-height: 480px;">
                                        <div class="image">
                                            <a class="image_product" href="">
                                                <img src="./mvc/views/html/img_doan/monannoibat (3).jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="infoLeft">
                                                <h3 class=title>
                                                    <a href="">
                                                        Title of blog
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="infoRight">
                                                <button>Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="max-height: 480px;">
                                        <div class="image">
                                            <a class="image_product" href="">
                                                <img src="./mvc/views/html/img_doan/monannoibat (5).jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="infoLeft">
                                                <h3 class=title>
                                                    <a href="">
                                                        Title of blog
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="infoRight">
                                                <button>Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="max-height: 480px;">
                                        <div class="image">
                                            <a class="image_product" href="">
                                                <img src="./mvc/views/html/img_doan/monannoibat (6).jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="infoLeft">
                                                <h3 class=title>
                                                    <a href="">
                                                        Title of blog
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="infoRight">
                                                <button>Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="max-height: 480px;">
                                        <div class="image">
                                            <a class="image_product" href="">
                                                <img src="./mvc/views/html/img_doan/monannoibat (7).jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="infoLeft">
                                                <h3 class=title>
                                                    <a href="">
                                                        Title of blog
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="infoRight">
                                                <button>Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</body>

</html>
<script>
    $(".addtocart").click(function(event) {
        event.preventDefault();
        var href = $(this).attr("href");
        var xhr = new XMLHttpRequest();

        xhr.onload = function() {
            if (xhr.readyState === xhr.DONE) {
                if (xhr.status === 200) {
                    arr = xhr.responseText.trim().split("/");
                    // console.log(arr);
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
    var xhr = new XMLHttpRequest();

    xhr.onload = function() {
        if (xhr.readyState === xhr.DONE) {
            if (xhr.status === 200) {
                array = JSON.parse(xhr.responseText);
                const html = array.map(item => `
                                    <div class="swiper-slide" style="max-height: 480px; width: 447.667px; margin-right: 40px;">
                                        <div class="image">
                                            <a class="image_product" href="<?php echo URL ?>Product/productDetail/${item.product_id}">
                                                <img src="./mvc/assets/img/${item.product_image}" alt="">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="infoLeft">
                                                <h3 class=title>
                                                    <a href="">
                                                        ${item.product_name}
                                                    </a>
                                                </h3>
                                                <div class="box_price">
                                                    <span class="special_price">
                                                        <span id="${item.product_id}" class="price product-price">${format(item.product_price)}</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="infoRight">
                                                <a href="<?php echo URL ?>Cart/store/${item.product_id}">
                                                    <button>Thêm vào giỏ</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                `).join('');
                // $("#noibac").html(html);
            }
        }
    }

    xhr.open('GET', '<?php echo URL ?>Product/productAPI/1', true);
    xhr.send();
</script>

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