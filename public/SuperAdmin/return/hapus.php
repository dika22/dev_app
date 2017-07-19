<?php
	include '../koneksi.php';

	$kode_return = $_GET['kode_return'];

	$hapus	= mysql_query("DELETE FROM data_return WHERE kode_return='$kode_return'") or die(mysql_error());


	if($hapus==true){
        echo "<script>alert('Data Sukses di hapus!'); window.location='data_return.php';</script>";
      }else{
      	echo "<script>alert('Data Gagal di hapus!!'); window.location='data_return.php';</script>";
    }
?>