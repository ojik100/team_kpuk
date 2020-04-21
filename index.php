<?php

include 'functions.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />


  <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


  <title>KPUK FT-Universitas Hamzanwadi</title>
  <link href="assets/css/journal-bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/general.css" rel="stylesheet" />
  <script src="assets/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<style class="style.css">
  body {
    background-color: ;
  }
</style>

<body>
<div class="container-fluid">
<?php if ($_SESSION['level'] == 'admin') : ?>
    <header >
      <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6"></div>
        <div class="col-md-3"></div>
      </div>
    </header>
    <nav class="navbar navbar-default nav navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Sistem KPUK FT-UNHAZ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
         <li align="left"><a href="#">BADAN EKSEKUTIF MAHASISWA</a></li>
            
            
              <li><a href="?m=pencalon"><span class="glyphicon glyphicon-user"></span> Pencalon</a></li>
              <li><a href="?m=pemilih"><span class="glyphicon glyphicon-th-large"></span> Pemilih</a></li>
              <li><a href="?m=hasil_voting"><i class="fa fa-pie-chart" aria-hidden="true"></i> Hasil Voting</a></li>
              <li><a href="aksi.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
               <li><a href="?m=password"><span class="glyphicon glyphicon-lock"></span> Password</a></li>

            <?php endif ?>

          </ul>
          
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
    <div class="">
      <?php
      if (file_exists($mod . '.php')) {
        if ($mod == 'tanda_terima' && $_SESSION['level'] != 'pemilih') {
          redirect_js('?m=login_pemilih');
        } else {
          include $mod . '.php';
        }
      } else
        include 'login_pemilih.php';
      ?>
    </div><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
</div>
  <footer class="footer">
    <div class="container">
      <div class="col-md-offset-5">
        <p>Copyright &copy; <?= date('Y') ?> 
        <i class="fa fa-facebook" aria-hidden="true"></i> <a style="color:silver;" href="#">Berugak IT Lombok

            <?php if ($_SESSION['level'] != 'admin' || !$_SESSION['login']) : ?>
              <a href="?m=login"><i  aria-hidden="true"></i>.</a>
            <?php endif ?></a>
      </p>
      </div>
      
    </div>
  </footer>
</body>

</html>