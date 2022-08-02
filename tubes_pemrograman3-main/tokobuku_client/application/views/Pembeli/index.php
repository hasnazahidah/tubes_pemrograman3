<div class="container pt-5">
    <h3><?= $title ?></h3>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Pembeli</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mb-2" href="<?= base_url('Pembeli/add') ?>">Tambah Data</a>
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered tablehover text-sm" id="tablepembeli">
                            <thead>
                                <tr class="table-primary">
                                    <th>ID PEMBELI</th>
                                    <th>NAMA PEMBELI</th>
                                    <th>NO TELPON</th>
                                    <th>ALAMAT</th>
                                    <th>EMAIL</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data_pembeli as $row) :
                                ?>
                                    <tr>
                                        <td><?= $row['id_pembeli'] ?></td>
                                        <td><?= $row['nama_pembeli'] ?></td>
                                        <td><?= $row['no_telpon'] ?></td>
                                        <td><?= $row['alamat'] ?></td>
                                        <td><?= $row['email'] ?></td>

                                        <td>
                                            <a href="<?= base_url('Pembeli/detail/'.$row['id_pembeli'])?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="<?= base_url('Pembeli/edit/'.$row['id_pembeli'])?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('Pembeli/delete/'.$row['id_pembeli'])?>" class="btn btn-danger btn-sm item-delete tombol-hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //menampilkan data ketabel dengan plugin datatables
    $('#tablepembeli').DataTable();
</script>
