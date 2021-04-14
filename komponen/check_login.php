<?php
if(isset($_POST['do_login']))
{
    include "koneksi.php";
$email=$_POST['email'];
 $pass=$_POST['password'];
 $query="SELECT * FROM login WHERE username='$email' AND password='$pass'";
 $result = mysqli_query($conn,$query)or die(mysqli_error());
 if($row=mysqli_fetch_array($result))
 {
   
  $_SESSION['username']=$row['username'];
  echo "success";
   // session_start();

 }
 else
 {
  echo "fail";
 }
 exit();
}


?>