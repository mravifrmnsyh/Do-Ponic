<!-- Main content -->
<section class="content">
    <?php $this->view('admin/messages')?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Artikel</h3>
            <div class="pull-right">
                <a href="<?=site_url('artikel/tambah')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"> Tambah</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th style="width:5px">NO</th>
                        <th style="width:130px">JUDUL</th>
                        <th style="width:130px">TANGGAL</th>
                        <th style="width:130px">TAG</th>
                        <th style="width:600px">DESKRIPSI</th>
                        <th>GAMBAR</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1;
                        foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td><?=$num++?></td>
                        <td><?=$data->judul?></td>
                        <td><?=$data->date?></td>
                        <td><?=$data->tag?></td>
                        <td><?=$data->deskripsi?></td>
                        <td>
                            <?php if($data->gambar != null){?>
                            <img src="<?=base_url(); ?>assets/gambar/artikel/<?=$data->gambar;?>" width="90"
                                height="100" alt="">
                            <?php }?>
                        </td>
                        <td class="text-center" width="150px">
                            <a href="<?=site_url('artikel/ubah/'.$data->id_artikel)?>" class="btn btn-success btn-xs">
                                <i class="fa fa-pencil"> Edit</i>
                            </a> |
                            <a href="<?=site_url('artikel/hapus/'.$data->id_artikel)?>" id="btn-hapus"
                                class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"> Hapus</i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>