<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/PendaftaranOnline.php");
$db = new pendaftaranonline();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>List Data Pendaftaran</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Pendaftaran</a></li>
                            <li class="active">List Pendaftaran Online</li>
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
                           <a href="cetak.php"><button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> Cetak
                          </button>
                          </a>
                          <a href="tambah_pendaftaran.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Pendaftaran
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Pendaftaran
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>NISN</th>
                                    <th>No Formulir</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pilihan Program</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($db->tampilpendaftaran() as $item){
                                        // print_r($kesiswaan->tampilpendataan());
                                        // die();
                                ?>
                                <tr>
                                    <td><?php echo $item['user_id']; ?></td>
                                    <td><?php echo $item['no_induk']; ?></td>
                                    <td><?php echo $item['no_daftar']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['kelamin']; ?></td>
                                    <td><?php echo $item['sis_dtrm_prog_khlian']; ?></td>
                                    <td><?php echo $item['th_ajar']; ?></td>
                                    <td><a style = "margin-right:3px;" href="detail_pendaftaran.php?user_id=<?= $item['user_id'];?>"<button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a>
                                        <a style = "margin-right:3px;" href="edit_pendaftaran.php?user_id=<?= $item['user_id'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></a>
                                         <a href="proses.php?user_id=<?= $item['user_id'];?>&aksi=hapus"<button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a>
                                    </td>
                                </tr>

                                    <?php } ?>
                              </tbody>
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

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>