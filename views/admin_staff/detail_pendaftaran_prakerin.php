<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_pendaftaran_prakerin.php");
$tbl_perusahaan= new t_prakerin_siswa();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail Prakerin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">
                            <strong class="card-title">Form </strong>Detail Prakerin</a></li>
                            <li class="active">Form Detail Prakerin</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Form </strong>Detail Prakerin
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <?php
                                    foreach ($tbl_perusahaan->getdetail_pendaftaran_prakerin($_GET['id_siswa_prakerin']) as $item) {
                                  ?>
                                     

                                      <form action="<?php echo $siteurl; ?>/views/admin_staff/proses_perusahaan.php?aksi=insert" method="post" class="form-horizontal">
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id Siswa Prakerin</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="id_siswa_prakerin" value="<?= $item['id_siswa_prakerin']; ?>" class="form-control"readonly></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIS</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nis"value="<?= $item['no_induk']; ?>" class="form-control"readonly></div>
                                              </div>
                                          </div>
                                          
                                      </div>
                                       <div class="row">
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Siswa</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin" value="<?= $item['nama']; ?>" class="form-control"readonly></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['nama_prakerin']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lokasi</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['kota_prakerin']; ?>" class="form-control"readonly></div>
                                          </div>

                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pembimbing</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['pembimbing']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div> 
                                      <br>
                                      <div class="row">

                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Mulai</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['tgl_start']; ?>" class="form-control"readonly></div>
                                          </div>

                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Akhir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['tgl_akhir']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                        <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Program</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['program']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>                                     
                          </div>
                        </div>
                    </div>

                    <div class="card-footer">
                      <a href="pendaftaran_prakerin.php"><button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-back"></i> Kembali</button></a>
                    

                    </div></form>
                    
                      <?php } ?>
                      
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  