    <header>    
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="background: url('<?= base_url() ?>assets/img/background.png'); background-size: cover; border-bottom: 1px solid #f1d565;">
            <div class="container-fluid">
                <a href="<?= site_url('main') ?>" class="navbar-brand d-block d-lg-block d-md-none">
                    <img src="<?= base_url() ?>assets/img/bujangGadis.png" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link waves-effect font-weight-normal active" style="color: #f1d565" href="<?= site_url('main') ?>">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect font-weight-normal active" style="color: #f1d565" href="<?= site_url('main/chart') ?>">Chart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>