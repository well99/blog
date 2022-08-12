<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3"><?= $this->session->userdata('nama'); ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php if ($this->session->userdata('role') == 1) : ?>
    
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>beranda">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>post">
            <i class="fas fa-fw fa-cog"></i>
            <span>Post</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>akun">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Akun</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>login/logout">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a>
    </li>
    <?php endif; ?>

    <?php if ($this->session->userdata('role') == 2) : ?>
    
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>beranda">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>post">
            <i class="fas fa-fw fa-cog"></i>
            <span>Post</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>login/logout">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a>
    </li>
    <?php endif; ?>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>