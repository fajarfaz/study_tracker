<?php
require_once("../mailer/src/PHPMailer.php");
require_once("../mailer/src/SMTP.php");
require_once("../mailer/src/Exception.php");
include 'koneksi.php';

$query = mysqli_query($conn,"SELECT COUNT(jurusan) FROM siswa WHERE status_tracker='' AND jurusan !=''");
$row = mysqli_fetch_array($query);

$mail = new PHPMailer\PHPMailer\PHPMailer();
                             
$mail->isSMTP();                                   
$mail->Host = "ajtgrup.com";
$mail->SMTPAuth = true;                            
$mail->Username = "cs@ajtgrup.com";                 
$mail->Password = "bS30;{_v?.Uv";                           
$mail->SMTPSecure = "ssl";                           
$mail->Port = 465;                                   

$mail->From = "cs@ajtgrup.com";
$mail->FromName = "Study Tracker App";

$email = "fajarfaz@gmail.com";
$nama = "Admin";
$mail->addAddress($email, "Admin Study Tracker");
$mail->isHTML(true);
$message ="Hello ".$nama.", kami mengingatkan bahwa terdapat ".$row[0]." siswa yang belum mengisi data diri<br>";
$mail->Subject = "Pemberitahuan Study Tracker";
$mail->Body = "<i>".$message."</i>";
$mail->AltBody = "Admin Study Tracker";

$send=$mail->Send();						
if ($send) {
	echo "Proses berhasil";
}else{
	echo "Proses gagal";
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>