<div class="main-wrapper">
	<div class="sidebar" id="sidebar">
		<div class="sidebar-inner slimscroll">
			<div id="sidebar-menu" class="sidebar-menu">
				<ul>
					<li class="menu-title">
						<span>Main</span>
					</li>
					<li class="submenu">
						<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span
								class="menu-arrow"></span></a>
						<ul style="display: none;">

							<li>
								<a class="<?php echo e(Request::is('index') ? 'active' : ''); ?>" href="<?php echo e(url('index')); ?>">Admin
									Dashboard</a></li>
							<li>
								<a class="<?php echo e(Request::is('employee-dashboard') ? 'active' : ''); ?>"
									href="<?php echo e(url('employee-dashboard')); ?>">Employee Dashboard</a></li>

						</ul>
					</li>

						<li>
							<a class="<?php echo e(Request::is('database') ? 'active' : ''); ?>" href="<?php echo e(route('table.index')); ?>">
								<i class="la la-dashboard mr-3"></i>
								Admin Database
							</a>
						</li>
						<li>
							<a class="<?php echo e(Request::is('employee-dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('crud.index')); ?>">
								<i class="la la-dashboard mr-3"></i>
								CRUD Builder
							</a>
						</li>
					
					
					






					


					


				</ul>
			</div>
		</div>
	</div>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hrms_v2/resources/views/layout/partials/nav.blade.php ENDPATH**/ ?>