<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control Panel</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-sticky-note"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Artikel</span>
                    <span class="info-box-number"><?= $art?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-archive"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Produk</span>
                    <span class="info-box-number"><?= $brg?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-truck"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Supplier</span>
                    <span class="info-box-number"><?= $sup?></span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-inbox"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Pesan</span>
                    <span class="info-box-number"><?= $kot?></span>
                </div>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-user"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number"><?= $user?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-folder-open"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Invoice</span>
                    <span class="info-box-number"><?= $inv?></span>
                </div>
            </div>
        </div>
    </div>
</section>