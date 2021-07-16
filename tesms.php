<?php
include 'komponen/koneksi.php';
// jika non white brarti nomer hp harus disamakan dengan akun vonage
$no_hp =  implode("no_hp", $_POST) ;
$sis = mysqli_fetch_array(mysqli_query($conn, "SELECT nama,nisn FROM siswa WHERE no_hp='$no_hp'"));

require 'vendor/autoload.php';
$basic  = new \Vonage\Client\Credentials\Basic("b9fedfd5", "HPIaBIG2PvSY2lWi");
$client = new \Vonage\Client($basic);

$response = $client->sms()->send(
    new \Vonage\SMS\Message\SMS($no_hp, "Study Tracker", 'Hello '.$sis[0].', Kami mengingatkan bahwa kamu belum melengkapi data diri pada aplikasi Study Tracker')
);

$message = $response->current();

if ($sis[2]=='1') {
    $reminder = '3';
}else{
    $reminder = '2';
}

if ($message->getStatus() == 0) {
    $update = mysqli_query($conn, "UPDATE siswa SET reminder='$reminder' WHERE nisn='$sis[1]'");
    echo "Pesan via SMS Berhasil Terkirim\n";
} else {
    echo "Pesan via SMS Gagal Terkirim karena no HP tidak terdeteksi: " . $message->getStatus() . "\n";
}

?>