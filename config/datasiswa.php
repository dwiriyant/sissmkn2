<?php

class datasiswa extends Database {


    //var $tablejoin = 'master_produk';
	//var $tablejoin2 = 'form_so';
	var $table = 't_sis_thajar';

function show_jurusan(){
        $con = $this->dbconnect();
		$sql = "SELECT * FROM jurusan";
        $query = mysqli_query($con,$sql);
		return $query;
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

////////DATA SISWA/////////

    function tampilsiswa(){
        $con = $this->dbconnect();
        $sql = "select * from t_sis_thajar";
        $query = mysqli_query($con,$sql);
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}
		return $hasil;
    }

    function tampilidsiswa() {
		$date = date('dmHi');
		$id = "S".$date;
		return $id;
	}

   

	function tambahsiswa($id_sis_th,
$no_urut,
$no_induk,
$nama,
$kelas,
$prog,
$th_ajar,
$kelamin,
$agama,
$Inklusi){  
		$con = $this->dbconnect();
		$sql = 'INSERT INTO '.$this->table.' VALUES ("'.$id_sis_th.'",
"'.$no_urut.'",
"'.$no_induk.'",
"'.$nama.'",
"'.$kelas.'",
"'.$prog.'",
"'.$th_ajar.'",
"'.$kelamin.'",
"'.$agama.'",
"'.$Inklusi.'")'; 
        // print_r($sql);
        // die();
        
        mysqli_query($con,$sql);   
    }

    function getdetailsiswa($id_sis_th){
		$con = $this->dbconnect();
		$sql = "select * from ".$this->table.' where id_sis_th = "'.$id_sis_th.'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
		while($data = mysqli_fetch_array($query)){
			$hasil[] = $data;
		}

		return $hasil;
    }

    function editsiswa($id_sis_th,
$no_urut,
$no_induk,
$nama,
$kelas,
$prog,
$th_ajar,
$kelamin,
$agama,
$Inklusi){
        $con = $this->dbconnect();
        

        $sql = 'UPDATE '.$this->table.' SET no_induk= "'.$no_induk.'", sis_email = "'.$sis_email.'", kelamin = "'.$kelamin.'", nama = "'.$nama.'", tmp_lahir = "'.$tmp_lahir.'", tgl_lahir = "'.$tgl_lahir.'", alamat = "'.$alamat.'", alamat_camat = "'.$alamat_camat.'" , alamat_kodya = "'.$alamat_kodya.'"  where user_id = "'.$user_id.'"';
            $query = mysqli_query($con,$sql);
    }
    
    function hapussiswa($id_sis_th)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where id_sis_th = "'.$id_sis_th.'"';
        $query = mysqli_query($con,$sql);
    }


}
?>
