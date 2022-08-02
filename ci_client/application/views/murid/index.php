<div class="container pt-5">
    <h3><?= $title ?></h3>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <nav aria-label="breadcrumb" >
        <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item"><a>Murid</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-success mb-2" href="<?= base_url('Murid/add')?>">Tambah Data</a>
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
                        <table class="table table-striped table-bordered tablehover text-sm" id="tableMurid">
                            <thead>
                                <tr class="table-success">
                                    <th>ID MURID</th>
                                    <th>NAMA MURID</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th>NAMA ORTU</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data_murid as $row) :
                                ?>
                                    <tr>
                                        <td><?= $row['id_murid']?></td>
                                        <td><?= $row['nama_murid'] ?></td>
                                        <td><?= $row['tgl_lahir'] ?></td>
                                        <td><?= $row['nama_ortu'] ?></td>
                                        <td>
                                            <a href="<?= base_url('Murid/detail/'.$row['id_murid'])?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="<?= base_url('Murid/edit/'.$row['id_murid'])?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('Murid/delete/'.$row['id_murid'])?>" class="btn btn-danger btn-sm item-delete tombol-hapus"><i class="fa fa-trash"></i></a>
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
    $('#tableMurid').DataTable();
</script>
<br>