<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>

<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_jurnalprakerin.php"); ?>
<?php
$object = new tbl_jurnalprakerin();
 	
$aksi = $_GET['aksi'];
 if ($aksi == 'insert') {
 	 $jurnal_name = $_FILES['jurnal']['name'];
 	 $path = pathinfo($jurnal_name);
	 $jurnal_tmp = $_FILES['jurnal']['tmp_name'];
	 $newName = time().'.'.$path['extension'];

	 $idj = $_POST['id_jurnal'];

	 move_uploaded_file($jurnal_tmp,'jurnal/'.$newName);
	 $object->insertjurnal($_POST['id_jurnalprakerin'], $_POST['id_jurnal'], $newName, $_POST['tgl']);
    
    header("location:http://localhost:8080/sissmkn2/views/admin_staff/detail_jurnalprakerin.php?id_jurnal=".$idj);

}elseif ($aksi == 'hapus') {
	 $object->deletetbl_jurnalprakerin($_GET['id_jurnalprakerin']);
    header("location:http://localhost:8080/sissmkn2/views/admin_staff/jurnal_prakerin.php");
}
?>
