<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://upload.wikimedia.org/wikipedia/commons/4/49/Gambar_Buku.png" rel="shortcut icon">
    <link href="style.css" rel="stylesheet">
	<title>Registrasi</title>
</head>
<body class="bg-gradient-primary">	
    <div class="row justify-content-center">
    <div class="col-sm-10 col-md-7">
    <div class="card shadow my-5">
        <div class="card-header bg-dark">
         <div class="float-left">
            <h4 class="h4 m-0 text-light"><b> Registrasi</b></h4>
        </div>      
        </div>
        <div class="card-body">
          <div class="float-left">
            <h5 align="center">Masukan Data Anda!</h5>
          </div>
          <!-- <p align="center">You can write down the Key for easy remembering.</p> -->
          <br>
          <hr>

		  <div class="container justify-content-center">
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
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="id_users" name="id_users" placeholder="inputkan dalam bentuk 3##" value="<?= set_value('id_users'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('id_users') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('username') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" name="password" value="<?= set_value('password'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('password') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="status" name="status" value="<?= set_value('status'); ?>">
                                <?php echo form_error('status') ?>
                            </small>
                        </div>
                    </div>                   

                     <div class="form-group row">
                        <label for="level" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="level" name="level" value="<?= set_value('level'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('level') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-15 offset-md-2">
                            <button type="submit" class="btn btn-primary">Registrasi</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	</div>

			<br>	
	    
        </div>
       </div>
      </div>
   </div>
      
	
</body>
</html>