<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <title>Thanh Toán</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            min-height: 100vh;
        }

        .background {
            width: 100%;
            float: left;
            padding-top: 60px;
            background-image: url('https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.0-9/cp0/127243818_1774477089395846_1556559475064294708_n.jpg?_nc_cat=109&ccb=2&_nc_sid=0debeb&_nc_ohc=cSecq6N2ccwAX8-SQV2&_nc_ht=scontent.fsgn2-4.fna&oh=0c58f35c01385ae8ce27458b39bb289a&oe=5FEE4B84');
            background-repeat: repeat;
        }

        .header h3 {
            font-size: 20px;
            color: #ef7147;
            text-transform: uppercase;
            font-family: 'PT Serif', serif;
            /* margin-top: 30px; */

        }

        .info {
            color: #333;
            font-weight: 600;
            font-size: 1.15rem;
        }

        .tablee {
            margin-top: 18px;
        }

        .note {
            font-weight: bold;
            font-style: italic;
            font-size: 13px;
            color: #ef7147;
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="container">
            <div class="header">
                <h3>Thanh Toán</h3>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <form>
                        <p class="info">Thông tin nhận hàng</p>
                        <div class="form-row">
                            <?php if (!isset($_SESSION["email"])) {
                            ?>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Họ và tên</label>
                                    <input class="form-control" placeholder="Họ và tên">
                                </div>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Địa chỉ</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="263 Hoàng Văn Thụ, Q. Tân Bình, TP. HCM">
                        </div>
                        <div class="form-group">
                            <label>SĐT</label>
                            <input type="number" class="form-control" placeholder="Phone number">
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form>
                        <p class="info">Thông tin vận chuyển</p>
                        <p>Giao hàng tận nơi</p>
                        <div class="radio_input">
                            <form action="/action_page.php">
                                <div class="form-check">
                                    <label class="form-check-label" for="check1">
                                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Giao Hàng Tiết Kiệm (30.000₫)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="check2">
                                        <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">Giao
                                        Hàng
                                        Nhanh (40.000₫)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">Bee (25.000₫)
                                    </label>
                                </div>
                                <div class="note">
                                    <p>Note: * Free ship trong bán kính 2km</p>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tablee">
                <p class="info">Thông tin sản phẩm</p>
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng cộng</th>
                        </tr>
                    </thead>

                    <script>
                        array = [];
                    </script>

                    <?php
                    $stt = 1;
                    if (isset($data["cart"])) {
                        foreach ($data["cart"] as $key => $value) {
                    ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $stt ?></td>
                                    <td><?php echo $value["product_name"] ?></td>
                                    <td>
                                        <img style="width: 100px; height: 100px" src="./mvc/assets/img/<?php echo $value["product_image"] ?>" alt="">
                                    </td>

                                    <td>
                                        <?php
                                        if (isset($_SESSION["email"])) {
                                            echo $value["quatity"];
                                        } else {
                                            echo $value["quantity"];
                                        }
                                        ?>

                                    </td>
                                    <td id="price<?php echo $value["product_id"] ?>">

                                    </td>
                                    <td id="total<?php echo $value["product_id"] ?>">

                                    </td>
                                </tr>
                            </tbody>
                            <script type="text/javascript">
                                array.push({
                                    id: <?php echo $value["product_id"] ?>,
                                    price: <?php echo $value["product_price"] ?>,
                                    quantity: <?php if (isset($_SESSION["email"])) {
                                                    echo $value["quatity"];
                                                } else {
                                                    echo $value["quantity"];
                                                } ?>,
                                })
                            </script>
                    <?php $stt++;
                        }
                    }

                    ?>
                </table>
            </div>

            <div class="row">
                <div class="col-md-6 text-center mb-5 mt-3">
                    <div class="text-left">
                        <h4 style="color: #ef7147;">Tổng tiền cần thanh toán: <span class="pl-2" style="color: #000" id="total"></span> </h4>
                    </div>
                </div>
                <div class="col-md-6 text-center mt-2 mb-5 ">
                    <div class="text-right">
                        <button class="btn btn-primary pt-3 pb-3 pl-5 pr-5" id="btn">
                            Thanh toán
                        </button>
                    </div>

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

    array.forEach(item => {
        $("#price" + item.id).html(format(item.price));

        $("#total" + item.id).html(format(item.price * item.quantity));

        var total = 0;
        array.forEach(item => {
            total += item.price * item.quantity;
        })

        $("#total").html(format(total));
    })

    console.log(array);
</script>