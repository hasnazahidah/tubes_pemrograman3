<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Transaksi</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('transaksi'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data transaksi
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>ID Transaksi :</b><br><?= $data_transaksi['id_transaksi']?></h5>
                    <p class="card-text"><b>Tanggal :</b><br><?= $data_transaksi['tanggal']?></p>
                    <p class="card-text"><b>Nama Pembeli :</b><br><?= $data_transaksi['nama_pembeli']?></p>
                    <p class="card-text"><b>Pegawai :</b><br><?= $data_transaksi['nama']?></p>
                    <p class="card-text"><b>Judul Buku :</b><br><?= $data_transaksi['judul']?></p>
                    <p class="card-text"><b>Jumlah Buku :</b><br><?= $data_transaksi['jumlah_buku']?></p>
                    <p class="card-text"><b>total :</b><br><?= $data_transaksi['total']?></p>

                    <p></p>
                    <a href="<?= base_url(); ?>transaksi" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
