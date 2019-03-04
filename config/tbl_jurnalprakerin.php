<?php

class tbl_jurnalprakerin extends Database {
    var $table = 'tbl_jurnalprakerin';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select t_prakerin_siswa.id_siswa_prakerin, tbl_jurnalprakerin.id_jurnalprakerin, tbl_jurnalprakerin.jurnal, siswa.nis, siswa.namaSiswa, t_prakerin.id_tmp_prakerin, t_prakerin.nama_prakerin FROM tbl_jurnalprakerin JOIN t_prakerin_siswa ON tbl_jurnalprakerin.id_siswa_prakerin = t_prakerin_siswa.id_siswa_prakerin JOIN siswa ON t_prakerin_siswa.nis = siswa.nis JOIN t_prakerin ON t_prakerin_siswa.id_tmp_prakerin = t_prakerin.id_tmp_prakerin";
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

    function getJurnalById($id_jurnalprakerin)
    {
        $con = $this->dbconnect();
        $sql = 'select t_prakerin_siswa.id_siswa_prakerin, tbl_jurnalprakerin.id_jurnalprakerin, tbl_jurnalprakerin.jurnal, siswa.nis, siswa.namaSiswa, t_prakerin.id_tmp_prakerin, t_prakerin.nama_prakerin FROM tbl_jurnalprakerin JOIN t_prakerin_siswa ON tbl_jurnalprakerin.id_siswa_prakerin = t_prakerin_siswa.id_siswa_prakerin JOIN siswa ON t_prakerin_siswa.nis = siswa.nis JOIN t_prakerin ON t_prakerin_siswa.id_tmp_prakerin = t_prakerin.id_tmp_prakerin where id_jurnalprakerin = '.(int)$id_jurnalprakerin;
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

    function updatetbl_jurnalprakerin($id_jurnalprakerin, $id_siswa_prakerin, $nama)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET id_jurnalprakerin="'.$id_jurnalprakerin.'", id_siswa_prakerin="'.$id_siswa_prakerin.'", jurnal="'.$nama.'" where id_jurnalprakerin= "'.$id_jurnalprakerin.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }

    function deletetbl_jurnalprakerin($id_jurnalprakerin)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where id_jurnalprakerin = "'.$id_jurnalprakerin.'"';
        $query = mysqli_query($con,$sql);
    }

}
    ?>