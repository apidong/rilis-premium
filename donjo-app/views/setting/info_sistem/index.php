<style>
	.scroll {
		height: 500px;
		overflow-y: auto;
	}

	.huge {
		font-size: 40px;
	}

	.bottom {
		display: flex;
		align-items: self-end;
	}

	ul.tree-folder,
	ul.tree-folder ul {
		list-style: none;
		margin: 0;
		padding: 0;
	}

	ul.tree-folder ul {
		margin-left: 10px;
	}

	ul.tree-folder li {
		margin: 0;
		padding: 5px 7px;
		line-height: 20px;
		color: #369;
		font-weight: bold;
		border-left: 1px solid rgb(100, 100, 100);
	}

	ul.tree-folder li:last-child {
		border-left: none;
	}

	ul.tree-folder li:before {
		position: relative;
		top: -0.3em;
		height: 1em;
		width: 12px;
		color: white;
		border-bottom: 1px solid rgb(100, 100, 100);
		content: "";
		display: inline-block;
		left: -7px;
	}

	ul.tree-folder li:last-child:before {
		border-left: 1px solid rgb(100, 100, 100);
	}

	ul.tree-folder li i {
		position: absolute;
		right: 40px;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Info Sistem</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('beranda') ?>"><i class="fa fa-home"></i> Beranda</a></li>
			<li class="active">Info Sistem</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<?php if ($disk) : ?>
			<div class="row">
				<div class="col-md-6">
					<div class="panel bg-yellow">
						<div class="panel-heading">
							<div class="row bottom">
								<div class="col-xs-2">
									<h1><i class="fa fa-hdd-o"></i></h1>
								</div>
								<div class="col-xs-10 text-right">
									<div class="huge"><small style="font-size:60%"><?= $total_space ?></small></div>
									<div>Total Ruang Penyimpanan</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel bg-green">
						<div class="panel-heading">
							<div class="row bottom">
								<div class="col-xs-2">
									<h1><i class="fa fa-hdd-o"></i></h1>
								</div>
								<div class="col-xs-10 text-right">
									<div class="huge"><small style="font-size:60%"><?= $free_space ?></small></div>
									<div>Sisa Ruang Penyimpanan</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif ?>

		<form id="mainform" name="mainform" method="post">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#log_viewer">Logs</a></li>
					<li><a data-toggle="tab" href="#ekstensi">Kebutuhan Sistem</a></li>
					<?php if (auth()->id == super_admin()) : ?>
						<li><a data-toggle="tab" href="#info_sistem">Info Sistem</a></li>
					<?php endif ?>
					<li><a data-toggle="tab" href="#optimasi">Optimasi</a></li>
					<li><a data-toggle="tab" href="#folder_desa">Folder Desa</a></li>
				</ul>
				<div class="tab-content">
					<div id="log_viewer" class="tab-pane fade in active">
						<div class="row">
							<div class="col-md-3">
								<div class="box box-info">
									<div class="box-header with-border">
										<h3 class="box-title">File logs</h3>
										<?php if (can('h') && $files) : ?>
											<div class="box-tools">
												<span class="label pull-right"><input type="checkbox" id="checkall" class="checkall" />
											</div>
										<?php endif ?>
									</div>
									<div class="box-body no-padding">
										<ul class="nav nav-pills nav-stacked scroll">
											<?php if (empty($files)) : ?>
												<li><a href="#"><?= $file; ?>File log tidak ditemukan</a></li>
											<?php else : ?>
												<?php foreach ($files as $file) : ?>
													<li <?= jecho($currentFile, $file, 'class="active"'); ?>><a href="?f=<?= base64_encode($file); ?>">
															<?= $file; ?>
															<?php if (can('h')) : ?>
																<span class="pull-right-container">
																	<span class="label pull-right"><input type="checkbox" class="checkbox" name="id_cb[]" value="<?= $file ?>" /></a></span>
														</span>
													<?php endif ?>
													</li>
												<?php endforeach ?>
											<?php endif ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="box box-info">
									<div class="box-header with-border">
										<?php if ($currentFile) : ?>
											<a href="?dl=<?= base64_encode($currentFile) ?>" class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block " title="Unduh file log"><i class="fa fa-download"></i> Unduh</a>
											<?php if ($this->CI->cek_hak_akses_url('u')) : ?>
												<a href="#" data-href="?del=<?= base64_encode($currentFile) ?>" class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block " title="Hapus log file" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i>Hapus log file</a>
												<a href="#confirm-delete" title="Hapus Data" onclick="deleteAllBox('mainform','<?= site_url($this->controller . '/remove_log?f=' . base64_encode($currentFile)) ?>')" class="btn btn-social btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih"><i class='fa fa-trash-o'></i> Hapus Data Terpilih</a>
											<?php endif; ?>
										<?php endif ?>
									</div>
									<div class="box-body">
										<div class="row">
											<div class="col-sm-12">
												<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
													<div class="row">
														<div class="col-sm-12">
															<div class="table-responsive">
																<?php if (null === $logs) : ?>
																	<div>
																		<strong>File log kosong atau lebih dari 500 Mb, silahkan unduh.</strong>
																	</div>
																<?php else : ?>
																	<div class="table-responsive">
																		<table id="tabel-logs" class="table table-bordered dataTable table-striped table-hover tabel-daftar">
																			<thead class="bg-gray">
																				<tr>
																					<th>Level</th>
																					<th>Tanggal</th>
																					<th>Pesan</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php foreach ($logs as $key => $log) : ?>
																					<tr>
																						<td class="padat">
																							<h6><span class="label label-<?= $log['class'] ?>"><?= $log['level'] ?></span></h6>
																						</td>
																						<td class="padat"><?= $log['date'] ?></td>
																						<td class="text">
																							<?php if (array_key_exists('extra', $log)) : ?>
																								<a class="pull-right btn btn-primary btn-xs" data-toggle="collapse" href="#collapse<?= $key ?>" aria-expanded="false" aria-controls="collapse<?= $key ?>">
																									<span class="glyphicon glyphicon-search"></span>
																								</a>
																							<?php endif; ?>
																							<?= strip_tags($log['content']); ?>
																							<?php if (array_key_exists('extra', $log)) : ?>
																								<div class="collapse" id="collapse<?= $key ?>">
																									<?= strip_tags($log['extra']) ?>
																								</div>
																							<?php endif; ?>
																						</td>
																					</tr>
																				<?php endforeach ?>
																			</tbody>
																		</table>
																	</div>
																<?php endif ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="ekstensi" class="tab-pane fade in">
						<?php if ($mysql['cek']) : ?>
							<div class="alert alert-success" role="alert">
								<p>Versi Database terpasang <?= $mysql['versi'] ?> sudah memenuhi syarat.</p>
							</div>
						<?php else : ?>
							<div class="alert alert-danger" role="alert">
								<p>Versi Database terpasang <?= $mysql['versi'] ?> tidak memenuhi syarat.</p>
								<p>Update versi Database supaya minimal <?= minMySqlVersion ?> dan maksimal <?= maxMySqlVersion ?>, atau MariaDB supaya minimal <?= minMariaDBVersion ?>.</p>
							</div>
						<?php endif; ?>
						<?php if ($php['cek']) : ?>
							<div class="alert alert-success" role="alert">
								<p>Versi PHP terpasang <?= $php['versi'] ?> sudah memenuhi syarat.</p>
							</div>
						<?php else : ?>
							<div class="alert alert-danger" role="alert">
								<p>Versi PHP terpasang <?= $php['versi'] ?> tidak memenuhi syarat.</p>
								<p>Update versi PHP supaya minimal <?= minPhpVersion ?> dan maksimal <?= maxPhpVersion ?>.</p>
							</div>
						<?php endif; ?>
						<?php if (! $ekstensi['lengkap'] || ! $disable_functions['lengkap']) : ?>
							<div class="alert alert-danger" role="alert">
								<p>Ada beberapa ekstensi dan fungsi PHP wajib yang tidak tersedia di sistem anda.
									Karena itu, mungkin ada fungsi yang akan bermasalah.</p>
								<p>Aktifkan ekstensi dan fungsi PHP yang belum ada di sistem anda.</p>
							</div>
						<?php else : ?>
							<p>
								Semua ekstensi PHP yang diperlukan sudah aktif di sistem anda.
							</p>
						<?php endif; ?>
						<div class="row">
							<div class="col-sm-6">
								<h4>EKSTENSI</h4>
								<?php foreach ($ekstensi['ekstensi'] as $key => $value) : ?>
									<div class="form-group">
										<h5><i class="fa fa-<?= $value ? 'check-circle-o' : 'times-circle-o' ?> fa-lg" style="color:<?= $value ? 'green' : 'red' ?>"></i>&nbsp;&nbsp;<?= $key ?></h5>
									</div>
								<?php endforeach; ?>
							</div>
							<?php if ($disable_functions['functions']): ?>
							<div class="col-sm-6">
								<h4>FUNGSI</h4>
								<?php foreach ($disable_functions['functions'] as $func => $val) : ?>
									<div class="form-group">
										<h5><i class="fa fa-<?= $val ? 'check-circle-o' : 'times-circle-o' ?> fa-lg" style="color:<?= $val ? 'green' : 'red' ?>"></i>&nbsp;&nbsp;<?= $func ?></h5>
									</div>
								<?php endforeach; ?>
							</div>
							<?php endif ?>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<h4>KEBUTUHAN SISTEM</h4>
								<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
									<div class="row">
										<div class="col-sm-12">
											<div class="table-responsive">
												<table class="table table-bordered dataTable table-striped table-hover tabel-daftar">
													<tbody>
														<?php foreach ($kebutuhan_sistem as $key => $val) : ?>
															<tr>
																<td class="text"><?= "{$key} ({$val['v']})" ?></td>
																<td class="text"><?= $val[$key] ?></td>
																<td>
																	<i class="fa fa-<?= $val['result'] ? 'check-circle-o' : 'times-circle-o' ?> fa-lg" style="color:<?= $val['result'] ? 'green' : 'red' ?>"></i>
																</td>
															</tr>
														<?php endforeach ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php if (auth()->id == super_admin()) : ?>
						<div id="info_sistem" class="tab-pane fade in">
							<?php
                            ob_start();
					    if (ENVIRONMENT === 'production') :
					        phpinfo(INFO_ALL & ~INFO_GENERAL & ~INFO_MODULES & ~INFO_ENVIRONMENT & ~INFO_VARIABLES);
					    else :
					        phpinfo();
					    endif;

			$phpinfo = ['phpinfo' => []];

			if (preg_match_all('#(?:<h2>(?:<a name=".*?">)?(.*?)(?:</a>)?</h2>)|(?:<tr(?: class=".*?")?><t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>)?)?</tr>)#s', ob_get_clean(), $matches, PREG_SET_ORDER)) :
			    foreach ($matches as $match) :
			        if ($match[1] !== '') :
			            $phpinfo[$match[1]] = [];
			        elseif (isset($match[3])) :
			            $phpinfo[end(array_keys($phpinfo))][$match[2]] = isset($match[4]) ? [$match[3], $match[4]] : $match[3];
			        else :
			            $phpinfo[end(array_keys($phpinfo))][] = $match[2];
			        endif;
			    endforeach;
			?>
								<?php $i = 0; ?>
								<?php foreach ($phpinfo as $name => $section) : ?>
									<?php $i++; ?>
									<?php if ($i == 1) : ?>
										<div class='table-responsive'>
											<table class='table table-bordered dataTable table-hover'>
											<?php else : ?>
												<h3><?= $name ?></h3>
												<div class='table-responsive'>
													<table class='table table-bordered dataTable table-hover'>
													<?php endif ?>
													<?php foreach ($section as $key => $val) : ?>
														<?php if (is_array($val)) : ?>
															<tr>
																<td class="col-md-4 info"><?= $key ?></td>
																<td><?= $val[0] ?></td>
																<td><?= $val[1] ?></td>
															</tr>
														<?php elseif (is_string($key)) : ?>
															<tr>
																<td class="col-md-4 info"><?= $key ?></td>
																<td colspan='2'><?= $val ?></td>
															</tr>
														<?php else : ?>
															<tr>
																<td class="btn-primary" colspan='3'><?= $val ?></td>
															</tr>
														<?php endif; ?>
													<?php endforeach; ?>
													</table>
												</div>
											<?php endforeach; ?>
										<?php endif; ?>
										</div>
									<?php endif; ?>

									<div id="optimasi" class="tab-pane fade in">
										<div class="row">
											<div class="col-sm-6">
												<h5><b>CACHE</b></h5>
												<div class="input-group">
													<input type="text" class="form-control" value="<?= str_replace('\\', '/', config('cache.stores.file.path')) ?>" readonly>
													<?php if (can('u')) : ?>
														<span class="input-group-btn">
															<a href="<?= site_url("{$this->controller}/cache_desa") ?>" class="btn btn-info btn-flat">Bersihkan</a>
														</span>
													<?php endif ?>
												</div>
												<hr>
												<div class="input-group">
													<input type="text" class="form-control" value="<?= str_replace('\\', '/', config('view.compiled')) ?>" readonly>
													<?php if (can('u')) : ?>
														<span class="input-group-btn">
															<a href="<?= site_url("{$this->controller}/cache_blade") ?>" class="btn btn-info btn-flat">Bersihkan</a>
														</span>
													<?php endif ?>
												</div>
											</div>
										</div>
									</div>

									<div id="folder_desa" class="tab-pane fade in">
										<div class="row">
											<div class="col-sm-12">
												<div class="box-header">
													<div>
														<?php if ($check_permission) : ?>
															<?php if (can('u')) : ?>
																<a href="#" onclick="updatePermission(this)" class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block " title="Set hak akses folder"><i class="fa fa-check"></i> Perbaiki hak akses folder</a>
															<?php endif; ?>
														<?php else : ?>
															<div class="alert alert-info alert-dismissible">
																<p>OS menggunakan Windows tidak membutuhkan cek permission</p>
															</div>
														<?php endif; ?>
													</div>
												</div>
												<div class="box-body">
													<div class="css-treeview">
														<?php
			                            $folders = directory_map(DESAPATH);
			echo create_tree_folder($folders, DESAPATH);
			?>
													</div>

												</div>
											</div>
										</div>
									</div>
						</div>
				</div>
		</form>
	</section>
</div>
<?php $this->load->view('global/confirm_delete'); ?>
<script>
	$(function() {
		var url = document.location.toString();
		if (url.match('#')) {
			$('[href="#ekstensi"]').click();
		}

		$('#tabel-logs').DataTable({
			"processing": true,
			"autoWidth": false,
			'pageLength': 10,
			"order": [
				[1, "desc"]
			],
			"columnDefs": [{
				"targets": [0, 2],
				"orderable": false
			}]
		});

		function checkAll(id = "#checkall") {
			$('.box-header').on('click', id, function() {
				if ($(this).is(':checked')) {
					$(".nav input[type=checkbox]").each(function() {
						$(this).prop("checked", true);
					});
				} else {
					$(".nav input[type=checkbox]").each(function() {
						$(this).prop("checked", false);
					});
				}
				$(".nav input[type=checkbox]").change();
				enableHapusTerpilih();
			});
			$("[data-toggle=tooltip]").tooltip();
		}

		checkAll();
		$('ul.nav').on('click', "input[name='id_cb[]']", function() {
			enableHapusTerpilih();
		});

		function enableHapusTerpilih() {
			if ($("input[name='id_cb[]']:checked:not(:disabled)").length <= 0) {
				$(".hapus-terpilih").addClass('disabled');
				$(".hapus-terpilih").attr('href', '#');
			} else {
				$(".hapus-terpilih").removeClass('disabled');
				$(".hapus-terpilih").attr('href', '#confirm-delete');
			}
		}
	});

	function updatePermission(elm) {
		let _folderDesa = $(elm).closest('#folder_desa');
		let _data = []
		_folderDesa.find('.box-body li.text-red').each(function(i, v) {
			_data.push($(v).data('path'))
		})

		if (_data.length) {
			Swal.fire({
				title: 'Sedang Menyimpan',
				allowOutsideClick: false,
				allowEscapeKey: false,
				showConfirmButton: false,
				didOpen: () => {
					Swal.showLoading()
				}
			});
			$.ajax({
				url: 'info_sistem/set_permission_desa',
				dataType: "JSON",
				data: {
					folders: _data
				},
				type: "POST",
				success: function(data) {
					if (data.status) {
						Swal.fire({
							'icon': 'success',
							'title': 'Success',
							'timer': 2000,
							'text': data.message
						}).then((result) => {
							window.location.reload();
						})
					} else {
						Swal.fire({
							'icon': 'error',
							'title': 'Error',
							'timer': 2000,
							'text': data.message
						})
					}
				}
			})
		} else {
			Swal.fire({
				'icon': 'info',
				'title': 'Info',
				'timer': 2000,
				'text': 'Tidak ada yang harus diubah permissionnya'
			})
		}
	}
</script>