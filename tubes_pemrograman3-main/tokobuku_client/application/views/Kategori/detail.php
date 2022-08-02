<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Kategori</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('kategori'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Kategori
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>ID KATEGORI :</b><br><?= $data_kategori['id_kategori']?></h5>
                    <p class="card-text"><b>ID BUKU :</b><br><?= $data_kategori['id_buku2']?></p>
                    <p class="card-text"><b>JENIS KATEGORI :</b><br><?= $data_kategori['jenis_kategori']?></p>
                    <p class="card-text"><b>DESKIRPSI :</b><br><?= $data_kategori['deskripsi']?></p>
                    <p class="card-text"><b>TANGGAL :</b><br><?= $data_kategori['tanggal']?></p>


                    <a href="<?= base_url(); ?>kategori" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
