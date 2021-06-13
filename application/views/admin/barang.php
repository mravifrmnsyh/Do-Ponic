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
                <h3 class="box-title">Data Barang</h3>
                <div class="pull-right">
                    <a href="<?=site_url('barang/tambah')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"> Tambah</i>
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>NAMA BARANG</th>
                            <th>KETERANGAN</th>
                            <th>KATEGORI</th>
                            <th>HARGA</th>
                            <th>STOK</th>
                            <th>GAMBAR</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $num = 1;
                        foreach($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?=$num++?></td>
                                <td><?=$data->id_brg?></td>
                                <td><?=$data->nama_brg?></td>
                                <td><?=$data->keterangan?></td>
                                <td><?=$data->kategori?></td>
                                <td><?=$data->harga?></td>
                                <td><?=$data->stok?></td>
                                <td>
                                    <?php if($data->gambar != null){?>
                                        <img src="<?=base_url(); ?>assets/gambar/barang/<?=$data->gambar;?>" width="90" height="100" alt="">
                                    <?php }?>
                                </td>
                                <td class="text-center" width="150px">
                                    <a href="<?=site_url('barang/ubah/'.$data->id_brg)?>" class="btn btn-success btn-xs">
                                        <i class="fa fa-pencil"> Edit</i>
                                    </a> | 
                                    <a href="<?=site_url('barang/hapus/'.$data->id_brg)?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
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