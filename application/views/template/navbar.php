
    <div style="z-index: 10000;" class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row d-flex justify-content-center align-items-center">
                        <p class="pt-3 pr-2">We use cookies to improve your website experience</p>
                        <a type="button" class="btn btn-primary">Learn more <i class="fas fa-book ml-1"></i></a>
                        <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Ok, thanks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>    
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="background: url('<?= base_url() ?>assets/img/background.png'); background-size: cover; border-bottom: 1px solid #f1d565;">
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
                            <a class="nav-link waves-effect font-weight-normal active" style="color: #f1d565" href="<?= site_url('main') ?>">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>