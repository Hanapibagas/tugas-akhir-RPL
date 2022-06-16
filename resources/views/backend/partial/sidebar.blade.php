<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
      </div>
      <div class="sidebar-brand-text mx-3">Admin Kepengurusan ceotech </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('show-pengurus') }}">
        <i class="fas fa-fw fa-book"></i>
        <span>Daftar Pengurus</span></a>
    </li>

    <hr class="sidebar-divider my-0">
    <!-- Heading -->

    <li class="nav-item active">
      <a class="nav-link" href="{{ route('tampilan-karya') }}">
        <i class="fas fa-fw fa-book"></i>
        <span>Karya Pengurus</span></a>
    </li>

    <hr class="sidebar-divider my-0">
    <!-- Heading -->

    <li class="nav-item active">
      <a class="nav-link" href="{{ route('show-history') }}">
        <i class="fas fa-fw fa-book"></i>
        <span>History</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
      <a class="nav-link" href="#">
        <i class="fas fa-fw fa-book"></i>
        <span>User</span></a>
    </li>

    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
