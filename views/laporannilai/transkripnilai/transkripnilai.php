<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/transkripnilai.php");
$penilaian = new transkripnilai();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
    
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>List Transkip Nilai</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Laporan Nilai</a></li>
                            <li class="active">List Transkrip Nilai Siswa</li>
                        </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

                 <div class="row">
                    <div class="col-md-12">

                        <div class="card">
                                    <table class="table table-bordered">

                                        <tr>
                                             <?php foreach($penilaian->tampilmapel() as $item) {?>
                                            <td width="200">TAHUN AKADEMIK </td> <td> :  <?php echo $item['thajar']; ?></td>
                                             <?php } ?>
                                        </tr>
                                        <tr>
                                            <?php foreach($penilaian->tampilmapel() as $item) {?>
                                            <td>SEMESTER</td> <td> :  <?php echo $item['sem']; ?></td>
                                            <?php } ?>
                                        </tr>
                                        <tr>
                                            <?php foreach($penilaian->tampilkelas() as $item) {?>
                                            <td>KELAS</td> <td> :  <?php echo $item['kelas']; ?></td>
                                            <?php } ?>
                                        </tr>
                                        <tr>
                                            <?php foreach($penilaian->tampilmapel() as $item) {?>
                                            <td>MATA PELAJARAN</td> <td> :  <?php echo $item['pelajaran']; ?></td>
                                            <?php } ?>
                                        </tr>

                                    </table>

                                    <div class="card-body">
                                        <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm"><i class="fa ti-upload"></i> export</button>
                                        <a href="nilai_importxls.php"><button title="import data dari excel" type="reset" class="btn btn-warning btn-sm"><i class="fa ti-download"></i> import</button></a>
                                        <a href="tambah_transkripnilai.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Transkrip Nilai</button> </a>
                                    </div>

                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO INDUK</th>
                                            <th>NAMA SISWA</th>
                                            <th>N HARIAN</th>
                                            <th>UTS</th>
                                            <th>UAS</th>
                                            <th>JURNAL</th>
                                            <th>Angka</th>
                                            <th>Huruf</th>
                                            <th>KETERANGAN</th>
                                            <th>JENIS</th>
                                            <th>KONVERSI</th>
                                            <th colspan="3">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($penilaian->tampiltranskripnilai() as $item) {?>


                                            <tr>
                                                <td><?php echo $item['no_induk']; ?></td>
                                                <td><?php echo $item['nama']; ?></td>
                                                <td><?php echo $item['n_rata2']; ?></td>
                                                <td><?php echo $item['UTS']; ?></td>
                                                <td><?php echo $item['UAS']; ?></td>
                                                <td><?php echo $item['JURNAL']; ?></td>
                                                <td><?php echo $item['Angka']; ?></td>
                                                <td><?php echo $item['Huruf']; ?></td>
                                                <td><?php echo $item['Keterangan']; ?></td>
                                                <td><?php echo $item['jenis']; ?></td>
                                                <td><?php echo $item['n_konversi']; ?></td>

                                                <td> <a style = "margin-right:3px;" href="detail_pendataan.php?idPendataan=<?= $item['idPendataan'];?>"<button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i>&nbsp;Detail</button></a></td>
                                                <td><a style = "margin-right:3px;" href="form_edit_transnilai.php?id_nilai=<?=$item['id_nilai']; ?>"<button title="Ubah" class="btn btn-warning btn-sm"><i class="fa ti-pencil-alt"></i>&nbsp;Edit</button></a></td>
                                                <td><a href="<?php echo $siteurl; ?>/views/nilai/proses_nilai.php?id_nilai=<?= $item['id_nilai'];?>&aksi=hapus"<button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i>&nbsp;Delete</button></a></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

        </div>
    </div>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>