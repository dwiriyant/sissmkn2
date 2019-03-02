<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/datasiswa.php");
$db = new datasiswa();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Siswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Data Siswa</a></li>
                            <li class="active">List Data Siswa</li>
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
                        <div class="card-footer">
                          
                          <a href="tambahsiswa.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Data Siswa
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Data Siswa
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($db->tampilsiswa() as $item){
                                        // print_r($db->tampildu());
                                        // die();
                                ?>
                                <tr>
                                    <td><?php echo $item['id_sis_th']; ?></td>
                                    <td><?php echo $item['no_induk']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['kelamin']; ?></td>
                                    <td><?php echo $item['kelas']; ?></td>
                                    <td><?php echo $item['th_ajar']; ?></td>
                                    <td><a style = "margin-right:3px;" href="detail_pendaftaran.php?user_id=<?= $item['user_id'];?>"<button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a>
                                        <a style = "margin-right:3px;" href="edit_pendaftaran.php?user_id=<?= $item['user_id'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></a>
                                         <a href="proses.php?id_sis_th=<?= $item['id_sis_th'];?>&aksi=hapus"<button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a>
                                    </td>
                                </tr>
                              </tbody>
                                    <?php } ?>
                            </table>
                        </div>
                        <!-- <div class="card-footer">
                          <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> export
                          </button>
                          <button title="import data dari excel" type="reset" class="btn btn-warning btn-sm">
                            <i class="fa ti-download"></i> import
                          </button>
                        </div> -->
                    </div>
                </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>