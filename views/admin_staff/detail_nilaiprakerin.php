<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_nilaiprakerin.php");
$tbl_perusahaan= new tbl_nilaiprakerin();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail Nilai Prakerin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">
                            <strong class="card-title">Form </strong>Detail Nilai Prakerin</a></li>
                            <li class="active">Form Detail Nilai Prakerin</li>
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
                            <strong class="card-title">Form </strong>Detail Nilai Prakerin
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <?php
                                    foreach ($tbl_perusahaan->getDetailtbl_nilaiprakerin($_GET['id_nilaiprakerin']) as $item) {
                                  ?>
                                     

                                      <form action="<?php echo $siteurl; ?>/views/admin_staff/proses_nilaiprakerin.php?aksi=insert" method="post" class="form-horizontal">
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Id Nilai Prakerin</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="id_siswa_prakerin" value="<?= $item['id_nilaiprakerin']; ?>" class="form-control"readonly></div>
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
                                      <h3 style="margin-left: 15px; margin-bottom: 8px;">ASPEK TEKNIS</h3>
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Persiapan AlKer</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="at1" name="at1" class="form-control" value="<?= $item['at1']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Metode Kerja</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="at2" name="at2"  class="form-control" value="<?= $item['at2']; ?>" readonly></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hasil Kerja</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="at3" name="at3" class="form-control" value="<?= $item['at3']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keselamatan Kerja</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="at4" name="at4" class="form-control" value="<?= $item['at4']; ?>" readonly></div>
                                          </div>
                                      </div>
                                      <h3 style="margin-left: 15px; margin-bottom: 8px;">ASPEK TEKNIS</h3>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kedisiplinan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant1" name="ant1" class="form-control" value="<?= $item['ant1']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kerja Sama</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant2" name="ant2" class="form-control" value="<?= $item['ant2']; ?>" readonly></div>
                                          </div>
                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggung Jawab</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant3" name="ant3" class="form-control" value="<?= $item['ant3']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kerajinan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant4" name="ant4" class="form-control" value="<?= $item['ant4']; ?>" readonly></div>
                                          </div>
                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Inisiatif dan Kreatifitas</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant5" name="ant5" class="form-control" value="<?= $item['ant5']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sikap</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ant6" name="ant6" class="form-control" value="<?= $item['ant6']; ?>" readonly></div>
                                          </div>
                                      </div>                                     
                          </div>
                        </div>
                    </div>

                    <div class="card-footer">
                      <a href="nilai_prakerin.php"><button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-back"></i> Kembali</button></a>
                    

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