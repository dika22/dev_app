<?php
	include '../koneksi.php';

	$kode_barang = $_GET['kode_barang'];

	$hapus	= mysql_query("DELETE FROM barang WHERE kode_barang='$kode_barang'") or die(mysql_error());


	if($hapus==true){
        echo "<script>alert('Data Sukses di hapus!'); window.location='barang.php';</script>";
      }else{
      	echo "<script>alert('Data Gagal di hapus!!'); window.location='barang.php';</script>";
    }
?>