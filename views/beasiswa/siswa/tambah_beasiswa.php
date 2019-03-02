<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/beasiswa.php");
$t_beasiswa = new t_beasiswa();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pengajuan Beasiswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Pengajuan Beasiswa</a></li>
                            <li class="active">Form Tambah Pengajuan Beasiswa</li>
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
                            <strong class="card-title">Form </strong>Tambah Pengajuan Beasiswa
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/beasiswa/siswa/proses_beasiswa.php?aksi=insert" method="post" class="form-horizontal">
                                      <div class="row">
                                          
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nomor Induk Siswa Nasional (NISN)</label></div>
                                            <div class="col-12 col-md-9"><input type="number" name="nis" class="form-control"REQUIRED></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Lengkap</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" class="form-control" REQUIRED></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          
                                          <div class="col-6">
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelas </label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="kelas" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Orang Tua</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="OrTu" class="form-control"></div>
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            
                                            </div>
                                          </div>
                                          <div class="col-6">
                                             
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:5px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="Alamat" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Yang Bekerja dalam satu keluarga</label></div>
                                              <div class="col-12 col-md-9 ">
                                  <select name="Kerja" id="Kerja" class="form-control-sm form-control">
                                    <option value=""> </option>
                                    <option value="-">-</option>
                                    <option value="1">Kakak Saudara</option>
                                    <option value="2">Bapak</option>
                                    <option value="3">Ibu</option>
                                    <option value="4">Bapak & Ibu</option>
                                    <option value="5">Bapak, Ibu & Kakak</option>
                               
                              </select>
                            </div>
                                          </div>
                                      </div>
                                      
                                     <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan Total Setiap Bulan</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Gaji" id="Gaji" class="form-control-sm form-control">
                                                                  <option value=""></option>
                                                                  <option value="-">-</option>
                                                                  <option value="1">Rp. 1.000.000 ke bawah</option>
                                                                  <option value="2">Rp. 1.000.000 - Rp. 2.000.000</option>
                                                                  <option value="3">Rp. 2.000.000 - Rp. 3.000.000</option>
                                                                  <option value="4">Rp. 3.000.000 - Rp. 4.000.000</option>
                                                                  <option value="5">Rp. 4.000.000 - Rp. 5.000.000</option> 
                              </select>
                            </div>
                            </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status Kepemilikan Rumah / Tanah</label></div>
                                              <div class="col-12 col-md-9 ">
                                  <select name="Rumah" id="Rumah" class="form-control-sm form-control">
                                                                  <option value=""></option>
                                                                  <option value="-">-</option>
                                                                  <option value="1">Hibah / Suruh merawat rumah milik orang lain</option>
                                                                  <option value="2">Ikut Keluarga</option>
                                                                  <option value="3">Sewa</option>
                                                                  <option value="4">Warisan</option>
                                                                  <option value="5">Beli Sendiri</option>
                              </select>
                            </div>
                            </div>
                          </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Struktur Bangunan Rumah</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Bangunan" id="Bangunan" class="form-control-sm form-control">
                                                                  <option value=""></option>
                                                                  <option value="-">-</option>
                                                                  <option value="1">Gedeg</option>
                                                                  <option value="2">Triplex</option>
                                                                  <option value="3">setengah tembok</option>
                                                                  <option value="4">Tembok</option>
                                                                  <option value="5">2 Lantai</option>
                              </select>
                            </div>
                            </div>
                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jenis Lantai Yang Dipergunakan<font color='red'><font size="5"></font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Lantai" id="Lantai" class="form-control-sm form-control">
                                                                  <option value=""></option>
                                                                  <option value="-">-</option>
                                                                  <option value="1">Tanah</option>
                                                                  <option value="2">Ubin / Tegel</option>
                                                                  <option value="3">Keramik sederhana</option>
                                                                  <option value="4">Keramik bagus</option>
                                                                  <option value="5">Granit</option>
                                    
                              </select>
                            </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Model Ruangan Rumah</label></div>
                                            <div class="col-12 col-md-9 ">
                                 <select name="Ruangan" id="Ruangan" class="form-control-sm form-control">
                                                                  <option value=""></option>
                                                                  <option value="-">-</option>
                                                                  <option value="1">Satu ruangan</option>
                                                                  <option value="2">Dua ruangan</option>
                                                                  <option value="3">Tiga ruangan sederhana</option>
                                                                  <option value="4">Tiga ruangan rapi dan bersih</option>
                                                                  <option value="5">Tiga ruangan lebih</option>
                                    
                              </select>
                            </div>
                                          </div>
                                      
                                          <div class="col-6">
                                               <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pemakaian Listrik Rumah</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Listrik" id="Listrik" class="form-control-sm form-control">
                                                                  <option value=""></option
                                                                    <option value="-">-</option>
                                                                  <option value="1">Penggunaan listrik menyambungkan dengan milik keluarga</option>
                                                                  <option value="2">450 KVA.</option>
                                                                  <option value="3">900 KVA.</option>
                                                                  <option value="4">1300 KVA.</option>
                                                                  <option value="5">2200 KVA.</option>
                                    
                              </select>
                            </div>
                                          </div>
                                        </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jenis Sepeda Motor Yang Dimiliki</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Motor" id="Motor" class="form-control-sm form-control">
                                                                  <option value=""></option>
                                                                  <option value="-">-</option>
                                                                  <option value="1">Tidak punya</option>
                                                                  <option value="2">Punya, usia > 10 tahun</option>
                                                                  <option value="3">Punya, usia <= 10 Tahun dan >= 5 Tahun</option>
                                                                  <option value="4">Punya, usia < 5 Tahun</option>
                                                                  <option value="5">Lebih dari 1 sepeda motor / mobil</option>
                                    
                              </select>
                            </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Televisi Yang Digunakan</label></div>
                                              <div class="col-12 col-md-9 ">
                                  <select name="TV" id="TV" class="form-control-sm form-control">
                                                                  <option value=""></option>
                                                                  <option value="-">-</option>
                                                                  <option value="1">Tidak punya</option>
                                                                  <option value="2">Televisi model lama</option>
                                                                  <option value="3">Televisi LED</option>
                                                                  <option value="4">Televisi LED Besar</option>
                                                                  <option value="5">Mempunyai lebih dari 1 televisi</option>
                                    
                              </select>
                            </div>
                                          </div>
                                        </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">HP Yang Dimiliki Dalam Satu Keluarga</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="HP" id="HP" class="form-control-sm form-control">
                                                                  <option value=""></option>
                                                                  <option value="-">-</option>
                                                                  <option value="1">Tidak punya</option>
                                                                  <option value="2">Punya model lama (bukan android)</option>
                                                                  <option value="3">Punya model android</option>
                                                                  <option value="4">Memiliki HP / Tablet</option>
                                                                  <option value="5">Memiliki HP / Tablet / Laptop</option>
                                    
                              </select>
                            </div>
                            </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Ajaran</label></div>
                                           <div class="col-12 col-md-9 ">
                                  <select name="ThAjar" id="ThAjar" class="form-control-sm form-control">
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
                                          <div class="col-6">
                                            
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