<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Pegawai</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('pegawai'); ?>">List Data</a></li>
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
                        <label for="id_pegawai" class="col-sm-2 col-form-label">ID Pegawai</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" placeholder="inputkan dalam bentuk 4##" value="<?= set_value('id_pegawai'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_pegawai') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_users2" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="id_users2" name="id_users2">
                                <option value="">---Pilih Username---</option>
							    <?php foreach ($data_users as $row): ?>
								    <option value="<?= $row['id_users']?>"><?= $row['username']?></option>
								<?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('id_users2') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="no_telpon" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="no_telpon" name="no telpon" value="<?= set_value('no_telpon'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('no_telpon') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= set_value('pekerjaan'); ?>">
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
