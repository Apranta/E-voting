<main>
    <div class="container py-5">
        <div class="card mt-5 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <?php
                                if($timeline[0]->status == 0){
                                    $status = "Close Vote";
                                }else{
                                    $status = "Open Vote";
                                }
                            ?>
                            <input type="text" class="form-control" value="<?=$status?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md mb-3">
                                <a href="<?=site_url('admin/closevote')?>" class="btn btn-md btn-warning m-0 z-depth-0 w-100">
                                    Close Vote
                                </a>
                            </div>
                            <div class="col-md">
                                <a href="<?=site_url('admin/openvote')?>" class="btn btn-md btn-success m-0 z-depth-0 w-100">
                                    Open Vote
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </main>