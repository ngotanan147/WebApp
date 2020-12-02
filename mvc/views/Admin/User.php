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
    <link href="http://localhost/DoAnWeb/mvc/assets/TableFile/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="http://localhost/DoAnWeb/mvc/assets/TableFile/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="http://localhost/DoAnWeb/mvc/assets/TableFile/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Delicious Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tables
            </div>
            <!-- Nav Item - Tables -->

            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/Doanweb/Admin">
                    <i class="fas fa-fw fa-table"></i>
                    <span>User</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/Doanweb/Admin/product">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Product</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Category</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle" ></button>
            </div>

        </ul>
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
                        <button data-toggle="modal" data-target="#exampleModal" type="button" 
                        class="btn btn-primary" style="width: 100%;">Add item</button>
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
                                            while($row = mysqli_fetch_array($data["user"])){
                                        ?>
                                        <tr>
                                            <td><?php echo $row["user_id"] ?></td>
                                            <td><?php echo $row["user_name"] ?></td>
                                            <td><?php echo $row["user_email"] ?></td>
                                            <td><?php echo $row["user_password"] ?></td>
                                            <td><?php echo $row["user_role"] ?></td>
                                            <td class="d-flex justify-content-around">
                                                <a href="http://localhost/Doanweb/Admin/showEditData/<?php echo $row["user_id"] ?>">
                                                    <i style="color:#999" class="fa fa-wrench fa-lg function"
                                                        aria-hidden="true"></i>
                                                        
                                                </a>
                                                <a href="Admin/deleteUser/<?php echo $row["user_id"] ?>">
                                                    <i style="color:#999" class="fa fa-trash fa-lg function"
                                                        aria-hidden="true"></i>
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="http://localhost/Doanweb/Admin/addUser" method="POST">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" id="exampleInputEmail" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="exampleInputPassword" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                            </div>
                            <select name="role" multiple class="form-control" id="exampleFormControlSelect2">
                                <option Selected>User</option>
                                <option>Admin</option>
                            </select>
                            <button name="addUser" type="submit" class="btn btn-primary mt-2">Submit</button>

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
    <script src="http://localhost/DoAnWeb/mvc/assets/TableFile/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/DoAnWeb/mvc/assets/TableFile/vendor/jquery/jquery.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/DoAnWeb/mvc/assets/TableFile/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/DoAnWeb/mvc/assets/TableFile/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="http://localhost/DoAnWeb/mvc/assets/TableFile/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/DoAnWeb/mvc/assets/TableFile/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="http://localhost/DoAnWeb/mvc/assets/TableFile/js/demo/datatables-demo.js"></script>

</body>
</html>