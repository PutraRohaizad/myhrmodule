<?php $__env->startSection('content'); ?>
<!-- row -->
<div class="container-fluid">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)"> War Councils </a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)"> Dashboard </a></li>
		</ol>
	</div>

	<div class="row">
		<div class="col-xl-12 pb-3">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary float-right ml-2" data-toggle="modal"
				data-target="#addproject">Add New </button>
			<!-- Modal -->
			<div class="modal fade" id="addproject">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Project</h5>
							<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
						</div>
						<div class="modal-body">Add New Project</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary"><a
									href="<?php echo url('/projects/add-new-project');; ?>"> Add New Project </a></button>
							<button type="button" class="btn btn-primary"><a
									href="<?php echo url('/projects/add-new-project');; ?>"> Add New Issue </a></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
			<div class="widget-stat card">
				<div class="card-body p-4">
					<div class="media">
						<span class="mr-4 icon-green">
							<i class="las la-folder-open"></i>
						</span>
						<div class="media-body text-white">
							<p class="mb-1">Open Project</p>
							<h3 class="text-white">28</h3>
							<div class="progress mb-2 bg-primary">
								<div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
							</div>
							<small>76% Increase in 20 Days</small>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
			<div class="widget-stat card">
				<div class="card-body p-4">
					<div class="media">
						<span class="mr-4 icon-blue">
							<i class="las la-times"></i>
						</span>
						<div class="media-body text-white">
							<p class="mb-1">Close Project</p>
							<h3 class="text-white">10</h3>
							<div class="progress mb-2 bg-primary">
								<div class="progress-bar progress-animated bg-light" style="width: 10%"></div>
							</div>
							<small>10% Increase in 20 Days</small>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
			<div class="widget-stat card">
				<div class="card-body p-4">
					<div class="media">
						<span class="mr-4 icon-red">
							<i class="las la-exclamation"></i>
						</span>
						<div class="media-body text-white">
							<p class="mb-1">Overdue Project</p>
							<h3 class="text-white">3</h3>
							<div class="progress mb-2 bg-primary">
								<div class="progress-bar progress-animated bg-light" style="width: 56%"></div>
							</div>
							<small>56% Increase in 20 Days</small>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
			<div class="widget-stat card">
				<div class="card-body p-4">
					<div class="media">
						<span class="mr-4 icon-orange">
							<i class="las la-hand-paper"></i>
						</span>
						<div class="media-body text-white">
							<p class="mb-1">suspended Project</p>
							<h3 class="text-white">36</h3>
							<div class="progress mb-2 bg-primary">
								<div class="progress-bar progress-animated bg-light" style="width: 26%"></div>
							</div>
							<small>76% Increase in 20 Days</small>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
			<div class="widget-stat card">
				<div class="card-body p-4">
					<div class="media">
						<span class="mr-4 icon-yellow">
							<i class="las la-history"></i>
						</span>
						<div class="media-body text-white">
							<p class="mb-1">Pending Project</p>
							<h3 class="text-white">24</h3>
							<div class="progress mb-2 bg-primary">
								<div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
							</div>
							<small>76% Increase in 20 Days</small>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="row">

		<div class="col-xl-6 col-lg-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Gradient Bar Chart</h4>
				</div>
				<div class="card-body">
					<canvas id="barChart_2"></canvas>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Gradient Bar Chart</h4>
				</div>
				<div class="card-body">
					<canvas id="lineChart_2"></canvas>
				</div>
			</div>
		</div>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/cara_module/Modules/WarCouncils/Resources/views//dashboard/index.blade.php ENDPATH**/ ?>