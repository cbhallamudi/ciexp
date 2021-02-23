
	        	<div class="container-fluid">
	        	    <div class="row mt-1 py-1" style="background-color: transparent;">

	        	    	<div class="col-md-12 p-0">
		        	    	<nav aria-label="breadcrumb">
		        	    	  <ol class="breadcrumb">
		        	    	    <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
		        	    	    <li class="breadcrumb-item active" aria-current="page">Home Page</li>
		        	    	  </ol>
		        	    	</nav>
	        	    	</div>

	        	    	<div class="col-md-12 p-3" style="background-color:rgba(255, 255, 255, 0.5)">
	        	    	
	        	    			<form action="">
	        	    				<div class="form-group">
	        	    					<label for="section-title-1">
	        	    						Section Title
	        	    					</label>
	        	    					<input class="form-control" type="text" id="section-title-1" name="section-title-1">
	        	    				</div>
	        	    				<div class="form-group">
	        	    					<label for="section-image">Section Image</label>
	        	    					<div class="custom-file">
	        	    					    <input type="file" class="custom-file-input" id="customFile">
	        	    					    <label class="custom-file-label" for="customFile">Choose file</label>
	        	    					  </div>
	        	    				</div>
	        	    				<div class="form-group">
	        	    					<label for="sectionDescription">Section Description</label>
	        	    					<textarea id="summernote" name="sectionDescription" rows="10"></textarea>
	        	    				</div>
	        	    			</form>
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
	        	<script>
	        	 $(document).ready(function() {
	        	   var t = $('#summernote').summernote(
	        	   {
	        	   height: 300,
	        	   focus: true
	        	 }
	        	   );
	        	   $("#btn").click(function(){
	        	     $('div.note-editable').height(150);
	        	   });
	        	 });
	        	  </script>	