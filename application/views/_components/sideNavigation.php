<div class="side-nav">
    <div class="top-space"></div>
    <div class="profile-section">
        <img src="<?= site_url() ?>assets/src/img/cat.jpg" alt="">
        <p class="mb-0"><?= $auth['username']; ?></p>
    </div>
    <div class="nav-section">

        <div class="nav-links <?= uri_string() == 'admin/dashboard' ? 'active' : '' ?>">
            <a href="<?= site_url() ?>admin/dashboard">Dashboard</a>
        </div>
        <div class="nav-links <?= uri_string() == 'admin/form_pengajuan' ? 'active' : '' ?>">
            <a href="<?= site_url() ?>admin/form_pengajuan">Form Pengajuan</a>
        </div>
        <div class="nav-links accordion-nav">
            <div class="position-relative">
                <a>Master</a>
                <span class="iconify chevron" data-icon="akar-icons:chevron-left"></span>
            </div>

            <div class="sub-nav">
                <a href="<?= site_url() ?>admin/master_driver">Master Driver</a>
                <a href="<?= site_url() ?>admin/master_region">Master Region</a>
                <a href="<?= site_url() ?>admin/master_instansi">Master Instansi</a>
                <a href="<?= site_url() ?>admin/master_sparepart">Master Sparepart</a>
                <a href="<?= site_url() ?>admin/master_kendaraan">Master Kendaraan</a>
                <a href="<?= site_url() ?>admin/master_pengeluaran">Master Pengeluaran</a>
            </div>
        </div>
    </div>
</div>
<div class="top-nav">
    <div class="d-flex justify-content-between align-items-center h-100 px-4">
        <button id="toggleSideNav" class="cursor-pointer fs-2 border-0 bg-transparent color-dark" data-toggle="modal" data-target="#logoutModal">
            <span class="iconify burger" data-icon="mdi:backburger"></span>
        </button>
        <a class="btn-table orange" href="<?= base_url('admin/Auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <span class="iconify" data-icon="ls:logout"></span>
            Logout
        </a>
    </div>
</div>