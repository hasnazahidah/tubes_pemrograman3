<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Penjualan</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('penjualan'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data penjualan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>id_penjualan :</b><br><?= $data_penjualan['id_penjualan']?></h5>
                    <p class="card-text"><b>id_transaksi :</b><br><?= $data_penjualan['id_transaksi']?></p>
                    <p class="card-text"><b>jumlah_terjual :</b><br><?= $data_penjualan['jumlah_terjual']?></p>
                    <p class="card-text"><b>pemasukan :</b><br><?= $data_penjualan['pemasukan']?></p>
                    <p class="card-text"><b>tanggal :</b><br><?= $data_penjualan['tanggal']?></p>
                    <a href="<?= base_url(); ?>penjualan" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
