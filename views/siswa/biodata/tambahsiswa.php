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
                            <li class="active">Form Tambah Pendaftaran</li>
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
                            <strong class="card-title">Form </strong>Tambah Pendaftaran
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/siswa/biodata/proses.php?aksi=tambah" method="post" class="form-horizontal">
                                      <div class="row">
                                          <div class="col-6">
                                            
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nomor Urut</label></div>
                                            <div class="col-12 col-md-9"><input type="number" name="no_urut" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Induk Siswa</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="no_induk" class="form-control"></div>
                                             
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama siswa</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nama" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelas</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kelas" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Program Keahlian</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="prog" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Ajaran<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="th_ajar" id="th_ajar" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="2012/2013">2012/2013</option>
                                    <option value="2013/2014">2013/2014</option>
                                    <option value="2014/2015">2014/2015</option>
                                    <option value="2015/2016">2015/2016</option>
                                    <option value="2016/2017">2016/2017</option>
                                    <option value="2017/2018">2017/2018</option>
                                    <option value="2018/2019">2018/2019</option>
                                    <option value="2019/2020">2019/2020</option>
                                    <option value="2021/2022">2021/2022</option>
                                    <option value="2022/2023">2022/2023</option>
                                    
                              </select>
                            </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Jenis Kelamin</label></div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input type="radio" id="radio1" name="kelamin" value="L" class="form-check-input">Laki - laki
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="radio2" name="kelamin" value="P" class="form-check-input">Perempuan
                                                </div>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama <font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="agama" id="agama" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="">-</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="KATOLIK">KATOLIK</option>
                                    <option value="BUDHA">BUDHA</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="KONGUCHU">KONGUCHU</option>
                                    <option value="ALIRAN KEPERCAYAAN">ALIRAN KEPERCAYAAN</option>
                               
                              </select>
                            </div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Inkluksi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="Inklusi" class="form-control"></div>
                                          </div>
                                            </div>
                                          </div>
                                          <div class="col-6">
                                              
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
                      
                                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  