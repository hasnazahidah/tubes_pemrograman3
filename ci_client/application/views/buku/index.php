<div class="container pt-5">
    <h3><?= $title ?></h3>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Buku</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mb-2" href="<?= base_url('Buku/add')?>">Tambah Data</a>
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
                        <table class="table table-striped table-bordered tablehover text-sm" id="tableBuku">
                            <thead>
                                <tr class="table-primary">
                                    <th>JUDUL</th>
                                    <th>PENGARANG</th>
                                    <th>PENERBIT</th>
                                    <th>TAHUN TERBIT</th>
                                    <th>STOK</th>
                                    <th>HARGA</th>
                                    <th>KATEGORI</th>
                                    <th>DESKRIPSI</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data_buku as $row) :
                                ?>
                                    <tr>
                                        <td><?= $row['judul']?></td>
                                        <td><?= $row['pengarang'] ?></td>
                                        <td><?= $row['penerbit'] ?></td>
                                        <td><?= $row['tahun_terbit'] ?></td>
                                        <td><?= $row['stok'] ?></td>
                                        <td><?= $row['harga'] ?></td>
                                        <td><?= $row['jenis_kategori'] ?></td>
                                        <td><?= $row['deskripsi'] ?></td>
                                        <td>
                                            <a href="<?= base_url('Buku/detail/'.$row['id_buku'])?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="<?= base_url('Buku/edit/'.$row['id_buku'])?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('Buku/delete/'.$row['id_buku'])?>" class="btn btn-danger btn-sm item-delete tombol-hapus"><i class="fa fa-trash"></i></a>
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
    $('#tableBuku').DataTable();
</script>