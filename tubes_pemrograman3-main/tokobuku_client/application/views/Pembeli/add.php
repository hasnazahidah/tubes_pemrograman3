<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Pembeli</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('pembeli'); ?>">List Data</a></li>
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
                        <label for="id_pembeli" class="col-sm-2 col-form-label">ID Pembeli</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_pembeli" name="id_pembeli" placeholder="inputkan dalam bentuk 5##" value="<?= set_value('id_pembeli'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_pembeli') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_pembeli" class="col-sm-2 col-form-label">Nama Pembeli</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value=" <?= set_value('nama_pembeli'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_pembeli') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="no_telpon" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="no_telpon" name="no_telpon" value=" <?= set_value('no_telpon'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('no_telpon') ?>
                            </small>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('alamat') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('email') ?>
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
