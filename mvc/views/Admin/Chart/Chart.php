<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Delicious admin</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo URL ?>mvc/assets/TableFile/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="<?php echo URL ?>mvc/assets/TableFile/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo URL ?>mvc/assets/TableFile/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        .nav-link {
            padding: 5px !important;
        }

        .sidebar {
            background-image: none;
            background-color: #353535 !important;
        }

        .function:hover {
            color: #333 !important;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        require_once "./mvc/views/Admin/Layout/Sidebar.php";
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column mt-3">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Statistics</h1>
                </div>
                <!-- /.container-fluid -->

                <div class="row ml-2 mr-2">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 text-center">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Tổng số user
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data["totalUser"] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Annual) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 text-center">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Tổng số sản phẩm</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data["totalProduct"] ?></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tasks Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 text-center">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Tổng số hóa đơn</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data["totalBill"] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 text-center">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Doanh thu</div>

                                        <div class="doanhthu h5 mb-0 font-weight-bold text-gray-800"></div>
                                        <script>
                                            function format(n) {
                                                return (n * 1000).toLocaleString('vi', {
                                                    style: 'currency',
                                                    currency: 'VND'
                                                })
                                            }
                                            $(".doanhthu").html(format(<?php echo $data["revenue"] ?>));
                                        </script>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->



            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Ngô Tấn An - UIT</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo URL ?>mvc/assets/TableFile/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL ?>mvc/assets/TableFile/vendor/jquery/jquery.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL ?>mvc/assets/TableFile/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo URL ?>mvc/assets/TableFile/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo URL ?>mvc/assets/TableFile/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL ?>mvc/assets/TableFile/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo URL ?>mvc/assets/TableFile/js/demo/datatables-demo.js"></script>

</body>

</html>