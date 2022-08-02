<div class="container pt-5">
  <h3><?= $title ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb ">
      <li class="breadcrumb-item"><a>Transaksi</a></li>
      <li class="breadcrumb-item "><a href="<?= base_url('transaksi'); ?>">List Data</a></li>
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
            <label for="id_transaksi" class="col-sm-2 col-form-label">ID Tansaksi</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" placeholder="inputkan dalam bentuk 6##" value="<?= set_value('id_transaksi'); ?>">
              <small class="text-danger">
                <?php echo form_error('id_transaksi') ?>
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
            <label for="id_pembeli" class="col-sm-2 col-form-label">Nama Pembeli</label>
            <div class="col-sm-5">
              <select class="form-control" id="id_pembeli" name="id_pembeli">
                <option value="">---Pilih nama pembeli---</option>
                <?php foreach ($data_pembeli as $row): ?>
                  <option value="<?= $row['id_pembeli']?>"><?= $row['nama_pembeli']?></option>
                <?php endforeach; ?>
              </select>
              <small class="text-danger">
                <?php echo form_error('id_pembeli') ?>
              </small>
            </div>
          </div>

          <div class="form-group row">
            <label for="id_pegawai" class="col-sm-2 col-form-label">Nama Kasir</label>
            <div class="col-sm-5">
              <select class="form-control" id="id_pegawai" name="id_pegawai">
                <option value="">---Pilih nama kasir---</option>
                <?php foreach ($data_pegawai as $row): ?>
                  <option value="<?= $row['id_pegawai']?>"><?= $row['nama']?></option>
                <?php endforeach; ?>
              </select>
              <small class="text-danger">
                <?php echo form_error('id_pegawai') ?>
              </small>
            </div>
          </div>

          <div class="form-group row">
            <label for="id_buku" class="col-sm-2 col-form-label">Judul Buku</label>
            <div class="col-sm-5">
              <select class="form-control" id="id_buku" name="id_buku">
                <option value="">---Pilih judul buku---</option>
                <?php foreach ($data_buku as $row): ?>
                  <option value="<?= $row['id_buku']?>"><?= $row['judul']?></option>
                <?php endforeach; ?>
              </select>
              <small class="text-danger">
                <?php echo form_error('id_buku') ?>
              </small>
            </div>
          </div>


          <div class="form-group row">
            <label for="jumlah_buku" class="col-sm-2 col-form-label">Jumlah Buku</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" value="<?= set_value('jumlah_buku'); ?>">
              <small class="text-danger">
                <?php echo form_error('jumlah_buku') ?>
              </small>
            </div>
          </div>

          <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="total" name="total" value="<?= set_value('total'); ?>">
              <small class="text-danger">
                <?php echo form_error('total') ?>
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
