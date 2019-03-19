<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_jurnalprakerin.php");
$tbl_perusahaan= new tbl_jurnalprakerin();
?>

<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

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
                                    foreach ($tbl_perusahaan->getJurnalById($_GET['id_jurnal']) as $item) {
                                  ?>

                                      <form action="<?php echo $siteurl; ?>/views/admin_staff/proses_jurnalprakerin.php?aksi=insert" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <input type="hidden" name="id_siswa_prakerin" value="<?= $item['id_siswa_prakerin']?>">
                                        <input type="hidden" name="id_jurnal" value="<?= $item['id_jurnal']?>">
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
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_prakerin" value="<?= $item['nama_prakerin']; ?>" class="form-control"readonly></div>
                                          </div>

                                      </div>

                                      <div class="row">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jurnal</label></div>
                                              <div class="col-12 col-md-9"><input type="file" id="jurnal" name="jurnal" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="tgl" name="tgl" class="form-control"></div>
                                          </div>

                                      </div>
                          </div>
                        </div>
                    </div>



                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan
                      </button>
                      <a href="jurnal_prakerin.php"><button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-back"></i> Kembali</button></a>
                    

                    </div></form>
                    
                      <?php } ?>
                      
                                      </form>
                    <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>N0.</th>
                                    <th>Jurnal</th>
                                    <th>Tanggal</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php $i = 1; ?>
                                <?php foreach($tbl_perusahaan->getJurnalTableById($_GET['id_jurnal']) as $data) {
                                ?>


                                  <tr>
                                 <th scope="row"><?= $i++; ?></th>
                                 <td><?= $data['jurnal']; ?></td>
                                 <td><?= $data['tgl']; ?></td>
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
                    


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  