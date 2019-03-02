<?php

class nilai extends Database {
    var $table = 'nilai';
    var $table2 = 'siswa';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }    

    function insertnilai($id_nilai,$NIS, $id_mapel, $Nilai_Latihan, $Nilai_Tugas, $Nilai_Kuis, $Nilai_UTS, $Nilai_UAS, $convert_nilai) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_nilai.'","'.$NIS.'", "'.$id_mapel.'", "'.$Nilai_Latihan.'", "'.$Nilai_Tugas.'", "'.$Nilai_Kuis.'", "'.$Nilai_UTS.'", "'.$Nilai_UAS.'", "'.$convert_nilai.'")';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
     function getdata($id){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_nilai = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }

function updatenilai($id_nilai,$NIS, $id_mapel, $Nilai_Latihan, $Nilai_Tugas, $Nilai_Kuis, $Nilai_UTS, $Nilai_UAS, $convert_nilai)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET id_mapel="'.$id_mapel.'", Nilai_Latihan="'.$Nilai_Latihan.'", Nilai_Tugas="'.$Nilai_Latihan.'", Nilai_Tugas="'.$Nilai_Tugas.'", Nilai_Kuis="'.$Nilai_Kuis.'", Nilai_UTS="'.$Nilai_UTS.'", Nilai_UAS="'.$Nilai_UAS.'", convert_nilai="'.$convert_nilai.'" where id_nilai="'.$id_nilai.'" AND NIS="'.$NIS.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));

        
    }

 function deletenilai($id)
 {
        $con = $this->dbconnect();
        $sql = 'DELETE FROM '.$this->table.' where id_nilai="'.$id.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
}

?>