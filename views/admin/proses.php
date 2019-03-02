<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1); 
session_start();


require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Mapel.php"); ?>
<?php
$object = new t_belajar();

$aksi = $_GET['aksi'];




if($aksi == 'insert') {
    $object->insertMapel($_POST['idbelajar'], $_POST['thajar'], $_POST['sem'], $_POST['pelajaran'], $_POST['nip'], $_POST['tglawal'], $_POST['tglakhir'], $_POST['status'], $_POST['ket']);
    header("location:http://localhost:8080/sissmkn2/views/admin/mapel.php");
} elseif ($aksi == 'update') {
	 $object->updateMapel($_POST['idbelajar'], $_POST['thajar'], $_POST['sem'], $_POST['pelajaran'], $_POST['nip'], $_POST['tglawal'], $_POST['tglakhir'], $_POST['status'], $_POST['ket']);
    header("location:http://localhost:8080/sissmkn2/views/admin/mapel.php");
}
elseif ($aksi == 'hapus') {
	 $object->DeleteMapel($_GET['idbelajar']);
    header("location:http://localhost:8080/sissmkn2/views/admin/mapel.php");
}
?>
