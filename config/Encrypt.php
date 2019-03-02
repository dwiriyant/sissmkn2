<?php 

class Encrypt {

    function enkripsi($data)
    {
        $awalnya = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","1","2","3","4","5","6","7","8","9","0");
        $gantinya =   array("~","!","@","#","$","%","^","&","*","(",")","_","-","+","=","|","}","{","[","]",";",":","?",">",".","<","≤","≠","™","®","©","¥","£","€","β","±");
        $hasilnya = str_replace($awalnya, $gantinya, $data);
        return $hasilnya;
    }

    function deskripsi($data)
    {
        $awalnya = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","1","2","3","4","5","6","7","8","9","0");
        $gantinya =   array("~","!","@","#","$","%","^","&","*","(",")","_","-","+","=","|","}","{","[","]",";",":","?",">",".","<","≤","≠","™","®","©","¥","£","€","β","±");
        $hasilnya = str_replace($gantinya, $awalnya, $data);
        return $hasilnya;
    }

    function enkripsilevel($data)
    {
        $awalnya = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0","~","!","@","#","$","%","^","&","*","(",")","_","-","+","=","|","}","{","[","]",";",":","?",">",".","<","≤","≠","™","®","©","¥","£","€","β","±","STAFF","staff");
        $gantinya =   array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","staf","staf");
        $hasilnya = str_replace($awalnya, $gantinya, $data);
        return $hasilnya;
    }

    function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}

} 

?>