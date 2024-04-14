
<?php $this->load->view('_template/header');?>
<?php $this->load->view('_template/sidebar');?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard v2</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard v2</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box">
						<span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">CPU Traffic</span>
							<span class="info-box-number">10<small>%</small></span>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">Likes</span>
							<span class="info-box-number">41,410</span>
						</div>
					</div>
				</div>
				<div class="clearfix hidden-md-up"></div>

				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">Sales</span>
							<span class="info-box-number">760</span>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">New Members</span>
							<span class="info-box-number">2,000</span>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Latest Members</h3>
				</div>
				<div class="card-body p-0">
					<ul class="users-list clearfix">
						<li>
							<img src="<?= base_url() ?>assets/dist/img/user1-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Alexander Pierce</a>
							<span class="users-list-date">Today</span>
						</li>
						<li>
							<img src="<?= base_url() ?>assets/dist/img/user8-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Norman</a>
							<span class="users-list-date">Yesterday</span>
						</li>
						<li>
							<img src="<?= base_url() ?>assets/dist/img/user7-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Jane</a>
							<span class="users-list-date">12 Jan</span>
						</li>
						<li>
							<img src="<?= base_url() ?>assets/dist/img/user6-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">John</a>
							<span class="users-list-date">12 Jan</span>
						</li>
						<li>
							<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" alt="User Image">
							<a class="users-list-name" href="#">Alexander</a>
							<span class="users-list-date">13 Jan</span>
						</li>
						<li>
							<img src="<?= base_url() ?>assets/dist/img/user5-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Sarah</a>
							<span class="users-list-date">14 Jan</span>
						</li>
						<li>
							<img src="<?= base_url() ?>assets/dist/img/user4-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Nora</a>
							<span class="users-list-date">15 Jan</span>
						</li>
						<li>
							<img src="<?= base_url() ?>assets/dist/img/user3-128x128.jpg" alt="User Image">
							<a class="users-list-name" href="#">Nadia</a>
							<span class="users-list-date">15 Jan</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Projects This Weeks</h3>
				</div>
				<div class="card-body">
					<table class="table table-striped projects">
						<thead>
							<tr>
								<th style="width: 1%">#</th>
								<th style="width: 20%">Modul</th>
								<th style="width: 20%">Menu</th>
								<th style="width: 14%">Started</th>
								<th style="width: 15%" class="text-center">Progress</th>
								<th style="width: 15%" class="text-center">Status</th>
								<th style="width: 15%" class="text-center">#</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>#</td>
								<td>
									<a> AdminLTE v3 </a>
									<br/>
									<small> Request 01.01.2019 </small>
								</td>
								<td>
									<a> AdminLTE v3 </a>
									<br/>
									<small> <span class="badge badge-success">Success</span> </small>
								</td>
								<td>
									<a> 01.01.2019 </a>
								</td>
								<td class="project_progress text-center">
									<div class="progress progress-sm">
										<div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"> </div>
									</div>
									<small> 57% Complete </small>
								</td>
								<td class="project-state">
									<span class="badge badge-success">Success</span>
									<br/>
									<small> Date 01.01.2019 </small>
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
			</div>
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Projects Next Weeks</h3>
				</div>
				<div class="card-body">
					<table class="table table-striped projects">
						<thead>
							<tr>
								<th style="width: 1%">#</th>
								<th style="width: 19%">Modul</th>
								<th style="width: 20%">Menu</th>
								<th style="width: 13%">Request By</th>
								<th style="width: 17%" class="text-center">Assignment Date</th>
								<th style="width: 15%" class="text-center">Assignment By</th>
								<th style="width: 15%" class="text-center">#</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>#</td>
								<td>
									<a> AdminLTE v3 </a>
									<br/>
									<small> Request 01.01.2019 </small>
								</td>
								<td>
									<a> AdminLTE v3 </a>
								</td>
								<td>
									<a> AdminLTE v3 </a>
								</td>
								<td class="text-center">
									<a> 01.01.2019 </a>
								</td>
								<td class="text-center">
									<a> SPV </a>
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
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('_template/footer');?>
