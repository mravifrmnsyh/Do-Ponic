<!-- Main content -->
<section class="content">
    <?php $this->view('admin/messages')?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Detail Invoice</h3>
            <div class="pull-right">
                <div class="btn btn-primary btn-sm">
                    No. Invoice: <?= $invoice->id_inv?>
                </div>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width:5px">NO</th>
                        <th>ID</th>
                        <th>NAMA PRODUK</th>
                        <th>JUMLAH PESANAN</th>
                        <th>HARGA SATUAN</th>
                        <th>SUB-TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $tot=0;$num = 1;
                        foreach($pesan as $data) { 
                            $subtotal = $data->jumlah * $data->harga;
                            $tot += $subtotal;
                            ?>
                    <tr>
                        <td><?=$num++?></td>
                        <td><?=$data->id_brg?></td>
                        <td><?=$data->nama_brg?></td>
                        <td><?=$data->jumlah?></td>
                        <td>Rp. <?=number_format($data->harga,0,',','.')?></td>
                        <td>Rp. <?=number_format($subtotal,0,',','.')?></td>

                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="5">TOTAL HARGA</td>
                        <td>Rp. <?=number_format($tot,0,',','.')?></td>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="pull-right">
                <a href="<?=site_url('invoice')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-undo"> Kembali</i>
                </a>
            </div>
        </div>
    </div>
</section>