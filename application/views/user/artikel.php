<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <div class="text d-block pl-md-4">
                    <?php foreach($row as $contents):?>
                    <img src="<?php echo base_url().'/assets/gambar/artikel/'.$contents->gambar ?>"
                        style="width:100%;height: 300px;" alt="" class="img-fluid">
                    <div class="row">
                        <h2 class="text-center"><?php echo $contents->judul ?></h2>
                        <div class="meta mb-3">
                            <p style="text-align:justify;">
                                <?php echo $this->typography->nl2br_except_pre($contents->deskripsi); ?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach?>
                </div> <!-- .col-md-8 -->
            </div>
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Artikel Terbaru</h3>
                    <?php $i=0;  foreach($desc->result() as $contents):?>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4"
                            style="background-image: url(<?php echo base_url().'/assets/gambar/artikel/'.$contents->gambar ?>);"></a>
                        <div class="text">
                            <h3 class="heading-1"><a
                                    href="<?=site_url('artikel/detail/'.$contents->id_artikel)?>"><?php echo $contents->judul ?></a>
                            </h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span><?php echo $contents->date ?></a>
                                </div>
                                <div><a href="#"><span class="icon-person"></span> <?php echo $contents->tag ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; if($i==4){break;} endforeach?>
                </div>
            </div>
        </div>
    </div>
</section> <!-- .section -->