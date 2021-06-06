<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Supplier
        <small>Penyetok</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Supplier</h3>
                <div class="pull-right">
                    <a href="<?=site_url('supplier/tambah')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-plus"> Tambah</i>
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $num = 1;
                        foreach($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?=$num++?></td>
                                <td><?=$data->id_supplier?></td>
                                <td><?=$data->nama?></td>
                                <td><?=$data->alamat?></td>
                                <td><?=$data->telepon?></td>
                                <td><?=$data->deskripsi?></td>
                                <td class="text-center" width="150px">
                                    <a href="<?=site_url('supplier/ubah/'.$data->id_supplier)?>" class="btn btn-success btn-xs">
                                        <i class="fa fa-pencil"> Edit</i>
                                    </a> | 
                                    <a href="<?=site_url('supplier/hapus/'.$data->id_supplier)?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
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