<?php
require_once "Header.php";
?>

<!DOCTYPE html>
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
    <link rel="stylesheet" href="./style.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="<?php echo URL ?>/mvc/public/css/Product.css">
    <style>
        h2.title_sidebar:before {
            background-image: url('<?php echo URL ?>mvc/public/img_doan/banhnho.png');
        }

        @media only screen and (max-width: 991px) {
            .picture img {
                min-height: 400px;
            }
        }

        .picture:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- --------------------------------------------------------------------------------------sanpham -->
    <div class="product">
        <div class="container">
            <div class="row">
                <section class="col-lg-12 col-md-12 col-sm-12 mt-3">
                    <div class="h1">
                        <h1>SẢN PHẨM</h1>
                    </div>
                    <div class="d-flex">
                        <div>
                            <p>Tìm kiếm theo danh mục: </p>
                        </div>
                        <select name="" id="selector" class="mb-3 ml-3 select_category">
                            <option value="0">Tất cả sản phẩm</option>
                            <option value="1">Món ăn nổi bật</option>
                            <option value="2">Trà</option>
                            <option value="3">Kem tươi</option>
                            <option value="4">Cà phê</option>
                            <option value="5">Nước ép</option>
                        </select>
                    </div>

                    <div class="category-products">
                        <section class="products-view">
                            <div class="row product_render">
                                <!-- JS render -->
                            </div>
                        </section>
                    </div>
                </section>
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

    const items = [
        <?php
        foreach ($data["product"] as $key => $value) {
        ?> {
                id: <?php echo $value['product_id'] ?>,
                img: "<?php echo $value['product_image'] ?>",
                name: "<?php echo $value['product_name'] ?>",
                price: <?php echo $value['product_price'] ?>,
            },
        <?php
        };
        ?>
    ];


    $(".select_category").change(function() {
        render($(this).val());
    });

    function render(category_value) {
        var array = [];
        var xhr = new XMLHttpRequest();
        var href = "<?php echo URL ?>Product/getCategory/" + category_value;
        xhr.onload = function() {
            if (xhr.readyState === xhr.DONE) {
                if (xhr.status === 200) {
                    array = JSON.parse(xhr.responseText.trim());
                    var html = array.map(item => `
                        <div class="col-sm-12 col-md-12 col-lg-4 product-col mb-5">
                            <div class="items">
                                <div class="picture">
                                    <a href="<?php echo URL ?>productDetail/detail/${item.product_id}">
                                        <img src="./mvc/assets/img/${item.product_image}" alt="" style="max-width: 100%; height: 273px">
                                    </a>
                                </div>
                                <div class="info">
                                    <h3 class="title" style="margin-top:10px;">
                                        ${item.product_name}
                                    </h3>
                                    <div class="price">
                                        <p class="price${item.product_id}"></p>
                                    </div>
                                    <div class="btn2">
                                        <a class="addtocart" href="<?php echo URL ?>cart/store/${item.product_id}">
                                            <button>Thêm vào giỏ</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `).join("");

                    $(".product_render").html(html);

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

                    array.map(item => {
                        $(".price" + item.product_id).html(format(item.product_price));
                    });
                }
            }
        }
        xhr.open('GET', href, true);
        xhr.send();
    }

    render(0);
</script>

<?php
require_once "Footer.php";
?>