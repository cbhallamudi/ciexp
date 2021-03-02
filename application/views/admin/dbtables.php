
	        	<div class="container-fluid p-0">
	        	    <div class="row mt-1 py-1" style="background-color: transparent;">

	        	    	<div class="col-md-12">
	        	    		<nav aria-label="breadcrumb">
	        	    		  <ol class="breadcrumb">
		        	    	    <li class="breadcrumb-item"><a href="<?php echo base_url('admin-dashboard') ?>">Dashboard</a></li>
		        	    	    <li class="breadcrumb-item active" aria-current="page">Orders</li>
		        	    	  </ol>
	        	    		</nav>
	        	    		<div class="table-responsive">
		        	    	<table class="table table-bordered table-striped" id="myTable">
		        	    	    <thead class="thead-dark">
		        	    	      <tr>
		        	    	        <th class="col-1">Table Name</th>
		        	    	        <th class="col-9">Fields</th>
		        	    	        <th class="col-2">Action</th>
		        	    	      </tr>
		        	    	    </thead>
		        	    	    <tbody>
		        	    	    <?php
		        	    	    // echo "<pre>";
		        	    	    foreach ($tables as $table=>$value)
		        	    	    {
		        	    	    ?>	
		        	    	    	<tr>
		        	    	    	  <td class="col-1"><?php print_r($table);?></td>
		        	    	    	  <td class="col-9"><?php 
		        	    	    	  foreach ($value as $val) { ?>
		        	    	    	  	<span class="badge badge-pill badge-success d-inline-block p-2">
		        	    	    	  	<?php echo $val->name; ?>
		        	    	    	  	</span>
		        	    	    	  <?php }
		        	    	    	  ?></td>
		        	    	    	  <td class="col-2">
		        	    	    	  	<button title="View Product Details" class="btn btn-info"><i class="fa fa-eye text-dark"></i></button><button title="Edit Product" class="btn btn-warning ml-1"><i class="fa fa-edit text-dark"></i></button><button title="Delete Product" class="btn btn-danger ml-1"><i class="fa fa-trash text-dark"></i></button>
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
