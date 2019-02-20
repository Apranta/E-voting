<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?>PBGF 2019</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/mdb.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fa/css/all.min.css">
</head>
<body>
    <div class="container py-5">
        <div class="row my-5">
            <div class="col-md"></div>
            <div class="col-md-4">
                <h2 style="color: gold" class="text-center font-weight-bold mb-4">
                    PBGF 2019
                </h2>
                <div class="row mb-3">
                    <div class="col-1"></div>
                    <div class="col"><img src="<?= base_url() ?>assets/img/logo unsri.png" alt="" class="img-fluid"></div>
                    <div class="col"><img src="<?= base_url() ?>assets/img/logobem.png" alt="" class="img-fluid"></div>
                    <div class="col"><img src="<?= base_url() ?>assets/img/logobgf.png" alt="" class="img-fluid"></div>
                    <div class="col-1"></div>
                </div>
                <div class="card rounded-0">
                    <div class="card-header" style="background-color: gold"></div>
                    <div class="card-body py-4">
                        <?= $this->session->flashdata('msg') ?>
                        <?= form_open('login') ?>
                        <div class="input-group mb-4">
                            <input type="text" placeholder="Username" name="username" id="username" class="form-control rounded-0 grey lighten-3">
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" placeholder="Password" name="password" id="password" class="form-control rounded-0 grey lighten-3">
                        </div>
                        <button class="btn btn-md btn-outline-warning m-0 w-100">Masuk</button>
                        <?= form_close() ?>
                    </div>
                    <div class="card-footer" style="background-color: gold"></div>
                </div>
            </div>
            <div class="col-md"></div>
        </div>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/mdb.min.js"></script>
    <script src="<?= base_url() ?>assets/fa/js/all.min.js"></script>
</body>
</html>