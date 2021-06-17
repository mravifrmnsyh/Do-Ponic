<section class="ftco-section">
    	<div class="container">
    		<div class="row">
        <?php  $i=0; foreach ($row as $contens):?>
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="<?php echo base_url().'/assets/gambar/barang/'.$contens->gambar ?>" class="image-popup"><img src="<?php echo base_url().'/assets/gambar/barang/'.$contens->gambar ?>" class="img-fluid" alt=""></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $contens->nama_brg ?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">Kategori : <span style="color: #bbb;"><?php echo $contens->kategori ?></span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;"><?php echo ' Stok &nbsp; : '.$contens->stok ?> <span style="color: #bbb;">Stok</span></a>
							</p>
						</div>
    				<p class="price"><span>Rp. <?php echo number_format($contens->harga, 0,',','.') ?></span></p>
    				<p><?php echo  $contens->keterangan?></p>
            
            <div class="row mt-4">
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="0" max=" <?php echo $contens->stok ?>">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
	          	
          	</div>

          	<p><a href="" class="btn btn-black py-3 px-5">Tambah ke Keranjang</a></p>
    			</div>
      <?php endforeach?>
    		</div>
    	</div>
    </section>


    <section class="ftco-section">
    	<div class="container">
          <div class="col-md-12 heading-section text-left ftco-animate">
            <h4 class="mb-4">Produk Rekomendasi</h4>
        </div>   		
    	<div class="container">
    		<div class="row">
          
            <?php foreach($dat as $contents):
                if($contents->kategori == $contens->kategori){?>

    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
            <a href="#" class="img-prod"><img class="img-fluid" src="<?php echo base_url().'/assets/gambar/barang/'.$contents->gambar ?>" alt="">
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo $contents->nama_brg ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">Rp. <?php echo number_format($contents->harga, 0,',','.') ?></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="<?=site_url('katalog/detail/'.$contents->id_brg)?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
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
          
          <?php } endforeach?>
    		</div>
    	</div>
    </section>