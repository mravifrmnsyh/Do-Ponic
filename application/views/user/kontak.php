<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info bg-light p-4">
                    <p><span>Alamat:</span> <a>Semarang, Jawa Tengah, Indonesia</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-light p-4">
                    <p><span>Telepon:</span> <a href="tel://1234567920">+ 1123 1321 12 1</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-light p-4">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">admin@doponic.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-light p-4">
                    <p><span>Website :</span> <a href="#">doponic.com</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 align-items-center"
                style="background-image: url(<?= base_url() ?>assets/user/img/logo.png);">
            </div>
            <div class="col-md-5 order-md-last d-flex">
                <form action="<?= site_url("kotakmasuk/proses") ?>" class="bg-white p-7 contact-form" method="post">
                    <p>Anda dapat menghubungi kami melalui kotak pesan di bawah ini</p>
                    <br>
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subjek" class="form-control" placeholder="Subjek">
                    </div>
                    <div class="form-group">
                        <textarea name="pesan" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
                    </div>
                    <div class="col-4">
                        <button type="submit" name="kirim" class="btn btn-primary btn-block btn-flat">Kirim</button>
                    </div>
            </div>
            </form>

        </div>

    </div>
    </div>
</section>