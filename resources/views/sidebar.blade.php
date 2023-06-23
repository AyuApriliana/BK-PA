<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="logo.png">
                </div>
                <div class="sidebar-brand-text mx-3">SMKN 1 Kalianget</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Tulis Pelanggaran -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('create-pelanggaran') }}" class="nav-link">
                    <i class="fas fa-fw fa-pen"></i>
                    <span>Tulis Pelanggaran</span></a>
            </li>

            <!-- Lihat Pelanggaran -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('data-pelanggaran') }}" class="nav-link">
                    <i class="fas fa-fw fa-archive"></i>
                    <span>Lihat Pelanggaran</span></a>
            </li>

            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>