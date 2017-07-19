						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="input_user.php" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-1"> username </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="user_id" placeholder="Username" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label" for="form-field-2"> Level</label>
										<div class="col-sm-9">
											<select name="level" class="col-xs-10 col-sm-5" required>
											<option value="">-- PILIH User --</option>
            								<option value="SuperAdmin">SuperAdmin</option>
            								<option value="Admin">Admin</option>
										</select>
										</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label" for="form-field-2"> Password Field </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2" name="password" placeholder="Password" class="col-xs-10 col-sm-5" />
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