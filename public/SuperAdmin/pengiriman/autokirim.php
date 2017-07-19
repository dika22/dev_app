<?php

include '../koneksi.php'; 

  $kode_pengiriman    = @$_POST['kode_pengiriman'];
  $tgl_pengiriman     = @$_POST['tgl_pengiriman'];
  $kode_barang      = @$_POST['kode_barang'];
  $harga_satuan     = @$_POST['harga_satuan'];
  $jumlah_barang      = @$_POST['jumlah_barang'];
  $kode_toko        = @$_POST['kode_toko'];
  $kode_status_pengiriman = @$_POST['kode_status_pengiriman'];
  $modified_at      = date('Y-m-d-H-i-s');
  $modified_by      = '';

  if($_GET['page'] == 'cari') {

  $sql = mysql_query("SELECT * FROM `barang` WHERE kode_barang='$kode_barang'") or die (mysql_error());

  if(mysql_num_rows($sql) == 0) {
    echo "<script>alert('Anggota tersebut tidak ada!');</script>";
  } else {
    // $option = null;
    $harga = null;
    $nama_barang = null;
   // $type_transaksi=null;
    //$no_transaksi=null;

    while($data_barang = mysql_fetch_array($sql)) {

      //print_r($data_barang);
      //die();

        // $option .= "<input style='width:120px;margin-left:20px;' value='".$data_dosen['no_anggota']."'</input>";
        //$no_transaksi .= $data_dosen['no_transaksi']."+";
        $harga.= $data_barang['harga']."+";
        //$nama .= $data_dosen['nama']."+";
        //$type_transaksi .= $data_dosen['type_transaksi']."+";
    }
    $kd_b = substr($harga, 0, strpos($harga, '+'));
    //$kd_ruang_jadi1 = substr($nama, 0, strpos($nama, '+'));
    //$kd_ruang_jadi2 = substr($no_transaksi, 0, strpos($no_transaksi, '+'));
    // print_r($kd_ruang_jadi,$kd_ruang_jadi1,$kd_ruang_jadi2);
    ?>
    <script type="text/javascript">
    $("#kode_brg").val("<?php echo $kd_b?>");
    </script>
    <?php
  }
  // return;
} 
?>