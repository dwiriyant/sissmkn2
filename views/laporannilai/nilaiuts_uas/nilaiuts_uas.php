<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/nilaiutsuas.php");
$penilaian = new nilaiutsuas();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
    
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                   <h1>List Nilai UTS & UAS</h1>
                    <p><?= $_SESSION['Nama_guru']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Nilai UTS & UAS</a></li>
                        <li class="active">List Nilai UTS & UAS</li>
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
                                            <td width="200">TAHUN AKADEMIK</td> <td></td>
                                        </tr>
                                        <tr>
                                            <td>SEMESTER</td> <td></td>
                                        </tr>
                                        <tr>
                                            <td>JURUSAN</td> <td></td>
                                        </tr>
                                            <tr><td>MATA PELAJARAN</td> <td></td>
                                        </tr>
                                    </table>

                                    <div class="card-body">
                                        <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm"><i class="fa ti-upload"></i> export</button>
                                        <a href="nilai_importxls.php"><button title="import data dari excel" type="reset" class="btn btn-warning btn-sm"><i class="fa ti-download"></i> import</button></a>
                                        <a href="tambah_nilai_harian.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Nilai Harian</button> </a>
                                    </div>

                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO URUT</th>
                                            <th>NO INDUK</th>
                                            <th>NAMA SISWA</th>
                                            <th>Ujian Tengah Semester</th>
                                            <th>Ujian Akhir Semester</th>
                                            <th colspan="3">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($penilaian->tampildata() as $item) {?>

                                            <tr>
                                                <td><?php echo $item['no_urut']; ?></td>
                                                <td><?php echo $item['no_induk']; ?></td>
                                                <td><?php echo $item['nama']; ?></td>
                                                <td><?php echo $item['UTS']; ?></td>
                                                <td><?php echo $item['UAS']; ?></td>
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