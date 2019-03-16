<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_nilaiprakerin.php");
$tbl_perusahaan= new tbl_nilaiprakerin();
?>

<!DOCTYPE html>
<html>
<head>
	<title>&nbsp;</title>
	<style type="text/css">
		
		body{
			font-family: arial;
		}

		.kop1{
			margin: -10px;
		}
		.kop2{
			margin-top: -20px;
		}
		.kop3{
			font-size: 11pt;
			margin-top: -15px;
		}
		body img{
			width: 98px;
			height: 98px;
			float: left;
		}

		table{
			border-collapse: collapse;
			width: 100%;
		}

		table th{
			border: 2px solid black;
		  	padding: 5px;
		}

		table td{
			border: 1px solid black;
			padding: 5px;
		}

		.ttd{
			float: right;
			margin-right: 10px;
		}

	</style>
</head>
<body>
	<img src="smkn2.png">
	<center>
		
		<div class="kop1">
			<h4>PEMERINTAH KOTA MALANG<br/>
			DINAS PENDIDIKAN</h4>
		</div>
		<div class="kop2">
			<h2>SMKN 2 MALANG</h2>
		</div>
		<div class="kop3">
			<p>Jalan Veteran No. 17 Malang (0341). Faks.(0341)0341 Malang 65154<br/>
		Website : http://www.smkn2malang.sch.id | Email : smkn2malang@yahoo.com</p>
		</div>
		<hr style="margin-top: -8px;">
		<hr style="display: block;
			height: 5px;
			background-color: black;
			margin-top: -5px;">

		<h2>LEMBAR PENILAIAN PRAKERIN</h2>
	</center>
	<br/>

	<?php
                                    foreach ($tbl_perusahaan->getDetailtbl_nilaiprakerin($_GET['id_nilaiprakerin']) as $item) {
                                  ?>

	<p>NAMA SISWA : <?= $item['namaSiswa']; ?><br/>
	NAMA INSTANSI / PERUSAHAAN : <?= $item['nama_prakerin']; ?><br/>
	TANGGAL PRAKERIN : <?= $item['tgl_start']; ?></p>

	<p><b>JENIS PEKERJAAN</b><br/>
		1. PERAKITAN PC <br/>
		2. INSTALASI SOFTWARE DAN OS <br/>
		3. PERBAIKAN PC DAN PERIPHERAL <br/>
		4. INSTALASI JARINGAN <br/></p>

	<?php 
		$rata = ($item['at1'] + $item['at2'] + $item['at3'] + $item['at4'] + $item['ant1'] + $item['ant2'] + $item['ant3'] + $item['ant4'] + $item['ant5'] + $item['ant6']) / 10;

		$rh = "";
		if ($rata>=90.00 && $rata<=100.00) {
	 		$rh = "A";
	 	} elseif ($rata>=80.00 && $rata<=89.00) {
	 		$rh = "B";
	 	} elseif ($rata>=70.00 && $rata<=79.99) {
	 		$rh = "C";
	 	}
	 	else{
	 		$rh = "D";
	 	}
	 ?>

	 <?php 
	 	$at1 = "";
	 	if ($item['at1']>=90 && $item['at1']<=100) {
	 		$at1 = "A";
	 	} elseif ($item['at1']>=80 && $item['at1']<=89) {
	 		$at1 = "B";
	 	} elseif ($item['at1']>=70 && $item['at1']<=79) {
	 		$at1 = "C";
	 	}
	 	else{
	 		$at1 = "D";
	 	}
	  ?>

	  <?php 
	 	$at2 = "";
	 	if ($item['at2']>=90 && $item['at2']<=100) {
	 		$at2 = "A";
	 	} elseif ($item['at2']>=80 && $item['at2']<=89) {
	 		$at2 = "B";
	 	} elseif ($item['at2']>=70 && $item['at2']<=79) {
	 		$at2 = "C";
	 	}
	 	else{
	 		$at2 = "D";
	 	}
	  ?>

	  <?php 
	 	$at3 = "";
	 	if ($item['at3']>=90 && $item['at3']<=100) {
	 		$at3 = "A";
	 	} elseif ($item['at3']>=80 && $item['at3']<=89) {
	 		$at3 = "B";
	 	} elseif ($item['at3']>=70 && $item['at3']<=79) {
	 		$at3 = "C";
	 	}
	 	else{
	 		$at3 = "D";
	 	}
	  ?>

	  <?php 
	 	$at4 = "";
	 	if ($item['at4']>=90 && $item['at4']<=100) {
	 		$at4 = "A";
	 	} elseif ($item['at4']>=80 && $item['at4']<=89) {
	 		$at4 = "B";
	 	} elseif ($item['at4']>=70 && $item['at4']<=79) {
	 		$at4 = "C";
	 	}
	 	else{
	 		$at4 = "D";
	 	}
	  ?>

	  <?php 
	 	$ant1 = "";
	 	if ($item['ant1']>=90 && $item['ant1']<=100) {
	 		$ant1 = "A";
	 	} elseif ($item['ant1']>=80 && $item['ant1']<=89) {
	 		$ant1 = "B";
	 	} elseif ($item['ant1']>=70 && $item['ant1']<=79) {
	 		$ant1 = "C";
	 	}
	 	else{
	 		$ant1 = "D";
	 	}
	  ?>

	  <?php 
	 	$ant2 = "";
	 	if ($item['ant2']>=90 && $item['ant2']<=100) {
	 		$ant2 = "A";
	 	} elseif ($item['ant2']>=80 && $item['ant2']<=89) {
	 		$ant2 = "B";
	 	} elseif ($item['ant2']>=70 && $item['ant2']<=79) {
	 		$ant2 = "C";
	 	}
	 	else{
	 		$ant2 = "D";
	 	}
	  ?>

	  <?php 
	 	$ant3 = "";
	 	if ($item['ant3']>=90 && $item['ant3']<=100) {
	 		$ant3 = "A";
	 	} elseif ($item['ant3']>=80 && $item['ant3']<=89) {
	 		$ant3 = "B";
	 	} elseif ($item['ant3']>=70 && $item['ant3']<=79) {
	 		$ant3 = "C";
	 	}
	 	else{
	 		$ant3 = "D";
	 	}
	  ?>

	  <?php 
	 	$ant4 = "";
	 	if ($item['ant4']>=90 && $item['ant4']<=100) {
	 		$ant4 = "A";
	 	} elseif ($item['ant4']>=80 && $item['ant4']<=89) {
	 		$ant4 = "B";
	 	} elseif ($item['ant4']>=70 && $item['ant4']<=79) {
	 		$ant4 = "C";
	 	}
	 	else{
	 		$ant4 = "D";
	 	}
	  ?>

	  <?php 
	 	$ant5 = "";
	 	if ($item['ant5']>=90 && $item['ant5']<=100) {
	 		$ant5 = "A";
	 	} elseif ($item['ant5']>=80 && $item['ant5']<=89) {
	 		$ant5 = "B";
	 	} elseif ($item['ant5']>=70 && $item['ant5']<=79) {
	 		$ant5 = "C";
	 	}
	 	else{
	 		$ant5 = "D";
	 	}
	  ?>

	  <?php 
	 	$ant6 = "";
	 	if ($item['ant6']>=90 && $item['ant6']<=100) {
	 		$ant6 = "A";
	 	} elseif ($item['ant6']>=80 && $item['ant6']<=89) {
	 		$ant6 = "B";
	 	} elseif ($item['ant6']>=70 && $item['ant6']<=79) {
	 		$ant6 = "C";
	 	}
	 	else{
	 		$ant6 = "D";
	 	}
	  ?>

	<table>
		<tr>
			<th rowspan="2">NO</th>
			<th rowspan="2">INDIKATOR</th>
			<th colspan="2">NILAI</th>
			<th rowspan="2">KETERANGAN</th>
		</tr>
		<tr>
			<th>ANGKA</th>
			<th>HURUF</th>
		</tr>
		<tr>
			<td colspan="2"><b>A. ASPEK TEKNIS</b></td>
			<td></td>
			<td></td>
			<td>Tingkat Penilaian :</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Persiapan dan penggunaan alat dan bahan</td>
			<td><?= $item['at1']; ?></td>
			<td><?= $at1; ?></td>
			<td>A(90 - 100) : Sangat Baik</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Metode dan langkah kerja</td>
			<td><?= $item['at2']; ?></td>
			<td><?= $at2; ?></td>
			<td>B(80 - 89) : Baik</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Ketepatan hasil kerja</td>
			<td><?= $item['at3']; ?></td>
			<td><?= $at3; ?></td>
			<td>C(70 - 79) : Cukup</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Keselamatan kerja</td>
			<td><?= $item['at4']; ?></td>
			<td><?= $at4; ?></td>
			<td>D(< 70) : Kurang</td>
		</tr>
		<tr>
			<td colspan="2"><b>B. ASPEK NON TEKNIS</b></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>1</td>
			<td>Kedisiplinan</td>
			<td><?= $item['ant1']; ?></td>
			<td><?= $ant1; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Kerja Sama</td>
			<td><?= $item['ant2']; ?></td>
			<td><?= $ant2; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Tanggung Jawab</td>
			<td><?= $item['ant3']; ?></td>
			<td><?= $ant3; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>4</td>
			<td>Kerajinan</td>
			<td><?= $item['ant4']; ?></td>
			<td><?= $ant4; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Inisiatif dan Kreatifitas</td>
			<td><?= $item['ant5']; ?></td>
			<td><?= $ant5; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>6</td>
			<td>Sikap</td>
			<td><?= $item['ant6']; ?></td>
			<td><?= $ant6; ?></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="2">Rata - rata</td>
			<td><?= $rata; ?></td>
			<td><?= $rh; ?></td>
			<td></td>
		</tr>
	</table>

	<br/>
	<br/>
	<div class="ttd">
		<p>Pembimbing Prakerin</p>
		<br/>
		<br/>
		<p>(<?= $item['pembimbing']; ?>)</p>
	</div>

	<?php } ?>

</body>
<script>
	window.print();
</script>
</html>