<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php $siteurl = 'http://localhost:8080/sissmkn22'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/PendaftaranOnline.php"); ?>
<?php $db = new pendaftaranonline(); ?>
<?php
$aksi = $_GET['aksi'];

 if($aksi == "edit"){
	$db->editseleksi($_POST['user_id'],
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
 $_POST['n_test'],
 $_POST['status']);
 	header("location:http://localhost:8080/sissmkn2/views/kesiswaan/seleksi/index.php");	 
 }elseif ($aksi == "tambah") {
    $db->tambahpdf($_POST['idPendaftaran'],$_POST['nisn'],$_POST['nama'],$_POST['jk'],$_POST['email'],$_POST['tglLahir'],$_POST['tempatLahir'],$_POST['alamat'],$_POST['kecamatan'],$_POST['kabupaten'],$_POST['telepon'],$_POST['agama'],$_POST['sekolahAsal'],$_POST['noPesertaSLTP'],$_POST['jurusan'],$_POST['nilaiUN'],$_POST['nilaiRapot'], 0, 'Tahap Seleksi');
 	header("location:http://localhost:8080/sissmkn2/views/kesiswaan/pendaftaran/index.php");
 }elseif ($aksi == "hapus") {
    $db->deletePO($_GET['po_id']);
 	header("location:http://localhost/ta_cendana_javiera/views/produksi/production_order/index.php");
 }
?>