<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_nilaiprakerin.php");
$tbl_perusahaan= new tbl_nilaiprakerin();?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Nilai Prakerin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Nilai Prakerin</a></li>
                            <li class="active">Nilai Prakerin</li>
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
                            <strong class="card-title">Form</strong> Nilai Prakerin
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                
                                <?php
                                    foreach ($tbl_perusahaan->getDetailtbl_nilaiprakerin($_GET['id_nilaiprakerin']) as $data) {
                                  ?>
                                 <form action="proses_nilaiprakerin.php?aksi=update" method="post">
                                 
                                <div class="row">

                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id Nilai Prakerin</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="id_nilaiprakerin" name="id_nilaiprakerin" value="<?= $data['id_nilaiprakerin']; ?>" class="form-control" readonly></div>
                                              </div>
                                          </div>

                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id Siswa Prakerin</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="id_siswa_prakerin" name="id_siswa_prakerin" value="<?= $data['id_siswa_prakerin']; ?>" class="form-control"></div>
                                              </div>
                                          </div>
                                         
                                      </div>
                                       <h3 style="margin-left: 15px; margin-bottom: 8px;">ASPEK TEKNIS</h3>
                                      <div class="row">
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Persiapan AlKer</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="at1" name="at1" class="form-control" value="<?= $data['at1']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Metode Kerja</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="at2" name="at2"  class="form-control" value="<?= $data['at2']; ?>"></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hasil Kerja</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="at3" name="at3" class="form-control" value="<?= $data['at3']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keselamatan Kerja</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="at4" name="at4" class="form-control" value="<?= $data['at4']; ?>"></div>
                                          </div>
                                          

                                      </div>
                                      <h3 style="margin-left: 15px; margin-bottom: 8px;">ASPEK NON TEKNIS</h3>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kedisiplinan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant1" name="ant1" class="form-control" value="<?= $data['ant1']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kerja Sama</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant2" name="ant2" class="form-control" value="<?= $data['ant2']; ?>"></div>
                                          </div>
                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggung Jawab</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant3" name="ant3" class="form-control" value="<?= $data['ant3']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kerajinan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant4" name="ant4" class="form-control" value="<?= $data['ant4']; ?>"></div>
                                          </div>
                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Inisiatif dan Kreatifitas</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant5" name="ant5" class="form-control" value="<?= $data['ant5']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sikap</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant6" name="ant6" class="form-control" value="<?= $data['ant6']; ?>"></div>
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