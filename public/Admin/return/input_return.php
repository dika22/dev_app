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
	$created_at				= date('Y-m-d-H-i-s');
	$created_by				= '';
	$modified_at			= '';
	$modified_by			= '';

	$query	= mysql_query("INSERT INTO data_return VALUES('$kode_return','$kode_barang','$kode_toko','$tgl_return','$jumlah','$harga','$total_harga','$created_at','created_by','','')") or die(mysql_error());

	if($query==true){
        echo "<script>alert('sukses insert data!'); window.location='data_return.php';</script>";
      }else{
      echo "<script>alert('gagal insert data!'); window.location='data_return.php';</script>";
    }

?>