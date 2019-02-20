
        <div class="sidebar-fixed position-fixed">
            <a class="p-3 waves-effect">
                <img src="<?= base_url() ?>assets/img/bem.png" class="img-fluid">
            </a>
            <div class="list-group list-group-flush">
                <a href="<?= site_url('user') ?>" class="list-group-item font-weight-normal <?php if($active == 1) echo "active"; ?> list-group-item-action waves-effect">
                    <i class="fas fa-home mr-3"></i>Dashboard
                </a>
                <?php if($oprec == 1) { ?>
                <a href="<?= site_url('user/formulir') ?>" class="list-group-item font-weight-normal <?php if($active == 2) echo "active"; ?> list-group-item-action waves-effect">
                    <i class="fas fa-pen mr-3"></i>Isi Formulir</a>
                <?php } else if($oprec == 2) { ?>
                <a href="<?= site_url('user/soal') ?>" class="list-group-item font-weight-normal <?php if($active == 3) echo "active"; ?> list-group-item-action waves-effect">
                    <i class="fas fa-clipboard mr-3"></i>Isi Soal</a>
                <?php } ?>
                <a href="<?= site_url('user/setting') ?>" class="list-group-item font-weight-normal <?php if($active == 4) echo "active"; ?> list-group-item-action waves-effect">
                    <i class="fas fa-cog mr-3"></i>Setting</a>
                <a href="<?= site_url('logout') ?>" class="list-group-item font-weight-normal list-group-item-action waves-effect">
                    <i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
            </div>
        </div>