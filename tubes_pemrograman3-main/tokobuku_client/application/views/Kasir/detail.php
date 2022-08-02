<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Kasir</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('kasir'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data kasir
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>id_kasir :</b><br><?= $data_kasir['id_kasir']?></h5>
                    <p class="card-text"><b>id_users :</b><br><?= $data_kasir['id_users']?></p>
                    <p class="card-text"><b>nama_kasir :</b><br><?= $data_kasir['nama_kasir']?></p>
                    <p class="card-text"><b>no_telpon :</b><br><?= $data_kasir['no_telpon']?></p>
                    <p class="card-text"><b>alamat :</b><br><?= $data_kasir['alamat']?></p>


                    <a href="<?= base_url(); ?>kasir" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
