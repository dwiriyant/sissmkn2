<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_jurnalprakerin.php"); ?>
<?php
$object = new tbl_jurnalprakerin();
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Jurnal Prakerin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                           <li><a href="#">Data Jurnal Prakerin</a></li>
                            <li class="active">List Data Jurnal Prakerin</li>
                        </ol>
                    </div>
                </div>
            </div>
         </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                        <!-- <div class="card-footer">
                          <a href="#"><button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> Cetak
                          </button>
                          </a>
                        </div> -->
                        <div class="card-header">
                            <strong class="card-title">List </strong> Data Jurnal Prakerin
                        </div>
                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>N0.</th>
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Nama Industri</th>
                                    <th>Jurnal</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php $i = 1; ?>
                                <?php foreach($object->tampildata() as $data) {
                                ?>
                                  <tr>
                                 <th scope="row"><?= $i++; ?></th>
                                 <td><?= $data['nis']; ?></td>
                                 <td><?= $data['namaSiswa']; ?></td>
                                 <td><?= $data['nama_prakerin']; ?></td>
                                 <td><a href="jurnal/<?= $data['jurnal']?>" target="_blank"><?= $data['jurnal']?></a></td>
                                <td>
                                      <a href="detail_jurnalprakerin.php?id_jurnalprakerin=<?=$data['id_jurnalprakerin']; ?> &aksi=update"><button title="Detail" type="button" class="btn btn-primary btn-sm"><i class="fa ti-eye"></i></button></a>

                                      <a href="upload_jurnalprakerin.php?id_jurnalprakerin=<?=$data['id_jurnalprakerin']; ?> &aksi=update"><button title="Upload" type="button" class="btn btn-success btn-sm"><i class="fa ti-upload"></i> Upload Jurnal</button></a>

                                      <a href="proses_jurnalprakerin.php?id_jurnalprakerin=<?=$data['id_jurnalprakerin']; ?> &aksi=hapus"><button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-eraser"></i></button></a>
                                      
                                      </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                        </div>
                        <!-- <div class="card-footer">
                          <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> export
                          </button>
                          <button title="import data dari excel" type="reset" class="btn btn-warning btn-sm">
                            <i class="fa ti-download"></i> import
                          </button>
                        </div> -->
                    </div>
                </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

      <script>
$(document).ready(function() {
   $('#coba').DataTable( {
       dom: 'Bfrtip',
       buttons: [
           'copyHtml5',
           'excelHtml5',
           'csvHtml5',
           'pdfHtml5',
           'print'
       ]
   } );
} );
</script>

    <!-- Right Panel -->

 <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>