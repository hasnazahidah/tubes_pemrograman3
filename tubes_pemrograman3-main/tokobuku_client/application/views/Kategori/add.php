<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Kategori</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('kategori'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="id_kategori" class="col-sm-2 col-form-label">ID Kategori</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_kategori" name="id_kategori" placeholder="inputkan bentuk data 2##" value="<?= set_value('id_kategori'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_kategori') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_buku2" class="col-sm-2 col-form-label">Judul Buku</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="id_buku2" name="id_buku2">
                                <option value="">---Pilih Judul Buku---</option>
							    <?php foreach ($data_buku as $row): ?>
								    <option value="<?= $row['id_buku']?>"><?= $row['judul']?></option>
								<?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('id_buku2') ?>
                            </small>
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label for="id_buku2" class="col-sm-2 col-form-label">ID Buku</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_buku2" name="id_buku2" value="<?= set_value('id_buku2'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_buku2') ?>
                            </small>
                        </div>
                    </div> -->

                    <!-- <div class="form-group row">
                        <label for="id_buku2" class="col-sm-2 col-form-label">ID Buku</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="id_buku2" name="id_buku2">
                                <option value="">Pilih ID Buku</option>
							    <?php foreach ($data_buku as $row): ?>
								    <option value="<?= $row['id_buku']?>"><?= $row['id_buku']?></option>
								<?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('id_kategori') ?>
                            </small>
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label for="jenis_kategori" class="col-sm-2 col-form-label">Jenis Kategori</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="jenis_kategori" name="jenis_kategori" value="<?= set_value('jenis_kategori'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('jenis_kategori') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= set_value('deskripsi'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('deskripsi') ?>
                            </small>
                        </div>
                    </div>

                    

                     <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= set_value('tanggal'); ?>">
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
