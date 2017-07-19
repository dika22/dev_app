<?php
session_start();
include '../koneksi.php';
date_default_timezone_set("asia/jakarta");


$kode_toko		=	$_POST['kode_toko'];
$nama_toko		= 	$_POST['nama_toko'];
$alamat			=	$_POST['alamat'];
$modified_at	=	date('Y-m-d-H-i-s');
@$modified_by	= 	$_SESSION['name'];
//die();
$query	= mysql_query("UPDATE store SET kode_toko='$kode_toko',nama_toko='$nama_toko',alamat='$alamat',modified_at='$modified_at',modified_by='$modified_by' WHERE kode_toko='$kode_toko'") or die(mysql_error());

if($query ==  true){
        echo "<script>alert('sukses edit data!'); window.location='store.php';</script>";
      }else{
      	echo "<script>alert('gagal edit data!'); window.location='store.php';</script>";
    }
?>