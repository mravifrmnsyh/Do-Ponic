<section class="ftco-degree-bg">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-8 ftco-animate">
          <?php foreach($row as $contents):?>
            <p>
              <img src="<?php echo base_url().'/assets/gambar/artikel/'.$contents->gambar ?>" alt="" class="img-fluid">
            </p>
            <div class="row">
						<h2 class="mb-2"><?php echo $contents->judul ?></h2>
            <p><?php echo $contents->deskripsi ?></p>
            
            </div>
          <?php endforeach?>
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
              <div class="block-21 mb-4 d-flex">
              <?php foreach($row as $contents):?>
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url().'/assets/gambar/artikel/'.$contents->gambar ?>);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="<?=site_url('artikel/detail/'.$contens->id_artikel)?>"><?php echo $contents->judul ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo $contents->date ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> <?php echo $contents->tag ?></a></div>
                  </div>
                </div>
                <?php endforeach?>
              </div>

        </div>
      </div>
    </section> <!-- .section -->