<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Supplier</h3>
            <div class="pull-right">
                <a href="<?=site_url('supplier')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"> Kembali</i>
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('supplier/proses')?>" class="" method="post">
                        <div class="form-group">
                            <label for="">Id User</label>
                            <input type="text" name="id_supplier" readonly value="<?=$row->id_supplier?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nama *</label>
                            <input type="text" name="nama" value="<?=$row->nama?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat *</label>
                            <textarea name="alamat" class="form-control" required><?=$row->alamat?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon *</label>
                            <input type="text" name="telepon" value="<?=$row->telepon?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi *</label>
                            <textarea name="deskripsi" class="form-control" required><?=$row->deskripsi?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">Simpan</button>
                            <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>