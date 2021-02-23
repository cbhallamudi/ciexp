<?php  

	// echo "<pre>";
	// print_r($customers);
	// exit;

?>

	        	<div class="container-fluid p-0">
	        	    <div class="row mt-1 py-1" style="background-color: transparent;">

	        	    	<div class="col-md-12">
	        	    	<nav aria-label="breadcrumb">
	        	    	  <ol class="breadcrumb">
	        	    	    <li class="breadcrumb-item"><a href="<?php echo base_url('admin-dashboard') ?>">Dashboard</a></li>
	        	    	    <li class="breadcrumb-item active" aria-current="page">Customers</li>
	        	    	    <li class="ml-auto"><a href="#" class="btn btn-primary btn-sm"><span class="fa fa-plus-circle"></span> Add Customer</a></li>
	        	    	  </ol>
	        	    	</nav>
	        	    	<div class="table-responsive">
	        	    		
		        	    	<table class="table table-sm" id="myTable">
		        	    	    <thead class="thead-dark">
									<tr>
										<th>Firstname</th>
										<th>Lastname</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
		        	    	    </thead>
		        	    	    <tbody>
		        	    	    	
		        	    	    	<?php foreach ($customers as $customer){ ?>
									<tr>
										<td <?php if($customer->userstatus == 'inactive'){echo "class='inactiveUser'";} ?>><?= $customer->userfname; ?></td>
										<td <?php if($customer->userstatus == 'inactive'){echo "class='inactiveUser'";} ?>><?= $customer->userlname; ?></td>
										<td <?php if($customer->userstatus == 'inactive'){echo "class='inactiveUser'";} ?>><?= $customer->useremail; ?></td>
										<td class="text-center">
											<button title="View Customer Details" class="btn btn-info btn-sm" data-toggle="modal" data-target="#adminViewUserData" onclick="adminViewUserData('<?= $customer->userid; ?>')">
												<i class="fa fa-eye text-dark"></i>
											</button>
											<button title="<?php if($customer->userstatus == 'inactive'){echo 'Enable';}else{echo 'Disable';} ?> Customer" class="btn <?php if($customer->userstatus == 'inactive'){echo 'btn-success';}else{echo 'btn-warning';} ?> btn-sm ml-1" data-toggle="modal" data-target="#adminEditUserData" onclick="adminEditUserData('<?= $customer->userid; ?>','<?php if($customer->userstatus == 'inactive'){echo 'enable';}else{echo 'disable';} ?>')">
												<i class="fa fa-user-times text-dark"></i>
											</button>
											<button title="Delete Customer" class="btn btn-danger btn-sm ml-1" data-toggle="modal" data-target="#adminEditUserData" onclick="adminEditUserData('<?= $customer->userid; ?>','delete')">
												<i class="fa fa-trash text-dark"></i>
											</button>
										</td>
									</tr>
		        	    	    	<?php } ?>
		        	    	    </tbody>
		        	    	  </table>
	        	    		</div>	
	        	    	</div>
	        	    </div>
	        	</div>    
	<script type="text/javascript">
	    $(document).ready(function () {
	        $('#sidebarCollapse').on('click', function () {
	            $('#sidebar').toggleClass('active');
	            $(this).toggleClass('active');
	        });
	    });

	    $(document).ready( function () {
	        var dataTab = $('#myTable').DataTable({
	        	dom: 'Bfrtip',
			    buttons: [
			        'copy', 'csv', 'pdf', 'print'
			    ],
			    sPaginationType: "full_numbers"
			});
	    } );

	</script>

	<script>
	document.addEventListener( 'DOMContentLoaded',function(){
	 var searchpara=document.getElementById("searchContent").innerHTML;
	 searchpara=searchpara.toString();
	 document.getElementById("searchBtn").onclick =function ()
	 {highlight_word(searchpara)};	
	},false);

	function highlight_word(searchpara)
	{
	 var text=document.getElementById("searchIp").value;
	 if(text)
	 {
	  var pattern=new RegExp("("+text+")", "gi");
	  var new_text=searchpara.replace(pattern, "<span class='highlight'>"+text+"</span>");
	  document.getElementById("searchContent").innerHTML=new_text;
	 }
	}
	</script>

