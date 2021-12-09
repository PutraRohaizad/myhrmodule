<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
       <title>Approval Setting - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="css/select2.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css">
	
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index" class="logo">
						<img src="img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3>Dreamguy's Technologies</h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="search">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<!-- /Search -->
				
					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
							<img src="img/flags/us.png" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="img/flags/us.png" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="img/flags/de.png" alt="" height="16"> German
							</a>
						</div>
					</li>
					<!-- /Flag -->
				
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="img/profiles/avatar-06.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities">
											<div class="media">
												<span class="avatar">
													<img alt="" src="img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- Message Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="img/profiles/avatar-09.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="img/profiles/avatar-02.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="img/profiles/avatar-03.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="img/profiles/avatar-05.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="img/profiles/avatar-08.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="chat">View all Messages</a>
							</div>
						</div>
					</li>
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="img/profiles/avatar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile">My Profile</a>
							<a class="dropdown-item" href="settings">Settings</a>
							<a class="dropdown-item" href="login">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile">My Profile</a>
						<a class="dropdown-item" href="settings">Settings</a>
						<a class="dropdown-item" href="login">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
<!-- Sidebar -->

           <!-- Sidebar -->
		   <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
                                           <li class="<?php echo e(Request::is('index') ? 'active' : ''); ?>">
        <a  href="<?php echo e(url('index')); ?>"><i class="la la-home"></i> <span>Back to Home</span>  </a></li>

							
							<li class="menu-title">Settings</li>

                            <li class="<?php echo e(Request::is('settings') ? 'active' : ''); ?>">
        <a  href="<?php echo e(url('settings')); ?>"><i class="la la-building"></i><span>Company Settings</span>  </a></li>

        <li class="<?php echo e(Request::is('localization') ? 'active' : ''); ?>">
        <a  href="<?php echo e(url('localization')); ?>"><i class="la la-clock-o"></i><span>Localization</span>  </a></li>

        <li class="<?php echo e(Request::is('theme-settings') ? 'active' : ''); ?>">
        <a  href="<?php echo e(url('theme-settings')); ?>"><i class="la la-photo"></i><span>Theme Settings</span>  </a></li>
        <li class="<?php echo e(Request::is('roles-permissions') ? 'active' : ''); ?>">
        <a  href="<?php echo e(url('roles-permissions')); ?>"><i class="la la-key"></i> <span>Roles & Permissions</span>  </a></li>
        <li class="<?php echo e(Request::is('email-settings') ? 'active' : ''); ?>">
        <a  href="<?php echo e(url('email-settings')); ?>"><i class="la la-at"></i><span>Email Settings</span>  </a></li>
        <li class="<?php echo e(Request::is('performance-setting') ? 'active' : ''); ?>"> 
                                <a href="<?php echo e(url('performance-setting')); ?>"><i class="la la-bar-chart"></i> <span>Performance Settings</span></a>
                            </li>
                            <li class="<?php echo e(Request::is('approval-setting') ? 'active' : ''); ?>"> 
                                <a href="<?php echo e(url('approval-setting')); ?>"><i class="la la-thumbs-up"></i> <span>Approval Settings</span></a>
                            </li>
		<li class="<?php echo e(Request::is('invoice-settings') ? 'active' : ''); ?>">
        <a  href="<?php echo e(url('invoice-settings')); ?>"><i class="la la-pencil-square"></i><span>Invoice Settings</span>  </a></li>
        <li class="<?php echo e(Request::is('salary-settings') ? 'active' : ''); ?>">
        <a  href="<?php echo e(url('salary-settings')); ?>"><i class="la la-money"></i> <span>Salary Settings</span>  </a></li>
		<li class="<?php echo e(Request::is('notifications-settings') ? 'active' : ''); ?>">
        <a  href="<?php echo e(url('notifications-settings')); ?>"><i class="la la-globe"></i><span>Notifications</span>  </a></li>
		<li class="<?php echo e(Request::is('change-password') ? 'active' : ''); ?>">
        <a  href="<?php echo e(url('change-password')); ?>"><i class="la la-lock"></i><span>Change Password</span>  </a></li>
		<li class="<?php echo e(Request::is('leave-type') ? 'active' : ''); ?>">
        <a  href="<?php echo e(url('leave-type')); ?>"><i class="la la-cogs"></i> <span>Leave Type </span>  </a></li>	
        <li class="<?php echo e(Request::is('toxbox-setting') ? 'active' : ''); ?>"> 
								<a href="<?php echo e(url('toxbox-setting')); ?>"><i class="la la-comment"></i> <span>ToxBox Settings</span></a>
							</li>
							<li class="<?php echo e(Request::is('cron-setting') ? 'active' : ''); ?>"> 
								<a href="<?php echo e(url('cron-setting')); ?>"><i class="la la-rocket"></i> <span>Cron Settings</span></a>
							</li>		
						</ul>
					</div>
                </div>
            </div>
			<!-- Sidebar -->
		
