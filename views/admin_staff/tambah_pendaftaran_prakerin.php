<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_pendaftaran_prakerin.php");
$tbl_perusahaan = new t_prakerin_siswa();
?>



<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Data Prakerin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Data Prakerin</a></li>
                            <li class="active">Data Prakerin Siswa</li>
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
                            <strong class="card-title">Form</strong> Data Prakerin Siswa
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                
                               


                                  <form action="<?php echo $siteurl; ?>/views/admin_staff/proses_pendaftaran_prakerin.php?aksi=insert" method="post" class="form-horizontal">
                                      <div class="row">
                                          <div class="col-6">
                                           <div class="form-group">
                                              
                                              </div>
                                            
                                          </div>
                                           <div class="col-6">
                                            
                                          </div>
                                           
                                      </div>
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIS</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nis" name="nis" class="form-control"value="<?= $data['nis']; ?>" placeholder="NIS harus sesuai pada DATA SISWA"></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Prakerin</label></div>
                                              <div class="col-12 col-md-9">
                                                <select class="form-control" id="id_tmp_prakerin" name="id_tmp_prakerin">
                                                  <?php                                                     foreach ($tbl_perusahaan->getNamaPrakerin() as $t) {
                                                      echo'
                                                        <option value="'.$t['id_tmp_prakerin'].'">'.$t['nama_prakerin'].'</option>
                                                      ';
                                                    }
                                                   ?>
                                                </select>
                                              </div>
                                          </div>
                                        
                                      </div>
                                      
                                      <div class="row">
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lama Bulan Magang</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="lama_bln" name="lama_bln" class="form-control" value="<?= $data['lama_bln']; ?>" placeholder="1/2/3"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelas</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="kelas" name="kelas"  class="form-control" value="<?= $data['kelas']; ?>" placeholder="1/2/3"></div>
                                          </div>

                                      </div>
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Mulai</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="tgl_start" name="tgl_start" class="form-control" value="<?= $data['tgl_start']; ?>"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Selesai</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="tgl_akhir" name="tgl_akhir" class="form-control" value="<?= $data['tgl_akhir']; ?>"></div>
                                          </div>
                                          

                                      </div>

                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Prakerin Ke</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="prakerinke" name="prakerinke" class="form-control" value="<?= $data['prakerinke']; ?>" placeholder="1/2/3"></div>
                                          </div>
                                      </div>
                                          
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