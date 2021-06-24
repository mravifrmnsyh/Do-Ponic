<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
                <div class="row">
                    <?php foreach ($row->result() as $contens): ?>
                    <div class="col-md-4 d-flex ftco-animate ">
                        <div class="card blog-entry">
                            <img class="card-img-top"
                                src="<?php echo base_url()."/assets/gambar/artikel/" .$contens->gambar; ?>"
                                alt="Image Artikel do Ponic">
                            <div class="card-body">
                                <p><span class="icon-calendar"></span><small class="text-muted">
                                        <?php echo $contens->date; ?></small></p>
                                <h4 class="card-title"><a
                                        href='<?= site_url("artikel/detail/" . $contens->id_artikel) ?>'><?php echo $contens->judul; ?></a>
                                </h4>
                                <p class="card-text">
                                    <?php echo str_word_count($contens->deskripsi) > 60 ? substr($contens->deskripsi, 0, 200) . "...": $contens->deskripsi; ?>
                                </p>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                    <?php endforeach; ?>
                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->