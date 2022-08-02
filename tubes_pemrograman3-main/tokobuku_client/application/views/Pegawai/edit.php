<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Pegawai</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('pegawai'); ?>">List Data</a></li>
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
                        <label for="id_pegawai" class="col-sm-2 col-form-label">ID Pegawai</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" value=" <?= $data_pegawai['id_pegawai']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_pegawai') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_users2" class="col-sm-2 col-form-label">ID User
                            </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_users2" name="id_users2" value="<?= $data_pegawai['id_users2']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_users2') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-formlabel">Nama</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama" name="nama" value=" <?= $data_pegawai['nama']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telpon" class="col-sm-2 col-formlabel">No Telpon</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="no_telpon" name="no_telpon" value=" <?= $data_pegawai['no_telpon']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('no_telpon') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan
                            </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $data_pegawai['pekerjaan']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('pekerjaan') ?>
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
