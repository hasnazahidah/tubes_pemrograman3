<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Akumulasi Gaji</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('penggajian'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-success">
                    Detail Data Akumulasi Gaji
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>ID Penggajian :</b><br><?= $data_penggajian['id_penggajian']?></h5>
                    <p class="card-text"><b>ID Guru</b><br><?= $data_penggajian['id_guru']?></p>
                    <p class="card-text"><b>Nama Guru :</b><br><?= $data_penggajian['nama_guru']?></p>
                    <p class="card-text"><b>Status :</b><br><?= $data_penggajian['status']?></p>
                    <p class="card-text"><b>Akumulasi Gaji :</b><br><?= $data_penggajian['akumulasi_gaji']?></p>
                    <p class="card-text"><b>Jumlah Gaji Guru :</b><br><?= $data_penggajian['jmlh_gaji']?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>penggajian" class="btn btn-secondary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
<br>