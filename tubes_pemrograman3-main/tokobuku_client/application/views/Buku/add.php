<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Buku</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('Buku'); ?>">List Data</a></li>
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
                        <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_buku" name="id_buku" placeholder="Inputkan bentuk data 1##" value="<?= set_value('id_buku'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_buku') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="judul" name="judul" value=" <?= set_value('judul'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('judul') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= set_value('pengarang'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('pengarang') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= set_value('penerbit'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('penerbit') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= set_value('tahun_terbit'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('tahun_terbit') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="stok" name="stok" value="<?= set_value('stok'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('stok') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="harga" name="harga" value="<?= set_value('harga'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('harga') ?>
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
