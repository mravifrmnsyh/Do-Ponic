<!-- Main content -->
<section class="content">
    <?php $this->view('admin/messages')?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Invoice</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th style="width:5px">NO</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Email</th>
                        <th>Pembayaran</th>
                        <th>TANGGAL PESANAN</th>
                        <th>BATAS BAYAR</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1;
                        foreach($row as $inv) { ?>
                    <tr>
                        <td><?=$num++?></td>
                        <td><?=$inv->id_inv?></td>
                        <td><?=$inv->nama?></td>
                        <td><?=$inv->alamat?></td>
                        <td><?=$inv->no?></td>
                        <td><?=$inv->email?></td>
                        <td><?=$inv->via?></td>
                        <td><?=$inv->tgl_pesan?></td>
                        <td><?=$inv->batas_byr?></td>
                        <td class="text-center" width="150px">
                            <a href="<?=site_url('invoice/detail/'.$inv->id_inv)?>" class="btn btn-success btn-xs">
                                <i class="fa fa-pencil"> Detail</i>
                            </a>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>