<?php

class t_staf extends Database {
     var $table = 't_staf';
     

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function sembarang()
    {
       $con = $this->dbconnect();
        $sql = "select * from mata_pelajaran";
        $query = mysqli_query($con, $sql) or die(mysqli_error($con));
        while ($data = mysqli_fetch_array($query)) {
          $hasil[] = $data;
      }
    return $hasil;
    }

    function tampildatakelas()
    {
      $con = $this->dbconnect();
        $sql = "select * from kelas";
        $query = mysqli_query($con, $sql) or die(mysqli_error($con));
        while ($data = mysqli_fetch_array($query)) {
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
        
    

    function insertGuru($user_id, $nama, $nip, $kelamin, $alamat, $tugas, $telp, $hp, $email, $pelajaran, $tgl_lahir, $tmp_lahir, $kode, $pangkat, $kategori, $profilstaf, $th_ajar, $no_induk_baru, $depan_gelar, $belakang_gelar, $nama_ibu_kandung, $kode_pos, $golongan_darah, $kelurahan, $kecamatan, $provinsi, $daerah, $status_nikah, $tanggal_masuk, $jenis_pegawai, $sertifikasi_guru, $tmt_pns, $akses, $arsip, $tugas_tambahan, $pangkat_pns, $jabatan_pns, $golongan_pns, $pendidikan_terahir, $prog_diampu, $masakerja_th, $masakerja_bl) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES ("'.$user_id.'", "'.$nama.'", "'.$nip.'", "'.$kelamin.'", "'.$alamat.'", "'.$tugas.'", "'.$telp.'", "'.$hp.'", "'.$email.'", "'.$pelajaran.'", "'.$tgl_lahir.'", "'.$tmp_lahir.'", "'.$kode.'", "'.$pangkat.'", "'.$kategori.'", "'.$profilstaf.'", "'.$th_ajar.'", "'.$no_induk_baru.'", "'.$depan_gelar.'", "'.$belakang_gelar.'", "'.$nama_ibu_kandung.'", "'.$kode_pos.'", "'.$golongan_darah.'", "'.$kelurahan.'", "'.$kecamatan.'", "'.$provinsi.'", "'.$daerah.'", "'.$status_nikah.'", "'.$tanggal_masuk.'", "'.$jenis_pegawai.'", "'.$sertifikasi_guru.'", "'.$tmt_pns.'", "'.$akses.'", "'.$arsip.'", "'.$tugas_tambahan.'", "'.$pangkat_pns.'", "'.$jabatan_pns.'", "'.$golongan_pns.'", "'.$pendidikan_terahir.'", "'.$prog_diampu.'", "'.$masakerja_th.'", "'.$masakerja_bl.'")';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }
     function getdata($nip){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where nip = "'.$nip.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }

function updateGuru($user_id, $nama, $nip, $kelamin, $alamat, $tugas, $telp, $hp, $email, $pelajaran, $tgl_lahir, $tmp_lahir, $kode, $pangkat, $kategori, $profilstaf, $th_ajar, $no_induk_baru, $depan_gelar, $belakang_gelar, $nama_ibu_kandung, $kode_pos, $golongan_darah, $kelurahan, $kecamatan, $provinsi, $daerah, $status_nikah, $tanggal_masuk, $jenis_pegawai, $sertifikasi_guru, $tmt_pns, $akses, $arsip, $tugas_tambahan, $pangkat_pns, $jabatan_pns, $golongan_pns, $pendidikan_terahir, $prog_diampu, $masakerja_th, $masakerja_bl)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET nama="'.$nama.'", nip="'.$nip.'", kelamin="'.$kelamin.'", alamat="'.$alamat.'", tugas="'.$tugas.'", telp="'.$telp.'", hp="'.$hp.'", email="'.$email.'", pelajaran="'.$pelajaran.'", tgl_lahir="'.$tgl_lahir.'", tmp_lahir="'.$tmp_lahir.'", kode="'.$kode.'", pangkat="'.$pangkat.'", kategori="'.$profilstaf.'", th_ajar="'.$th_ajar.'", no_induk_baru="'.$no_induk_baru.'", depan_gelar="'.$depan_gelar.'", belakang_gelar="'.$belakang_gelar.'", nama_ibu_kandung="'.$nama_ibu_kandung.'", kode_pos="'.$kode_pos.'", golongan_darah="'.$golongan_darah.'", kelurahan="'.$kelurahan.'", kecamatan="'.$kecamatan.'", provinsi="'.$provinsi.'", daerah="'.$daerah.'", status_nikah="'.$status_nikah.'", tanggal_masuk="'.$tanggal_masuk.'", jenis_pegawai="'.$jenis_pegawai.'",sertifikasi_guru="'.$sertifikasi_guru.'", tmt_pns="'.$tmt_pns.'", akses="'.$akses.'", arsip="'.$arsip.'", tugas_tambahan="'.$tugas_tambahan.'", pangkat_pns="'.$pangkat_pns.'", jabatan_pns="'.$jabatan_pns.'", golongan_pns="'.$golongan_pns.'", pendidikan_terahir="'.$pendidikan_terahir.'", prog_diampu="'.$prog_diampu.'", masakerja_bl="'.$masakerja_bl.'", masakerja_th="'.$masakerja_th.'" where user_id = "'.$user_id.'"';
        //print_r($sql);
        //die();
        $query = mysqli_query($con,$sql);
    }
      function Deleteguru($nip)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where nip = "'.$nip.'"';
        $query = mysqli_query($con,$sql);
    }


 function getdatadetailguru($id){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where NIP = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }


}

?>