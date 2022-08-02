<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Buku</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('Buku'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data buku
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>ID Buku :</b><br><?= $data_buku['id_buku']?></h5>
                    <p class="card-text"><b>Judul :</b><br><?= $data_buku['judul']?></p>
                    <p class="card-text"><b>Pengarang :</b><br><?= $data_buku['pengarang']?></p>
                    <p class="card-text"><b>Penerbit :</b><br><?= $data_buku['penerbit']?></p>
                    <p class="card-text"><b>Tahun Terbit :</b><br><?= $data_buku['tahun_terbit']?></p>
                    <p class="card-text"><b>Stok :</b><br><?= $data_buku['stok']?></p>
                    <p class="card-text"><b>Harga :</b><br><?= $data_buku['harga']?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>Buku" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
