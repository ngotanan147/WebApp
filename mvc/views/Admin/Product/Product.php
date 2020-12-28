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
                    <h1 class="h3 mb-2 text-gray-800">User table</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-primary" style="width: 100%;">Add item</button>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Category ID</th>
                                            <th>Category name</th>
                                            <th>Function</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($data["product"])) {
                                            while ($row = mysqli_fetch_array($data["product"])) {
                                        ?>
                                                <tr>
                                                    <td><?php echo $row["product_id"] ?></td>
                                                    <td><?php echo $row["product_name"] ?></td>
                                                    <td class="text-center"><img style="width: 75px; height: 75px" src="./mvc/assets/img/<?php echo $row["product_image"] ?>" alt=""></td>
                                                    <td><?php echo $row["product_price"] ?></td>
                                                    <td><?php echo $row["product_description"] ?></td>
                                                    <td><?php echo $row["categories_id"] ?></td>
                                                    <td><?php echo $row["categories_name"] ?></td>
                                                    <td class="d-flex justify-content-around">
                                                        <a href="<?php echo URL ?>AdminProduct/showEditData/<?php echo $row["product_id"] ?>">
                                                            <i style="color:#999" class="fa fa-wrench fa-lg function" aria-hidden="true"></i>

                                                        </a>
                                                        <a href="<?php echo URL ?>AdminProduct/deleteProduct/<?php echo $row["product_id"] ?>">
                                                            <i style="color:#999" class="fa fa-trash fa-lg function" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo URL ?>AdminProduct/addProduct" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" id="exampleInputEmail" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input name="image" type="file" class="form-control" id="exampleInputPassword" placeholder="Image">
                                </div>
                                <div class="form-group">
                                    <input name="price" type="text" class="form-control" id="exampleInputPassword" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <input name="description" type="text" class="form-control" id="exampleInputPassword" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <input name="category_id" type="text" class="form-control" id="exampleInputPassword" placeholder="Category ID">
                                </div>
                                <div class="form-group">
                                    <input name="category_name" type="text" class="form-control" id="exampleInputPassword" placeholder="Category name">
                                </div>
                                <button name="addProduct" type="submit" class="btn btn-primary mt-2">Submit</button>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


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