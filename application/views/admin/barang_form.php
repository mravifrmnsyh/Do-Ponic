<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Produk</h3>
            <div class="pull-right">
                <a href="<?=site_url('barang')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"> Kembali</i>
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo form_open_multipart('barang/proses');?>
                    <div class="form-group">
                        <label for="">Id Produk</label>
                        <input type="text" name="id_brg" readonly value="<?=$row->id_brg?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_brg" value="<?=$row->nama_brg?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" value="<?=$row->keterangan?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="kategori" class="form-control">
                            <?php $kategori = $this->input->post('kategori') ?? $row->kategori?>
                            <?php if($page!='ubah') { ?>
                            <option value="">- Pilih -</option>
                            <?php } ?>
                            <option value="alat" <?=$kategori == 'alat' ? 'selected' : null?>> Alat </option>
                            <option value="benih" <?=$kategori == 'benih' ? 'selected' : null?>> Benih </option>
                            <option value="buah" <?=$kategori == 'buah' ? 'selected' : null?>> Buah </option>
                        </select>
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
                        <?php if($page =='ubah'){
                                    if($row->gambar != null){ ?>
                        <div style="margin-bottom:5px">
                            <img src="<?=base_url(); ?>assets/gambar/barang/<?=$row->gambar;?>" style="width:50%">
                        </div>
                        <?php }
                                }?>
                        <input type="file" name="gambar" class="form-control" size="20">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" name="<?=$page?>" class="btn btn-primary">Simpan</button>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </div>

</section>