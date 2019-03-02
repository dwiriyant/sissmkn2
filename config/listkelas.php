<?php

class listkelas extends Database {
	var $table = 't_kelas';
    var $table3 = 't_belajar';

    function tampilperkelas(){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
    while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }
        return $hasil;

    }

    function filtersiswaperkelas(){
        $con = $this->dbconnect();
        $sql = "SELECT t_kelas.id_kelas, t_kelas.kelas, t_kelas.program, (SELECT count(no_induk) from t_absensi where t_absensi.id_kelas = t_kelas.id_kelas) as total FROM t_kelas";
        $query = mysqli_query($con,$sql);
      while($data = mysqli_fetch_array($query)){
      $hasil[] = $data;
    }
        return $hasil;

    }



}

?>