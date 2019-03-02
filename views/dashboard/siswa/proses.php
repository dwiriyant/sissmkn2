<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 

$con = mysqli_connect("localhost", "root", "", "sekolahfix");



?>

<?php $siteurl = 'http://localhost:8080/sissmkn2'; ?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php"); ?>
<?php $db = new Kesiswaan(); ?>
<?php
$aksi = $_GET['aksi'];
 if($aksi == "edit"){
	$db->editprofil($_POST['nis'],$_POST['nama'],$_POST['password'],$_POST['alamat'], addslashes(file_get_contents($_FILES['foto']['tmp_name'])));
	$sql = "select foto from filelampiran where nis =".$_POST['nis'];
$login = mysqli_query($con,$sql) or die(mysqli_error($con));
$data = mysqli_fetch_array($login);

	session_start();
	$_SESSION['namaPanggilan'] = $_POST['nama'];
	$_SESSION['pass'] = $_POST['password'];
	$_SESSION['alamat'] = $_POST['alamat'];
	$_SESSION['foto'] = $data['foto'];
	// print_r($_SESSION['foto']);
	// die();
 	header("location:http://localhost:8080/sissmkn2/views/dashboard/siswa/index.php");
	 
 }elseif ($aksi == "tambah") {
    $db->verifikasi($_POST['nis'],$_POST['baru'],$_POST['hint']);
 	header("location:http://localhost:8080/sissmkn2/views/dashboard/siswa/index.php");
 }elseif ($aksi == "tambahalumni") {
    $db->tambahalumni($_POST['nis'],
    	$_POST['kelanjutan'],
    	$_POST['namaInstansi'],
    	$_POST['penghasilan'],
    	$_POST['tglMulai']
        );
    session_start();
    $_SESSION['kelanjutan'] = $_POST['kelanjutan'];
	$_SESSION['namaInstansi'] = $_POST['namaInstansi'];
	$_SESSION['penghasilan'] = $_POST['penghasilan'];
	$_SESSION['tglMulai'] = $_POST['tglMulai'];
 	header("location:http://localhost:8080/sissmkn2/views/dashboard/siswa/index.php");
 }

?>