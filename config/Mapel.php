 <?php

class t_belajar extends Database {
    var $table = 't_belajar';

    function tampildata() {
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table;
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

    function insertMapel($idbelajar, $thajar, $sem, $pelajaran, $nip, $tglawal, $tglakhir, $status, $ket) {
        $con = $this->dbconnect();
        $sql = 'INSERT INTO '.$this->table.' VALUES("'.$idbelajar.'", "'.$thajar.'", "'.$sem.'", "'.$pelajaran.'", "'.$nip.'", "'.$tglawal.'", "'.$tglakhir.'", "'.$status.'", "'.$ket.'")';
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    }

    function getdata($id){
        $con = $this->dbconnect();
        $sql = "select * from ".$this->table.' where idbelajar = "'.$id.'"';
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
            
        return $hasil;
    }

      function updateMapel($idbelajar, $thajar, $sem, $pelajaran, $nip, $tglawal, $tglakhir, $status, $ket)
    {
        $con = $this->dbconnect();
        $sql = 'UPDATE '.$this->table.' SET thajar= "'.$thajar.'", sem="'.$sem.'", pelajaran="'.$pelajaran.'", nip="'.$nip.'", tglawal="'.$tglawal.'", tglakhir="'.$tglakhir.'", status="'.$status.'", ket="'.$ket.'" where idbelajar = "'.$idbelajar.'"';
        $query = mysqli_query($con,$sql);
    }

      function DeleteMapel($idbelajar)
    {
        $con = $this->dbconnect();
        $sql = 'DELETE from '.$this->table.' where idbelajar = "'.$idbelajar.'"';
        $query = mysqli_query($con,$sql);
    }


function getforalert(){
        $con = $this->dbconnect();
        $sql = 'select idbelajar from t_belajar where idbelajar = "'.$_SESSION['alertid'].'"';
        $query = mysqli_query($con,$sql) or die (mysqli_error($con));
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }

        return $hasil;
    }


}

?>