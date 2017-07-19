						<div class="row">
						<a href="barang.php"><button class="btn btn-success">Data Barang</button></a>
						<br>
						<br>
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="input_barang.php" method="post">
								<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-1"> Kode Barang </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="kode_barang" placeholder="Kode Barang" class="col-xs-10 col-sm-5" required="required" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-1"> Nama Barang </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="nama_barang" placeholder="nama Barang" class="col-xs-10 col-sm-5" required="required" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-1"> Brand </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="brand" placeholder="nama brand" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-1"> Isi Barang</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="isi" placeholder="12 pcs" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-2"> Harga Barang</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2" name="harga" placeholder="Rp. 10.0000" class="col-xs-10 col-sm-5" required="required" />
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