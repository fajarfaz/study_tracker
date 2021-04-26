<?php
session_start(); 
session_unset();
session_destroy();

include "koneksi.php";

if(isset($_POST['do_login']))
{  
 $email=$_POST['email'];
 $pass=md5($_POST['password']);
 $query="SELECT * FROM login WHERE username='$email' AND password='$pass'";
 $result = mysqli_query($conn,$query)or die(mysqli_error());
 if($row=mysqli_fetch_array($result))
 {

  
  echo "success";   
  $_SESSION['username']=$row['username'];
  $_SESSION['status']=$row['status'];

 }
 else
 {
  echo "fail";
 }
 exit();
}


?>