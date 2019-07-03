<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/tbl_nilaiprakerin.php"); ?>
<?php
$object = new tbl_nilaiprakerin();
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Nilai Prakerin</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                           <li><a href="#">Data Nilai Prakerin</a></li>
                            <li class="active">List Data Nilai Prakerin</li>
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
                        <div class="card-header">
                            <strong class="card-title">List </strong> Data Nilai Prakerin
                        </div>
                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>N0.</th>
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Nama Industri</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php $i = 1; ?>
                                <?php foreach($object->tampildata() as $data) {
                                ?>
                                  <tr>
                                 <th scope="row"><?= $i++; ?></th>
                                 <td><?= $data['no_induk']; ?></td>
                                 <td><?= $data['nama']; ?></td>
                                 <td><?= $data['nama_prakerin']; ?></td>
                                
                                <td>
                                      <a href="detail_nilaiprakerin.php?id_nilaiprakerin=<?=$data['id_nilaiprakerin']; ?> &aksi=update"><button title="Detail" type="button" class="btn btn-primary btn-sm"><i class="fa ti-eye"></i></button></a>
                                      <a href="edit_nilaiprakerin.php?id_nilaiprakerin=<?=$data['id_nilaiprakerin']; ?> &aksi=update"><button title="update" type="button" class="btn btn-success btn-sm"><i class="fa ti-pencil-alt"></i></button></a>
                                      <a href="proses_nilaiprakerin.php?id_nilaiprakerin=<?=$data['id_nilaiprakerin']; ?> &aksi=hapus"><button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-eraser"></i></button></a>
                                      <a href="cetak_nilaiprakerin.php?id_nilaiprakerin=<?=$data['id_nilaiprakerin']; ?>" target="_blank"><button title="cetak" type="button" class="btn btn-warning btn-sm">Cetak Nilai</button></a>
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