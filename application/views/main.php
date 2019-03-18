
<main>
    <div class="container py-5">
        <div class="row my-5 py-5">
            <div class="col-md-6 mb-3 pl-lg-5">
                <div class="card rounded-0 ml-lg-5" style="background-image: url('<?= base_url() ?>assets/img/background.png'); background-size: cover">
                    <div class="card-body">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php $cek = true; foreach ($bujang as $k) { ?>
                                <div class="carousel-item <?php if($cek) { echo "active"; $cek = false; } ?>">
                                    <?= '<img class="d-block w-100" src="data:image/jpeg;base64,'.base64_encode($k->foto).'">' ?>
                                    <button type="button" class="btn btn-md btn-danger w-100 m-0" data-toggle="modal" data-target="#modalCookie1">
                                        VOTE
                                    </button>
                                </div>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3 pr-lg-5">
                <div class="card rounded-0 mr-lg-5" style="background-image: url('<?= base_url() ?>assets/img/background.png'); background-size: cover">
                    <div class="card-body">
                    <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php $cek = true; foreach ($gadis as $k) { ?>
                                <div class="carousel-item <?php if($cek) { echo "active"; $cek = false; } ?>">
                                    <?= '<img class="d-block w-100" src="data:image/jpeg;base64,'.base64_encode($k->foto).'">' ?>
                                    <button type="button" class="btn btn-md btn-danger w-100 m-0" data-toggle="modal" data-target="#modalCookie1">
                                        VOTE
                                    </button>
                                </div>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
