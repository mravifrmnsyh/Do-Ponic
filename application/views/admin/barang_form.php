<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Data
        <small>Barang</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?=ucfirst($page)?> Barang</h3>
                <div class="pull-right">
                    <a href="<?=site_url('barang')?>" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"> Kembali</i>
                    </a>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('barang/proses')?>" class="" method="post">
                            <div class="form-group">
                                <label for="">Id Barang</label>
                                <input type="text" name="id_brg" readonly value="<?=$row->id_brg?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama_brg" value="<?=$row->nama_brg?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="keterangan" value="<?=$row->keterangan?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>
                                <input type="text" name="kategori" value="<?=$row->kategori?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" value="<?=$row->harga?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" name="stok" value="<?=$row->stok?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Gambar Produk</label><br>
                                <input type="file" name="gambar" value="<?=$row->gambar?>"class="form-control">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                            <button type="submit" name="<?=$page?>" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
	</section>