<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_pendaftaran_prakerin.php");
$tbl_perusahaan= new t_prakerin_siswa();?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data prakerin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Data prakerin</a></li>
                            <li class="active">Data prakerin</li>
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
                            <strong class="card-title">Form</strong> Data prakerin
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                
                                <?php
                                    foreach ($tbl_perusahaan->getdetail_pendaftaran_prakerin($_GET['id_siswa_prakerin']) as $item) {
                                  ?>
                                 <form action="proses_pendaftaran_prakerin.php?aksi=update" method="post">
                                 
                                <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id Siswa Prakerin</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="id_siswa_prakerin" name="id_siswa_prakerin" value="<?= $item['id_siswa_prakerin']; ?>" class="form-control"readonly></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIS</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nis" name="nis" value="<?= $item['no_induk']; ?>" class="form-control"></div>
                                              </div>
                                          </div>
                                          
                                      </div>
                                       <div class="row">
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Prakerin</label></div>
                                              <div class="col-12 col-md-9">
                                                <select class="form-control" id="id_tmp_prakerin" name="id_tmp_prakerin">
                                                  <?php foreach ($tbl_perusahaan->getNamaPrakerin() as $t) {
                                                      echo'
                                                        <option value="'.$t['id_tmp_prakerin'].'">'.$t['nama_prakerin'].'</option>
                                                      ';
                                                    }
                                                   ?>
                                                </select>
                                          </div>
                                        </div>

                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lama Bulan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="lama_bln" name="lama_bln"value="<?= $item['lama_bln']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row">

                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Mulai</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="tgl_start" name="tgl_start"value="<?= $item['tgl_start']; ?>" class="form-control"></div>
                                          </div>

                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Akhir</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="tgl_akhir" name="tgl_akhir"value="<?= $item['tgl_akhir']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                        <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelas</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="kelas" name="kelas"value="<?= $item['kelas']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Prakerin Ke</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="prakerinke" name="prakerinke"value="<?= $item['prakerinke']; ?>" class="form-control"></div>
                                          </div>
                                      </div>

                                      <?php } 
                                      ?> 
                                          
                          </div>
                        </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan
                      </button>
                      <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                      </button>
                    </div></form>
                     <!-- .card -->

                  </div><!--/.col-->

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  