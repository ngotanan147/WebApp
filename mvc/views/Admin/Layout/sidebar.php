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
        <a class="nav-link" href="<?php echo URL ?>Admin">
            <i class="fas fa-fw fa-table"></i>
            <span>User</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="<?php echo URL ?>AdminProduct">
            <i class="fas fa-fw fa-table"></i>
            <span>Product</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="<?php echo URL ?>AdminCart">
            <i class="fas fa-fw fa-table"></i>
            <span>Cart</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="<?php echo URL ?>Admin/logout">
            <i class="fa fa-fw fa-sign-out-alt"></i>
            <span>Log out</span></a>
    </li>

</ul>