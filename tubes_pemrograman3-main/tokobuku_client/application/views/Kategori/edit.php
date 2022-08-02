<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Kategori</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('kategori'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes); ?>

                    <div class="form-group row">
                        <label for="id_kategori" class="col-sm-2 col-form-label">ID Kategori</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_kategori" name="id_kategori" value=" <?= $data_kategori['id_kategori']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_kategori') ?>
                            </small>
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label for="id_buku2" class="col-sm-2 col-form-label">ID Buku</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_buku2" name="id_buku2" value=" <?= $data_kategori['id_buku2']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_buku') ?>
                            </small>
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label for="id_buku2" class="col-sm-2 col-form-label">Judul Buku</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="id_buku2" name="id_buku2">
                                <!-- <option value="">---Pilih Judul Buku---</option> -->
							    <?php foreach ($data_buku as $row): ?>
								    <option value="<?= $row['id_buku']?>"><?= $row['judul']?></option>
								<?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('id_buku2') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jenis_kategori" class="col-sm-2 col-formlabel">Jenis Kategori</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="jenis_kategori" name="jenis_kategori" value="<?= $data_kategori['jenis_kategori']; ?>" >
                            <small class="text-danger">
                                <?php echo form_error('jenis_kategori') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-formlabel">Deskripsi</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $data_kategori['deskripsi']; ?>" >
                            <small class="text-danger">
                                <?php echo form_error('deskripsi') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-formlabel">Tanggal</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data_kategori['tanggal']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('tanggal') ?>
                            </small>
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
