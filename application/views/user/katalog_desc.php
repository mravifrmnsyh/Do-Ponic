<section class="ftco-degree-bg ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
      <div class="row">
                  <?php foreach ($row as $contens):?>
			<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="" class="block-20" style="background-image: url('<?php echo base_url().'/assets/gambar/barang/'.$contens->gambar ?>');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"> </span><?php echo $contens->kategori ?></a></div>
		                </div>
		                <h3 class="heading"><a href="#"><?php echo $contens->nama_brg ?></a></h3>
		                <p><?php echo  $contens->keterangan ?></p>
		                <p><a href="<?=site_url('barang/detail/'.$contens->id_brg)?>" class="btn btn-primary"><i class="fa fa-cart-plus"></i></a></p>
		              </div>
		            </div>
		          </div>
                      <?php endforeach?>
			</div>
      </div>
      <div class="col-lg-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon ion-ios-search"></span>
              <input type="text" class="form-control" placeholder="Search...">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <h3 class="heading">Recent Blog</h3>
            <?php foreach($dat as $contents):?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url().'/assets/gambar/barang/'.$contents->gambar ?>);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="<?=site_url('barang/detail/'.$contents->id_brg)?>"><?php echo $contents->nama_brg ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-person"></span> <?php echo $contents->kategori ?></a></div>
                  </div>
                </div>
              </div>
            <?php endforeach?>
        </div>
      </div>
    </div>
  </div>
</section> <!-- .section -->