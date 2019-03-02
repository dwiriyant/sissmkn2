
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Absensi.php");
$absensi = new Absensi();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Absensi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Absensi</a></li>
                            <li class="active">Absensi Siswa</li>
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
                            <strong class="card-title">Form Absensi</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="<?php echo $siteurl; ?>/views/absensi/absensisiswa/proses.php?aksi=datangrfid" method="post" class="form-horizontal">
                                      
                                          <div class="col-6">
                                              <div class="col col-md-4"><label for="text-input" class=" form-control-label" > <strong class="card-title">Masukan Nomor Induk </strong></label></div>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="no_induk" class="form-control" autofocus></div>
                                          </div>
                                      
                                      
                            </div>
                            </div>
                            </div>
                    <div class="card-footer">

                     <strong> <button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Check - In </button></strong>
                      
                      
                                      </form>
                                      <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                               
                                    
                                    <th>Nomor Induk</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Datang</th>
                                    <th>Pulang</th>
                                    <TH>FOTO</TH>
                                    
                                  </tr>

                                  
                                </thead>
                                <tbody>

                               <?php
                                    foreach($absensi->tampilidabsenrfid() as $item){
                                        
                                ?>
                                
                               
                               <tr>
                                   <td><?php echo $item['no_induk']; ?></td>
                                   <td><?php echo $item['nama']; ?></td>
                                   <td><?php echo $item['kelas']; ?></td>
                                   <td><?php echo $item['datang']; ?></td>
                                   <td><?php echo $item['pulang']; ?></td>
                                   <td><?="<img src='views/kesiswaan/pendaftaran/ffoto/".$item['foto_daftar']."'style='width:120px; height:120px;'>"?></td>
                                   
                                </tr>
                                
                              </tbody>
                              <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>  