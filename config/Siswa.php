<?php

class Siswa extends Database {
     var $table = 'siswa';

    function tampildata() {
        $con = $this->dbconnect();
         $sql = "select s.*, b.kk as kk from siswa as s left join jurusan as b on s.kodeJurusan = b.kodeJurusan";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }
    function getsiswa($kodeJurusan) {
        $con = $this->dbconnect();
        $sql = "select s.*, b.kk as kk from siswa as s left join jurusan as b on s.kodeJurusan = b.kodeJurusan where b.kodeJurusan='".$kodeJurusan."' AND s.id_kelas = 0";
        // var_dump($sql);exit();
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }
     function getkelas($kodeJurusan) {    
        $con = $this->dbconnect();
        $sql = "select * from kelas where kodeJurusan='".$kodeJurusan."'";
        // var_dump($sql);exit();
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;  
    }
    function pembagiankelas($id_siswa,$id_kelas) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO detail_pembagian_kelas VALUES("",'.$id_kelas.', '.$id_siswa.')';
        $query = mysqli_query($con,$sql);
    }

     function update_siswabaru($id_siswa,$id_kelas) {
        $con = $this->dbconnect();
        $sql = 'UPDATE siswa SET id_kelas = "'.$id_kelas.'" where nis = "'.$id_siswa.'"';
        $query = mysqli_query($con,$sql);
    }
   

    function insertsiswa($K1, $K2, $K3, $K4, $K5, $K6, $K7, $K8, $K9, $K10, $K11, $K12, $K13, $K14, $K15, $K16,$K17, $K18, $K19, $K20, $K21) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$K1.'", "'.$K2.'", "'.$K3.'", "'.$K4.'", "'.$K5.'", "'.$K6.'", "'.$K7.'", "'.$K8.'", "'.$K9.'", "'.$K10.'", "'.$K11.'", "'.$K12.'", "'.$K13.'", "'.$K14.'", "'.$K15.'", "'.$K16.'", "'.$K17.'", "'.$K18.'", "'.$K19.'", "'.$K20.'", "'.$K21.'")';
        $query = mysqli_query($con,$sql);
    }
     function getdata($id){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where nis = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }
function updatesiswa($K1, $K2, $K3, $K4, $K5, $K6, $K7, $K8, $K9, $K10, $K11, $K12, $K13, $K14, $K15, $K16, $K17, $K18, $K19, $K20, $K21)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET nisn="'.$K2.'", nama="'.$K3.'", jk="'.$K4.'", tempatLahir="'.$K5.'", tanggalLahir="'.$K6.'", agama="'.$K7.'", email="'.$K8.'", hp="'.$K9.'", telepon="'.$K10.'", pass="'.$K11.'", anakKe="'.$K12.'", bahasa="'.$K13.'", jenisAnak="'.$K14.'", jsa="'.$K15.'", jsk="'.$K16.'", jst="'.$K17.'", kewarganegaraan="'.$K18.'", thnAjaran="'.$K19.'", status="'.$K20.'", id_kelas="'.$K21.'" where nis = "'.$K1.'"';
        $query = mysqli_query($con,$sql);
    }


}

?>