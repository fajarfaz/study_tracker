<?php
require_once("../mailer/src/PHPMailer.php");
require_once("../mailer/src/SMTP.php");
require_once("../mailer/src/Exception.php");
include '../komponen/koneksi.php';

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


function password_rand($chars) 
{
	$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
	return substr(str_shuffle($data), 0, $chars);
}

switch ($_GET['action'])
{
	case 'insert':
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$status = $_POST['status'];

	if ($status=='Siswa') {
		$jurusan = $_POST['jurusan'];
	}else{
		$jurusan='';
	}
	
	$password = password_rand(7);
	$password2 = md5($password);
	$id = $_POST['id'];
	$email = $_POST['email'];

	$query = mysqli_query($conn,"SELECT username FROM login WHERE username = '".$username."'");
	$row = mysqli_fetch_array($query);
	if (empty($row[0])) {
		//insert users
		if ($id=="") {
			$mail->addAddress($email, "Admin Study Tracker");
			$mail->isHTML(true);
			$message ="Hello ".$nama." akun berhasil dibuat untuk mengakses aplikasi dapat menggunakan:<br>
			Username: ".$username."<br> Password : ".$password;
			$mail->Subject = "Pemberitahuan Hak Akses Study Tracker";
			$mail->Body = "<i>".$message."</i>";
			$mail->AltBody = "Admin Study Tracker";
			
			$law = mysqli_query($conn, "INSERT INTO login (username, password, status,email) VALUES('$username', '$password2','$status','$email')");
			if ($law)	{
				$sis = mysqli_query($conn, "INSERT INTO siswa (nama, nisn,jurusan,create_at) VALUES('$nama', '$username','$jurusan',NOW())");
				if ($sis)
				{
					$sis = mysqli_query($conn, "INSERT INTO data_alumni (nisn) VALUES ('$username')");
					if ($sis)
					{				
						$send=$mail->Send();						
						if ($send) {
							echo "Proses berhasil";
						}else{
							echo "Proses gagal";
						}
					


				}else{
					echo "Proses Gagal 2:" . mysqli_error($conn);
				}

			}else{
				echo "Proses Gagal 1:" . mysqli_error($conn);
			}

		}
		else
		{
			echo "Proses Gagal :" . mysqli_error($conn);
		}
	}else{
		//update users
		$id_siswa = $_POST['id_siswa'];
		$law = mysqli_query($conn, "UPDATE login SET username='$username',status='$status' WHERE id='$id'");
		if ($law)	{
			$sis = mysqli_query($conn, "UPDATE siswa SET nama='$nama',nisn='$username' WHERE no='$id_siswa'");
			if ($sis)
			{
				echo "Update sukses";
			}else{
				echo "Proses Gagal :" . mysqli_error($conn);
			}

		}
		else
		{
			echo "Proses Gagal :" . mysqli_error($conn);
		}
	}
}else{
	echo "NISN sudah ada";

}
break;
case 'delete':
$id = $_POST['username_nisn'];
$query = mysqli_query($conn, "DELETE FROM login WHERE username='$id'");
if ($query)
{	
	$query = mysqli_query($conn, "DELETE FROM siswa WHERE nisn='$id'");
	if ($query)
	{	
		echo "Hapus Data Berhasil";
	}
	else
	{
		echo "Hapus Data Gagal :" . mysqli_error($conn);
	}
}
else
{
	echo "Hapus Data Gagal :" . mysqli_error($conn);
}

break;
case 'complete_profile':
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$tempat = $_POST['tpt_lahir'];
$tanggal = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$tahun_lulus = $_POST['tahun_lulus'];
$jurusan = $_POST['jurusan'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$instansi = $_POST['instansi'];
$sejak = $_POST['sejak'];
$sis = mysqli_query($conn, "UPDATE siswa SET nama='$nama',tgl_lahir='$tanggal',tpt_lahir='$tempat',alamat='$alamat',agama='$agama',tahun_lulus='$tahun_lulus',jurusan='$jurusan',create_at=NOW() WHERE nisn='$nisn'");
if ($sis)
{
	$sis = mysqli_query($conn, "UPDATE data_alumni SET status='$status',instansi='$instansi',sejak='$sejak' WHERE nisn='$nisn'");

	if ($sis)
	{
		echo "Update sukses";
	}else{
		echo "Proses Gagal :" . mysqli_error($conn);
	}
}else{
	echo "Proses Gagal :" . mysqli_error($conn);
}

break;
case 'approve':

$nisn = $_POST['nisn'];
$sis = mysqli_query($conn, "UPDATE siswa SET status_tracker='1' WHERE nisn='$nisn'");
if ($sis)
{

	echo "Approval sukses";
	
}else{
	echo "Proses Gagal :" . mysqli_error($conn);
}


}


?>