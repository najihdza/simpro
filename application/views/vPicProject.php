
<?php $this->load->view('_template/header');?>
<?php $this->load->view('_template/sidebar');?>

	<div class="content-wrapper">
		<div class="content-header">
			<?php $this->load->view('_template/breadcumb');?>
		</div>
		<section class="content">
			<div class="container-fluid">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Projects This Weeks</h3>
					</div>
					<div class="card-body">
						<table class="table table-striped projects">
							<thead>
								<tr>
									<th style="width: 1%" class="text-center">#</th>
									<th style="width: 20%">PIC Name</th>
									<th style="width: 20%" class="text-center">On Progres</th>
									<th style="width: 14%" class="text-center">Complete</th>
									<th style="width: 15%" class="text-center">#</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">#</td>
									<td>
										<a> AdminLTE v3 </a>
									</td>
									<td class="text-center">
										<a> 99 </a>
									</td>
									<td class="text-center">
										<a> 99 </a>
									</td>
									<td class="project-actions text-center">
										<a class="btn btn-primary btn-xs" href="<?= base_url('pic_thisweeks'); ?>">
											<i class="fas fa-eye"> </i>
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
									<th style="width: 1%" class="text-center">#</th>
									<th style="width: 20%">PIC Name</th>
									<th style="width: 20%" class="text-center">On Progres</th>
									<th style="width: 14%" class="text-center">Complete</th>
									<th style="width: 15%" class="text-center">#</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">#</td>
									<td>
										<a> AdminLTE v3 </a>
									</td>
									<td class="text-center">
										<a> 99 </a>
									</td>
									<td class="text-center">
										<a> 99 </a>
									</td>
									<td class="project-actions text-center">
										<a class="btn btn-primary btn-xs" href="<?= base_url('pic_nextweeks'); ?>">
											<i class="fas fa-eye"> </i>
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
