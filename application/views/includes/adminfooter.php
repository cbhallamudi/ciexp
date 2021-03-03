<!-- ========= Footer =========== -->
			  <div class="container-fluid mt-2 bg-info">
	          	<div class="row">
	          		<div class="col-md-12">
		          		<!-- Footer -->
		          		<!-- Footer -->
		          		<footer class="page-footer font-small blue">

		          		  <!-- Copyright -->
		          		  <div class="footer-copyright text-center py-3">
		          		  	<p>&copy; Copyright <span id="copyRightText"></span> <a href="<?php echo base_url('default_controller'); ?>"> Admin Panel</a></p>

		          		  	        <script type="text/javascript">
		          		  	          var dateYearIs = new Date;
		          		  	          $("#copyRightText").text(dateYearIs.getFullYear())
		          		  	          // alert();
		          		  	        </script>
		          		    
		          		  </div>
		          		  <!-- Copyright -->

		          		</footer>
		          		<!-- Footer -->
	          		</div>
	          	</div>	
			  
			  </div>
			  </div>	
	        
	    </div>
	</div>

	<!-- Modals -->


	<!-- Admin User View Modal -->
	<div class="modal fade" id="adminViewUserData" tabindex="-1" aria-labelledby="adminViewUserDataLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-scrollable modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form>
	      	  <div class="form-row">
	      	    <div class="form-group col-md-3">
	      	      <label for="inputEmail4">Profile Pic</label><br>
	      	      <img src="<?php echo base_url('adminAssets/images/adminLoginSideImg1.gif'); ?>" alt="Profile Pic" class="img-thumbnail" id="adminuserviewmodaluserprofilepic">
	      	    </div>
	      	    <div class="form-group col-md-9">
	      	      <label for="useruname">User Name</label>
	      	      <input type="text" class="form-control" readonly id="adminuserviewmodaluseruname">
	      	      <label for="userfname">First Name</label>
	      	      <input type="text" class="form-control" readonly id="adminuserviewmodaluserfname">
	      	      <label for="userlname">Last Name</label>
	      	      <input type="text" class="form-control" readonly id="adminuserviewmodaluserlname">
	      	    </div>
	      	  </div>
	      	  <div class="form-row">
	      	    <div class="form-group col-md-6">
	      	      <label for="useremail">Email</label>
	      	      <input type="email" class="form-control" readonly id="adminuserviewmodaluseremail">
	      	    </div>
	      	    <div class="form-group col-md-6">
	      	      <label for="usercontact">Contact</label>
	      	      <input type="text" class="form-control" readonly id="adminuserviewmodalusercontact">
	      	    </div>
	      	  </div>
		      <div class="form-row">
		      	  <div class="form-group col-md-6">
		      	    <label for="iuseraddress">Address</label>
		      	    <textarea class="form-control" rows="9" readonly id="adminuserviewmodaluseraddress" placeholder="1234 Main St"></textarea>
		      	  </div>
		      	  <div class="form-group col-md-6">
	  	      	    <label for="inputCity">City</label>
	  	      	    <input type="text" class="form-control" readonly id="adminuserviewmodalusercity">
	  	      	    <label for="inputState">State</label>
	  	      	    <input type="text" class="form-control" readonly id="adminuserviewmodaluserstate">
	  	      	    <label for="inputCity">Country</label>
	  	      	    <input type="text" class="form-control" readonly id="adminuserviewmodalusercountry">
	  	      	    <label for="userpincode">Zip</label>
	  	      	    <input type="text" class="form-control" readonly id="adminuserviewmodaluserpincode">
	  	      	  </div>
		      </div>
	      	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="adminEditUserData" tabindex="-1" aria-labelledby="adminEditUserDataLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-scrollable modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title text-uppercase mx-auto" id="exampleModalLabel">Sure want to <span id="exampleModalLabelTitle"></span> User</h5>
	      </div>
	      <div class="modal-body">
		    <div class="row">
		      	<div class="col-md-3">
		      	</div>	
		      	<div class="col-md-3">
	  	          <a id="adminuseractionbtn" class="btn btn-info btn-block" href=""></a>
		      	</div>
		      	<div class="col-md-3">
	  	          <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Cancel</button>
		      	</div>
		    </div>
	      </div>
	      <!-- <div class="modal-footer">
	        
	      </div> -->
	    </div>
	  </div>
	</div>

	<!-- Add New Table Modal -->
	<div class="modal fade" id="addNewTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').dataTable( {
		        "sPaginationType": "full_numbers"
		    } );
		} );
		$(".alert-dismissible").fadeOut(5000);

		function adminViewUserData(userId){
			adminViewUserDataRequest = new XMLHttpRequest();
			adminViewUserDataRequest.open('GET','<?php echo base_url("admin-get-user-ajax/") ?>'+userId);
			adminViewUserDataRequest.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					var userData = JSON.parse(this.responseText);
					$('#adminuserviewmodaluserprofilepic').attr('src','<?php echo base_url('uploads/userprofiles/') ?>'+userData['userprofilepic']);
					$('#adminuserviewmodaluseruname').val(userData['useruname']);
					$('#adminuserviewmodaluserfname').val(userData['userfname']);
					$('#adminuserviewmodaluserlname').val(userData['userlname']);
					$('#adminuserviewmodaluseremail').val(userData['useremail']);
					$('#adminuserviewmodalusercontact').val(userData['usercontact']);
					$('#adminuserviewmodaluseraddress').val(userData['useraddress']);
					$('#adminuserviewmodalusercountry').val(userData['usercountry']);
					$('#adminuserviewmodaluserstate').val(userData['userstate']);
					$('#adminuserviewmodalusercity').val(userData['usercity']);
					$('#adminuserviewmodaluserpincode').val(userData['userpincode']);

					// console.log(this.responseText);
					// console.log(JSON.parse(this.responseText));
					// console.log(typeof(JSON.parse(this.responseText)));
				}
			}
			adminViewUserDataRequest.send();
		}


		function adminEditUserData(userId,action) {
			if(action == 'disable'){
				$('#exampleModalLabelTitle').append(action);
				$('#adminuseractionbtn').attr('href','<?php echo base_url('admin-user-action/0/') ?>'+userId).html('Disable');
			}else if(action == 'enable'){
				$('#exampleModalLabelTitle').append(action);
				$('#adminuseractionbtn').attr('href','<?php echo base_url('admin-user-action/1/') ?>'+userId).html('Enable');
			}else{
				$('#exampleModalLabelTitle').append(action);
				$('#adminuseractionbtn').attr('href','<?php echo base_url('admin-user-action/2/') ?>'+userId).html('Delete');
			}		
		}

	</script>

</body>
</html>