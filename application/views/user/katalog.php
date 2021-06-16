<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="#" class="active">All</a></li>
    					<li><a href="#">Kategori 1</a></li>
    					<li><a href="#">Kategori 2</a></li>
    				</ul>
    			</div>
    		</div>
            <div class="container">
          <div class="row">
      
         <?php foreach ($barang as $brg):?>
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
                                  <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
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
              <?php endforeach;?>
          </div>
      </div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>