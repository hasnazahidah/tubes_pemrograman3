<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Murid</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('murid'); ?>">List Data</a></li>
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
                        <label for="id_murid" class="col-sm-2 col-form-label">ID Murid</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_murid" name="id_murid" value="<?= set_value('id_murid'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_murid') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_murid" class="col-sm-2 col-form-label">Nama Murid</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_murid" name="nama_murid" value=" <?= set_value('nama_murid'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_murid') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value=" <?= set_value('tgl_lahir'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('tgl_lahir') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_ortu" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" value=" <?= set_value('nama_ortu'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_ortu') ?>
                            </small>
                        </div>
                    </div>

                    <!-- <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki"
                                        <?php if (set_value('jenis_kelamin') == "Laki-laki") : echo "checked"; endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="Perempuan"
                                        <?php if (set_value('jenis_kelamin') == "Perempuan") : echo "checked"; endif; ?>>
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
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= set_value('alamat'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="agama" name="agama">
                                <option value="Islam" selected disabled>Pilih</option>
                                <option value="Islam" <?php if (set_value('agama') == "Islam") : echo "selected"; endif; ?>>Islam</option>
                                <option value="Protestan" <?php if (set_value('agama') == "Protestan") : echo "selected"; endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if (set_value('agama') == "Katolik") : echo "selected"; endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if (set_value('agama') == "Hindu") : echo "selected"; endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if (set_value('agama') == "Buddha") : echo "selected"; endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if (set_value('agama') == "Khonghucu") : echo "selected"; endif; ?>>Khonghucu</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('agama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= set_value('no_hp'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('no_hp') ?>
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