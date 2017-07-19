<?php
session_start();
include '../koneksi.php';
date_default_timezone_set("asia/jakarta");


$kode_barang	=	$_POST['kode_barang'];
$nama_barang	= 	$_POST['nama_barang'];
$brand			=	$_POST['brand'];
$isi			=	$_POST['isi'];
$modified_at	=	date('Y-m-d-H-i-s');
@$modified_by	= 	$_SESSION['name'];
//die();
$query	= mysql_query("UPDATE barang SET kode_barang='$kode_barang',nama_barang='$nama_barang',brand='$brand',isi='$isi',modified_at='$modified_at',modified_by='$modified_by' WHERE kode_barang='$kode_barang'") or die(mysql_error());

if($query ==  true){
        echo "<script>alert('sukses edit data!'); window.location='barang.php';</script>";
      }else{
      echo "<script>alert('gagal edit data!'); window.location='barang.php';</script>";
    }
?>