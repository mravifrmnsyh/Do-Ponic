<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Users
        <small>Pengguna</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Users</h3>
                <div class="pull-right">
                    <a href="<?=site_url('users/tambah')?>" class="btn btn-primary btn-flat">
                        <i class="fa fa-user-plus"> Tambah</i>
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $num = 1;
                        foreach($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?=$num++?></td>
                                <td><?=$data->id_user?></td>
                                <td><?=$data->username?></td>
                                <td><?=$data->password?></td>
                                <td><?=$data->nama?></td>
                                <td><?=$data->alamat?></td>
                                <td><?=$data->level == 1 ? "Admin" : "User"?></td> <!-- if else satu baris -->
                                <td class="text-center" width="150px">
                                    <form action="<?=site_url('users/hapus')?>" method="post">
                                        <a href="<?=site_url('users/ubah/'.$data->id_user)?>" class="btn btn-success btn-xs">
                                            <i class="fa fa-pencil"> Edit</i>
                                        </a> | 
                                        <input type="hidden" name="id_user" value="<?=$data->id_user?>">
                                        <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"> Hapus</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
		
	</section>