
        <div class="sidebar-fixed position-fixed border-right bg-transparent" style="background-image: url('<?= base_url() ?>assets/img/background.png'); background-size: contain;">
            <a class="py-5 my-4 waves-effect border-bottom">
                <img src="<?= base_url() ?>assets/img/pbgf.png" class="img-fluid">
            </a>
            <div class="list-group list-group-flush">
                <a href="<?= site_url('admin') ?>" class="list-group-item font-weight-normal list-group-item-action waves-effect active">
                    <i class="fas fa-home mr-3"></i> Dashboard
                </a>
                <a href="<?= site_url('admin/finalis') ?>" class="list-group-item font-weight-normal list-group-item-action waves-effect">
                    <i class="fas fa-cog mr-3"></i>Daftar Finalis</a>
                <a href="<?= site_url('logout') ?>" class="list-group-item font-weight-normal list-group-item-action waves-effect">
                    <i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
            </div>
        </div>
    </header>