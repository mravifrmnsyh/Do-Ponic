 <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
			<div class="row">
                  <?php foreach ($row as $contens):?>
			<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="" class="block-20" style="background-image: url('<?php echo base_url().'/assets/gambar/artikel/'.$contens->gambar ?>');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#"><?php echo $contens->date ?></a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span><?php echo $contens->tag ?></a></div>
		                </div>
		                <h3 class="heading"><a href="#"><?php echo $contens->judul ?></a></h3>
		                <p><?php echo str_word_count($contens->deskripsi) > 60 ? substr($contens->deskripsi,0,100)."..." : $contens->deskripsi ?></p>
		                <p><a href="<?=site_url('artikel/detail/'.$contens->id_artikel)?>" class="btn btn-primary py-2 px-3">Baca Terus</a></p>
		              </div>
		            </div>
		          </div>
                      <?php endforeach?>
			</div>
          </div> <!-- .col-md-8 -->

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
              <?php $i=0; foreach($row as $contents):?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url().'/assets/gambar/artikel/'.$contents->gambar ?>);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="<?=site_url('artikel/detail/'.$contents->id_artikel)?>"><?php echo $contents->judul ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo $contents->date ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> <?php echo $contents->tag ?></a></div>
                  </div>
                </div>
              </div>
                <?php $i++; if($i==4){break;}endforeach?>

        </div>
      </div>
    </section> <!-- .section -->