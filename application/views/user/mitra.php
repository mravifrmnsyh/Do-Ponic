<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url() ?>assets/user/img/gambar-3.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a>Ayo</a></span> <span>Bergabung</span></p>
                <h1 class="mb-0 bread">Membangun Pasar Bersama do Ponic</h1>
                <p class="breadcrumbs"><span class="mr-2"><a class="btn btn-primary"
                            href="<?= base_url() ?>kontak">Hubungi Kami</a></span> <span>daftarkan diri Anda menjadi
                        salah satu mitra kami</span></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="heading-section-bold col-md-9 ftco-animate text-center">
            <div class="ml-md-0">
                <h2 class="mb-4 text-center">Mulai Hasilkan Produk Berkualitas</h2>
            </div>
        </div>
        <div class="pb-md-5">
            <p>Kami ingin membantu memecahkan salah satu tantangan keberlanjutan terberat saat ini: memajukan pertanian
                Indonesia dimasa depan. Jika Anda melihat tujuan kami dan besarnya tantangan ke depan yang menggairahkan
                Anda, kami ingin Anda menjadi bagian dari kami dan mitra-mitra kami di bawah ini.</p>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $num = 1;
                        foreach ($supplier->result() as $mitra) { ?>
                            <tr>
                                <td><?php echo $num++; ?></td>
                                <td><?php echo $mitra->nama; ?></td>
                                <td><?php echo $mitra->alamat; ?></td>
                                <td><?php echo $mitra->deskripsi; ?></td>
                            </tr>
                            <?php }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>