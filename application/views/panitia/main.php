
<main>
    <div class="container py-5">
        <div class="card mt-5 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <h3>Hasil Penjualan :</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <?php
                                $total = 0;
                                foreach($penjualan as $p)
                                {
                                    if($p->jumlah == 5){
                                        $total+= 5000;
                                    }
                                    else if($p->jumlah == 12){
                                        $total+= 10000;
                                    }
                                    else if($p->jumlah == 25){
                                        $total+= 20000;
                                    }
                                    else if($p->jumlah == 60){
                                        $total+= 50000;
                                    }
                                    else if($p->jumlah == 120){
                                        $total+= 100000;
                                    }
                                }
                            ?>
                            <input type="text" class="form-control" value="<?="Rp. ".$total?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
           
        

        <div class="card">
            <div class="card-body">
                <table id='tabel' class="table table-striped table-bordered display nowrap">
                    <thead class="unique-color-dark text-white">
                        <tr>
                            <td>No</td>
                            <td>Kode Voucher</td>
                            <td>Jumlah</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    
                    <tbody id="model">
                    
                        <?php
                            $i = 1;
                            foreach($voucher as $v)
                            {
                                ?>
                                <tr>
                                    <td><?=$i++?></td>
                                    <td><?=$v->id_voucher?></td>
                                    <td><?=$v->jumlah?></td>
                                    <td>
                                        <?php
                                            if($v->status == 0)
                                            {
                                                echo 'Belum Terpakai';
                                            }else{
                                                echo "Sudah Terpakai";
                                            }
                                        ?>
                                    </td>
                                    </tr>
                                <?php
                            }
                        ?>
                   
                    </tbody>

                    <tfoot class="unique-color-dark text-white">
                        <tr>
                            <td>No</td>
                            <td>Kode Voucher</td>
                            <td>Jumlah</td>
                            <td>Status</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>
