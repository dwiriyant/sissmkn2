<?php

class tbl_nilaiprakerin extends Database {
    var $table = 'tbl_nilaiprakerin';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select t_prakerin_siswa.id_siswa_prakerin, tbl_nilaiprakerin.id_nilaiprakerin, t_sis_thajar.nis, t_sis_thajar.namaSiswa, t_prakerin.id_tmp_prakerin, t_prakerin.nama_prakerin, tbl_nilaiprakerin.at1, tbl_nilaiprakerin.at2, tbl_nilaiprakerin.at3, tbl_nilaiprakerin.at4, tbl_nilaiprakerin.ant1, tbl_nilaiprakerin.ant2, tbl_nilaiprakerin.ant3, tbl_nilaiprakerin.ant4, tbl_nilaiprakerin.ant5, tbl_nilaiprakerin.ant6 FROM tbl_nilaiprakerin JOIN t_prakerin_siswa ON tbl_nilaiprakerin.id_siswa_prakerin = t_prakerin_siswa.id_siswa_prakerin JOIN t_sis_thajar ON t_prakerin_siswa.nis = t_sis_thajar.nis JOIN t_prakerin ON t_prakerin_siswa.id_tmp_prakerin = t_prakerin.id_tmp_prakerin";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function getNamaPrakerin()
    {
        $con = $this->dbconnect();
        $sql = "select id_tmp_prakerin, nama_prakerin from t_prakerin";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
        print_r($randomString);
        die();

}

function tampilidprs() {
        $date = date('dmHi');
        $id = "PRS".$date;
        return $id;
    }
    
    function getDetailtbl_nilaiprakerin($id_nilaiprakerin){
        $con = $this->dbconnect();
        $sql = 'select t_prakerin_siswa.id_siswa_prakerin, tbl_nilaiprakerin.id_nilaiprakerin, t_sis_thajar.nis, t_sis_thajar.namaSiswa, t_prakerin.id_tmp_prakerin, t_prakerin.nama_prakerin, t_prakerin.program, t_prakerin_siswa.tgl_start, t_prakerin.pembimbing, tbl_nilaiprakerin.at1, tbl_nilaiprakerin.at2, tbl_nilaiprakerin.at3, tbl_nilaiprakerin.at4, tbl_nilaiprakerin.ant1, tbl_nilaiprakerin.ant2, tbl_nilaiprakerin.ant3, tbl_nilaiprakerin.ant4, tbl_nilaiprakerin.ant5, tbl_nilaiprakerin.ant6 FROM tbl_nilaiprakerin JOIN t_prakerin_siswa ON tbl_nilaiprakerin.id_siswa_prakerin = t_prakerin_siswa.id_siswa_prakerin JOIN t_sis_thajar ON t_prakerin_siswa.nis = t_sis_thajar.nis JOIN t_prakerin ON t_prakerin_siswa.id_tmp_prakerin = t_prakerin.id_tmp_prakerin where id_nilaiprakerin = '.(int)$id_nilaiprakerin;
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }

   function updatetbl_nilaiprakerin($id_nilaiprakerin, $id_siswa_prakerin, $at1, $at2, $at3, $at4, $ant1, $ant2, $ant3, $ant4, $ant5, $ant6)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET id_nilaiprakerin="'.$id_nilaiprakerin.'", at1="'.$at1.'", at2="'.$at2.'", at3="'.$at3.'", at4="'.$at4.'", ant1="'.$ant1.'", ant2="'.$ant2.'", ant3="'.$ant3.'", ant4="'.$ant4.'", ant5="'.$ant5.'", ant6="'.$ant6.'" where id_nilaiprakerin= "'.$id_nilaiprakerin.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }

   function deletetbl_nilaiprakerin($id_nilaiprakerin)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where id_nilaiprakerin = "'.$id_nilaiprakerin.'"';
        $query = mysqli_query($con,$sql);
    }
}
    ?>