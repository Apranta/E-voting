<main>
<div class="container-fluid py-5">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="mb-4">
                Daftar Finalis
                <a href="<?=site_url('admin/input_finalis')?>" class='float-right btn btn-success btn-sm px-3 m-0'>
                    <i class='fas fa-plus'></i>
                </a>
            </h4>
            <div class="table-responsive">
                <table id="tabel" class="table table-striped table-bordered" cellspasing = "0" width="100%">
                    <thead class="unique-color-dark text-white">
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Jurusan</td>
                            <td>Jenis Kelamin</td>
                            <td>Foto</td>
                            <td>Jumlah Vote</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($finalis as $f){ ?>
                        <tr>
                            <td><?=$f->id_finalis?></td>
                            <td><?=$f->nama?></td>
                            <td><?=$f->jurusan?></td>
                            <td><?php
                                if($f->jk==1){
                                    echo 'Bujang';
                                }else{
                                    echo 'Gadis';
                                }
                            ?></td>
                            <td><img src="data:image/jpeg;base64, <?= base64_encode($f->foto) ?>" width="100px"></td>
                            <td><?=$f->jml_vote?></td>
                            <td class="text-center">
                                <a href="<?= site_url('admin/edit_finalis/'.$f->id_finalis)?>" class="btn btn-amber btn-sm mr-auto px-3 m-0">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="<?= site_url('admin/hapus_finalis/'.$f->id_finalis)?>" class="btn btn-amber btn-sm mr-auto px-3 m-0">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot class="unique-color-dark text-white">
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Jurusan</td>
                            <td>Jenis Kelamin</td>
                            <td>Foto</td>
                            <td>Jumlah Vote</td>
                            <td>Actions</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</main>