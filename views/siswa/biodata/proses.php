<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/SISSMKN2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/datasiswa.php"); ?>
<?php $db = new datasiswa(); ?>
<?php
$aksi = $_GET['aksi'];

 if($aksi == "edit"){
    $db->editpendaftaran($_POST['user_id'],
 $_POST['no_induk'],
 $_POST['sis_email'],
 $_POST['kelamin'],
 $_POST['nama'],
 $_POST['tmp_lahir'],
 $_POST['tgl_lahir'],
 $_POST['alamat'],
 $_POST['alamat_camat'],
 $_POST['alamat_kodya'],
 $_POST['ayh_tlp'],
 $_POST['agama'],
 $_POST['sis_no_psrta_unas'],
 $_POST['sis_tmt_dri'],
 $_POST['sis_ksenian'],
 $_POST['n_unas'],
 $_POST['n_raport'],
 $_POST['sis_dtrm_prog_khlian'],
 $_POST['th_ajar'],
 $_POST['no_daftar'],
 0,
 'Tahap Seleksi');
    header("location:http://localhost:8080/sissmkn2/views/kesiswaan/pendataan/index.php");   
 }elseif ($aksi == "tambah") {
    $db->tambahsiswa($_POST['id_sis_th'],
 $_POST['no_urut'],
 $_POST['no_induk'],
 $_POST['nama'],
 $_POST['kelas'],
 $_POST['prog'],
 $_POST['th_ajar'],
 $_POST['kelamin'],
 $_POST['agama'],
 $_POST['Inklusi']);
    header("location:http://localhost:8080/sissmkn2/views/siswa/biodata/index.php");
 }elseif ($aksi == "hapus") {
    $db->hapussiswa($_GET['id_sis_th']);
    header("location:http://localhost:8080/sissmkn2/views/siswa/biodata/index.php");
 }
?>