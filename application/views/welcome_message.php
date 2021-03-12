<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form id="newTableForm" action="<?php echo base_url('create-new-table'); ?>" method="POST">
	<div class="form-row border-bottom border-primary rounded-left p-1 mb-1 d-flex justify-content-between">
	  <label>Table Name: <input type="text" name="table_name" placeholder="Table Name"></label>
	  <input type="button" class="btn btn-sm btn-primary" id="addColumnBtn" value="Add Another Field">
      
	</div> 
	  	
	  <div id="row-container">
	  	  
	  <div class="field-row form-row border border-secondary rounded p-1 mt-1">
	    <div class="form-group col-md-3">
	      <label>Field Name</label>
	      <input type="text" class="form-control" name="field1[]" placeholder="Field Name">
	    </div>
	    <div class="form-group col-md-3">
	      <label for="inputState">Data Type</label>
	      <!-- <select id="inputState" class="form-control" name="field1[]">
	        <option selected>Choose...</option>
	        <option>...</option>
	      </select> -->
	      <input type="text" class="form-control" name="field1[]" placeholder="Data Type">
	    </div>
	    <div class="form-group col-md-3">
	      <label>Length</label>
	      <input type="text" class="form-control" placeholder="Length" name="field1[]">
	    </div>
	    <div class="form-group col-md-2">
	        <div class="col-md-12 d-flex justify-content-between">
	      		<label>Auto Increment</label>
	          	<input type="checkbox" id="gridCheck" name="field1[]" checked>
	        </div>
	        <div class="col-md-12 d-flex justify-content-between">
	      	  	<label>Primary Key</label>
	          	<input type="checkbox" id="gridCheck" name="field1[]" checked>
	        </div>
	    </div>
	    	    
	  </div>
  </div>
  	<div class="form-group mt-2">
  		<button type="submit" class="btn btn-primary">Create New Table</button>
  		<button type="button" class="btn btn-danger">Cancel</button>
	</div>
</form>

<script type="text/javascript">
	$("#addColumnBtn").click(function(){
		var presentFieldCount = $(".field-row").length+1;
		$("#row-container").append('<div class="field-row form-row border border-secondary rounded p-1 mt-1"><div class="form-group col-md-3"><label>Field Name</label><input type="text" class="form-control" name="field'+presentFieldCount+'[]" placeholder="Field Name"></div><div class="form-group col-md-3"><label for="inputState">Data Type</label><input type="text" class="form-control" name="field'+presentFieldCount+'[]" placeholder="Data Type"></div><div class="form-group col-md-1"><label>Length</label><input type="text" class="form-control" placeholder="Length" name="field'+presentFieldCount+'[]"></div><div class="form-group col-md-3"><label>Default Value</label><input type="text" class="form-control" placeholder="Custom or NULL" name="field'+presentFieldCount+'[]"></div><div class="form-group col-md-2"><label>Remove Field</label><button type="button" class="btn-danger fa fa-minus form-control" onclick="remRow('+presentFieldCount+')"></button></div></div>');
	});

	function remRow(fieldRowId) {
		
		var fieldRowsLength = $(".field-row");
		$(fieldRowsLength[fieldRowId]).remove();
		// alert(fieldRowId);
	}
</script>