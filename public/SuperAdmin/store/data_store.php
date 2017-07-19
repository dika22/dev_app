<!DOCTYPE html>
<html>
<head>
	<title>data store</title>
</head>
<body>
<?php
	include '../koneksi.php';
	$query = mysql_query("SELECT * FROM store") or die(mysql_error());
	
?>
<a href="store_form_home.php"><button class="btn btn-primary">Add Toko</button></a>
<br>
<br>
	<table class="table table-bordered table-hover">
	<tr>
		<th>Kode Toko</th>
		<th>Nama Toko</th>
		<th>Alamat</th>
		<th>Created At</th>
		<th colspan="2"><center>Action</center></th>
	</tr>
	<?php 
	while ($data = mysql_fetch_array($query)) {
		
	//print_r($data); 
	?>
		<tr>
			<td><?php echo $data['kode_toko']; ?></td>
			<td><?php echo $data['nama_toko']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['created_at'] ?></td>
			<td><center><a href="edit_store.php?kode_toko=<?php echo $data['kode_toko']; ?>"><button class="btn btn-warning">Update</button></a></center></td>
			<td><center><a href="hapus_store.php?kode_toko=<?php echo $data['kode_toko']; ?>"><button class="btn btn-danger">Delete</button></a></center></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>