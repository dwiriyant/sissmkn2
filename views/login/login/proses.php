<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 
session_start();
$nomorlogin = $_GET['nomor'];
$_SESSION['nomorlogin'] = $nomorlogin;
$emaillogin = $_GET['email'];
$_SESSION['emaillogin'] = $emaillogin;
?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Encrypt.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Login.php"); ?>

<?php $db = new Login(); ?>
<?php $en = new Encrypt(); ?>

<?php
	$pass = $en->randomPassword();
	$convert = strval($pass);
	$password = $en->enkripsi($convert);
	$_SESSION['passwordbaru'] = $password;
 	$db->editUserlupa($_GET['nomor'],$password);
    header("location:http://localhost:8080/sissmkn2/views/login/login/mail.php");
?>