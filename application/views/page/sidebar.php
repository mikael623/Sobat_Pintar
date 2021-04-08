<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('hello/index') ?>" class="brand-link">
        <img src="<?php echo base_url() ?>assets/dist/img/logo_2.png" alt="Logo" class="brand-image">
        <span class="brand-text font-weight-light">Sobat Pintar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo site_url('hello/admin') ?>" class="d-block">Admin Pertama</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="<?php echo base_url() ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('materi/index') ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Materi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('soal/index') ?>" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Soal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('login/logout')?>" class="nav-link">Logout</a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>