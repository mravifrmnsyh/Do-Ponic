        <section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?=base_url()?>assets/user/img/logo.png);">
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">do Ponic - Komunitas Tani</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
	          	<p>do Ponic adalah komunitas pertanian yang bertujuan untuk memajukan pertanian di Indonesia dan sebagai upaya menghasilkan hasil pertanian yang berkualitas tinggi.</p>
							<p>Sebagai bentuk upaya kami dalam mewujudkan tujuan tersebut, kami berusaha untuk memberikan cara pengelolaan hingga mendistribusikan hasil pertanian berkualitas tinggi ke seluruh Indonesia.</p>
                            <p>Selain itu, do Ponic berupaya mengembangkan sistem sebagai layanan petani untuk menjual dan mendistribusikan hasil produk mereka ke seluruh Indonesia dengan memberikan fitur jual beli.</p>
							<p>Selain produk mentah, komunitas kami memberikan cara pengelolaan hasil pertanian menjadi produk matang seperti makanan atau produk lain.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
      <div class="container">
              <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Produk Pilihan</span>
          <h4>Produk peralatan kebun, bibit buah dan sayuran, buah dan sayur hingga hasil olahan</h4>
        </div>
      </div>   		
      </div>
      <div class="container">
          <div class="row">
      
         <?php  $i=0;  foreach ($barang as $brg):?>
              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="<?php echo base_url().'/assets/gambar/barang/'.$brg->gambar ?>" alt="doPonic">
                      </a>
                      <div class="text py-3 pb-4 px-3 text-center">
                          <h3><?php echo $brg->nama_brg ?></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p class="price"><span class="price-sale">Rp. <?php echo number_format($brg->harga, 0,',','.') ?></span></p>
                              </div>
                          </div>
                          <div class="bottom-area d-flex px-3">
                              <div class="m-auto d-flex">
                                  <a href="<?=site_url('barang/detail/'.$brg->id_brg)?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                      <span><i class="ion-ios-menu"></i></span>
                                  </a>
                                  <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                      <span><i class="ion-ios-cart"></i></span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <?php $i++; if($i==4){break;}; endforeach;?>
          </div>
      </div>
  </section>
      
      <section class="ftco-section img" style="background-image: url(<?=base_url()?>assets/user/img/);">
      <div class="container">
              <div class="row justify-content-end">
        <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
            <span class="subheading">Promo Spesial</span>
          <h2 class="mb-4">Deal of the day</h2>
          <p>Harga khusus untuk produk pilihan do Ponic</p>
          <h3><a href="#">Paket Tanam</a></h3>
          <span class="price">Rp. 115.000,00- <a href="#">Sekarang hanya Rp. 35.000,00-</a></span>
      </div>   		
      </div>
  </section>



