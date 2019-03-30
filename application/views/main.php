
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
                                    <a data-id="<?=$k->id_finalis?>" class="open-modal btn btn-md btn-danger w-100 m-0" data-toggle="modal" data-target="#modalCookie1">
                                        VOTE
                                    </a>
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
                                    <a data-id="<?=$k->id_finalis?>" class="open-modal btn btn-md btn-danger w-100 m-0" data-toggle="modal" href="#modalCookie1">
                                        VOTE
                                    </a>
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
    
    <div class="modal fade" id="modalCookie1">
        <div class="modal-header">
            <button class="close" data-dismiss="modal">×</button>
            <h3>Modal header</h3>
        </div>
                <div class="modal-body">
                    <form action="<?=site_url('main/do_vote') ?>" method='POST'>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card my-5">
                                    <div class="card-header">
                                        <h2>Input Voucher</h2>
                                    </div>
                                    <div class="card-body">
                                        <!-- ••• VOUCHER ••• -->

                                        <div class="md-form form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="voucher" required>
                                                <input type="hidden" name='id' class='idF'>
                                                <label class="form-label">No Voucher</label>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="captcha" value='<?='Captcha: '.rand(10000,99999)?>' readonly>
                                        <div class="md-form form-group">
                                            
                                            <div class="form-line">
                                                <label class="form-label">Captcha</label>
                                                <input type="text" name='cek' class="form-control" required>
                                            </div>
                                        </div>
                                        <input class="btn btn-primary waves-effect" type="submit" name="submit" value="submit">
                                        <a class="btn btn-warning waves-effect" href="<?=site_url('main')?>">Cancel</a>
                                    </div>
                                </div>      
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</main>


