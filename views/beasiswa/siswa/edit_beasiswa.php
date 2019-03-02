<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/beasiswa.php");
$kesiswaan = new t_beasiswa();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Perusahaan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Perusahaan</a></li>
                            <li class="active">Perusahaan</li>
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
                            <strong class="card-title">Form</strong> Perusahaan
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                           <?php $object = new t_beasiswa();
                          $idbeasiswa = $_GET["idbeasiswa"];?>
                          <div id="pay-invoice">
                              <div class="card-body">
                                
                               


                                 <form action="proses_beasiswa.php?aksi=update" method="post">
                                 <?php foreach($object->getDetailbeasisw($idbeasiswa) as $item) {
                                ?>
                                      <div class="row">
                                      <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="idbeasiswa" value="<?= $item['idbeasiswa']; ?>" class="form-control" readonly></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nomor Induk Siswa Nasional (NISN)</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nis" value="<?= $item['nis']; ?>" class="form-control" readonly></div>
                                          </div>

                                           
                                      </div>
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Lengkap</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nama" value="<?= $item['nama']; ?>" class="form-control" ></div>
                                              </div>
                                          </div>
                                         
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelas</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kelas" value="<?= $item['kelas']; ?>" class="form-control" ></div>
                                          </div>
                                          
                                      </div>
                                      
                                      <div class="row">
                                         <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Orang Tua</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="OrTu" value="<?= $item['OrTu']; ?>" class="form-control" ></div>
                                          </div>
                                          
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="Alamat" value="<?= $item['Alamat']; ?>" class="form-control"></div>
                                          </div>
                                          

                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Yang Bekerja dalam satu keluarga</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Kerja" id="Kerja" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['Kerja']; ?>">
                                                                    <?php
                                                                    if (($item['Kerja']) == "5") {
                                                                      echo "Bapak, Ibu & Kakak";
                                                                     }elseif (($item['Kerja']) == "4") {
                                                                      echo "Bapak & Ibu";
                                                                    }elseif (($item['Kerja']) == "3") {
                                                                      echo "Ibu";
                                                                    }elseif (($item['Kerja']) == "2") {
                                                                      echo "Bapak";
                                                                    }elseif (($item['Kerja']) == "1") {
                                                                      echo "Kakak Saudara";
                                                                    }elseif (($item['Kerja']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="1">Kakak Saudara</option>
                                                                  <option value="2">Bapak</option>
                                                                  <option value="3">Ibu</option>
                                                                  <option value="4">Bapak & Ibu</option>
                                                                  <option value="5">Bapak, Ibu & Kakak</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan Total Setiap Bulan</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Gaji" id="Gaji" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['Gaji']; ?>">
                                                                    <?php
                                                                    if (($item['Gaji']) == "5") {
                                                                      echo "Rp. 4.000.000 - Rp. 5.000.000";
                                                                     }elseif (($item['Gaji']) == "4") {
                                                                      echo "Rp. 3.000.000 - Rp. 4.000.000";
                                                                    }elseif (($item['Gaji']) == "3") {
                                                                      echo "Rp. 2.000.000 - Rp. 3.000.000";
                                                                    }elseif (($item['Gaji']) == "2") {
                                                                      echo "Rp. 1.000.000 - Rp. 2.000.000";
                                                                    }elseif (($item['Gaji']) == "1") {
                                                                      echo "Rp. 1.000.000 ke bawah";
                                                                    }elseif (($item['Gaji']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="1">Rp. 1.000.000 ke bawah</option>
                                                                  <option value="2">Rp. 1.000.000 - Rp. 2.000.000</option>
                                                                  <option value="3">Rp. 2.000.000 - Rp. 3.000.000</option>
                                                                  <option value="4">Rp. 3.000.000 - Rp. 4.000.000</option>
                                                                  <option value="5">Rp. 4.000.000 - Rp. 5.000.000</option> 
                                                        </select>
                                                      </div>
                                                            </div>
                                                          </div>

                                          <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Status Kepemilikan Rumah / Tanah</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Rumah" id="Rumah" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['Rumah']; ?>">
                                                                    <?php
                                                                    if (($item['Rumah']) == "5") {
                                                                      echo "Beli Sendiri";
                                                                     }elseif (($item['Rumah']) == "4") {
                                                                      echo "Warisan";
                                                                    }elseif (($item['Rumah']) == "3") {
                                                                      echo "Sewa";
                                                                    }elseif (($item['Rumah']) == "2") {
                                                                      echo "Ikut Keluarga";
                                                                    }elseif (($item['Rumah']) == "1") {
                                                                      echo "Hibah / Suruh merawat rumah milik orang lain";
                                                                    }elseif (($item['Rumah']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="1">Hibah / Suruh merawat rumah milik orang lain</option>
                                                                  <option value="2">Ikut Keluarga</option>
                                                                  <option value="3">Sewa</option>
                                                                  <option value="4">Warisan</option>
                                                                  <option value="5">Beli Sendiri</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Struktur Bangunan Rumah</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Bangunan" id="Bangunan" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['Bangunan']; ?>">
                                                                    <?php
                                                                    if (($item['Bangunan']) == "5") {
                                                                      echo "2 Lantai";
                                                                     }elseif (($item['Bangunan']) == "4") {
                                                                      echo "Tembok";
                                                                    }elseif (($item['Bangunan']) == "3") {
                                                                      echo "setengah tembok";
                                                                    }elseif (($item['Bangunan']) == "2") {
                                                                      echo "Triplex";
                                                                    }elseif (($item['Bangunan']) == "1") {
                                                                      echo "Gedeg";
                                                                    }elseif (($item['Bangunan']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="1">Gedeg</option>
                                                                  <option value="2">Triplex</option>
                                                                  <option value="3">setengah tembok</option>
                                                                  <option value="4">Tembok</option>
                                                                  <option value="5">2 Lantai</option>
                                                        </select>
                                                      </div>
                                                </div>
                                                      
                                          </div>

                                          <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jenis Lantai Yang Dipergunakan</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Lantai" id="Lantai" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['Lantai']; ?>">
                                                                    <?php
                                                                    if (($item['Lantai']) == "5") {
                                                                      echo "Granit";
                                                                     }elseif (($item['Lantai']) == "4") {
                                                                      echo "Keramik bagus";
                                                                    }elseif (($item['Lantai']) == "3") {
                                                                      echo "Keramik sederhana";
                                                                    }elseif (($item['Lantai']) == "2") {
                                                                      echo "Ubin / Tegel";
                                                                    }elseif (($item['Lantai']) == "1") {
                                                                      echo "Tanah";
                                                                    }elseif (($item['Lantai']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="1">Tanah</option>
                                                                  <option value="2">Ubin / Tegel</option>
                                                                  <option value="3">Keramik sederhana</option>
                                                                  <option value="4">Keramik bagus</option>
                                                                  <option value="5">Granit</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Model Ruangan Rumah</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Ruangan" id="Ruangan" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['Ruangan']; ?>">
                                                                    <?php
                                                                    if (($item['Ruangan']) == "5") {
                                                                      echo "Tiga ruangan lebih";
                                                                     }elseif (($item['Ruangan']) == "4") {
                                                                      echo "Tiga ruangan rapi dan bersih";
                                                                    }elseif (($item['Ruangan']) == "3") {
                                                                      echo "Tiga ruangan sederhana";
                                                                    }elseif (($item['Ruangan']) == "2") {
                                                                      echo "Dua ruangan";
                                                                    }elseif (($item['Ruangan']) == "1") {
                                                                      echo "Satu ruangan";
                                                                    }elseif (($item['Ruangan']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="1">Satu ruangan</option>
                                                                  <option value="2">Dua ruangan</option>
                                                                  <option value="3">Tiga ruangan sederhana</option>
                                                                  <option value="4">Tiga ruangan rapi dan bersih</option>
                                                                  <option value="5">Tiga ruangan lebih</option>
                                                        </select>
                                                      </div>

                                               </div>       
                                          </div>
                                          <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pemakaian Listrik Rumah/label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Listrik" id="Listrik" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['Listrik']; ?>">
                                                                    <?php
                                                                    if (($item['Listrik']) == "5") {
                                                                      echo "2200 KVA.";
                                                                     }elseif (($item['Listrik']) == "4") {
                                                                      echo "1300 KVA.";
                                                                    }elseif (($item['Listrik']) == "3") {
                                                                      echo "900 KVA.";
                                                                    }elseif (($item['Listrik']) == "2") {
                                                                      echo "450 KVA.";
                                                                    }elseif (($item['Listrik']) == "1") {
                                                                      echo "Penggunaan listrik menyambungkan dengan milik keluarga";
                                                                    }elseif (($item['Listrik']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="1">Penggunaan listrik menyambungkan dengan milik keluarga</option>
                                                                  <option value="2">450 KVA.</option>
                                                                  <option value="3">900 KVA.</option>
                                                                  <option value="4">1300 KVA.</option>
                                                                  <option value="5">2200 KVA.</option>
                                                        </select>
                                                      </div>
                                          </div>

                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jenis Sepeda Motor Yang Dimiliki</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="Motor" id="Motor" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['Motor']; ?>">
                                                                    <?php
                                                                    if (($item['Motor']) == "5") {
                                                                      echo "Lebih dari 1 sepeda motor / mobil";
                                                                     }elseif (($item['Motor']) == "4") {
                                                                      echo "Punya, usia < 5 Tahun";
                                                                    }elseif (($item['Motor']) == "3") {
                                                                      echo "Punya, usia <= 10 Tahun dan >= 5 Tahun";
                                                                    }elseif (($item['Motor']) == "2") {
                                                                      echo "Punya, usia > 10 tahun";
                                                                    }elseif (($item['Motor']) == "1") {
                                                                      echo "Tidak punya";
                                                                    }elseif (($item['Motor']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="1">Tidak punya</option>
                                                                  <option value="2">Punya, usia > 10 tahun</option>
                                                                  <option value="3">Punya, usia <= 10 Tahun dan >= 5 Tahun</option>
                                                                  <option value="4">Punya, usia < 5 Tahun</option>
                                                                  <option value="5">Lebih dari 1 sepeda motor / mobil</option>
                                                        </select>
                                                      </div>

                                                      
                                          </div>
                                          </div>
                                    <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jenis Televisi Yang Digunakan></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="TV" id="TV" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['TV']; ?>">
                                                                    <?php
                                                                    if (($item['TV']) == "5") {
                                                                      echo "Mempunyai lebih dari 1 televisi";
                                                                     }elseif (($item['TV']) == "4") {
                                                                      echo "Televisi LED Besar";
                                                                    }elseif (($item['TV']) == "3") {
                                                                      echo "Televisi LED";
                                                                    }elseif (($item['TV']) == "2") {
                                                                      echo "Televisi model lama";
                                                                    }elseif (($item['TV']) == "1") {
                                                                      echo "Tidak punya";
                                                                    }elseif (($item['TV']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="1">Tidak punya</option>
                                                                  <option value="2">Televisi model lama</option>
                                                                  <option value="3">Televisi LED</option>
                                                                  <option value="4">Televisi LED Besar</option>
                                                                  <option value="5">Mempunyai lebih dari 1 televisi</option>
                                                        </select>
                                                      </div>
                                          </div>

                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">HP Yang Dimiliki Dalam Satu Keluarga</label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="HP" id="HP" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['HP']; ?>">
                                                                    <?php
                                                                    if (($item['HP']) == "5") {
                                                                      echo "Memiliki HP / Tablet / Laptop";
                                                                     }elseif (($item['HP']) == "4") {
                                                                      echo "Memiliki HP / Tablet";
                                                                    }elseif (($item['HP']) == "3") {
                                                                      echo "Punya model android";
                                                                    }elseif (($item['HP']) == "2") {
                                                                      echo "Punya model lama (bukan android)";
                                                                    }elseif (($item['HP']) == "1") {
                                                                      echo "Tidak punya";
                                                                    }elseif (($item['HP']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="1">Tidak punya</option>
                                                                  <option value="2">Punya model lama (bukan android)</option>
                                                                  <option value="3">Punya model android</option>
                                                                  <option value="4">Memiliki HP / Tablet</option>
                                                                  <option value="5">Memiliki HP / Tablet / Laptop</option>
                                                        </select>
                                                      </div>

                                                    </div>  
                                          </div>
                                          
                          <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Ajaran</div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="ThAjar" id="ThAjar" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['ThAjar']; ?>">
                                                                    <?php
                                                                    if (($item['ThAjar']) == "2022/2023") {
                                                                      echo "2022/2023";
                                                                     }elseif (($item['ThAjar']) == "2021/2022") {
                                                                      echo "2021/2022";
                                                                    }elseif (($item['ThAjar']) == "2019/2020") {
                                                                      echo "2019/2020";
                                                                    }elseif (($item['ThAjar']) == "2018/2019") {
                                                                      echo "2018/2019";
                                                                    }elseif (($item['ThAjar']) == "2017/2018") {
                                                                      echo "2017/2018";
                                                                      }elseif (($item['ThAjar']) == "2016/2017") {
                                                                      echo "2016/2017";
                                                                    }elseif (($item['ThAjar']) == "2015/2016") {
                                                                      echo "2015/2016";
                                                                    }elseif (($item['ThAjar']) == "2014/2015") {
                                                                      echo "2014/2015";
                                                                    }elseif (($item['ThAjar']) == "2013/2014") {
                                                                      echo "2013/2014";
                                                                      }elseif (($item['ThAjar']) == "2012/2013") {
                                                                      echo "2012/2013";
                                                                    }elseif (($item['ThAjar']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
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