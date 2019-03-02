<?php

class Kesiswaan extends Database {


    //var $tablejoin = 'master_produk';
	//var $tablejoin2 = 'form_so';
	var $table = 't_siswa';

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
	
////////PENDAFTARAN/////////

    function tampilpendaftaran(){
        $con = $this->dbconnect();
        $sql = "select * from t_siswa";
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
$nama,
$sis_nma_pnggln,
$kelamin,
$tmp_lahir,
$tgl_lahir,
$agama,
$sis_kwarganegraan,
$sis_anak_ke,
$sis_jml_sdr_kndung,
$sis_jml_sdr_tiri,
$sis_jml_sdr_angkat,
$sis_status,
$sis_bhs_shari_hri,
$alat_transport,
$sis_kps,
$sis_kip,
$sis_nokk,
$sis_nik,
$alamat_tinggal,
$alamat_kec_tngl,
$alamat_kab_tngl,
$sis_jrak_ke_skul,
$sis_tggal_dgn,
$telp,
$rumah_kondisi,
$rumah_fisik,
$alamat,
$alamat_rt,
$alamat_rw,
$alamat_lurah,
$alamat_camat,
$alamat_kodya,
$alamat_prop,
$sis_tmt_dri,
$sttb,
$sttb_tgl,
$nem,
$nem_tgl,
$sis_lma_blajar,
$sis_no_psrta_unas,
$sis_dtrm_kelas,
$sis_dtrm_bdng_khlian,
$sis_dtrm_komp_khlian,
$sis_dtrm_tgl,
$ayah,
$ayah_ktp,
$ayh_tmpt_lhir,
$ayh_tgl_lhir,
$ayh_agama,
$ayh_kwarganegraan,
$ayh_pndidikan,
$ayh_pkrjaan,
$ayh_pnghasilan_bln,
$ayh_almat,
$ayh_tlp,
$ayh_status,
$ibu,
$ibu_ktp,
$ibu_tmpt_lhir,
$ibu_tgl_lhir,
$ibu_agama,
$ibu_kwarganegraan,
$ibu_pndidikan,
$ibu_pkrjaan,
$ibu_pnghasilan_bln,
$ibu_almat,
$ibu_tlp,
$ibu_status,
$wali,
$wali_ktp,
$wali_tmpt_lhir,
$wali_tgl_lhir,
$wali_agama,
$wali_kwarganegraan,
$wali_pndidikan,
$wali_pkrjaan,
$wali_pnghasilan_bln,
$wali_almat,
$wali_tlp,
$hub_wali_siswa,
$sis_gol_darah,
$sis_penyakit,
$sis_kel_jasmani,
$sis_tinggi_berat,
$sis_ksenian,
$sis_olahrga,
$sis_kmasyaraktn,
$sis_organisasi,
$sis_hobby,
$prestasi,
$sis_lain2,
$no_daftar,
$th_ajar,
$foto_daftar,
$sis_nisn,
$kode_prog,
$no_urut,
$ind_prog,
$kelas,
$tgl_input,
$sis_pndahn_seklah,
$sis_pndahn_alasan,
$sis_dtrm_prog_khlian,
$sis_cita2,
$sis_kks,
$sis_beasiswa,
$sis_pndah_seklah,
$sis_pndah_alsn,
$sis_luls_thn,
$sis_lnjut_ke,
$sis_krja_tgl,
$sis_krja_tmpt,
$sis_krja_pnghsilan,
$ijz_fc_lg,
$ijz_fc_bs,
$skhun_fc_lg,
$skhun_fc_bs,
$kk,
$akte,
$alat_tansport,
$n_unas,
$no_unas,
$n_raport,
$n_test,
$n_minat,
$n_akhir,
$p_unas,
$p_raport,
$p_test,
$p_minat,
$p_akhir,
$sis_luls_ijazah,
$sis_luls_skhu,
$petugas,
$status,
$th_daftar){  
		$con = $this->dbconnect();
		$sql = 'INSERT INTO '.$this->table.' VALUES ("'.$user_id.'",
"'.$no_induk.'",
"'.$sis_email.'",
"'.$nama.'",
"'.$sis_nma_pnggln.'",
"'.$kelamin.'",
"'.$tmp_lahir.'",
"'.$tgl_lahir.'",
"'.$agama.'",
"'.$sis_kwarganegraan.'",
"'.$sis_anak_ke.'",
"'.$sis_jml_sdr_kndung.'",
"'.$sis_jml_sdr_tiri.'",
"'.$sis_jml_sdr_angkat.'",
"'.$sis_status.'",
"'.$sis_bhs_shari_hri.'",
"'.$alat_transport.'",
"'.$sis_kps.'",
"'.$sis_kip.'",
"'.$sis_nokk.'",
"'.$sis_nik.'",
"'.$alamat_tinggal.'",
"'.$alamat_kec_tngl.'",
"'.$alamat_kab_tngl.'",
"'.$sis_jrak_ke_skul.'",
"'.$sis_tggal_dgn.'",
"'.$telp.'",
"'.$rumah_kondisi.'",
"'.$rumah_fisik.'",
"'.$alamat.'",
"'.$alamat_rt.'",
"'.$alamat_rw.'",
"'.$alamat_lurah.'",
"'.$alamat_camat.'",
"'.$alamat_kodya.'",
"'.$alamat_prop.'",
"'.$sis_tmt_dri.'",
"'.$sttb.'",
"'.$sttb_tgl.'",
"'.$nem.'",
"'.$nem_tgl.'",
"'.$sis_lma_blajar.'",
"'.$sis_no_psrta_unas.'",
"'.$sis_dtrm_kelas.'",
"'.$sis_dtrm_bdng_khlian.'",
"'.$sis_dtrm_komp_khlian.'",
"'.$sis_dtrm_tgl.'",
"'.$ayah.'",
"'.$ayah_ktp.'",
"'.$ayh_tmpt_lhir.'",
"'.$ayh_tgl_lhir.'",
"'.$ayh_agama.'",
"'.$ayh_kwarganegraan.'",
"'.$ayh_pndidikan.'",
"'.$ayh_pkrjaan.'",
"'.$ayh_pnghasilan_bln.'",
"'.$ayh_almat.'",
"'.$ayh_tlp.'",
"'.$ayh_status.'",
"'.$ibu.'",
"'.$ibu_ktp.'",
"'.$ibu_tmpt_lhir.'",
"'.$ibu_tgl_lhir.'",
"'.$ibu_agama.'",
"'.$ibu_kwarganegraan.'",
"'.$ibu_pndidikan.'",
"'.$ibu_pkrjaan.'",
"'.$ibu_pnghasilan_bln.'",
"'.$ibu_almat.'",
"'.$ibu_tlp.'",
"'.$ibu_status.'",
"'.$wali.'",
"'.$wali_ktp.'",
"'.$wali_tmpt_lhir.'",
"'.$wali_tgl_lhir.'",
"'.$wali_agama.'",
"'.$wali_kwarganegraan.'",
"'.$wali_pndidikan.'",
"'.$wali_pkrjaan.'",
"'.$wali_pnghasilan_bln.'",
"'.$wali_almat.'",
"'.$wali_tlp.'",
"'.$hub_wali_siswa.'",
"'.$sis_gol_darah.'",
"'.$sis_penyakit.'",
"'.$sis_kel_jasmani.'",
"'.$sis_tinggi_berat.'",
"'.$sis_ksenian.'",
"'.$sis_olahrga.'",
"'.$sis_kmasyaraktn.'",
"'.$sis_organisasi.'",
"'.$sis_hobby.'",
"'.$prestasi.'",
"'.$sis_lain2.'",
"'.$no_daftar.'",
"'.$th_ajar.'",
"'.$foto_daftar.'",
"'.$sis_nisn.'",
"'.$kode_prog.'",
"'.$no_urut.'",
"'.$ind_prog.'",
"'.$kelas.'",
"'.$tgl_input.'",
"'.$sis_pndahn_seklah.'",
"'.$sis_pndahn_alasan.'",
"'.$sis_dtrm_prog_khlian.'",
"'.$sis_cita2.'",
"'.$sis_kks.'",
"'.$sis_beasiswa.'",
"'.$sis_pndah_seklah.'",
"'.$sis_pndah_alsn.'",
"'.$sis_luls_thn.'",
"'.$sis_lnjut_ke.'",
"'.$sis_krja_tgl.'",
"'.$sis_krja_tmpt.'",
"'.$sis_krja_pnghsilan.'",
"'.$ijz_fc_lg.'",
"'.$ijz_fc_bs.'",
"'.$skhun_fc_lg.'",
"'.$skhun_fc_bs.'",
"'.$kk.'",
"'.$akte.'",
"'.$alat_tansport.'",
"'.$n_unas.'",
"'.$no_unas.'",
"'.$n_raport.'",
"'.$n_test.'",
"'.$n_minat.'",
"'.$n_akhir.'",
"'.$p_unas.'",
"'.$p_raport.'",
"'.$p_test.'",
"'.$p_minat.'",
"'.$p_akhir.'",
"'.$sis_luls_ijazah.'",
"'.$sis_luls_skhu.'",
"'.$petugas.'",
"'.$status.'",
"'.$th_daftar.'")'; 
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

