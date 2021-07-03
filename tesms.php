<?php
include 'komponen/koneksi.php';
// jika non white brarti nomer hp harus disamakan dengan akun vonage
$no_hp =  implode("no_hp", $_POST) ;
$sis = mysqli_fetch_array(mysqli_query($conn, "SELECT nama,nisn FROM siswa WHERE no_hp='$no_hp'"));

require 'vendor/autoload.php';
$basic  = new \Vonage\Client\Credentials\Basic("6174654d", "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnutktUt6LEgLULDFg6H+ y7x4Fi/m8/oYEbUnENTSPShPZN3kMd28q0UVxMsg6OXf2t8ZS7/s7yQ1jl4mkXcd WK+PhBvZ9iAbbBvkbW3odgfSc/qny4Lt2BJl+L5Hd4u34E0prfNmUPT0DlZgY4zn iYGAb7nk8REU7+zEJN1JYYBEe8stbkWiuCDbk+xdIQMwEIR60B+z8UTT39f6EA2s ZHOZxMfjmDiQ98T0eZlHnYGejwb0z6SPp/DV3H4vmk8z3FlGeTZieJBo5LEIeLOC 17xeMTnCuXKTaoRux1X7LQd55FSbTmkDfxaUOpdUuJiYSV7DOTZ4uSVHVdwZ5Jof AQIDAQAB");
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