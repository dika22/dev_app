<!DOCTYPE html>
<html>
<head>
	<title>barang</title>
</head>
<body>
<?php
	include '../koneksi.php';
	$query = mysql_query("SELECT * FROM barang") or die(mysql_error());
	
	//print_r($data);

?>
<div class="row">
<a href="form_barang_home.php"><button class="btn btn-primary">Tambah</button></a>
<br>
<br>
	<table class="table  table-bordered table-hover">
		<tr>
			<th>Kode barang</th>
			<th>Nama barang</th>
			<th>Brand</th>
			<th>Isi</th>
			<th>Harga</th>
			<th>Created_at</th>
			<th colspan="2"><center>Action</center></th>
		</tr>
		<?php
			while ($data = mysql_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $data['kode_barang']; ?></td>
			<td><?php echo $data['nama_barang']; ?></td>
			<td><?php echo $data['brand']?></td>
			<td><?php echo $data['isi']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['created_at']; ?></td>
			<td><center><a href="edit_barang.php?kode_barang=<?php echo $data['kode_barang']?>"><button class="btn btn-warning">Update</button></a></center></td>
			<td><center><a href="hapus_barang.php?kode_barang=<?php echo $data['kode_barang']; ?>"><button class="btn btn-danger">Delete</button></a></center></td>
		</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>