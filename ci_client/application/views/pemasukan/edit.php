<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
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
                        <label for="id_pemasukan" class="col-sm-2 col-form-label">ID Pemasukan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_pemasukan" name="id_pemasukan" value=" <?= $data_pemasukan['id_pemasukan']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_pemasukan') ?>
                            </small>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="id_murid2" class="col-sm-2 col-form-label">ID Murid</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_murid2" name="id_murid2" value=" <?= $data_pemasukan['id_murid2']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_murid2') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tgl_transaksi" class="col-sm-2 col-formlabel">Tanggal Transaksi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl_transaksi" name="tgl_transaksi" value=" <?= $data_pemasukan['tgl_transaksi']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('tgl_transaksi') ?>
                            </small>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="jmlh_setoran" class="col-sm-2 col-formlabel">Jumlah Setoran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jmlh_setoran" name="jmlh_setoran" value=" <?= $data_pemasukan['jmlh_setoran']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('jmlh_setoran') ?>
                            </small>
                        </div>
                    </div>
                    <!-- <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis
                                Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" <?php if ($data_pemasukan['jenis_kelamin'] == "Laki-laki") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="Perempuan" <?php if ($data_pemasukan['jenis_kelamin'] == "Perempuan") : echo "checked"; endif; ?>>
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
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $data_pemasukan['alamat']; ?></textarea>
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
                                <option value="Islam" <?php if ($data_pemasukan['agama'] == "Islam") : echo "selected"; endif; ?>>Islam</option>
                                <option value="Protestan" <?php if ($data_pemasukan['agama'] == "Protestan") : echo "selected"; endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if ($data_pemasukan['agama'] == "Katolik") : echo "selected"; endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if ($data_pemasukan['agama'] == "Hindu") : echo "selected"; endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if ($data_pemasukan['agama'] == "Buddha") : echo "selected"; endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if ($data_pemasukan['agama'] == "Khonghucu") : echo "selected"; endif; ?>>Khonghucu</option>
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
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $data_pemasukan['no_hp']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('no_hp') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-formlabel">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $data_pemasukan['email']; ?>">
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