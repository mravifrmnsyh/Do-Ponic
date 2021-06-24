<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 ftco-animate">
                <form action="<?=site_url('katalog/prosesBayar/')?>" class="billing-form" method="post">
                    <h3 class="mb-4 billing-heading">Detail Pembayaran</h3>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama"
                                value="<?=$this->fungsi->user_login()->nama?>">
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="provinsi">Provinsi</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="provinsi" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="kabupaten">Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten" placeholder="" required>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat"
                                class="form-control"><?=$this->fungsi->user_login()->alamat?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="kodepos">Kode Pos</label>
                            <input type="text" class="form-control" name="kode" placeholder="" required>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nohp">No. HP</label>
                            <input type="text" class="form-control" name="hp" placeholder="" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="" required>
                        </div>
                    </div>
            </div>
            <div class="col-xl-5">
                <div class="row mt-5 pt-3">
                    <div class="col-md-12 d-flex mb-5">
                        <div class="cart-detail cart-total p-3 p-md-4">
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
                    </div>
                    <div class="col-md-12">
                        <div class="cart-detail p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Metode Pembayaran</h3>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="bri" class="mr-2"> Bank BRI</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="bni" class="mr-2"> Bank BNI</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="alfamart" class="mr-2"> Alfamart</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" class="mr-2" required> Saya telah membaca dan
                                            menerima syarat dan ketentuan</label>
                                    </div>
                                </div>
                            </div>
                            <p><button type="submit" class="btn btn-primary py-3 px-4">Bayar Sekarang</button></p>
                        </div>
                    </div>
                </div>
                </form><!-- END -->
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->