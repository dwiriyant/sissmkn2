<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>


<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_nilaiprakerin.php"); ?>
<?php
$object = new tbl_nilaiprakerin();
 	
$aksi = $_GET['aksi'];
if($aksi == 'insert') {
    $object->inserttbl_nilaiprakerin($_POST['id_nilaiprakerin'], $_POST['id_siswa_prakerin'], $_POST['at1'], $_POST['at2'], $_POST['at3'], $_POST['at4'], $_POST['ant1'], $_POST['ant2'], $_POST['ant3'], $_POST['ant4'], $_POST['ant5'], $_POST['ant6']);
    header("location:http://localhost:8080/sissmkn2/views/admin_staff/nilai_prakerin.php");
}  elseif ($aksi == 'update') {
	 $object->updatetbl_nilaiprakerin($_POST['id_nilaiprakerin'], $_POST['id_siswa_prakerin'], $_POST['at1'], $_POST['at2'], $_POST['at3'], $_POST['at4'], $_POST['ant1'], $_POST['ant2'], $_POST['ant3'], $_POST['ant4'], $_POST['ant5'], $_POST['ant6']);
    header("location:http://localhost:8080/sissmkn2/views/admin_staff/nilai_prakerin.php");
}elseif ($aksi == 'hapus') {
	 $object->deletetbl_nilaiprakerin($_GET['id_nilaiprakerin']);
    header("location:http://localhost:8080/sissmkn2/views/admin_staff/nilai_prakerin.php");
}
?>
