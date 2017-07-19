<?php
	session_start();
	include '../koneksi.php';

	$kode_pengiriman 		= $_POST['kode_pengiriman'];
	$tgl_pengiriman			= $_POST['tgl_pengiriman'];
	$kode_barang			= $_POST['kode_barang'];
	$harga_satuan			= $_POST['harga_satuan'];
	$jumlah_barang			= $_POST['jumlah_barang'];
	$kode_toko				= $_POST['kode_toko'];
	$kode_status_pengiriman	= $_POST['kode_status_pengiriman'];
	$modified_at			= date('Y-m-d-H-i-s');
	$modified_by			= '';

	$query	= mysql_query("UPDATE pengiriman SET kode_pengiriman='$kode_pengiriman',tgl_pengiriman='$tgl_pengiriman',kode_barang='$kode_barang',harga_satuan='$harga_satuan',jumlah_barang='$jumlah_barang',kode_toko='$kode_toko',kode_status_pengiriman='$kode_status_pengiriman',modified_at='$modified_at',modified_by='$modified_by' WHERE kode_pengiriman='$kode_pengiriman'") or die(mysql_error());

	if($query==true){
        echo "<script>alert('sukses insert data!'); window.location='data_pengiriman.php';</script>";
      }else{
      echo "<script>alert('gagal insert data!'); window.location='data_pengiriman.php';</script>";
    }

?>