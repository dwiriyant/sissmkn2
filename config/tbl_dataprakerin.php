<?php

class tbl_dataprakerin extends Database {
    var $table = 'tbl_dataprakerin';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
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

    function inserttbl_dataprakerin($id_dataprakerin, $nis, $nama_siswa, $nama_industri, $status, $tgl_mulai, $tgl_selesai) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$id_dataprakerin.'", "'.$nis.'", "'.$nama_siswa.'", "'.$nama_industri.'", "'.$status.'", "'.$tgl_mulai.'", "'.$tgl_selesai.'")';
        $query = mysqli_query($con,$sql);
    }
    
    function getDetailtbl_dataprakerin($id_dataprakerin){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where id_dataprakerin = "'.$id_dataprakerin.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }

   function updatetbl_dataprakerin($id_dataprakerin, $nis, $nama_siswa, $nama_industri, $status, $tgl_mulai, $tgl_selesai)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET nis="'.$nis.'", nama_siswa="'.$nama_siswa.'", nama_industri="'.$nama_industri.'", status="'.$status.'", tgl_mulai="'.$tgl_mulai.'", tgl_selesai="'.$tgl_selesai.'" where id_dataprakerin= "'.$id_dataprakerin.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }

    function deletetbl_prakerin($id_dataprakerin)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where id_dataprakerin = "'.$id_dataprakerin.'"';
        $query = mysqli_query($con,$sql);
    }
}
    ?>