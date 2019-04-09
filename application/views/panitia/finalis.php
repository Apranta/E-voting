
<main>
    <div class="container-fluid py-5">
        <div class="card mt-5">
            <div class="card-body">
                <h4 class="mb-4">
                    Daftar Finalis
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
                                <td><?= '<img class="d-block w-100" src="data:image/jpeg;base64,'.base64_encode($f->foto).'">' ?></td>
                                <td><?=$f->jml_vote?></td>
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
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
