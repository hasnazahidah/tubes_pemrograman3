<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item"><a>Murid</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('murid'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-success">
                    Detail Data Murid
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>ID Murid :</b><br><?= $data_murid['id_murid']?></h5>
                    <p class="card-text"><b>Nama Murid:</b><br><?= $data_murid['nama_murid']?></p>
                    <p class="card-text"><b>Tanggal Lahir :</b><br><?= $data_murid['tgl_lahir']?></p>
                    <p class="card-text"><b>Nama Orang Tua :</b><br><?= $data_murid['nama_ortu']?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>murid" class="btn btn-secondary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
<br>