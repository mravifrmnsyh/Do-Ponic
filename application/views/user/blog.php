 <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ftco-animate">
			<div class="row">
                  <?php foreach ($row->result() as $contens):?>
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
		                <p><?php echo str_word_count($contens->deskripsi) > 60 ? substr($contens->deskripsi,0,200)."..." : $contens->deskripsi ?></p>
		                <p><a href="<?=site_url('artikel/detail/'.$contens->id_artikel)?>" class="btn btn-primary py-2 px-3">Baca Terus</a></p>
		              </div>
		            </div>
		          </div>
                      <?php endforeach?>
			</div>
          </div> <!-- .col-md-8 -->

        </div>
      </div>
    </section> <!-- .section -->