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
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Function</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            while ($row = mysqli_fetch_array($data["user"])) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row["user_id"] ?></td>
                                                    <td><?php echo $row["user_name"] ?></td>
                                                    <td><?php echo $row["user_email"] ?></td>
                                                    <td><?php echo $row["user_password"] ?></td>
                                                    <td><?php echo $row["user_role"] ?></td>
                                                    <td class="d-flex justify-content-around">
                                                        <a href="Admin/showEditData/<?php $data["id"] ?>" data-toggle="modal" data-target="#exampleModal2">
                                                            <i style="color:#999" class="fa fa-wrench fa-lg function" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="Admin/deleteUser/<?php echo $row["user_id"] ?>">
                                                            <i style="color:#999" class="fa fa-trash fa-lg function" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Edit modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
                                <a href="<?php echo URL ?>Admin" class="" style="text-decoration: none; color: #000">
                                    X
                                </a>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo URL ?>Admin/editUser/<?php echo $data["id"] ?>" method="POST">
                                    <div class="form-group">
                                        <input value="<?php echo $data["name"] ?>" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input value="<?php echo $data["email"] ?>" name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input value="<?php echo $data["password"] ?>" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <select name="role" multiple class="form-control" id="exampleFormControlSelect2">
                                        <option Selected>User</option>
                                        <option>Admin</option>
                                    </select>
                                    <button name="editUser" type="submit" class="btn btn-primary mt-2">Submit</button>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <a href="<?php echo URL ?>Admin" class="btn btn-secondary">
                                    Close
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $("#exampleModal2").modal('show');
                </script>


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