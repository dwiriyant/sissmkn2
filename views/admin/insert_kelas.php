<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Jurusan.php"); ?>
        <!-- Header-->
<?php
$object = new Jurusan();
$show = $object->tampildata();
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data kelas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">List</a></li>
                            <li class="active">Input Kelas</li>
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
                            <strong class="ccrd-title">Data Kelas</strong>
                        </div>
                        <div class="card-body card-block">

                          <!-- Credit Card -->
                          
                            <form action="proses_kelas.php?aksi=insert" method="post">
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">ID Kelas</label></div>
                            <div class="col col-md-2"><input type="text" id="id_kelas" name="id_kelas" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Kode Kelas</label></div>
                            <div class="col col-md-6"><input type="text" id="kelas" name="kelas" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">NIP</label></div>
                            <div class="col col-md-6"><input type="text" id="nip" name="nip" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Tingkat</label></div>
                            <div class="col col-md-6"><input type="text" id="tingkat" name="tingkat" placeholder="" class="form-control"></div>
                         </div>
                         <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Program</label></div>
                            <div class="col col-md-6"><input type="text" id="program" name="program" placeholder="" class="form-control"></div>
                         </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Ruangan</label></div>
                            <div class="col col-md-6"><input type="text" id="ruang" name="ruang" placeholder="" class="form-control"></div>
                         </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Ketua Kelas</label></div>
                            <div class="col col-md-6"><input type="text" id="ketua" name="ketua" placeholder="" class="form-control"></div>
                         </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Jam Masuk</label></div>
                            <div class="col col-md-6"><input type="text" id="masuk" name="masuk" placeholder="" class="form-control"></div>
                         </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Guru BK</label></div>
                            <div class="col col-md-6"><input type="text" id="guru_bk" name="guru_bk" placeholder="" class="form-control"></div>
                         </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Tahun Ajaran</label></div>
                            <div class="col col-md-6"><input type="text" id="th_ajar" name="th_ajar" placeholder="" class="form-control"></div>
                         </div>
                          <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Profil</label></div>
                            <div class="col col-md-6"><input type="text" id="profil" name="profil" placeholder="" class="form-control"></div>
                         </div>
                       </SELECT>
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


   <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>


</body>
</html>
