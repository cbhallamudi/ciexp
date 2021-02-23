
	        	<div class="container-fluid p-0">
	        	    <div class="row mt-1 py-1" style="background-color: transparent;">

	        	    	<div class="col-md-12">
	        	    	<nav aria-label="breadcrumb">
	        	    	  <ol class="breadcrumb">
	        	    	    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
	        	    	    <li class="breadcrumb-item active" aria-current="page">Customers</li>
	        	    	    <li class="ml-auto"><a href="#" class="btn btn-primary btn-sm"><span class="fa fa-plus-circle"></span> Add Customer</a></li>
	        	    	  </ol>
	        	    	</nav>
	        	    	<div class="table-responsive">
	        	    		
		        	    	<table class="table cell-border" id="myTable">
		        	    	    <thead class="thead-dark">
		        	    	      <tr>
		        	    	        <th>Firstname</th>
		        	    	        <th>Lastname</th>
		        	    	        <th>Email</th>
		        	    	      </tr>
		        	    	    </thead>
		        	    	    <tbody>
		        	    	      <tr>
		        	    	        <td>John</td>
		        	    	        <td>Doe</td>
		        	    	        <td>john@example.com</td>
		        	    	      </tr>
		        	    	    </tbody>
		        	    	    <thead class="thead-dark">
		        	    	      <tr>
		        	    	        <th>Firstname</th>
		        	    	        <th>Lastname</th>
		        	    	        <th>Email</th>
		        	    	      </tr>
		        	    	    </thead>
		        	    	    <tbody>
		        	    	      <tr>
		        	    	        <td>John</td>
		        	    	        <td>Doe</td>
		        	    	        <td>john@example.com</td>
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
			    ]
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

