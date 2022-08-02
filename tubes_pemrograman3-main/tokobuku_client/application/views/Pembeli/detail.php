<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Pembeli</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('pembeli'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Pembeli
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>ID Pembeli :</b><br><?= $data_pembeli['id_pembeli']?></h5>
                    <p class="card-text"><b>Nama Pembeli :</b><br><?= $data_pembeli['nama_pembeli']?></p>
                    <p class="card-text"><b>No Telepon :</b><br><?= $data_pembeli['no_telpon']?></p>
                    <p class="card-text"><b>Alamat :</b><br><?= $data_pembeli['alamat']?></p>
                    <p class="card-text"><b>Email :</b><br><?= $data_pembeli['email']?></p>

                    <a href="<?= base_url(); ?>pembeli" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
