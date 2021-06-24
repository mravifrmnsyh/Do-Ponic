<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Artikel</h3>
            <div class="pull-right">
                <a href="<?=site_url('artikel')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"> Kembali</i>
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo form_open_multipart('artikel/proses');?>
                    <div class="form-group">
                        <label for="">Id</label>
                        <input type="text" name="id_artikel" readonly value="<?=$row->id_artikel?>"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="date" value="<?=$row->date?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" value="<?=$row->judul?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tag</label>
                        <input type="text" name="tag" value="<?=$row->tag?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" required><?=$row->deskripsi?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label><br>
                        <?php if($page =='ubah'){
                                    if($row->gambar != null){ ?>
                        <div style="margin-bottom:5px">
                            <img src="<?=base_url(); ?>assets/gambar/artikel/<?=$row->gambar;?>" style="width:50%">
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