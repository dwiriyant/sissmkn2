<?php

class PendaftaranOnline extends Database {


    //var $tablejoin = 'master_produk';
	//var $tablejoin2 = 'form_so';
	var $table = 't_siswadaftar';

function show_jurusan(){
        $con = $this->dbconnect();
		$sql = "SELECT * FROM jurusan";
        $query = mysqli_query($con,$sql);
		return $query;
	}
	function tampilpendaftarantidakditerima(){
        $con = $this->dbconnect();
        $sql = 'select user_id, no_daftar, no_induk, nama, sis_dtrm_prog_khlian, status from t_siswadaftar where status="tidak diterima"';
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

 function tampilpendaftaranditerima(){
        $con = $this->dbconnect();
        $sql = 'select user_id, no_daftar, no_induk, nama, sis_dtrm_prog_khlian, status from t_siswadaftar where status="diterima"';
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

////////SELEKSI/////////

	function editseleksi($user_id,
$no_induk,
$sis_email,
$kelamin,
$nama,
$tmp_lahir,
$tgl_lahir,
$alamat,
$alamat_camat,
$alamat_kodya,
$ayh_tlp,
$agama,
$sis_no_psrta_unas,
$sis_tmt_dri,
$sis_ksenian,
$n_unas,
$n_raport,
$sis_dtrm_prog_khlian,
$th_ajar,
$no_daftar,
$n_test,
$status){
		$con = $this->dbconnect();
		

		$sql = 'UPDATE '.$this->table.'  SET no_induk= "'.$no_induk.'", sis_email = "'.$sis_email.'", kelamin = "'.$kelamin.'", nama = "'.$nama.'", tmp_lahir = "'.$tmp_lahir.'", tgl_lahir = "'.$tgl_lahir.'", alamat = "'.$alamat.'", alamat_camat = "'.$alamat_camat.'" , alamat_kodya = "'.$alamat_kodya.'", ayh_tlp = "'.$ayh_tlp.'", agama = "'.$agama.'", sis_no_psrta_unas = "'.$sis_no_psrta_unas.'", sis_tmt_dri = "'.$sis_tmt_dri.'", sis_ksenian = "'.$sis_ksenian.'", n_unas = "'.$n_unas.'", n_raport = "'.$n_raport.'", sis_dtrm_prog_khlian = "'.$sis_dtrm_prog_khlian.'", th_ajar= "'.$th_ajar.'", n_test = "'.$n_test.'", status = "'.$status.'" 
		where user_id = "'.$user_id.'"';
        $query = mysqli_query($con,$sql);
	}

////////PENDAFTARAN ONLINE/////////

    function tampilpendaftaran(){
        $con = $this->dbconnect();
        $sql = "select * from t_siswadaftar";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function tampilidpdf() {
		$date = date('dmHi');
		$id = "ID".$date;
		return $id;
	}

   

	function tambahpendaftaran($user_id,
$no_induk,
$sis_email,
$kelamin,
$nama,
$tmp_lahir,
$tgl_lahir,
$alamat,
$alamat_camat,
$alamat_kodya,
$ayh_tlp,
$agama,
$sis_no_psrta_unas,
$sis_tmt_dri,
$sis_ksenian,
$n_unas,
$n_raport,
$sis_dtrm_prog_khlian,
$th_ajar,
$no_daftar,
$n_test,
$status){  
		$con = $this->dbconnect();
		$sql = 'INSERT INTO '.$this->table.' VALUES ("'.$user_id.'",
"'.$no_induk.'",
"'.$sis_email.'",
"'.$kelamin.'",
"'.$nama.'",
"'.$tmp_lahir.'",
"'.$tgl_lahir.'",
"'.$alamat.'",
"'.$alamat_camat.'",
"'.$alamat_kodya.'",
"'.$ayh_tlp.'",
"'.$agama.'",
"'.$sis_no_psrta_unas.'",
"'.$sis_tmt_dri.'",
"'.$sis_ksenian.'",
"'.$n_unas.'",
"'.$n_raport.'",
"'.$sis_dtrm_prog_khlian.'",
"'.$th_ajar.'",
"'.$no_daftar.'",
"'.$n_test.'",
"'.$status.'")'; 
        // print_r($sql);
        // die();
        
        mysqli_query($con,$sql);   
    }

    function getdetailpendaftaran($user_id){
		$con = $this->dbconnect();
		$sql = "select * from ".$this->table.' where user_id = "'.$user_id.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }

    function editpendaftaran($user_id,
$no_induk,
$sis_email,
$kelamin,
$nama,
$tmp_lahir,
$tgl_lahir,
$alamat,
$alamat_camat,
$alamat_kodya,
$ayh_tlp,
$agama,
$sis_no_psrta_unas,
$sis_tmt_dri,
$sis_ksenian,
$n_unas,
$n_raport,
$sis_dtrm_prog_khlian,
$th_ajar,
$no_daftar,
$n_test,
$status){
        $con = $this->dbconnect();
        

        $sql = 'UPDATE '.$this->table.' SET no_induk= "'.$no_induk.'", sis_email = "'.$sis_email.'", kelamin = "'.$kelamin.'", nama = "'.$nama.'", tmp_lahir = "'.$tmp_lahir.'", tgl_lahir = "'.$tgl_lahir.'", alamat = "'.$alamat.'", alamat_camat = "'.$alamat_camat.'" , alamat_kodya = "'.$alamat_kodya.'", ayh_tlp = "'.$ayh_tlp.'", agama = "'.$agama.'", sis_no_psrta_unas = "'.$sis_no_psrta_unas.'", sis_tmt_dri = "'.$sis_tmt_dri.'", sis_ksenian = "'.$sis_ksenian.'", n_unas = "'.$n_unas.'", n_raport = "'.$n_raport.'", sis_dtrm_prog_khlian = "'.$sis_dtrm_prog_khlian.'", th_ajar= "'.$th_ajar.'"  where user_id = "'.$user_id.'"';
            $query = mysqli_query($con,$sql);
    }
    
    function hapuspendaftaran($user_id)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where user_id = "'.$user_id.'"';
        $query = mysqli_query($con,$sql);
    }


}
?>
