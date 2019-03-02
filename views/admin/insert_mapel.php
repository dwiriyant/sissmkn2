<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Mapel.php"); ?>
<?php
$object = new t_belajar();
$show = $object->tampildata();
?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Mata Pelajaran</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">List</a></li>
                            <li class="active">Input Mata Pelajaran</li>
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
                            <strong class="ccrd-title">Mata Pelajaran</strong>
                        </div>
                        <div class="card-body card-block">

                          <!-- Credit Card -->
                          <form action="proses.php?aksi=insert" method="post">
                           <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">ID Mata Pelajaran</label></div>
                           <div class="col col-md-6"><input type="text" id="idbelajar" name="idbelajar" placeholder="" class="form-control"></div>
                          </div>


                           <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Tahun Ajaran Pelajaran</label></div>
                             <div class="col col-md-6"><input type="text" id="thajar" name="thajar" placeholder="" class="form-control"></div>
                           </div>
                          

                             <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Semester</label></div>
                             <div class="col col-md-6"><input type="text" id="sem" name="sem" placeholder="" class="form-control"></div>
                           </div>

                                <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Mata Pelajaran</label></div>
                              <div class="col col-md-6"><input type="text" id="pelajaran" name="pelajaran" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">NIP</label></div>
                              <div class="col col-md-6"><input type="text" id="nip" name="nip" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Tanggal Awal</label></div>
                              <div class="col col-md-6"><input type="date" id="tglawal" name="tglawal" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Tanggal Akhir</label></div>
                              <div class="col col-md-6"><input type="date" id="nip" name="tglakhir" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Status</label></div>
                              <div class="col col-md-6"><input type="text" id="status" name="status" placeholder="" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-sm-1"><label for="input-normal" class=" form-control-label">Keterangan</label></div>
                              <div class="col col-md-6"><input type="text" id="ket" name="ket" placeholder="" class="form-control"></div>
                            </div>                                                                                                                     </div>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Next
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
