<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/beasiswa.php"); ?>
<?php
$object = new t_beasiswa();
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Pengajuan Beasiswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                           <li><a href="#">Data Pengajuan Beasiswa</a></li>
                            <li class="active">List Data Pengajuan Beasiswa</li>
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
                        <div class="card-footer">
                          <a href="exportdataguru.php"><button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> Cetak
                          </button>
                          </a>
                          <a href="tambah_beasiswa.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Data Pengajuan Beasiswa
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                          
                        </div>

                        <div class="card-header">
                            <strong class="card-title">List </strong> Data Pengajuan Beasiswa
                        </div>
                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>N0.</th>
                                    <th>ID Beasiswa</th>
                                    <th>No Induk</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>                                   
                                    <th>Alamat</th>                             
                                    <th>Tahun Ajaran</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php $i = 1; ?>
                                <?php foreach($object->tampildatabsw() as $data) {
                                ?>
                                  <tr>
                                 <th scope="row"><?= $i++; ?></th>
                                 <td><?= $data['idbeasiswa']; ?></td>
                                 <td><?= $data['nis']; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['kelas']; ?></td>                              
                                <td><?= $data['Alamat']; ?></td>
                                <td><?= $data['ThAjar']; ?></td>
                                
                                <td>
                                      <a href="detail_perusahaan.php?id_tmp_prakerin=<?=$data['id_tmp_prakerin']; ?> &aksi=update"><button title="Detail" type="button" class="btn btn-primary btn-sm"><i class="fa ti-eye"></i></button>
                                      <a href="edit_beasiswa.php?idbeasiswa=<?=$data['idbeasiswa']; ?> &aksi=update"><button title="update" type="button" class="btn btn-success btn-sm"><i class="fa ti-pencil-alt"></i></button>
                                      <a href="proses_beasiswa.php?idbeasiswa=<?=$data['idbeasiswa']; ?> &aksi=hapus"><button title="hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-eraser"></i></button></a>
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