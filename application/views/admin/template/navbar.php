        
    <header>    
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="background: url('<?= base_url() ?>assets/img/background.png'); background-size: cover; border-bottom: 1px solid gold;">
            <div class="container-fluid">
                <a href="<?= site_url('user') ?>" class="navbar-brand d-block d-lg-block d-md-none">
                    <img src="<?= base_url() ?>assets/img/bujangGadis.png" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link waves-effect font-weight-normal active" href="<?= site_url('admin') ?>">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect font-weight-normal active" href="<?= site_url('admin/finalis') ?>">Daftar Finalis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect font-weight-normal active" href="<?= site_url('admin/timeline') ?>">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect font-weight-normal d-lg-none d-block" href="<?= site_url('logout') ?>">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>