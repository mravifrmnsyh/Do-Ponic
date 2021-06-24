<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <?php if (
                $this->fungsi->user_login() == null or
                $this->fungsi->user_login()->foto == null ) { ?>
                <a href="<?= site_url("profil") ?>" class="icon icon-sm rounded-circle border">
                    <i class="fa fa-user"></i>
                </a>
                <?php } else { ?>
                <a href="<?= base_url() ?>assets/gambar/user/<?= $this->fungsi->user_login()->foto ?>"
                    class="image-popup">
                    <img src="<?= base_url() ?>assets/gambar/user/<?= $this->fungsi->user_login()->foto ?>"
                        class="rounded-circle border img-fluid" alt="User Image">
                </a>
                <?php } ?>
                <span class="font-weight-bold"><?= ucfirst($this->fungsi->user_login()->nama) ?></span>
                <span class="text-black-50"><?= ucfirst($this->fungsi->user_login()->username) ?></span><span> </span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <?php echo form_open_multipart("profil/ubah/" . $this->fungsi->user_login()->id_user); ?>
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Pengaturan Profil</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="nama" value="<?= $this->fungsi->user_login()
                            ->nama ?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="username" value="<?= $this->fungsi->user_login()
                                ->username ?>">
                    </div>
                    <div class="col-md-12"><label class="labels">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="alamat"
                            value="<?= $this->fungsi->user_login()->alamat ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="labels">Foto</label><br>
                    <input type="file" name="foto" class="form-control" size="10">
                </div>
                <div class="mt-5 text-center">
                    <button type="submit" class="btn btn-primary profile-button" type="button">Simpan Profil</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Ubah
                        Password</span><span class="border px-3 p-1 add-experience"><i
                            class="fa fa-key"></i>&nbsp;Password</span></div><br>
                <div class="col-md-12"><label class="labels">Password</label><input type="password" name="password"
                        class="form-control" placeholder="password" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Konfirmasi</label><input type="password" name="password1"
                        class="form-control" placeholder="konfirmasi" value=""></div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
</div>
</div>