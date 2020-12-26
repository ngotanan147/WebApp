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
    </style>
</head>

<body>

    <!-- --------------------------------------------------------------------------------------sanpham -->
    <div class="product">
        <div class="container">
            <div class="row">
                <!-- ----------------------------------------------------left(Danh mục) -->
                <div class="col-sm-12 tool-bar mt-3">
                    <a href="">Trang Chủ</a>
                    <span>/</span>
                    <a href="" style="color: #ef7147">Tất cả sản phẩm</a>
                </div>
                <div class="col-xs-12 col-lg-3 col-sm-12 left">
                    <aside class="aside-item collection-category margin-bottom-30">
                        <div class="title_module_arrow">
                            <div class="title">
                                <h2 class="title_sidebar">
                                    <a href="">
                                        Danh Mục
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <div class="aside-content">
                            <nav class="cate_padding nav-category navbar-toggleable-md">
                                <ul class="nav navbar-pills">
                                    <li class="nav-item">Trang chủ</li>
                                    <li class="nav-item">Sản phẩm
                                        <i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="nav-item">Giới thiệu</li>
                                    <li class="nav-item">Blog</li>
                                    <li class="nav-item">Liên hệ</li>
                                </ul>
                            </nav>
                        </div>
                    </aside>
                </div>
                <!-- ----------------------------------------------------right(sản phẩm chính) -->
                <section class="col-lg-9 col-md-9 col-sm-12 mt-3">
                    <div class="h1">
                        <h1>SẢN PHẨM</h1>
                    </div>
                    <div class="d-flex">
                        <div>
                            <p>Tìm kiếm theo danh mục: </p>
                        </div>
                        <select name="" id="selector" class="mb-3 ml-3">
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
                            <div class="row">

                            </div>
                        </section>
                    </div>
                </section>
            </div>
            <ul class="pagination">
                <li class="page-item active"><a class="page-link" id="active" href="#">1</a></li>
                <li class="page-item ml-1"><a class="page-link" href="./product2.html">2</a></li>
                <li class="page-item ml-1"><a class="page-link" href="./product2.html
                        "><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</body>

</html>

<script>
    const items = [
        <?php
        foreach ($data["product"] as $key => $value) {
        ?> {
                id: <?php echo $value['product_id'] ?>,
                img: "<?php echo $value['product_image'] ?>",
                name: "<?php echo $value['product_name'] ?>",
                price: <?php echo $value['product_price'] ?>,
                quantity: <?php echo $value['quantity'] ?>,
            },
        <?php
        };
        ?>
    ];
    console.log(items);

    function format(n) {
        return (n * 1000).toLocaleString('vi', {
            style: 'currency',
            currency: 'VND'
        })
    }

    array.forEach(item => {
        $(".price" + item.id).html(format(item.price));
    })
</script>

<?php
require_once "Footer.php";
?>