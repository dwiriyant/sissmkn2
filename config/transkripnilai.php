<?php

class transkripnilai extends Database {
    var $table = 't_raport';
    var $table2 = 't_siswa';
    var $table3 = 't_kelas';
    var $table4 = 't_belajar';

    function tampiltranskripnilai() {
        $con = $this->dbconnect();
        $sql = 'SELECT t_siswa.nama,t_siswa.no_induk,t_kelas.kelas,t_belajar.pelajaran,t_raport.UTS,t_raport.UAS FROM t_raport
                JOIN t_siswa ON t_siswa.no_induk = t_raport.no_induk
                JOIN t_kelas ON t_kelas.id_kelas = t_raport.id_kelas
                JOIN t_belajar ON t_belajar.idbelajar = t_raport.idbelajar
                WHERE t_belajar.pelajaran = "Matematika"';
        $query = mysqli_query($con,$sql);
    while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }
        return $hasil;

    }

     function tampilkelas() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table3;
        $query = mysqli_query($con,$sql);
    while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }
        return $hasil;

    }

    function tampilmapel() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table4;
        $query = mysqli_query($con,$sql);
    while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }
        return $hasil;

    }

}

?>