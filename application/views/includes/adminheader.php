<?php 
/*	echo "<pre>";
	print_r($messages);
	exit;*/ 

	// echo $this->session->userdata('usersuserrole');
	// exit;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/') ?>css/bs.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/') ?>fa/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/') ?>css/admin_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/') ?>css/admin_responsive.css">


	<script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/bs.js"></script>
	

	<!-- dashboard Plugins -->
	<script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/chartDist/Chart.js"></script>

	
	<!-- page settings plugins -->
	<link href="<?php echo base_url('adminAssets/') ?>summernote/summernote-bs4.css" rel="stylesheet">
	<script src="<?php echo base_url('adminAssets/') ?>summernote/summernote-bs4.js"></script>
	<link href="<?php echo base_url('adminAssets/') ?>summernote/summernote.min.css" rel="stylesheet">
	<script src="<?php echo base_url('adminAssets/') ?>summernote/summernote.min.js"></script>


	<!-- DataTables Plugins -->

	<link href="<?php echo base_url('adminAssets/') ?>datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('adminAssets/') ?>datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('adminAssets/') ?>datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('adminAssets/') ?>datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

	<script src="<?php echo base_url('adminAssets/') ?>datatables/jquery.dataTables.min.js"></script> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/dataTables.bootstrap4.min.js"></script> 
	<!-- Buttons examples --> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/dataTables.buttons.min.js"></script> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/buttons.bootstrap4.min.js"></script> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/jszip.min.js"></script> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/pdfmake.min.js"></script> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/vfs_fonts.js"></script> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/buttons.html5.min.js"></script> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/buttons.print.min.js"></script> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/dataTables.keyTable.min.js"></script> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/dataTables.responsive.min.js"></script> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/responsive.bootstrap4.min.js"></script> 
	<script src="<?php echo base_url('adminAssets/') ?>datatables/dataTables.select.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('adminAssets/js/commonScripts.js'); ?>"></script>

	<style>
	

	</style>
