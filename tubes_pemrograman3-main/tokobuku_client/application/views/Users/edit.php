<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>User</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('user'); ?>">List Data</a></li>
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
                        <label for="id_users" class="col-sm-2 col-form-label">ID Kategori</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_users" name="id_users" value="<?= $data_users['id_users']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('id_users') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="username" name="username" value="<?= $data_users['username']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('username') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-formlabel">Password</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="password" name="password" value="<?= $data_users['password']; ?>" >
                            <small class="text-danger">
                                <?php echo form_error('password') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-formlabel">Status</label>
                        <div class="col-sm-5">
                             <input type="text" class="form-control" id="status" name="status" value="<?= $data_users['status']; ?>" >
                            <small class="text-danger">
                                <?php echo form_error('status') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="level" class="col-sm-2 col-formlabel">Level</label>
                        <div class="col-sm-5">
                             <input type="text" class="form-control" id="level" name="level" value="<?= $data_users['level']; ?>" >
                            <small class="text-danger">
                                <?php echo form_error('level') ?>
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
