<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Pemasukan</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('pemasukan'); ?>">List Data</a></li>
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
                        <label for="id_penggajian" class="col-sm-2 col-form-label">ID Penggajian</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_penggajian" name="id_penggajian" value=" <?= $data_penggajian['id_penggajian']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_penggajian') ?>
                            </small>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="id_gaji2" class="col-sm-2 col-form-label">ID Gaji</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_gaji2" name="id_gaji2" value=" <?= $data_penggajian['id_gaji2']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_gaji2') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_pemasukan2" class="col-sm-2 col-form-label">ID Pemasukan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_pemasukan2" name="id_pemasukan2" value=" <?= $data_penggajian['id_pemasukan2']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_pemasukan2') ?>
                            </small>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="akumulasi_gaji" class="col-sm-2 col-formlabel">Akumulasi Gaji</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="akumulasi_gaji" name="akumulasi_gaji" value=" <?= $data_penggajian['akumulasi_gaji']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('akumulasi_gaji') ?>
                            </small>
                        </div>
                    </div>
                    <!-- <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis
                                Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" <?php if ($data_penggajian['jenis_kelamin'] == "Laki-laki") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="Perempuan" <?php if ($data_penggajian['jenis_kelamin'] == "Perempuan") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin2">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('jenis_kelamin') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-formlabel">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $data_penggajian['alamat']; ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-formlabel">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="agama" name="agama">
                                <option value="Islam" selected disabled>Pilih</option>
                                <option value="Islam" <?php if ($data_penggajian['agama'] == "Islam") : echo "selected"; endif; ?>>Islam</option>
                                <option value="Protestan" <?php if ($data_penggajian['agama'] == "Protestan") : echo "selected"; endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if ($data_penggajian['agama'] == "Katolik") : echo "selected"; endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if ($data_penggajian['agama'] == "Hindu") : echo "selected"; endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if ($data_penggajian['agama'] == "Buddha") : echo "selected"; endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if ($data_penggajian['agama'] == "Khonghucu") : echo "selected"; endif; ?>>Khonghucu</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('agama') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No
                            Hp</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $data_penggajian['no_hp']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('no_hp') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-formlabel">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $data_penggajian['email']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('email') ?>
                            </small>
                        </div>
                    </div> -->
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