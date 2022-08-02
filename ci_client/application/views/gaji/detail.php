<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item"><a>Gaji</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('gaji'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-success">
                    Detail Data Gaji
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>ID GAJI :</b><br><?= $data_gaji['id_gaji']?></h5>
                    <p class="card-text"><b>ID Guru :</b><br><?= $data_gaji['id_guru2']?></p>
                    <p class="card-text"><b>Nama Guru :</b><br><?= $data_gaji['nama_guru']?></p>
                    <p class="card-text"><b>Status Guru :</b><br><?= $data_gaji['status']?></p>
                    <p class="card-text"><b>Jumlah Gaji :</b><br><?= $data_gaji['jmlh_gaji']?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>gaji" class="btn btn-secondary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
<br>