<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <h3>Sistem Pengelolaan data obat <b style="color:#9368e9 ;"> Aritra Farma Batam</b></h3>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" onclick="confirm('Apakah anda ingin logout?')" href="<?= base_url('auth/logout'); ?>">
                            <span class="no-icon"><?= $this->session->userdata('nama_depan'); ?> || Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->