<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Pemasukan SPP</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('pemasukan'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-success">
                    Detail Data Pemasukan SPP
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>ID Pemasukan SPP :</b><br><?= $data_pemasukan['id_pemasukan']?></h5>
                    <p class="card-text"><b>ID Murid :</b><br><?= $data_pemasukan['id_murid2']?></p>
                    <p class="card-text"><b>Nama Murid :</b><br><?= $data_pemasukan['nama_murid']?></p>
                    <p class="card-text"><b>Tanggal Transaksi :</b><br><?= $data_pemasukan['tgl_transaksi']?></p>
                    <p class="card-text"><b>Jumlah Setoran :</b><br><?= $data_pemasukan['jmlh_setoran']?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>pemasukan" class="btn btn-secondary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
<br>