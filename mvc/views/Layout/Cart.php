<?php
require_once "./mvc/views/html/Header.html";
?>

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
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="./mvc/views/html/Cart.css">
</head>

<body>
    <div class="cartt">
        <div class="container">
            <div class="header">
                <span>
                    <a class="trangchu" href="">Trang chủ</a>
                    <span>/</span>
                    <span class="giohang">Giỏ hàng</span>
                </span>
            </div>
            <div class="title pt-3 pb-4">
                <h2>Giỏ hàng của tôi</h2>
            </div>
            <div class="content">
                <table class="table text-center d-none d-md-table d-lg-table">
                    <thead>
                        <tr>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody id="order_items">
                        <!-- JS render -->
                    </tbody>
                </table>
                <div id="order_items_mobile" class="mobile_table d-lg-none d-md-none mb-3 bg-white p-3 pt-4">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <div>
                                <img src="./mvc/views/html/img_doan/chaumatlon.jpg" alt="" width="75" height="auto">
                            </div>
                            <div class="tenvagia pl-3">
                                <div class="mb-2">
                                    <span class="mb-3" style="width: 200px;">Espresso Con Panna - S</span>
                                </div>
                                <div>
                                    <span>Giá: </span> <span style="color: #ef7147">150.000₫</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mt-4">
                            <div class="congtru">
                                <button onclick="cong()">+</button>
                                <input id="soluong" type="text" value="1" style="width:35px">
                                <button onclick="tru()">-</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="thanhtoan">
                <div class="d-flex justify-content-between">
                    <div class="tieptucmuahang pt-1">
                        <a href="#">
                            <button>Tiếp tục mua hàng</button>
                        </a>
                    </div>
                    <div class="tongtienthanhtoan p-2 d-flex">
                        <div class="">
                            <span>Tổng tiền thanh toán:</span>
                        </div>
                        <div class="text-center">
                            <span style="color: #ef7147" class="total pl-3">0₫</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right pt-3 pb-3 tienhanhthanhtoan">
                <a href="#">
                    <button id="btn_thanhtoan">Tiến hành thanh toán</button>
                </a>
            </div>
        </div>
    </div>
    <div class='text-center'>
        <button class="p-3" id="btn-add" onclick="add()" style="outline:none; border: 1px solid #ccc; color: #fff;
            background-color:  #ef7147;">
            Thêm sản phẩm (test)
        </button>
    </div>

</html>
<script>
    $("#btn_thanhtoan").width($(".tieptucmuahang").width() - 8);
    const items = [{
        img: "",
        name: "châu mat lon",
        price: 450,
        quantity: 1,
    }]

    function format(n) {
        return (n * 1000).toLocaleString('vi', {
            style: 'currency',
            currency: 'VND'
        })
    }

    function remove(index) {
        items.splice(index, 1);
        render();
    }

    function updateQuantity(index, quantity) {
        if (quantity < 1) {
            return;
        }
        items[index].quantity = quantity;
        render();
    }

    function render() {
        let subTotal = 0;
        items.forEach(item => {
            subTotal += (item.quantity * item.price);
        })

        const html = items.map(item => `
                            <tr>
                                <th scope="row">
                                    <img src="./mvc/views/html/img_doan/chaumatlon.jpg" alt="" width="75" height="auto">
                                </th>
                                <td>${item.name}</td>
                                <td>
                                    <span id="dongia">${format(item.price)}</span>
                                </td>
                                <td>
                                    <div class="congtru">
                                        <button id="inc">+</button>
                                        <input id="quantity1" type="text" value="${item.quantity}" style="width:35px">
                                        <button id="dec">-</button>
                                    </div>
                                </td>
                                <td>
                                    <span id="thanhtien">${format(item.quantity * item.price)}</span>
                                </td>
                                <td>
                                    <button id="deleteButton">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td>
                            </tr>
                            `).join('');
        const htmlMoble = items.map(item => ` 
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex">
                                <div>
                                    <img src="./mvc/views/html/img_doan/chaumatlon.jpg" alt="" width="75" height="auto">
                                </div>
                                <div class="tenvagia pl-3">
                                    <div class="mb-1">
                                        <span class="mb-3" style="width: 200px;">${item.name}</span>
                                    </div>
                                    <div>
                                        <span>Giá: </span> <span style="color: #ef7147">${format(item.price)}</span>
                                    </div>
                                    <div>
                                        <span>Thành tiền: </span> <span style="color: #ef7147">${format(item.quantity * item.price)}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                                <div class="congtru">
                                    <button id="inc2">+</button>
                                    <input id="quantity2" type="text" value="${item.quantity}" style="width:35px">
                                    <button id="dec2">-</button>
                                <button id="deleteButton2">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                </div>
                            </div>
                        </div>`).join('');

        $("#order_items_mobile").html(htmlMoble);
        $("#order_items").html(html);

        const deleteButton = document.querySelectorAll("#deleteButton");
        const deleteButton2 = document.querySelectorAll("#deleteButton2");

        const incs = document.querySelectorAll("#inc");
        const decs = document.querySelectorAll("#dec");
        const incs2 = document.querySelectorAll("#inc2");
        const decs2 = document.querySelectorAll("#dec2");
        const quantitys1 = document.querySelectorAll("#quantity1");
        const quantitys2 = document.querySelectorAll("#quantity2");
        console.log(quantitys1[0].value);
        for (let i = 0; i < deleteButton.length; i++) {
            deleteButton[i].addEventListener('click', () => {
                remove(i);
            });

            deleteButton2[i].addEventListener('click', () => {
                remove(i);
            });

            if (incs[i]) {
                incs[i].addEventListener('click', () => {
                    updateQuantity(i, items[i].quantity + 1);
                });
            }

            if (decs[i]) {
                decs[i].addEventListener('click', () => {
                    updateQuantity(i, items[i].quantity - 1);
                });
            }

            if (incs2[i]) {
                incs2[i].addEventListener('click', () => {
                    updateQuantity(i, items[i].quantity + 1);
                });
            }

            if (decs2[i]) {
                decs2[i].addEventListener('click', () => {
                    updateQuantity(i, items[i].quantity - 1);
                });
            }

            if (quantitys1[i]) {
                quantitys1[i].addEventListener('change', () => {
                    if (isNaN(quantitys1[i].value) || quantitys1[i].value < 1) {
                        quantitys1[i].value = 1;
                    }
                    updateQuantity(i, parseInt(quantitys1[i].value));
                });
            }
            if (quantitys2[i]) {
                quantitys2[i].addEventListener('change', () => {
                    if (isNaN(quantitys2[i].value) || quantitys2[i].value < 1) {
                        quantitys2[i].value = parseInt(1);
                    }
                    updateQuantity(i, parseInt(quantitys2[i].value));
                });
            }

        }

        const total = subTotal;
        $(".total").text(`${format(total)}`);
    }

    function add() {
        items.push({
            name: "châu matlon",
            price: 500,
            quantity: 1,
        })
        render();
    }
    render();
</script>

<?php
require_once "./mvc/views/html/Footer.html";
?>