<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
session_start();

require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/phpmailer/PHPMailerAutoload.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Encrypt.php");
$en = new Encrypt();
// require 'phpmailer/PHPMailerAutoload.php';

$convert = strval($_SESSION['passwordbaru']);
$password = $en->deskripsi($convert);
$message = 'Halo..<br>password baru akun siswa SMK Negeri 2 anda : '.$password;

// membuat obyek phpmailer
$mail = new PHPMailer(true);

// memberitahu class untuk menggunakan SMTP
$mail->IsSMTP();

// mengaktifkan debug SMTP (untuk pengujian) atur 0 untuk menonaktifkan mode debugging, 1 untuk menampilkan hasil debug
$mail->SMTPDebug = 0;

// mengaktifkan otentikasi SMTP
$mail->SMTPAuth = true;

// menetapkan prefix ke server
$mail->SMTPSecure = 'ssl';

// atur Gmail sebagai server SMTP
$mail->Host = 'smtp.gmail.com';

// atur server SMTP untuk server Gmail
$mail->Port = 465;

// alamat gmail kamu
$mail->Username = 'mochkemal86@gmail.com';

// password Anda harus disertakan dalam tanda kutip tunggal
$mail->Password = 'qonitarizka';

// tambahkan subjek
$mail->Subject = ' Pembaruan Password Akun Sekolah SMK Negeri 2 Malang ';

// alamat email pengirim dan nama
$mail->SetFrom('mochkemal86@gmail.com', 'SMK Negeri 2 Malang');

// alamat email penerima
$mail->AddAddress($_SESSION['emaillogin']);

// jika kamu mengirim ke beberapa orangg, tambahkan baris ini lagi
//$mail->AddAddress('tosend@domain.com');

// jika kamu ingin mengirim Carbon copy (Cc)
//$mail->AddCC('tosend@domain.com');

// jika kamu ingin mengirim Blind carbon copy (Bcc)
//$mail->AddBCC('tosend@domain.com');

// tambahkan isi pesan
$mail->MsgHTML($message);

// tambahkan lampiran jika ada
// $mail->AddAttachment('time.png');

try {
    // kirim email
    $mail->Send();
    $msg = "Email berhasil dikirim";
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}


header("location:http://localhost:8080/sissmkn2/views/login/login/index.php");
?>