</head>
<body id="dashboard_header_body">
	
	<div class="wrapper">
	    <!-- Sidebar Holder -->
	    <nav id="sidebar">
	        <div class="sidebar-header">
	            <h3 class="text-center">Welcome <span id="admin_sidebar_user_welcome"><?php echo $userDetails->useruname; ?></span></h3>
	            <img src="<?php echo base_url('adminAssets/') ?>images/avengers.jpg" class="mx-auto d-block img-fluid rounded-circle" id="sidebar_admin_image"> 
	        </div>
	        <ul class="list-unstyled components sidebar-ul-only">
	            <li class="<?php if($this->uri->segment(1)=='admin-table-create'){echo 'active';} ?>">
	                <a href="<?php echo base_url('admin-database-tables');?>">Tables</a>
	            </li>
	            <li class="<?php if($this->uri->segment(1)=='admin-dashboard'){echo 'active';} ?>">
	                <a href="<?php echo base_url('admin-dashboard');?>">Dashboard</a>
	            </li>
	            <li>
	                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar-ul-only">Page Settings</a>
	                <ul class="collapse list-unstyled" id="pageSubmenu">
	                    <!-- <li>
	                        <a href="<?php echo base_url('admin-homepagesettings');?>">Home Page</a>
	                    </li>
	                    <li>
	                        <a href="<?php echo base_url('admin-aboutpagesettings');?>">About Page</a>
	                    </li>
	                    <li>
	                        <a href="<?php echo base_url('admin-productspagesettings');?>">Products Page</a>
	                    </li>
	                    <li>
	                        <a href="<?php echo base_url('admin-contactpagesettings');?>">Contact Page</a>
	                    </li> -->
	             
	                </ul>
	            </li>
	            <li class="">
		            <?php if($this->session->userdata('usersuserrole') == 'admin'){ ?>
		                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle sidebar-ul-only">Users</a>
		                <ul class="collapse list-unstyled" id="homeSubmenu">

			                    <li>
			                        <a href="<?php echo base_url('admin-vendors');?>">Vendors</a>
			                    </li>
		                    <li>
		                        <a href="<?php echo base_url('admin-customers');?>">Customers</a>
		                    </li>
		             
		                </ul>
	                <?php }else{ ?>

	                    <li>
	                        <a href="<?php echo base_url('admin-customers');?>">Customers</a>
	                    </li>
	                <?php } ?> 
	            </li>
	            <li class="">
	                <a href="<?php echo base_url('admin-orders');?>">Orders</a>
	            </li>

	            <li class="">
	                <a href="<?php echo base_url('admin-products');?>">Products</a>
	            </li>
	            
	            <!-- <li>
	                <a href="#">Products</a>
	            </li> -->

	        </ul>
	    </nav>
	    <!-- Page Content Holder -->
	    <div id="content">
	        <nav class="navbar navbar-expand-lg navbar-light p-0">
	            <div class="container-fluid bg-light">
	                <button type="button" id="sidebarCollapse" class="navbar-btn">
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                </button>
	                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                    <i class="fa fa-align-justify"></i>
	                </button>
	                <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                    <ul class="nav navbar-nav ml-auto">
	                        <li class="nav-item active">
	                            <div class="dropdown">
	                        	  <a class="nav-link" data-toggle="dropdown">
	                        	    <i class="fa fa-bell"></i>
	                        	  </a>
	                        	  <div class="dropdown-menu bg-light">
	                        	    <?php 
	                        	    	
	                        	    	for($notification=0; $notification < 3; $notification++) { 
	                        	    		if(array_key_exists($notification, $notifications)){ ?>
	                        	    		    
	                        	    			<a class="dropdown-item <?php if($notifications[$notification]->notificationtype=='newuser'){echo 'text-success';}else{echo 'text-danger';} ?> py-1 px-2" href="<?php echo base_url('admin-userprofile'); ?>"> <?php echo $notifications[$notification]->notificationsubject; ?> </a>
	                        	    		    
	                        	    	<?php } else{ ?>
	                        	    		    <a class="dropdown-item text-dark py-1 px-2" href="#">No New Messages</a>
	                        	    	<?php }
	                        	    ?>
	                        	    <?php } ?>	
	                        	    <div class="dropdown-divider"></div> 
	                        	    <a class="dropdown-item text-dark" href="<?php echo base_url('admin-logout'); ?>"><span class="fa fa-eye"></span> View Notifications</a>
	                        	  </div>
	                        	</div> 
	                        </li>
	                        <li class="nav-item">
	                        	<div class="dropdown">
	                        	  <a class="nav-link" data-toggle="dropdown">
	                        	    <i class="fa fa-envelope"></i>
	                        	  </a>
	                        	  <div class="dropdown-menu bg-secondary">
	                        	    <?php 
	                        	    	$messagesRandomColors = ['#d21515','green','#2ddb27'];
	                        	    	for($message=0; $message < 3; $message++) { 
	                        	    		if(array_key_exists($message, $messages)){ ?>
	                        	    		    
	                        	    			<a class="dropdown-item text-light py-1 px-2" href="<?php echo base_url('admin-userprofile'); ?>"><span class="initial-span" style="color:<?php echo $messagesRandomColors[$message]; ?>" title="<?php echo $messages[$message]->messagefromname; ?>"><?php echo $messages[$message]->messagefromname[0]; ?></span> <?php echo $messages[$message]->messagesubject; ?> </a>
	                        	    		    
	                        	    	<?php } else{ ?>
	                        	    		    <a class="dropdown-item text-light py-1 px-2" href="#">No New Messages</a>
	                        	    	<?php }
	                        	    ?>
	                        	    <?php } ?>	
	                        	  	<div class="dropdown-divider"></div> 
	                        	    <a class="dropdown-item text-light" href="<?php echo base_url('admin-logout'); ?>"><span class="fa fa-eye"></span> View Messages</a>
	                        	  </div>

	                        	</div> 
	                        </li>
	                        <li class="nav-item">
	                        	 <div class="dropdown">
	                        	  <a class="nav-link" data-toggle="dropdown">
	                        	    <i class="fa fa-cogs"></i><i class="fa fa-caret-down"></i>
	                        	  </a>
	                        	  <div class="dropdown-menu bg-secondary">
	                        	    <a class="dropdown-item text-light" href="<?php echo base_url('admin-userprofile'); ?>"><span class="fa fa-user-circle"></span> Profile Settings</a>
	                        	    <a class="dropdown-item text-light" href="<?php echo base_url('admin-sitesettings'); ?>"><span class="fa fa-globe"></span> Website Settings</a>
	                        	    <a class="dropdown-item text-light" href="<?php echo base_url('admin-logout'); ?>"><span class="fa fa-sign-out"></span> Logout</a>
	                        	  </div>
	                        	</div> 
	                        </li>
	                        <li class="nav-item">
	                            <!-- <a class="nav-link" href="#">Page</a> -->
	                            <div class="input-group mb-3">
	                              <input type="text" class="form-control" placeholder="Search" id="searchIp">
	                              <div class="input-group-append">
	                                <button class="btn btn-success" id="searchBtn" type="submit"><i class="fa fa-search"></i></button>
	                              </div>
	                            </div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </nav>

	        <?php if($this->session->flashdata('success')){ ?>
				<div class="alert alert-success alert-dismissible">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>.
				</div>
	        <?php }else if($this->session->flashdata('failure')){ ?>
				<div class="alert alert-warning alert-dismissible">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Sorry!</strong> <?php echo $this->session->flashdata('failure'); ?>.
				</div>
	        <?php } ?>	

	        <!-- ============ End Of Navbar and Sidebar ============  -->
	        <div id="searchContent">