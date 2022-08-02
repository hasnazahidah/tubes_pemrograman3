<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Pegawai</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('pegawai'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Pegawai
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>ID PEGAWAI :</b><br><?= $data_pegawai['id_pegawai']?></h5>
                    <p class="card-text"><b>ID USER :</b><br><?= $data_pegawai['id_users2']?></p>
                    <p class="card-text"><b>NAMA :</b><br><?= $data_pegawai['nama']?></p>
                    <p class="card-text"><b>NOMOR TELEPON :</b><br><?= $data_pegawai['no_telpon']?></p>
                    <p class="card-text"><b>PEKERJAAN :</b><br><?= $data_pegawai['pekerjaan']?></p>


                    <a href="<?= base_url(); ?>pegawai" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
