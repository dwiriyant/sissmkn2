 <!doctype html>
<html class="no-js" lang="">
<?php 
error_reporting(E_ALL && ~E_NOTICE);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
//session_start();
//if($_SESSION['status'] != "login"){
  //  header("location:http://localhost:8080/SISSMKN2/views/login/login/index.php");


?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMK Negeri 2 Malang</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="<?php echo $siteurl; ?>/images/favicon.ico">

    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/scss/style.css">
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/assets/css/lib/chosen/chosen.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="<?php echo $siteurl; ?>/assets/js/vendor/jquery-2.1.4.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <!--<script>
    function tampilkan(){
      var id_user=document.getElementById("form1").kategori.value;
      if (id_user=="siswa")
        {
            document.getElementById("labelsiswa").style.display="block";
            document.getElementById("inputsiswa").style.display="block";
            document.getElementById("labelguru").style.display="none";
            document.getElementById("inputguru").style.display="none";

        }
      else if (id_user=="guru")
        {
            document.getElementById("labelguru").style.display="block";
            document.getElementById("inputguru").style.display="block";
            document.getElementById("labelsiswa").style.display="none";
            document.getElementById("inputsiswa").style.display="none";
        }


      if (id_user=="az")
        {
            document.getElementById("labelaz").style.display="block";
            document.getElementById("labelza").style.display="none";
            document.getElementById("labelperiode").style.display="none";

        }
      else if (id_user=="za")
        {
            document.getElementById("labelaz").style.display="none";
            document.getElementById("labelza").style.display="block";
            document.getElementById("labelperiode").style.display="none";
        }
      else if (id_user=="periode")
        {
            document.getElementById("labelaz").style.display="none";
            document.getElementById("labelza").style.display="none";
            document.getElementById("labelperiode").style.display="block";
        }
       else if (id_user=="eksporaz")
        {
            document.getElementById("eksporlabelaz").style.display="block";
            document.getElementById("eksporlabelza").style.display="none";
            document.getElementById("eksporlabelperiode").style.display="none";

        }
      else if (id_user=="eksporza")
        {
            document.getElementById("eksporlabelaz").style.display="none";
            document.getElementById("eksporlabelza").style.display="block";
            document.getElementById("eksporlabelperiode").style.display="none";
        }
      else if (id_user=="eksporperiode")
        {
            document.getElementById("eksporlabelaz").style.display="none";
            document.getElementById("eksporlabelza").style.display="none";
            document.getElementById("eksporlabelperiode").style.display="block";
        }       
    }
    </script>

    <script>
    function tampilkanekspor(){
      var id_user=document.getElementById("form1").kategori.value;
      if (id_user=="eksporaz")
        {
            document.getElementById("eksporlabelaz").style.display="block";
            document.getElementById("eksporlabelza").style.display="none";
            document.getElementById("eksporlabelperiode").style.display="none";

        }
      else if (id_user=="eksporza")
        {
            document.getElementById("eksporlabelaz").style.display="none";
            document.getElementById("eksporlabelza").style.display="block";
            document.getElementById("eksporlabelperiode").style.display="none";
        }
      else if (id_user=="eksporperiode")
        {
            document.getElementById("eksporlabelaz").style.display="none";
            document.getElementById("eksporlabelza").style.display="none";
            document.getElementById("eksporlabelperiode").style.display="block";
        }       
    }
    </script>-->



    


</head>
<body style="background-image: url("../images/logo_smk2.png")">
        <!-- Left Panel -->


                    <div class="col-sm-6">
                        <div class="float-right">
                                
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->