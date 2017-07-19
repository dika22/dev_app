<?php
	include '../koneksi.php';

	$kode_toko = $_GET['kode_toko'];

	$hapus	= mysql_query("DELETE FROM store WHERE kode_toko='$kode_toko'") or die(mysql_error());


	if($hapus==true){
        echo "<script>alert('Data Sukses di hapus!'); window.location='store.php';</script>";
      }else{
      	echo "<script>alert('Data Gagal di hapus!!'); window.location='store.php';</script>";
    }
?>