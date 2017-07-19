<?php
	include 'koneksi.php';

	session_start(); // Memulai Session
	$error=''; // Variabel untuk menyimpan pesan error
	if(isset($_POST['submit'])){
   $username = $_POST['user_id'];
   $password = $_POST['password'];
   $level  = $_POST['level'];

  if($level == "SuperAdmin") {
      $sql  = mysql_query("SELECT * FROM user WHERE user_id = '$username' AND password = '$password'") or die (mysql_error());
      $cek = mysql_num_rows($sql);
      $data = mysql_fetch_array($sql);
      $id = $data[0];
      if($cek >= 1) {
          $_SESSION['SuperAdmin'] = $id;
          $_SESSION['nama'] = $data['nama'];
          //$_SESSION['profil'] = $data['profil'];
          echo '<script language="javascript">alert("Anda berhasil Login"); document.location="SuperAdmin/home.php";</script>';
      } else {
        echo "<script>alert('Login gagal! Silahkan cek username dan password Anda!');</script>";
      }
  } else if($level == "Admin") {
      $sql  = mysql_query("SELECT * FROM user WHERE user_id = '$username' AND password = '$password'") or die (mysql_error());
      $cek = mysql_num_rows($sql);
      $data = mysql_fetch_array($sql);
      $id = $data[0];
      if($cek >= 1) {
          $_SESSION['Admin'] = $id;
          $_SESSION['nama'] = $data['nama'];
          //$_SESSION['profil'] = $data['profil'];
          echo '<script language="javascript">alert("Anda berhasil Login"); document.location="Admin/home.php";</script>';
      } else {
        echo "<script>alert('Login gagal! Silahkan cek username dan password Anda!');</script>";
      }
  }  else {
        echo "<script>alert('Login gagal! Silahkan cek username dan password Anda!');</script>";
      }
  }

	//print_r($hasil);
?>