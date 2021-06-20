<div class="container">
    <div class="row">
        <div class="col-md-12 ftco-animate">
            <h4>Keranjang Belanja</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <td>No</td>
                    <td>Nama Produk</td>
                    <td>Jumlah</td>
                    <td>Harga</td>
                    <td>Sub Total</td>
                </thead>
                
                <?php $no=1; foreach ($this->cart->contents() as $items):?>
                    <tbody>
                        <td><?= $no++ ?></td>
                        <td><?= $items['name'] ?></td>
                        <td><?= $items['qty'] ?></td>
                        <td>Rp. <?= number_format($items['price'],0,',','.') ?></td>
                        <td>Rp. <?= number_format($items['subtotal'] ,0,',','.') ?></td>
                    </tbody>
                <?php endforeach ?>
                <tfoot>
                    <td  colspan="4">Total</td>
                    <td>Rp. <?= number_format($this->cart->total() ,0,',','.') ?></td>
                </tfoot>
            </table>
            <a href="<?=site_url('katalog/hapusKeranjang');?>" class="btn btn-danger">Hapus Data Keranjang</a>
        </div>
    </div>
</div>