    function editpendaftaran($user_id,$no_induk,$sis_email,$nama,$sis_nma_pnggln,$kelamin,$tmp_lahir,$tgl_lahir,$agama,$sis_kwarganegraan,$sis_anak_ke,$sis_jml_sdr_kndung,$sis_jml_sdr_tiri,$sis_jml_sdr_angkat,$sis_status,$sis_bhs_shari_hri,$alat_transport,$sis_kps,$sis_kip,$sis_nokk,$sis_nik,$alamat_tinggal,$alamat_kec_tngl,$alamat_kab_tngl,$sis_jrak_ke_skul,$sis_tggal_dgn,$telp,$rumah_kondisi,$rumah_fisik,$alamat,$alamat_rt,$alamat_rw,$alamat_lurah,$alamat_camat,$alamat_kodya,$alamat_prop,$sis_tmt_dri,$sttb,$sttb_tgl,$nem,$nem_tgl,$sis_lma_blajar,$sis_no_psrta_unas,$sis_dtrm_kelas,$sis_dtrm_bdng_khlian,$sis_dtrm_komp_khlian,$sis_dtrm_tgl,$ayah,$ayah_ktp,$ayh_tmpt_lhir,$ayh_tgl_lhir,$ayh_agama,$ayh_kwarganegraan,$ayh_pndidikan,$ayh_pkrjaan,$ayh_pnghasilan_bln,$ayh_almat,$ayh_tlp,$ayh_status,$ibu,$ibu_ktp,$ibu_tmpt_lhir,$ibu_tgl_lhir,$ibu_agama,$ibu_kwarganegraan,$ibu_pndidikan,$ibu_pkrjaan,$ibu_pnghasilan_bln,$ibu_almat,$ibu_tlp,$ibu_status,$wali,$wali_ktp,$wali_tmpt_lhir,$wali_tgl_lhir,$wali_agama,$wali_kwarganegraan,$wali_pndidikan,$wali_pkrjaan,$wali_pnghasilan_bln,$wali_almat,$wali_tlp,$hub_wali_siswa,$sis_gol_darah,$sis_penyakit,$sis_kel_jasmani,$sis_tinggi_berat,$sis_ksenian,$sis_olahrga,$sis_kmasyaraktn,$sis_organisasi,$sis_hobby,$prestasi,$sis_lain2,$no_daftar,$th_ajar,$foto_daftar,$sis_nisn,$kode_prog,$no_urut,$ind_prog,$kelas,$tgl_input,$sis_pndahn_seklah,$sis_pndahn_alasan,$sis_dtrm_prog_khlian,$sis_cita2,$sis_kks,$sis_beasiswa,$sis_pndah_seklah,$sis_pndah_alsn,$sis_luls_thn,$sis_lnjut_ke,$sis_krja_tgl,$sis_krja_tmpt,$sis_krja_pnghsilan,$ijz_fc_lg,$ijz_fc_bs,$skhun_fc_lg,$skhun_fc_bs,$kk,$akte,$alat_tansport,$n_unas,$no_unas,$n_raport,$n_test,$n_minat,$n_akhir,$p_unas,$p_raport,$p_test,$p_minat,$p_akhir,$sis_luls_ijazah,$sis_luls_skhu,$petugas,$th_daftar){
        $con = $this->dbconnect();
        

        $sql = 'UPDATE '.$this->table.' SET no_induk= "'.$no_induk.'", sis_email = "'.$sis_email.'", nama = "'.$nama.'", sis_nma_pnggln = "'.$sis_nma_pnggln.'", kelamin = "'.$kelamin.'", tmp_lahir = "'.$tmp_lahir.'", tgl_lahir = "'.$tgl_lahir.'", agama = "'.$agama.'", sis_kwarganegraan = "'.$sis_kwarganegraan.'", sis_anak_ke = "'.$sis_anak_ke.'", sis_jml_sdr_kndung= "'.$sis_jml_sdr_kndung.'", sis_jml_sdr_tiri = "'.$sis_jml_sdr_tiri.'", sis_jml_sdr_angkat= "'.$sis_jml_sdr_angkat.'", sis_status = "'.$sis_status.'", sis_bhs_shari_hri = "'.$sis_bhs_shari_hri.'", alat_transport = "'.$alat_transport.'", sis_kps = "'.$sis_kps.'", sis_kip = "'.$sis_kip.'", sis_nokk = "'.$sis_nokk.'", sis_nik = "'.$sis_nik.'", alamat_tinggal = "'.$alamat_tinggal.'",  alamat_kec_tngl = "'.$alamat_kec_tngl.'", alamat_kab_tngl = "'.$alamat_kab_tngl.'", sis_jrak_ke_skul = "'.$sis_jrak_ke_skul.'", sis_tggal_dgn = "'.$sis_tggal_dgn.'", telp = "'.$telp.'", rumah_kondisi = "'.$rumah_kondisi.'", rumah_fisik = "'.$rumah_fisik.'", alamat = "'.$alamat.'", alamat_rt = "'.$alamat_rt.'", alamat_rw = "'.$alamat_rw.'", alamat_lurah = "'.$alamat_lurah.'", alamat_camat = "'.$alamat_camat.'", alamat_kodya = "'.$alamat_kodya.'", alamat_prop = "'.$alamat_prop.'", sis_tmt_dri = "'.$sis_tmt_dri.'", sttb = "'.$sttb.'", sttb_tgl = "'.$sttb_tgl.'", nem = "'.$nem.'", nem_tgl = "'.$nem_tgl.'", sis_lma_blajar = "'.$sis_lma_blajar.'", sis_no_psrta_unas = "'.$sis_no_psrta_unas.'", sis_dtrm_kelas = "'.$sis_dtrm_kelas.'", sis_dtrm_bdng_khlian = "'.$sis_dtrm_bdng_khlian.'", sis_dtrm_komp_khlian = "'.$sis_dtrm_komp_khlian.'", sis_dtrm_tgl = "'.$sis_dtrm_tgl.'", ayah = "'.$ayah.'", ayah_ktp = "'.$ayah_ktp.'", ayh_tmpt_lhir = "'.$ayh_tmpt_lhir.'", ayh_tgl_lhir = "'.$ayh_tgl_lhir.'", ayh_agama = "'.$ayh_agama.'", ayh_kwarganegraan = "'.$ayh_kwarganegraan.'", ayh_pndidikan = "'.$ayh_pndidikan.'", ayh_pkrjaan = "'.$ayh_pkrjaan.'", ayh_pnghasilan_bln = "'.$ayh_pnghasilan_bln.'", ayh_almat = "'.$ayh_almat.'", ayh_tlp = "'.$ayh_tlp.'", ayh_status = "'.$ayh_status.'" , ibu = "'.$ibu.'", ibu_ktp = "'.$ibu_ktp.'", ibu_tmpt_lhir = "'.$ibu_tmpt_lhir.'", ibu_tgl_lhir = "'.$ibu_tgl_lhir.'", ibu_agama = "'.$ibu_agama.'", ibu_kwarganegraan = "'.$ibu_kwarganegraan.'", ibu_pndidikan = "'.$ibu_pndidikan.'", ibu_pkrjaan = "'.$ibu_pkrjaan.'", ibu_pnghasilan_bln = "'.$ibu_pnghasilan_bln.'", ibu_almat = "'.$ibu_almat.'", ibu_tlp = "'.$ibu_tlp.'", ibu_status = "'.$ibu_status.'", wali = "'.$wali.'", wali_ktp = "'.$wali_ktp.'", wali_tmpt_lhir = "'.$wali_tmpt_lhir.'", wali_tgl_lhir = "'.$wali_tgl_lhir.'", wali_agama = "'.$wali_agama.'", wali_kwarganegraan = "'.$wali_kwarganegraan.'", wali_pndidikan = "'.$wali_pndidikan.'", wali_pkrjaan = "'.$wali_pkrjaan.'", wali_pnghasilan_bln = "'.$wali_pnghasilan_bln.'", wali_almat = "'.$wali_almat.'", wali_tlp = "'.$wali_tlp.'", hub_wali_siswa = "'.$hub_wali_siswa.'", sis_gol_darah = "'.$sis_gol_darah.'", sis_penyakit = "'.$sis_penyakit.'", sis_kel_jasmani = "'.$sis_kel_jasmani.'", sis_tinggi_berat = "'.$sis_tinggi_berat.'", sis_ksenian = "'.$sis_ksenian.'", sis_olahrga = "'.$sis_olahrga.'", sis_kmasyaraktn = "'.$sis_kmasyaraktn.'", sis_organisasi = "'.$sis_organisasi.'", sis_hobby = "'.$sis_hobby.'", prestasi = "'.$prestasi.'", sis_lain2 = "'.$sis_lain2.'", no_daftar = "'.$no_daftar.'", th_ajar = "'.$th_ajar.'"  where user_id = "'.$user_id.'"';
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
