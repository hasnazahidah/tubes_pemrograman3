<div class="container pt-5">
    <h3><?= $title ?></h3>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Key</a></li>
            <li class="breadcrumb-item active" aria-current="page">Generated Key</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
           
            <div mb-2>
                <!-- Menampilkan flash data (pesan saat data error)-->
                <?php if ($this->session->flashdata('message')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Error! <?= $this->session->flashdata('message'); ?>
                        <button type="button" class="close" data-dismiss="alert" arialabel="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>
            <div class="card">
                <div class="card-body" align="center">
                    <h4>Lakukan Generated Key !!</h4>
                    <h5>Tekan Tombol Dibawah Untuk Memulai Generated Key</h5>
                    <br>
                    
                <a class="btn btn-primary mb-2" href="<?= base_url('key/add') ?>">Generated !</a>

                </div>
            </div>
        </div>
    </div>
</div>
