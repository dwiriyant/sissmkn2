<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/listkelas.php");
$listkelas = new listkelas ();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
    
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>List Nilai Harian</h1>
                    <p><?= $_SESSION['Nama_guru']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Nilai Harian</a></li>
                        <li class="active">List Nilai Harian Siswa</li>
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
                                    <table class="table table-bordered">
                                        <tr>
                                          <tr><td width="200">TAHUN AKADEMIK</td>
                                            <td> </td>
                                          </tr>
                                        </tr>

                                        <tr>
                                            <td>SEMESTER</td>
                                            <td>  </td>
                                        </tr>
                                    </table>

                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>JURUSAN</th>
                                            <th>MATA PELAJARAN</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php {?>

                                            <tr>
                                                <td><?php echo $item['#']; ?></td>
                                                <td><?php echo $item['#']; ?></td>
                                                <td><?php echo $item['#']; ?></td>

                                                <td><center><a href="nilaiharian.php">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a></center>
                                                </td>
                                            </tr>    

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

        </div>
    </div>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>