<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>


<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/beasiswa.php"); ?>
<?php
$object = new t_beasiswa();
 	
$aksi = $_GET['aksi'];
if($aksi == 'insert') {
    $object->inserttbl_perusahaan($_POST['idbeasiswa'],
     $_POST['nis'], 
     $_POST['nama'], 
     0, 
     $_POST['kelas'], 
     $_POST['OrTu'], 
     $_POST['Alamat'], 
     0, 
     $_POST['Kerja'], 
     $_POST['Gaji'],
     $_POST['Rumah'],
     $_POST['Bangunan'],
     $_POST['Lantai'],
     $_POST['Ruangan'],
     $_POST['Listrik'],
     $_POST['Motor'],
     $_POST['TV'],
     $_POST['HP'],  
 	0,
 	0,
 	$_POST['ThAjar']);
    header("location:http://localhost:8080/sissmkn2/views/beasiswa/siswa/beasiswa.php");
}  elseif ($aksi == 'update') {
	 $object->updatetbl_perusahaan($_POST['idbeasiswa'],
     $_POST['nis'], 
     $_POST['nama'], 
     0, 
     $_POST['kelas'], 
     $_POST['OrTu'], 
     $_POST['Alamat'], 
     0, 
     $_POST['Kerja'], 
     $_POST['Gaji'], 
     $_POST['Rumah'],
     $_POST['Bangunan'],
     $_POST['Lantai'],
     $_POST['Ruangan'],
     $_POST['Listrik'],
     $_POST['Motor'],
     $_POST['TV'],
     $_POST['HP'],  
    0,
    0,
    $_POST['ThAjar']);
    header("location:http://localhost:8080/sissmkn2/views/beasiswa/siswa/beasiswa.php");
}elseif ($aksi == 'hapus') {
	 $object->deletetbl_perusahaan($_GET['idbeasiswa']);
    header("location:http://localhost:8080/sissmkn2/views/beasiswa/siswa/beasiswa.php");
}
?>