<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Page Header -->
                            <div class="page-header mb-2">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="page-title">Approval Settings</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Header -->

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-bottom" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    Expenses Approval
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Leave Approval</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Offer Approval</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Resignation Notice</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h4>Expense Approval Settings</h4>
                                    <div class="form-group form-row">
                                        <label class="control-label col-md-12">Default Expense Approval</label>
                                        <div class="col-md-12 approval-option">
                                            <label class="radio-inline">
                                            <input id="radio-single1" class="mr-2 default_expense_approval" value="seq-approver" checked="" name="default_expense_approval" type="radio">Sequence Approval (Chain) <sup> <span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                            </label>
                                            <label class="radio-inline ml-2">
                                            <input id="radio-multiple3" class="mr-2 default_expense_approval" value="sim-approver" name="default_expense_approval" type="radio">Simultaneous Approval <sup><span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group  form-row row approver seq-approver" style="display: block;">
                                        <label class="control-label col-sm-3">Expense Approvers</label>
                                        <div class="col-sm-9 ">
                                            <label class="ex_exp_approvers_1 control-label mb-2 exp_appr" style="padding-left:0">Approver 1</label>
                                            <div class="row ex_exp_approvers_1 form-group">
                                                <div class="col-md-6">
                                                    <select class="select form-control expense_approvers" style="width:260px" name="expense_approvers[]" tabindex="-1" aria-hidden="true">
                                                        <option value="">Select Approvers</option>
                                                        <option value="1">CEO</option>
                                                        <option value="9">Direct Manager</option>
                                                        <option value="11">Development Manager 
                                                        </option>
                                                        <option value="6">Finance</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <label class="ex_exp_approvers_2 control-label mb-2 exp_appr" style="padding-left:0">Approver 2</label>
                                            <div class="row ex_exp_approvers_2 form-group">
                                                <div class="col-md-6">
                                                    <select class="select form-control expense_approvers " style="width:260px" name="expense_approvers[]" tabindex="-1" aria-hidden="true">
                                                        <option value="">Select Approvers</option>
                                                        <option value="1">CEO</option>
                                                        <option value="9">Direct Manager</option>
                                                        <option value="11">Development Manager 
                                                        </option>
                                                        <option value="6">Finance</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2"><a class="remove_ex_exp_approver btn rounded border text-danger" data-id="2"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                            </div>
                                            <label class="ex_exp_approvers_3 control-label m-b-10 exp_appr" style="padding-left:0">Approver 3</label>
                                            <div class="row ex_exp_approvers_3 form-group">
                                                <div class="col-md-6">
                                                    <select class="select form-control expense_approvers" style="width:260px" name="expense_approvers[]" tabindex="-1" aria-hidden="true">
                                                        <option value="">Select Approvers</option>
                                                        <option value="1">CEO</option>
                                                        <option value="9">Direct Manager</option>
                                                        <option value="11">Development Manager 
                                                        </option>
                                                        <option value="6">Finance</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2"><a class="remove_ex_exp_approver btn rounded border text-danger" data-id="3"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 col-md-offset-3 m-t-10">
                                                <a id="add_expense_approvers" href="javascript:void(0)" class="add-more">+ Add Approver</a>
                                            </div>
                                        </div>
                                        <div class="m-t-30">
                                            <div class="col-md-12 submit-section">
                                                <button id="expense_approval_set_btn" type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="form-group row">
                                        <label class="control-label col-md-12">Default Leave Approval</label>
                                        <div class="col-md-12 approval-option">
                                            <label class="radio-inline">
                                            <input id="radio-single" class="mr-2 default_offer_approval" value="seq-approver" name="default_leave_approval" type="radio">Sequence Approval (Chain) <sup> <span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                            </label>
                                            <label class="radio-inline ml-2">
                                            <input id="radio-multiple1" class="mr-2 default_offer_approval" value="sim-approver" checked="" name="default_leave_approval" type="radio">Simultaneous Approval <sup><span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-row">
                                        <label class="control-label col-sm-12">leave Approvers</label>
                                        <div class="col-sm-6">
                                            <label class="control-label" style="margin-bottom:10px;padding-left:0">Simultaneous Approval </label>
                                            <select class="select form-control" multiple>
                                                <option>Select</option>
                                                <option>Test Lead</option>
                                                <option>UI/UX Designer</option>
                                                <option>Sox Analyst</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="m-t-30 row ">
                                        <div class="col-md-12 submit-section">
                                            <button id="leave_approval_set_btn" type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                    <form>
                                        <h4>Offer Approval Settings</h4>
                                        <div class="form-group">
                                            <label class="control-label col-md-12">Default Offer Approval</label>
                                            <div class="col-md-12 approval-option">
                                                <label class="radio-inline">
                                                <input id="radio-single2" class="mr-2 default_offer_approval" value="seq-approver" name="default_offer_approval" type="radio">Sequence Approval (Chain) <sup> <span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                                </label>
                                                <label class="radio-inline ml-2">
                                                <input id="radio-multiple2" class="mr-2 default_offer_approval" value="sim-approver" checked="" name="default_offer_approval" type="radio">Simultaneous Approval <sup><span class="badge info-badge"><i class="fa fa-info" aria-hidden="true"></i></span></sup>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="m-t-30">
                                            <div class="col-md-12 submit-section">
                                                <button id="offer_approval_set_btn" type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                    <form >
                                        <h3>Resignation Notice</h3>
                                        <div class="form-group form-row">
                                            <label class="col-sm-12">Email Notification <span class="text-danger">*</span></label>
                                            <div class="col-sm-6">
                                                <label class="control-label">Simultaneous Approval </label>
                                                <select class="select form-control" multiple>
                                                    <option>Select</option>
                                                    <option>Test Lead</option>
                                                    <option>UI/UX Designer</option>
                                                    <option>Sox Analyst</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                            <label class="col-md-12">Notice Days <span class="text-danger">*</span></label>
                                            <div class="col-md-6 approval-option">
                                                <input type="number" name="notice_days" class="form-control notice_days" value="15">
                                            </div>
                                        </div>
                                        <div class="m-t-30">
                                            <div class="col-md-12 submit-section">
                                                <button id="resignation_notice_set_btn" type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="js/jquery-3.5.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="js/select2.min.js"></script>

		<!-- Custom JS -->
		<script src="js/app.js"></script>
		
    </body>
</html><?php /**PATH C:\xampp\htdocs\smarthr_laravel\blue\resources\views/approval-setting.blade.php ENDPATH**/ ?>