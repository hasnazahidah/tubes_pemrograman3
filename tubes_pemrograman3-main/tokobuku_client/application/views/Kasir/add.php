<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>kasir</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('kasir'); ?>">List Data</a></li>
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
                        <label for="id_kasir" class="col-sm-2 col-form-label">id_kasir</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_kasir" name="id_kasir" value="<?= set_value('id_kasir'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_kasir') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_users" class="col-sm-2 col-form-label">id_users</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="id_users" name="id_users" value="<?= set_value('id_users'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_users') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_kasir" class="col-sm-2 col-form-label">nama_kasir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_kasir" name="nama_kasir" value=" <?= set_value('nama_kasir'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_kasir') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="no_telpon" class="col-sm-2 col-form-label">no_telpon</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="no_telpon" name="no_telpon" rows="3"><?= set_value('no_telpon'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('no_telpon') ?>
                            </small>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('alamat') ?>
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
