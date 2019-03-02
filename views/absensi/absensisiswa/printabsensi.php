<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Absensi.php");
$absensi = new Absensi();
?>
                    
                      <form action="">
                        <h2 align="Center">Daftar Absensi Siswa Tanggal
                                        <?php
                                        $date = $_GET['tanggal']; // Hasil: 20-01-2017 05:32:15
                                        $tanggal = date_create($date);
                                        echo date_format($tanggal,"j F Y");
                                        ?>
                        </h2>
                          <?php
                          echo
                          "<script>
                          window.print();
                          </script>";
                          ?>
                                                              
                         <table border="1" cellpadding="0" cellspacing="0" bordercolor="black">
                                    
                              <tr align="center" valign="middle">
                              <td align="center" valign="middle" width="100px" rowspan="2"><b>No Induk</b></td>
                              <td align="center" valign="middle" width="300px"rowspan="2"><b>Nama Siswa</b></td>
                              <td align="center" valign="middle" width="100px"rowspan="2"><b>Kelas</b></td>
                              <td align="center" valign="middle" width="100px"rowspan="2"><b>Kelamin</b></td>
                              <td align="center" valign="center" width="100px" colspan="10"><b>Keterangan</b></td>
                              </tr>
                              <tr align="center" valign="middle">
                              <td align="center" valign="middle" width="100px"><b>1</b></td>
                              <td align="center" valign="middle" width="100px"><b>2</b></td>
                              <td align="center" valign="middle" width="100px"><b>3</b></td>
                              <td align="center" valign="middle" width="100px"><b>4</b></td>
                              <td align="center" valign="middle" width="100px"><b>5</b></td>
                              <td align="center" valign="middle" width="100px"><b>6</b></td>
                              <td align="center" valign="middle" width="100px"><b>7</b></td>
                              <td align="center" valign="middle" width="100px"><b>8</b></td>
                              <td align="center" valign="middle" width="100px"><b>9</b></td>
                              <td align="center" valign="middle" width="100px"><b>10</b></td>
                              </tr>
                                <?php
                                    foreach($absensi->filterjumlahsiswaperkelas($_GET['id_kelas']) as $item){
                                        ?>
                              <tr align="center" valign="middle">

                              <td align="center" valign="middle" width="100px"><?php echo $item['no_induk']; ?></td>
                              <td align="center" valign="middle" width="100px">&nbsp<?php echo $item['nama']; ?></td>
                              <td align="center" valign="middle" width="100px"><?php echo $item['kelas']; ?></td>
                              <td align="center" valign="middle" width="25px"><?php echo $item['kelamin']; ?></td>
                              <td align="center" valign="middle" width="25px"></td>
                              <td align="center" valign="middle" width="25px"></td>
                              <td align="center" valign="middle" width="25px"></td>
                              <td align="center" valign="middle" width="25px"></td>
                              <td align="center" valign="middle" width="25px"></td>
                              <td align="center" valign="middle" width="25px"></td>
                              <td align="center" valign="middle" width="25px"></td>
                              <td align="center" valign="middle" width="25px"></td>
                              <td align="center" valign="middle" width="25px"></td>
                              <td align="center" valign="middle" width="25px"></td>
                              </tr>
                              
                              <?php } ?>
                              </table>
</form>