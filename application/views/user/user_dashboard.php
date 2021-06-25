        <section class="ftco-section ftco-no-pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(<?=base_url()?>assets/user/img/logo.png);">
                    </div>
                    <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                        <div class="heading-section-bold mb-4 mt-md-5">
                            <div class="ml-md-0">
                                <h2 class="mb-4">do Ponic - Komunitas Tani</h2>
                            </div>
                        </div>
                        <div class="pb-md-5">
                            <p>do Ponic adalah komunitas pertanian yang bertujuan untuk memajukan pertanian di Indonesia
                                dan sebagai upaya menghasilkan hasil pertanian yang berkualitas tinggi.</p>
                            <p>Sebagai bentuk upaya kami dalam mewujudkan tujuan tersebut, kami berusaha untuk
                                memberikan cara pengelolaan hingga mendistribusikan hasil pertanian berkualitas tinggi
                                ke seluruh Indonesia.</p>
                            <p>Selain itu, do Ponic berupaya mengembangkan sistem sebagai layanan petani untuk menjual
                                dan mendistribusikan hasil produk mereka ke seluruh Indonesia dengan memberikan fitur
                                jual beli.</p>
                            <p>Selain produk mentah, komunitas kami memberikan cara pengelolaan hasil pertanian menjadi
                                produk matang seperti makanan atau produk lain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="container">
                    <div class="row justify-content-center mb-3 pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <a href="<?=base_url(); ?>blog">
                                <h2 class="subheading text-right">LIHAT SEMUA ARTIKEL</h2>
                            </a>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">

                        <?php $i=0; foreach ($desc->result() as $contens):?>
                        <div class="col-md-12 col-lg-6 ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="" class="block-20"
                                    style="background-image: url('<?php echo base_url().'/assets/gambar/artikel/'.$contens->gambar ?>');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#"><?php echo $contens->date ?></a></div>
                                        <div><a href="#" class="meta-chat"><span
                                                    class="icon-chat"></span><?php echo $contens->tag ?></a></div>
                                    </div>
                                    <h3 class="heading"><a href="#"><?php echo $contens->judul ?></a></h3>
                                    <p><?php echo str_word_count($contens->deskripsi) > 30 ? substr($contens->deskripsi,0,50)."..." : $contens->deskripsi ?>
                                    </p>
                                    <p><a href="<?=site_url('artikel/detail/'.$contens->id_artikel)?>"
                                            class="btn btn-primary py-2 px-3">Baca Terus</a></p>
                                </div>
                            </div>
                        </div>
                        <?php $i++; if($i==2){break;}; endforeach;?>
                    </div>
                </div>
        </section>

        <section>
            <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <a href="<?=base_url(); ?>katalog">
                            <h2 class="subheading text-right">LIHAT SEMUA PRODUK</h2>
                        </a>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php  $i=0;  foreach ($barang->result() as $brg):
                        if($brg->kategori=='alat'){?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid"
                                    src="<?php echo base_url().'/assets/gambar/barang/'.$brg->gambar ?>"
                                    style="height:260px;" alt="doPonic">
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><?php echo $brg->nama_brg ?></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">Rp.
                                                <?php echo number_format($brg->harga, 0,',','.') ?></span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="<?=site_url('katalog/detail/'.$brg->id_brg)?>"
                                            class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; if($i==4){break;}; }endforeach;?>
                </div>
                <div class="row">
                    <?php  $i=0;  foreach ($barang->result() as $brg):
                        if($brg->kategori=='benih'){?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid"
                                    src="<?php echo base_url().'/assets/gambar/barang/'.$brg->gambar ?>"
                                    style="height:260px;" alt="doPonic">
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><?php echo $brg->nama_brg ?></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">Rp.
                                                <?php echo number_format($brg->harga, 0,',','.') ?></span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="<?=site_url('katalog/detail/'.$brg->id_brg)?>"
                                            class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; if($i==4){break;}; }endforeach;?>
                </div>
                <div class="row">
                    <?php  $i=0;  foreach ($barang->result() as $brg):
                        if($brg->kategori=='buah'){?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid"
                                    src="<?php echo base_url().'/assets/gambar/barang/'.$brg->gambar ?>"
                                    style="height:260px;" alt="doPonic">
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><?php echo $brg->nama_brg ?></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">Rp.
                                                <?php echo number_format($brg->harga, 0,',','.') ?></span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="<?=site_url('katalog/detail/'.$brg->id_brg)?>"
                                            class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; if($i==4){break;}; }endforeach;?>
                </div>

            </div>
            </div>
        </section>