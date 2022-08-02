<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Users</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('users'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data User
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>ID USERS :</b><br><?= $data_users['id_users']?></h5>
                    <p class="card-text"><b>USERNAME :</b><br><?= $data_users['username']?></p>
                    <p class="card-text"><b>PASSWORD :</b><br><?= $data_users['password']?></p>
                    <p class="card-text"><b>STATUS :</b><br><?= $data_users['status']?></p>
                    <p class="card-text"><b>LEVEL :</b><br><?= $data_users['level']?></p>


                    <a href="<?= base_url(); ?>users" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
