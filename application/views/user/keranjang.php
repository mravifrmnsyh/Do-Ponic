<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
                <!-- <div class="text d-block pl-md-4"> -->
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Kuantitas</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <?php foreach ( $this->cart->contents() as $items): ?>
                        <tbody>
                            <tr class="text-center">
                                <td class="product-remove"><a
                                        href="<?= site_url("katalog/hapusProduk/" . $items["rowid"]) ?>"><span
                                            class="ion-ios-close"></span></a></td>

                                <td class="product-name">
                                    <h3><?= $items["name"] ?></h3>
                                </td>

                                <td class="price">Rp. <?= number_format($items["price"],0,",",".") ?></td>

                                <td class="quantity">
                                    <?= $items["qty"] ?>
                                </td>

                                <td class="total">Rp. <?= number_format($items["subtotal"],0,",",".") ?></td>
                            </tr><!-- END TR-->

                        </tbody>
                        <?php endforeach; ?>
                    </table>
                    <?php if ($this->cart->total_items() == 0) { } else { ?>
                    <p><a href="<?= site_url("katalog/hapusKeranjang") ?>" class="btn btn-primary py-3 px-4">Hapus Semua
                            Produk</a></p>
                    <?php } ?>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Promo</h3>
                <p>Fitur saat ini nonaktifkan</p>
            </div>
            <!-- <p><a href="" class="btn btn-primary py-3 px-4">Klaim Promo</a></p> -->
        </div>
        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Biaya Kirim</h3>
                <p>Semua Biaya Kirim <b>GRATIS</b> ke seluruh Indonesia selama <b>PROMO</b></p>
            </div>
            <!-- <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Cek OngKir</a></p> -->
        </div>
        <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
                <h3>Total Biaya</h3>
                <p class="d-flex">
                    <span>Subtotal</span>
                    <span>Rp. <?= number_format($this->cart->total(), 0, ",", ".") ?></span>
                </p>
                <p class="d-flex">
                    <span>Biaya Kirim</span>
                    <span>Rp. 0</span>
                </p>
                <p class="d-flex">
                    <span>Promo</span>
                    <span>Rp. 0</span>
                </p>
                <hr>
                <p class="d-flex">
                    <span>Total</span>
                    <span><a>Rp. <?= number_format($this->cart->total(),0,",",".") ?></a></span>
                </p>
            </div>
            <?php if ($this->fungsi->user_login() == null) { ?>
            <p><a href="<?= site_url("auth/login/") ?>" id="byr" class="btn btn-primary py-3 px-4">Bayar</a></p>
            <?php } else { ?>
            <p><a href="<?= site_url("katalog/checkout/") ?>" class="btn btn-primary py-3 px-4">Bayar</a></p>
            <?php } ?>
        </div>
    </div>
    </div>
</section>