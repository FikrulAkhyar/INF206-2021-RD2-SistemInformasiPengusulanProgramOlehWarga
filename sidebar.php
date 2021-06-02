<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php if ($_SESSION["id_status"] == 1) : ?>
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion" id="accordionSidebar" style="border: 1px solid #137F7F;">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                    <img src="img/logo.png" width="90%;">
                </a>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" style="color: black;" href="dashboard">
                        <i class="fas fa-home" style="color: #137F7F;"></i>
                        <span>Menu Utama</span></a>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

                <!-- Nav Item - Pengajuan Program Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed font-weight-bold" style="color: black; " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="far fa-paper-plane" style="color: #137F7F;"></i>
                        <span>Menu Admin</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item font-weight-bold" style="color: black;" href="kelola_warga">Kelola Warga</a>
                            <a class="collapse-item font-weight-bold" style="color: black;" href="lihat_usulan">Kelola Usulan</a>
                        </div>
                    </div>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" style="color: black;" href="peringkat_program">
                        <i class="fas fa-home" style="color: #137F7F;"></i>
                        <span>Peringkat Program</span></a>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>
                <!-- Nav Item - Logout Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed font-weight-bold" style="color: black;" href="logout">
                        <i class="fas fa-sign-out-alt" style="color: #137F7F;"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
            <!-- End of Sidebar -->
        <?php else : ?>
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion" id="accordionSidebar" style="border: 1px solid #137F7F;">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                    <img src="img/logo.png" width="90%;">
                </a>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" style="color: black;" href="dashboard">
                        <i class="fas fa-home" style="color: #137F7F;"></i>
                        <span>Menu Utama</span></a>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>

                <!-- Nav Item - Pengajuan Program Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed font-weight-bold" style="color: black; " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="far fa-paper-plane" style="color: #137F7F;"></i>
                        <span>Pengajuan Program</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item font-weight-bold" style="color: black;" href="Usulan">Kirim Pengajuan</a>
                            <a class="collapse-item font-weight-bold" style="color: black;" href="riwayat-usulan">Riwayat Pengajuan</a>
                        </div>
                    </div>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" style="color: black;" href="peringkat_program">
                        <i class="fas fa-home" style="color: #137F7F;"></i>
                        <span>Peringkat Program</span></a>
                </li>

                <div class="mx-auto my-2" style="background-color: #137F7F; height:1px; width: 150px;"></div>


                <!-- Nav Item - Logout Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed font-weight-bold" style="color: black;" href="logout">
                        <i class="fas fa-sign-out-alt" style="color: #137F7F;"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
            <!-- End of Sidebar -->
        <?php endif; ?>