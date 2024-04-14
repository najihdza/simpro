
<?php $this->load->view('_template/header');?>
<?php $this->load->view('_template/sidebar');?>

	<div class="content-wrapper">
		<div class="content-header">
			<?php $this->load->view('_template/breadcumb');?>
		</div>
		<section class="content">
			<div class="container-fluid">
				<div class="card">
				<!-- <div class="card-header">
					<h3 class="card-title">DataTable with default features</h3>
				</div> -->
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-striped">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Modul</th>
								<th>Menu</th>
								<th>Request By</th>
								<th class="text-center">Status</th>
								<th class="text-center">#</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">#</td>
								<td>
									<a> AdminLTE v3 </a>
									<br/>
									<small> Created 01.01.2019 </small>
								</td>
								<td>
									<a> AdminLTE v3 </a>
									<br/>
									<small> <span class="badge badge-success">Success</span> </small>
								</td>
								<td>
									<a>Win 95+</a>
								</td>
								<td class="text-center">
									<span class="badge badge-success">Success</span>
									<br/>
									<small> 01.01.2019 </small>
								</td>
								<td class="project-actions text-center">
									<a class="btn btn-primary btn-xs" href="#">
										<i class="fas fa-eye"> </i>
									</a>
									<a class="btn btn-info btn-xs" href="#">
										<i class="fas fa-pencil-alt"> </i>
									</a>
									<a class="btn btn-danger btn-xs" href="#">
										<i class="fas fa-trash"> </i>
									</a>
									<a class="btn btn-success btn-xs" href="<?= base_url('detail_project'); ?>">
										<i class="fas fa-rocket"> </i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
				</div>
				<!-- <div class="card">
					<div class="card-header">
						<h3 class="card-title">Projects</h3>
					</div>
					<div class="card-body">
						<table class="table table-striped projects">
							<thead>
								<tr>
									<th style="width: 1%">#</th>
									<th style="width: 20%">Modul Name</th>
									<th style="width: 20%">Menu Name</th>
									<th style="width: 14%" class="text-center">PIC</th>
									<th style="width: 20%" class="text-center">Progress</th>
									<th style="width: 10%" class="text-center">Status</th>
									<th style="width: 15%" class="text-center">#</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>#</td>
									<td>
										<a> AdminLTE v3 </a>
										<br/>
										<small> Created 01.01.2019 </small>
									</td>
									<td>
										<a> AdminLTE v3 </a>
									</td>
									<td class="text-center">
										<a> AdminLTE v3 </a>
									</td>
									<td class="project_progress text-center">
										<div class="progress progress-sm">
											<div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"> </div>
										</div>
										<small> 57% Complete </small>
									</td>
									<td class="project-state">
										<span class="badge badge-success">Success</span>
									</td>
									<td class="project-actions text-center">
										<a class="btn btn-primary btn-xs" href="#">
											<i class="fas fa-eye"> </i>
										</a>
										<a class="btn btn-info btn-xs" href="#">
											<i class="fas fa-pencil-alt"> </i>
										</a>
										<a class="btn btn-danger btn-xs" href="#">
											<i class="fas fa-trash"> </i>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div> -->
			</div>
		</section>
	</div>

<?php $this->load->view('_template/footer');?>
