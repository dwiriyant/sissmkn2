<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Mapel.php"); ?>
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
                          <?php $object = new t_belajar();
                          $id = $_GET["idbelajar"];?>

                                      
                                      <div class="row form-group">
                                      <form action="proses.php?aksi=update" method="post">
                                       <?php foreach($object->getdata($id) as $data) {
                                ?>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Mapel</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="idbelajar" name="idbelajar" placeholder="" class="form-control" value="<?= $data['idbelajar']; ?>" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Ajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="thajar" name="thajar" placeholder="" class="form-control"value="<?= $data['thajar']; ?>" readonly></div>
                                              </div>
                                          </div>
                                      <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Semester</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="sem" name="sem" placeholder="" class="form-control"value="<?= $data['sem']; ?>" readonly></div>
                                              </div>
                                              </div>
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pelajaran</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="pelajaran" name="pelajaran" placeholder="" class="form-control"value="<?= $data['pelajaran']; ?>" readonly></div>
                                              </div>
                                              </div>
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIP</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nip" name="nip" placeholder="" class="form-control"value="<?= $data['nip']; ?>" readonly></div>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Awal</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="tglawal" name="tglawal" placeholder="" class="form-control"value="<?= $data['tglawal']; ?>" readonly></div>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Akhir</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="tglakhir" name="tglakhir" placeholder="" class="form-control"value="<?= $data['tglakhir']; ?>" readonly></div>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="status" name="status" placeholder="" class="form-control"value="<?= $data['status)']; ?>" readonly></div>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="form-group">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keterangan</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="ket" name="ket" placeholder="" class="form-control"value="<?= $data['ket)']; ?>" readonly></div>
                                              </div>
                                          </div>
                                          <?php } ?>



                                      </div>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer">
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
