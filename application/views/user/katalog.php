<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <form action="" method="post">
                <div class="col-md-12 mb-5 text-center">
                    <div class="block-27">
                        <ul class="product-category">
                            <li><button class="btn btn-primary" type="submit" name="all">All</button></li>
                            <li><button class="btn btn-primary" type="submit" name="alat">Alat</button></li>
                            <li><button class="btn btn-primary" type="submit" name="benih">Benih</button></li>
                            <li><button class="btn btn-primary" type="submit" name="buah">Buah</button></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($barang as $brg):?>
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
                                    <?php echo anchor('katalog/tambahKeranjang/'.$brg->id_brg,'<div class="btn btn-primary buy-now d-flex justify-content-center align-items-center mx-1"><span><i class="ion-ios-cart"></i></span> </div>')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>