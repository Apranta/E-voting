
<main class="py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-md"></div>
            <div class="col-md-5 col-sm-12 mb-5">
                <div class="card" style="background-color: rgba(0,0,0,0.3);">
                    <div class="card-body">
                        <p class="note note-warning" style="color: gold; background-color: transparent; padding: 0 10px;">
                            Vote Bujang
                        </p>
                        <hr style="height: 0.5px; background-color: gold; border-radius: 5px;">
                        <?php foreach($bujang as $k) { ?>
                        <h5 style="color: white">
                            <?= $k->nama ?>
                            <span class="text-right"></span>
                        </h5>
                        <div class="progress mb-3" style="background-color: rgba(0,0,0,0.4)">
                            <div class="progress-bar" role="progressbar" style="width: <?php if($k->jml_vote != 0) { echo ($k->jml_vote/$jml_bujang*100); } else { echo 0; } ?>%; background-color: gold" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="card" style="background-color: rgba(0,0,0,0.3);">
                    <div class="card-body">
                        <p class="note note-warning" style="color: gold; background-color: transparent; padding: 0 10px;">
                            Vote Gadis
                        </p>
                        <hr style="height: 0.5px; background-color: gold; border-radius: 5px;">
                        <?php foreach($gadis as $k) { ?>
                        <h5 style="color: white">
                            <?= $k->nama ?>
                            <span class="text-right"></span>
                        </h5>
                        <div class="progress mb-3" style="background-color: rgba(0,0,0,0.4)">
                            <div class="progress-bar" role="progressbar" style="width: <?php if($k->jml_vote != 0) { echo ($k->jml_vote/$jml_gadis*100); } else { echo 0; } ?>%; background-color: gold" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md"></div>
        </div>
    </div>
</main>