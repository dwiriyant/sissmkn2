<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/PendaftaranOnline.php");
$pendaftaranonline = new pendaftaranonline();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pendaftaran</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Pendaftaran</a></li>
                            <li class="active">Form Edit Pendaftaran</li>
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
                            <strong class="card-title">Form </strong>Edit Pendaftaran
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/kesiswaan/pendataan/proses.php?aksi=edit" method="post" class="form-horizontal" enctype="multipart/form-data">
                                  <?php
                                    foreach ($pendaftaranonline->getdetailpendaftaran($_GET['user_id']) as $item) {
                                      
                                  ?>
                                      <div class="row">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="user_id" value="<?= $item['user_id']; ?>" class="form-control" readonly></div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nomor Induk Siswa Nasional (NISN)</label></div>
                                            <div class="col-12 col-md-9"><input type="number" name="no_induk" value="<?= $item['no_induk']; ?>"  class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" value="<?= $item['nama']; ?>"  class="form-control"readonly></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jenia Kelamin</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="kelamin" value="<?= $item['kelamin']; ?>" class="form-control"readonly></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_email" value="<?= $item['sis_email']; ?>" class="form-control"readonly></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="disabled-input" name="tgl_lahir" value="<?= $item['tgl_lahir']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tmp_ahir" value="<?= $item['tmp_lahir']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat" value="<?= $item['alamat']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat_camat" value="<?= $item['alamat_camat']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kabupaten</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_kodya" value="<?= $item['alamat_kodya']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telepon</label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="ayh_tlp" value="<?= $item['ayh_tlp']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="agama" value="<?= $item['agama']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Asal Sekolah</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_tmt_dri" value="<?= $item['sis_tmt_dri']; ?>" class="form-control"readonly></div>  
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NO Peserta SLTP</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_no_psrta_unas" value="<?= $item['sis_no_psrta_unas']; ?>" class="form-control"readonly></div>
                                            </div>
                                          <div class="col-6">
                                              
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jurusan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_dtrm_prog_khlian" value="<?= $item['sis_dtrm_prog_khlian']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nilai UN</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="n_unas" value="<?= $item['n_unas']; ?>" class="form-control"readonly></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nilai Rapot</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="n_raport" value="<?= $item['n_raport']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                        <div class="col-6">
                                          <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Ajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="th_ajar" value="<?= $item['th_ajar']; ?>" class="form-control"readonly></div>
                                          </div>
                                          <div class="col-6">
                                              </div>
                                      </div>
                            </div>
                            </div>
                            </div>
                    <div class="card-footer">
                      <a href="index.php"><button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-back"></i> Kembali</button></a>
                      
                      <?php } ?>
                      
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>