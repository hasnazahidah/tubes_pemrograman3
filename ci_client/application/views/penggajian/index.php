<div class="container pt-5">
    <h3><?= $title ?></h3>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item"><a>Penggajian</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-success mb-2" href="<?= base_url('Penggajian/add')?>">Tambah Data</a>
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
                        <table class="table table-striped table-bordered tablehover text-sm" id="tablePenggajian">
                            <thead>
                                <tr class="table-success">
                                    <th>ID PENGGAJIAN</th>
                                    <th>NAMA GURU</th>
                                    <th>STATUS</th>
                                    <th>AKUMULASI GAJI</th>
                                    <th>JUMLAH GAJI</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data_penggajian as $row) :
                                ?>
                                    <tr>
                                        <td><?= $row['id_penggajian']?></td>
                                        <td><?= $row['nama_guru']?></td>
                                        <td><?= $row['status'] ?></td>
                                        <td><?= $row['akumulasi_gaji'] ?></td>
                                        <td><?= $row['jmlh_gaji'] ?></td>
                                        <td>
                                            <a href="<?= base_url('Penggajian/detail/'.$row['id_penggajian'])?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="<?= base_url('Penggajian/edit/'.$row['id_penggajian'])?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('Penggajian/delete/'.$row['id_penggajian'])?>" class="btn btn-danger btn-sm item-delete tombol-hapus"><i class="fa fa-trash"></i></a>
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
    $('#tablePenggajian').DataTable();
</script>
<br>