<?php
session_start();
include '../koneksi.php';


@$kode_toko		= $_POST['kode_toko'];
@$nama_toko		= $_POST['nama_toko'];
@$alamat		= $_POST['alamat'];
@$created_at	= date('Y-m-d');
@$created_by	= $_SESSION['name'];
@$modified_at	= '';
@$modified_by	= '';


$query = mysql_query("INSERT INTO store VALUES ('$kode_toko','$nama_toko','$alamat','$created_at','$created_by','$modified_at','modified_by')") or die(mysql_error());

if ($query==true) {
	echo "<script>alert('sukses insert data!'); window.location='store.php';</script>";
   }else{
    echo "<script>alert('gagal insert data!'); window.location='store.php';</script>";
}
?>