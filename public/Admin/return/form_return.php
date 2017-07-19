						<div class="row">
						<a href="data_pengiriman.php"><button class="btn btn-success">Daftar Return Barang</button></a>
						<br>
						<br>
							<div class="col-xs-12">
							<?php
								include '../koneksi.php';
					            $query1   	= mysql_query("SELECT max(kode_pengiriman) as maxid from data_return");
					            $data1		= @mysql_fetch_array($query1);
					            $kelas 		= $data1['maxid'];
					            $no_urut    = (int)substr($kelas, 9, 4);
					            $no_urut++;
					            $p 			="R-".date('dmy').'-';
					            $char   	= $p;
					            $kode 		= $char.sprintf("%0s",$no_urut);
        					?>
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="input_return.php" method="post">
								<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-1"> Kode Return </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="kode_return" placeholder="Kode Pengiriman" class="col-xs-10 col-sm-5" required="required"  value="<?php echo $kode; ?>" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-2">Pilin Toko</label>

										<div class="col-sm-9">
											<select name="kode_toko" class="col-xs-10 col-sm-5" id="kode_toko">
												<option value="">-- PILIH Toko Retur --</option>
                                					<?php
                                					$query = mysql_query("SELECT * from store order by kode_toko") or die(mysql_error());
                                					while($data = mysql_fetch_array($query)) {
                                					echo "<option value='".$data['kode_toko']."'>".$data['kode_toko']."&nbsp;&nbsp;|&nbsp;&nbsp;".$data['nama_toko']."</option>";
                                						}
                                 					?>
											</select>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-1">Tanggal Return Barang</label>
										<div class="col-sm-9">
											<input type="date" id="form-field-1" name="tgl_return" placeholder="26 mei 2017" class="col-xs-10 col-sm-5" required="required" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-1">Kode Barang</label>

										<div class="col-sm-9">
											<select name="kode_barang" class="col-xs-10 col-sm-5" id="kode_barang">
												<option value="">-- PILIH Barang --</option>
                                					<?php
                                					$query = mysql_query("SELECT * from barang order by kode_barang") or die(mysql_error());
                                					while($data = mysql_fetch_array($query)) {
                                					echo "<option value='".$data['kode_barang']."'>".$data['kode_barang']."&nbsp;&nbsp;|&nbsp;&nbsp;".$data['brand']."</option>";
                                						}
                                 					?>
											</select>
										</div>
									</div>
									
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-2"> Harga Satuan</label>

										<div class="col-sm-9">
											<input type="text" id="kode_brg" name="harga_satuan" placeholder="Rp. 10.0000" class="col-xs-10 col-sm-5"  onkeyup="kali()" required="required" />
										</div>
									</div>
									<script src="../../assets/js/jquery-2.2.1.min.js"></script>
									<span id="hasil">
									<script type="text/javascript">
					                      $("#kode_barang").change(function(){
					                        // var mhs = $("#mhs").val();
					                        var kode_barang = $(this).val();
					                        //var no_transaksi = $("#no_transaksi").val();
					                        var kode_brg = $("#kode_brg").val();
					                        //var type_transaksi = $("#type_transaksi").val();
					                        // var tgl_awal = $("#tgl_awal").val();
					                         if(kode_barang == '') {
					                          alert("Pilih nama anggota!");
					                          $("#kode_barang").focus();
					                        } else {
					                          $.ajax({
					                            data : 'kode_barang='+kode_barang,
					                            url : 'autoretur.php?page=cari',
					                            type : 'POST',
					                            success : function(msg) {
					                              $("#hasil").html(msg);
					                            }
					                          });
					                        }
					                      });
                    				</script>
                    				</span>
                    				
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-2">Jumlah</label>
										<div class="col-sm-9">
											<input type="text" id="n2" name="jumlah" onkeyup="kali()" placeholder="10 pcs" class="col-xs-10 col-sm-5" required="required" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-2">Total Harga</label>

										<div class="col-sm-9">
											<input type="text" id="total_harga" name="total_harga" placeholder="25000" class="col-xs-10 col-sm-5" required="required" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>
											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>
								</form>
							<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->