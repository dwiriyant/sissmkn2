<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/listkelas.php");
$kelas = new listkelas();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>
    
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>List Kelas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Laporan Nilai</a></li>
                            <li class="active">List Transkrip Nilai Siswa</li>
                        </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

                 <div class="row">
                    <div class="col-md-12">

                        <div class="card"><br>
                            <div class="card-body">
                                <div class="col col-md-2"><label for="select" class=" form-control-label">TAHUN AKADEMIK</label></div>
                                  <div class="col-sm-2">
                                    <div class="input-group">
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                      <div class="col col-md-2 input-group-btn"><button class="btn btn-primary">Submit</button></div>
                                    </div>
                                  </div>
                            </div>

                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>KELAS</th>
                                            <th>JURUSAN</th>
                                            <th>MATA PELAJARAN</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($kelas->tampilperkelas() as $item) {?>

                                            <tr>
                                                <td><?php echo $item['kelas']; ?></td>
                                                <td><?php echo $item['program']; ?></td>
                                                <td><?php echo $item['']; ?></td>

                                                <td><center><a href="transkripnilai.php">
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