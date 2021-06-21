 <section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 ftco-animate">
            <!-- <div class="text d-block pl-md-4">
    				<div class="cart-list"> -->
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Produk</th>
						        <th>Harga</th>
						        <th>Kuantitas</th>
						        <th>Total</th>
						      </tr>
						    </thead>
                            <?php foreach ($this->cart->contents() as $items):?>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="<?=site_url('katalog/hapusKeranjang'.$items['name']);?>"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="product-name">
						        	<h3><?= $items['name'] ?></h3>
						        </td>
						        
						        <td class="price">Rp. <?= number_format($items['price'],0,',','.') ?></td>
						        
						        <td class="quantity">
                                    <?= $items['qty'] ?>
					          </td>
						        
						        <td class="total">Rp. <?= number_format($items['subtotal'] ,0,',','.') ?></td>
						      </tr><!-- END TR-->

						    </tbody>
                            <?php endforeach ?>
						  </table>


					  <!-- </div> -->
    			<!-- </div> -->
    		</div>
		 </div>
    </div>      
    <div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Promo</h3>
    					<p>Masukkan kode promo apabila ada</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Untuk Saat ini tidak ada Promo</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<!-- <p><a href="" class="btn btn-primary py-3 px-4">Klaim Promo</a></p> -->
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Biaya Kirim</h3>
    					<p>Masukkan alamat Anda untuk cek biaya kirim</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Kabupaten</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Kecamatan</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Kode Pos</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
    					<p>Semua Biaya Kirim <b>GRATIS</b> ke seluruh Indonesia selama <b>PROMO</b></p>
                  
	            </form>
    				</div>
    				<!-- <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Cek OngKir</a></p> -->
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Biaya Total</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span><?= number_format($this->cart->total() ,0,',','.') ?></span>
    					</p>
    					<p class="d-flex">
    						<span>Biaya Kirim</span>
    						<span>Rp. 0</span>
    					</p>
    					<p class="d-flex">
    						<span>Promo</span>
    						<span>Rp. 0</span>
    					</p>
    					<hr>
    					<p class="d-flex">
    						<span>Total</span>
    						<span><a>Rp. <?= number_format($this->cart->total() ,0,',','.') ?></a></span>
    					</p>
    				</div>
    				<p><a href="" class="btn btn-primary py-3 px-4">Bayar</a></p>
    			</div>
    		</div>
			</div>  
    </section>