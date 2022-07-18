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
  <link href="https://www.freeiconspng.com/uploads/key-icon-4.png" rel="shortcut icon">
  <link href="style.css" rel="stylesheet">
  <title>Generated Keys</title>
</head>
<style>
body {
  background: #eee
}

#regForm {
  background-color: #ffffff;
  margin: 0px auto;
  font-family: Raleway;
  padding: 40px;
  border-radius: 10px
}

#register{

color: #6A1B9A;
}

h1 {
  text-align: center
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
  border-radius: 10px;
  -webkit-appearance: none;
}



.tab input:focus{

border:1px solid #6a1b9a !important;
outline: none;
}

input.invalid {

  border:1px solid #e03a0666;
}

.tab {
  display: none
}

button {
  background-color: #6A1B9A;
  color: #ffffff;
  border: none;
  border-radius: 5%;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer
}

button:hover {
  opacity: 0.8
}

button:focus{

outline: none !important;
}

#prevBtn {
  background-color: #bbbbbb
}


.all-steps{
    text-align: center;
  margin-top: 30px;
  margin-bottom: 30px;
  width: 100%;
  display: inline-flex;
  justify-content: center;
}

.step {
     height: 40px;
  width: 40px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 15px;
  color: #6a1b9a;
  opacity: 0.5;
}

.step.active {
  opacity: 1
}


.step.finish {
 color: #fff;
 background: #6a1b9a;
 opacity: 1;

}



.all-steps {
  text-align: center;
  margin-top: 30px;
  margin-bottom: 30px
}

.thanks-message {
  display: none
}
}
</style>
<body style="background: linear-gradient(to left, #e5989b, #626875, #b5838d);">
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
  <img src="https://www.freeiconspng.com/uploads/key-icon-4.png" width="30">
  <a class="navbar-brand text-light" href="#"> Generated Key(s)</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
</ul>

</div>
</div>
</nav>
<br> -->



<div class="container mt-5">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-8">
      <form id="regForm">
        <center><a href="https://www.freeiconspng.com/img/138" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/-icons-smart-objects-3d-book-mockup-psd-address-book-icon-psd-preview-5.png" width="150" alt=" icons smart objects 3d book mockup psd address book icon psd preview" /></a></center>
          <h1 id="register">Perpustakaan</h1>
        <hr>
        <div class="d-grid gap-2 col-3 mx-auto">
          <a href="<?php echo base_url('/Home/Create1') ?>"><button type="button">Get New Key(s)</button></a>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

<br>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
