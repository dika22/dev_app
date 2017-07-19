<?php

require 'koneksi.php';

@$username = $_POST['user_id'];
@$password = $_POST['password'];
@$level	   = $_POST['level'];


$query = mysql_query("INSERT INTO user SET user_id='$username',level='$level',password='$password'") or die(mysql_error());

if ($query != null) {
      echo "<script>alert('sukses insert data!'); window.location='user.php';</script>";
    }else{
      echo "<script>alert('gagal insert data!'); window.location='user.php';</script>";
}
?>