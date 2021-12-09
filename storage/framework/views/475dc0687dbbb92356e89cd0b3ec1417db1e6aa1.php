<?php
use Modules\Menu\Entities\Menu;
$menus = Menu::where('active', 1)->get();	
?>
<div class="main-wrapper">
	<div class="sidebar" id="sidebar">
		<div class="sidebar-inner slimscroll">
			<div id="sidebar-menu" class="sidebar-menu">
				<ul>
					<li class="menu-title">
						<span>Main</span>
					</li>
					<li class="submenu">
						<a href="#">
							<i class="la la-dashboard"></i>
							<span> Dashboard</span>
							<span class="menu-arrow"></span>
						</a>
						<ul style="display: none;">
							<li>
								<a class="<?php echo e(Request::is('index') ? 'active' : ''); ?>" href="<?php echo e(url('index')); ?>">Admin
									Dashboard
								</a>
							</li>
							<li>
								<a class="<?php echo e(Request::is('employee-dashboard') ? 'active' : ''); ?>"
									href="<?php echo e(url('employee-dashboard')); ?>">Employee Dashboard
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="<?php echo e(Request::is('database') ? 'active' : ''); ?>" href="<?php echo e(route('table.index')); ?>">
							<i class="la la-dashboard mr-3"></i>
							Admin Database
						</a>
					</li>
					<li>
						<a class="<?php echo e(Request::is('employee-dashboard') ? 'active' : ''); ?>"
							href="<?php echo e(route('crud.index')); ?>">
							<i class="la la-dashboard mr-3"></i>
							CRUD Builder
						</a>
					</li>
					<li>
						<a class="<?php echo e(Request::is('employee-dashboard') ? 'active' : ''); ?>"
							href="<?php echo e(route('menu.index')); ?>">
							<i class="la la-dashboard mr-3"></i>
							Menu
						</a>
					</li>


					
					<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($menu->parent_id == 0): ?>
						<li class="text-white">
							<a href="<?php echo e($menu->route ? route($menu->route) : 'javascript:'); ?>">
								<i class="la <?php echo e($menu->icon); ?>"></i>
								<span><?php echo e($menu->title); ?></span>
								<?php if($menu->childs->count() > 0): ?>
									<span class="menu-arrow"></span>
								<?php endif; ?>
							</a>
							<ul style="display: none;">
							<?php $__currentLoopData = $menu->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li>
									<a href="<?php echo e(route($submenu->route)); ?>"><?php echo e($submenu->title); ?></a>
								</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</li>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
					

					
				
				





				


				

				
				</ul>
			</div>
		</div>
	</div>
</div><?php /**PATH /Users/putrarohaizad/Desktop/Project/myhrmodule/resources/views/layout/partials/nav.blade.php ENDPATH**/ ?>