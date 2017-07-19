<?php
	session_start();
	include '../koneksi.php';

	$kode_return 			= $_POST['kode_return'];
	$kode_barang			= $_POST['kode_barang'];
	$kode_toko				= $_POST['kode_toko'];
	$tgl_return				= $_POST['tgl_return'];
	$jumlah					= $_POST['jumlah'];
	$harga					= $_POST['harga'];
	$total_harga			= $_POST['total_harga'];
	//$kode_status_return	= $_POST['kode_status_return'];
	$modified_at			= '';
	$modified_by			= '';

	$query	= mysql_query("UPDATE data_return SET kode_return='$kode_return',kode_barang='$kode_barang',kode_toko='$kode_toko',tgl_return='$tgl_return',jumlah='$jumlah',harga='$harga',total_harga='$total_harga',modified_at='$modified_at',modified_by='modified_by' WHERE kode_return=$kode_return") or die(mysql_error());

	if($query==true){
        echo "<script>alert('sukses insert data!'); window.location='data_return.php';</script>";
      }else{
      echo "<script>alert('gagal insert data!'); window.location='data_return.php';</script>";
    }

?>