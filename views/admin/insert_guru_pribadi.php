<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Guru.php");
$Guru = new t_staf();
?>



<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

<style>

#regForm {
  background-color: #ffffff;
  font-family: inherit;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: inherit;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Guru</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Guru</a></li>
                            <li class="active">Form Tambah Guru</li>
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
                            <strong class="card-title">Form </strong>Tambah Guru
                        </div>
                        
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                                  <form action="<?php echo $siteurl; ?>/views/admin/proses_guru.php?aksi=insert" method="post" class="form-horizontal" id="regForm" enctype="multipart/form-data">
                                      <div class="card-body">
                                      <div class="tab"> 

                                      <div class="row" style = "margin-top:23px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="user_id"  class="form-control" ></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" class="form-control">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">NIP</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="nip" class="form-control"></div>
                                          </div>
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
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                            <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                              <div class="col-12 col-md-9"><input type="text" name="alamat" class="form-control"></div>
                                            </div>
                                              
                                          <div class="col-6">
                                            <div class="col col-md-3"><label class=" form-control-label">Tugas </label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="tugas" class="form-control"></div>
                                            </div>
                                          </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telepon</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="telp" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">HP</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="hp" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Email</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="email" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mata Pelajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="pelajaran" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal Lahir</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="tgl_lahir" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="tmp_lahir" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kode Tanggal</label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="kode" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pangkat</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="pangkat" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kategori</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="kategori" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Profil</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="profilstaf" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 1px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tahun Ajar</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="th_ajar" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col-12 col-md-9"><input type="hidden" id="text-input" value="<?= $Guru->generateRandomString(); ?>" name="pass" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Induk Baru</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="no_induk_baru" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                           
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Depan Gelar</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="depan_gelar" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Belakang Gelar</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="belakang_gelar" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama Ibu Kandung</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="nama_ibu_kandung" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Pos</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kode_pos" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Golongan Darah</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="golongan_darah" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kelurahan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kelurahan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="kecamatan" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Provinsi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="provinsi" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Daerah</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="daerah" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Status</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="status_nikah" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Masuk</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tanggal_masuk" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Pegawai</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="jenis_pegawai" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Sertifikasi</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sertifikasi_guru" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tamat PNS</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tmt_pns" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab">                                   
                                       <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Akses</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="akses" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Arsip</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="arsip" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tugas Tambahan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tugas_tambahan" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pangkat PNS</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="pangkat_pns" class="form-control"></div>
                                          </div>
                                      </div>                                   
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jabatan PNS</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="jabatan_pns" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Golongan PNS</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="golongan_pns" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan Terakhir</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="pendidikan_terahir" class="form-control"></div>
                                          </div>
                                      </div>                       
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Program Dimampui</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="prog_diampu" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masa Kerja Tahun</label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="masakerja_th" class="form-control">
                                            </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Masa Kerja Bulan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="masakerja_bl" class="form-control"></div>
                                              </div>
                                          

                                      
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </form>

                    <div class="card-footer">
                      <div style="overflow:auto;">
                        <div style="float:right;">
                          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                      </div>
                      <div style="text-align:center;margin-top:20px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                      </div>
                      </div>

                    
                                      </form>
                    
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>