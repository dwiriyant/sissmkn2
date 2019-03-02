<?php

class t_beasiswa extends Database {
    var $table = 't_beasiswa';

    function tampildatabsw() {
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

function tampilidbsw() {
        $date = date('dmHi');
        $id = "BW".$date;
        return $id;
    }

    function inserttbl_perusahaan($idbeasiswa, $nis, $nama, $tglsurvey, $kelas, $OrTu, $Alamat, $Surveyor, $Kerja, $Gaji, $Rumah, $Bangunan, $Lantai, $Ruangan, $Listrik, $Motor, $TV, $HP, $Survey, $Total ,$ThAjar) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$idbeasiswa.'","'.$nis.'","'.$nama.'", "'.$tglsurvey.'", "'.$kelas.'", "'.$OrTu.'", "'.$Alamat.'", "'.$Surveyor.'", "'.$Kerja.'", "'.$Gaji.'", "'.$Rumah.'", "'.$Bangunan.'", "'.$Lantai.'", "'.$Ruangan.'", "'.$Listrik.'", "'.$Motor.'", "'.$TV.'", "'.$HP.'", "'.$Survey.'", "'.$Total.'", "'.$ThAjar.'")';
        $query = mysqli_query($con,$sql);
    }


    function getDetailbeasisw($idbeasiswa){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where idbeasiswa = "'.$idbeasiswa.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }

   function updatetbl_perusahaan($idbeasiswa, $nis, $nama, $tglsurvey, $kelas, $OrTu, $Alamat, $Surveyor, $Kerja, $Gaji, $Rumah, $Bangunan, $Lantai, $Ruangan, $Listrik, $Motor, $TV, $HP, $Survey, $Total ,$ThAjar)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET nis="'.$nis.'", nama="'.$nama.'", tglsurvey="'.$tglsurvey.'", kelas="'.$kelas.'", OrTu="'.$OrTu.'", Alamat="'.$Alamat.'", Surveyor="'.$Surveyor.'", Gaji="'.$Gaji.'",Kerja="'.$Kerja.'",Rumah="'.$Rumah.'", Bangunan="'.$Bangunan.'", Lantai="'.$Lantai.'", Ruangan="'.$Ruangan.'" , Listrik="'.$Listrik.'", Motor="'.$Motor.'" , TV="'.$TV.'", HP="'.$HP.'" , Survey="'.$Survey.'", Total="'.$Total.'", ThAjar="'.$ThAjar.'" where idbeasiswa= "'.$idbeasiswa.'"';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }

   function deletetbl_perusahaan($idbeasiswa)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where idbeasiswa = "'.$idbeasiswa.'"';
        $query = mysqli_query($con,$sql);
    }
}
    ?>