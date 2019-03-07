
        <div class="sidebar-fixed position-fixed border-right" style="background: #0d1a3a; background-size: contain;">
            <a class="py-5 my-4 waves-effect border-bottom">
                <img src="<?= base_url() ?>assets/img/pbgf.png" class="img-fluid">
            </a>
            <div class="list-group list-group-flush">
                <a href="<?= site_url('main') ?>" class="list-group-item font-weight-normal list-group-item-action waves-effect <?php if($active == 0) echo "active"; ?>">
                    <i class="fas fa-home mr-3"></i> Dashboard
                </a>
                <a href="<?= site_url('main') ?>" class="list-group-item font-weight-normal list-group-item-action waves-effect">
                    <i class="fas fa-home mr-3"></i> Dashboard
                </a>
            </div>
        </div>
    </header>