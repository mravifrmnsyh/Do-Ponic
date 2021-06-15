<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Kotak
        <small>Masuk</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Kotak Masuk</h3>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>SUBJEK</th>
                            <th>PESAN</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $num = 1;
                        foreach($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?=$num++?></td>
                                <td><?=$data->nama?></td>
                                <td><?=$data->email?></td>
                                <td><?=$data->subjek?></td>
                                <td><?=$data->pesan?></td>
                                <td class="text-center" width="150px">
                                    <a href="<?=site_url('kotakmasuk/hapus/'.$data->id_user)?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
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