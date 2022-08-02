<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>penjualan</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('penjualan'); ?>">List Data</a></li>
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
                        <label for="id_penjualan" class="col-sm-2 col-form-label">ID Penjualan</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_penjualan" name="id_penjualan" value="<?= $data_penjualan['id_penjualan']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_penjualan') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_transaksi" class="col-sm-2 col-formlabel">ID Transaksi</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?= $data_penjualan['id_transaksi']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_transaksi') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jumlah_terjual" class="col-sm-2 col-formlabel">Jumlah Terjual</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="jumlah_terjual" name="jumlah_terjual" value="<?= $data_penjualan['jumlah_terjual']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('jumlah_terjual') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pemasukan" class="col-sm-2 col-form-label">Pemasukan
                            </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="pemasukan" name="pemasukan" value="<?= $data_penjualan['pemasukan']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('pemasukan') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-formlabel">Tanggal</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data_penjualan['tanggal']; ?>">
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
