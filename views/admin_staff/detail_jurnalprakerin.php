<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_jurnalprakerin.php");
$tbl_perusahaan= new tbl_jurnalprakerin();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail Jurnal Prakerin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">
                            <strong class="card-title">Form </strong>Detail Jurnal Prakerin</a></li>
                            <li class="active">Form Detail Jurnal Prakerin</li>
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
                            <strong class="card-title">Form </strong>Detail Jurnal Prakerin
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <?php
                                    foreach ($tbl_perusahaan->getJurnalById($_GET['id_jurnalprakerin']) as $item) {
                                  ?>

                                      <form action="<?php echo $siteurl; ?>/views/admin_staff/proses_jurnalprakerin.php?aksi=insert" method="post" class="form-horizontal">
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id Jurnal Prakerin</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="id_jurnalprakerin" value="<?= $item['id_jurnalprakerin']; ?>" class="form-control"readonly></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIS</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nis"value="<?= $item['nis']; ?>" class="form-control"readonly></div>
                                              </div>
                                          </div>
                                          
                                      </div>
                                       <div class="row">
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Siswa</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin" value="<?= $item['namaSiswa']; ?>" class="form-control"readonly></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin"value="<?= $item['nama_prakerin']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div>

                                      <div class="row">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jurnal</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="jurnal" name="jurnal" class="form-control" value="<?= $item['jurnal']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              
                                          </div>

                                      </div>
                          </div>
                        </div>
                    </div>

                    <div class="card-footer">
                      <a href="jurnal_prakerin.php"><button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-back"></i> Kembali</button></a>
                    

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