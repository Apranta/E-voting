
<main class="content">
    <div class="container py-5">
    <?= $this->session->flashdata('msg') ?>
            <!-- Basic Validation -->
            <form action="<?=site_url('Admin/input_finalis')?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card my-5">
                        <div class="card-header">
                            <h2>DATA Finalis</h2>
                        </div>
                        <div class="card-body">
                            <!-- ••• NIM ••• -->
                            <div class="md-form form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="id_finalis" required>
                                    <label class="form-label">No Finalis</label>
                                </div>
                            </div>
                            <!-- •••••••••••• -->
                            
                            <!-- ••• Nama Lengkap ••• -->
                            <div class="md-form form-group">
                                <div class="form-line">
                                    <input type="text" name="nama"   class="form-control"  required>
                                    <label class="form-label">Nama Lengkap</label>
                                </div>
                            </div>
                            <!-- •••••••••••• -->
                                
                            <!-- ••• Jurusan  ••• -->
                            <div class="md-form form-group">
                                <div class="form-line">
                                    <input type="text" name="jurusan"   class="form-control"  required>
                                    <label class="form-label">jurusan</label>
                                </div>
                            </div>
                            <!-- •••••••••••• -->
                            
                            <!-- ••• Jenis Kelamin ••• -->
                            <div class="md-form form-group">
                                <select name="jk" class="custom-select" required>
                                    <option value="1">Bujang</option>
                                    <option value="2">Gadis</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" id="file" class="custom-file-input" name="gambar" required>
                                    <label for="file" class="custom-file-label">Pilih Foto Finalis</label>
                                </div>
                            </div>
                            <input class="btn btn-primary waves-effect" type="submit" name="submit" value="submit">
                        </div>
                    </div>      
                </div>
            </div>
        </form>
    </div>
</main>