<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Users</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('users'); ?>">List Data</a></li>
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
                        <label for="id_users" class="col-sm-2 col-form-label">ID Users</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="id_users" name="id_users" placeholder="inputkan dalam bentuk 3##" value="<?= set_value('id_users'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_users') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('username') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="password" name="password" value="<?= set_value('password'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('password') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="status" name="status" value="<?= set_value('status'); ?>">
                                <?php echo form_error('status') ?>
                            </small>
                        </div>
                    </div>

                    

                     <div class="form-group row">
                        <label for="level" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="level" name="level" value="<?= set_value('level'); ?>">
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
