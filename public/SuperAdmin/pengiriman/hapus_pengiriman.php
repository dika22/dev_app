<?php
	include '../koneksi.php';

	$kode_barang = $_GET['kode_pengiriman'];

	$hapus	= mysql_query("DELETE FROM pengiriman WHERE kode_pengiriman='$kode_pengiriman'") or die(mysql_error());


	if($hapus==true){
        echo "<script>alert('Data Sukses di hapus!'); window.location='barang.php';</script>";
      }else{
      	echo "<script>alert('Data Gagal di hapus!!'); window.location='barang.php';</script>";
    }
?>