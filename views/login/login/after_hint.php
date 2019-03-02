<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Login.php");
$db = new Login();
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMKN 2 MALANG</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="<?php echo $siteurl; ?>/images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form" style="border:1px solid green" >
                    <form action="<?php echo $siteurl; ?>/config/Masuk.php" method="post">
                        <a href="lupa_sandi.php" class="pull-right" style="color:green;margin-right:20px">Lupa Kata Sandi?</a><br><br>

                                            <?php
                                              foreach($db->hint($_GET['nomor'],$_GET['passwordHint']) as $item) {
                                            ?>
                        <div class="form-group">
                            <div class="col col-md-1"><label><i class="ti-key"></i></label></div>
                            <div class="col col-md-11"><input type="text" class="form-control" value="<?php echo $item['username']; ?>" name="username" required></div>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col col-md-1"><label><i class="ti-lock"></i></label></div>
                            <!-- <div class="col col-md-11"><input type="password" class="form-control" value="<?php echo $item['password']; ?>" name="password" required></div> -->
                            <div class="col col-md-11"><input type="password" class="form-control" placeholder="masukan password baru" name="password" required></div>
                        </div>
                        <br><br>
                                            <?php } ?>
                        <div class="form-group" >
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success pull-left col col-md-6">Sign in&nbsp;&nbsp;&nbsp;<i class="ti-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
