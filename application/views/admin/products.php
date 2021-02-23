
	        	<div class="container-fluid p-0">
	        	    <div class="row mt-1 py-1" style="background-color: transparent;">

	        	    	<div class="col-md-12">
	        	    	<nav aria-label="breadcrumb">
	        	    	  <ol class="breadcrumb">
	        	    	    <li class="breadcrumb-item"><a href="<?php echo base_url('admin-dashboard') ?>">Dashboard</a></li>
	        	    	    <li class="breadcrumb-item active" aria-current="page">Products</li>
	        	    	  	<li class="ml-auto"><a href="#" class="btn btn-primary btn-sm"><span class="fa fa-plus-circle"></span> Add Product</a></li>
	        	    	  </ol>
	        	    	</nav>
	        	    	<div class="table-responsive">
	        	    		
		        	    	<table class="table" id="myTable">
		        	    	    <thead class="thead-dark">
		        	    	      <tr>
		        	    	        <th>Name</th>
		        	    	        <th>Code</th>
		        	    	        <th>Category</th>
		        	    	        <th>Sub Category</th>
		        	    	        <th>Inventory</th>
		        	    	        <th>Action</th>
		        	    	      </tr>
		        	    	    </thead>
		        	    	    <tbody>
		        	    	      <tr>
		        	    	        <td>T-Shirt</td>
		        	    	        <td>#05F00TSV1</td>
		        	    	        <td>Clothing</td>
		        	    	        <td>Men</td>
		        	    	        <td>25</td>
		        	    	        <td class="text-center"><button title="View Product Details" class="btn btn-info btn-sm"><i class="fa fa-eye text-dark"></i></button><button title="Edit Product" class="btn btn-warning btn-sm ml-1"><i class="fa fa-edit text-dark"></i></button><button title="Delete Product" class="btn btn-danger btn-sm ml-1"><i class="fa fa-trash text-dark"></i></button></td>
		        	    	      </tr>
		        	    	      <tr>
		        	    	        <td>T-Shirt</td>
		        	    	        <td>#05F00TSV1</td>
		        	    	        <td>Clothing</td>
		        	    	        <td>Men</td>
		        	    	        <td>25</td>
		        	    	        <td class="text-center"><button title="View Product Details" class="btn btn-info btn-sm"><i class="fa fa-eye text-dark"></i></button><button title="Edit Product" class="btn btn-warning btn-sm ml-1"><i class="fa fa-edit text-dark"></i></button><button title="Delete Product" class="btn btn-danger btn-sm ml-1"><i class="fa fa-trash text-dark"></i></button></td>
		        	    	      </tr>
		        	    	      <tr>
		        	    	        <td>T-Shirt</td>
		        	    	        <td>#05F00TSV1</td>
		        	    	        <td>Clothing</td>
		        	    	        <td>Men</td>
		        	    	        <td>25</td>
		        	    	        <td class="text-center"><button title="View Product Details" class="btn btn-info btn-sm"><i class="fa fa-eye text-dark"></i></button><button title="Edit Product" class="btn btn-warning btn-sm ml-1"><i class="fa fa-edit text-dark"></i></button><button title="Delete Product" class="btn btn-danger btn-sm ml-1"><i class="fa fa-trash text-dark"></i></button></td>
		        	    	      </tr>
		        	    	      <tr>
		        	    	        <td>T-Shirt</td>
		        	    	        <td>#05F00TSV1</td>
		        	    	        <td>Clothing</td>
		        	    	        <td>Men</td>
		        	    	        <td>25</td>
		        	    	        <td class="text-center"><button title="View Product Details" class="btn btn-info btn-sm"><i class="fa fa-eye text-dark"></i></button><button title="Edit Product" class="btn btn-warning btn-sm ml-1"><i class="fa fa-edit text-dark"></i></button><button title="Delete Product" class="btn btn-danger btn-sm ml-1"><i class="fa fa-trash text-dark"></i></button></td>
		        	    	      </tr>
		        	    	      <tr>
		        	    	        <td>T-Shirt</td>
		        	    	        <td>#05F00TSV1</td>
		        	    	        <td>Clothing</td>
		        	    	        <td>Men</td>
		        	    	        <td>25</td>
		        	    	        <td class="text-center"><button title="View Product Details" class="btn btn-info btn-sm"><i class="fa fa-eye text-dark"></i></button><button title="Edit Product" class="btn btn-warning btn-sm ml-1"><i class="fa fa-edit text-dark"></i></button><button title="Delete Product" class="btn btn-danger btn-sm ml-1"><i class="fa fa-trash text-dark"></i></button></td>
		        	    	      </tr>
		        	    	      <tr>
		        	    	        <td>T-Shirt</td>
		        	    	        <td>#05F00TSV1</td>
		        	    	        <td>Clothing</td>
		        	    	        <td>Men</td>
		        	    	        <td>25</td>
		        	    	        <td class="text-center"><button title="View Product Details" class="btn btn-info btn-sm"><i class="fa fa-eye text-dark"></i></button><button title="Edit Product" class="btn btn-warning btn-sm ml-1"><i class="fa fa-edit text-dark"></i></button><button title="Delete Product" class="btn btn-danger btn-sm ml-1"><i class="fa fa-trash text-dark"></i></button></td>
		        	    	      </tr>
		        	    	      <tr>
		        	    	        <td>T-Shirt</td>
		        	    	        <td>#05F00TSV1</td>
		        	    	        <td>Clothing</td>
		        	    	        <td>Men</td>
		        	    	        <td>25</td>
		        	    	        <td class="text-center"><button title="View Product Details" class="btn btn-info btn-sm"><i class="fa fa-eye text-dark"></i></button><button title="Edit Product" class="btn btn-warning btn-sm ml-1"><i class="fa fa-edit text-dark"></i></button><button title="Delete Product" class="btn btn-danger btn-sm ml-1"><i class="fa fa-trash text-dark"></i></button></td>
		        	    	      </tr>
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

