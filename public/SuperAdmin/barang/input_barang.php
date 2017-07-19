<?php
	session_start();
	include '../koneksi.php';

	@$kode_barang 	= $_POST['kode_barang'];
	@$nama_barang  	= $_POST['nama_barang'];
	@$brand 		= $_POST['brand'];
	@$isi 			= $_POST['isi'];
	@$harga 		= $_POST['harga'];
	@$created_at   	= date("Y-m-d H:i:s");
	@$created_by   	= $_SESSION['name'];
	@$modified_at  	= '';
	@$modified_by  	= '';

	$query = mysql_query("INSERT INTO barang VALUES('$kode_barang','$nama_barang','$brand','$isi','$harga','$created_at','$created_by','modified_at','modified_by')") or die(mysql_error());

	if($query==true){
        echo "<script>alert('sukses insert data!'); window.location='barang.php';</script>";
      }else{
      echo "<script>alert('gagal insert data!'); window.location='barang.php';</script>";
    }
	
?>