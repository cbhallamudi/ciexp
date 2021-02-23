	        <div class="container-fluid">
	            <div class="row mt-1 py-1" style="background-color: transparent;">
		            <div class="col-md-12 p-0">
		            	<nav aria-label="breadcrumb">
		            	  <ol class="breadcrumb">
		            	    <li class="breadcrumb-item active" aria-current="page"><a href="dashboard.html">Dashboard</a></li>
		            	  </ol>
		            	</nav>	
		            </div>				
	              <div class="col-md-6">
	                <!-- Card group -->
	                <div class="card-group bg-info">
	                  <!-- Card -->
	                  <div class="card mb-1">
	                    <!-- Card content -->
	                    <div class="card-body">
	                      <!-- Title -->
	                      <h6 class="card-title">Users:</h6>
	                      <!-- Text -->
	                      
	                      
	                      <p class="card-text text-primary"><i class="fa fa-users fa-2x"></i>
	                      	<span class="ml-2 text-secondary">
		                      	<script type="text/javascript">
		                      		document.write(Math.round(Math.random()*1000));
		                      	</script>
	                      	</span>
		                  </p>
	                    </div>
	                    <!-- Card content -->
	                  </div>
	                  <!-- Card -->
	                  <!-- Card -->
	                  <div class="card mb-1">
	                    <!-- Card content -->
	                    <div class="card-body">
	                      <!-- Title -->
	                      <h6 class="card-title">Orders: </h6>
	                      <!-- Text -->
	                      <p class="card-text text-warning"><i class="fa fa-list fa-2x"></i><span class="ml-2 text-secondary"><script type="text/javascript">
		                      		document.write(Math.round(Math.random()*1000));
		                      	</script></span></p>
	                    </div>
	                    <!-- Card content -->
	                  </div>
	                  <!-- Card -->
	                </div>
	                <!-- Card group -->
	              </div>
	              
	              <div class="col-md-6">
	                  <!-- Card group -->
	                  <div class="card-group bg-info">
	          
	                    <!-- Card -->
	                    <div class="card mb-1">
	          
	                      <!-- Card content -->
	                      <div class="card-body">
	          
	                        <!-- Title -->
	                        <h6 class="card-title">Growth:</h6>
	                        <!-- Text -->
	                        
	                        
	                        <p class="card-text text-success"><i class="fa fa-angle-double-up fa-2x"></i><span class="ml-2 text-secondary"><script type="text/javascript">
		                      		document.write(Math.round(Math.random()*1000));
		                      	</script> (<script type="text/javascript">
		                      		document.write(Math.round(Math.random()*100));
		                      	</script>%)</span></p>
	          
	                      </div>
	                      <!-- Card content -->
	          
	                    </div>
	                    <!-- Card -->
	          
	                    <!-- Card -->
	                    <div class="card mb-1">
	          
	                      <!-- Card content -->
	                      <div class="card-body">
	                        <!-- Title -->
	                        <h6 class="card-title">Drop: </h6>
	                        <!-- Text -->
	                       <p class="card-text text-danger"><i class="fa fa-angle-double-down fa-2x"></i><span class="ml-2 text-secondary"><script type="text/javascript">
		                      		document.write(Math.round(Math.random()*1000));
		                      	</script> (<script type="text/javascript">
		                      		document.write(Math.round(Math.random()*100));
		                      	</script>%)</span></p>
	                      </div>
	                      <!-- Card content -->
	          
	                    </div>
	                    <!-- Card -->
	          
	                  </div>
	                  <!-- Card group -->
	                </div>
	            </div>
	          </div>
			  <div class="container-fluid mt-2">
	          	<div class="row">
	          		<div class="col-md-6">
		          		<!-- <div id="piechart"></div> -->
		          		<canvas id="myChart1" width="400" height="400"></canvas>
	          		</div>
	          		<div class="col-md-6">
		          		<canvas id="myChart" width="400" height="400"></canvas>
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
			var ctx = document.getElementById('myChart');
			ctx.style.backgroundColor = '#fff';
			ctx.style.border = '2px groove #ccc';
			ctx.style.borderRadius = '10px';
			dataOpts = [Math.round(Math.random()*1000),Math.round(Math.random()*1000),Math.round(Math.random()*1000),Math.round(Math.random()*1000),Math.round(Math.random()*1000),Math.round(Math.random()*1000)];


			var myChart = new Chart(ctx, {
			    type: 'bar',
			    data: {
			        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
			        datasets: [{
			            label: '# of Votes',
			            data: dataOpts,
			            backgroundColor: [
			                'rgba(255, 99, 132, 0.2)',
			                'rgba(54, 162, 235, 0.2)',
			                'rgba(255, 206, 86, 0.2)',
			                'rgba(75, 192, 192, 0.2)',
			                'rgba(153, 102, 255, 0.2)',
			                'rgba(255, 159, 64, 0.2)'
			            ],
			            borderColor: [
			                'rgba(255, 99, 132, 1)',
			                'rgba(54, 162, 235, 1)',
			                'rgba(255, 206, 86, 1)',
			                'rgba(75, 192, 192, 1)',
			                'rgba(153, 102, 255, 1)',
			                'rgba(255, 159, 64, 1)'
			            ],
			            borderWidth: 1
			        }]
			    },
			    options: {
			        scales: {
			            yAxes: [{
			                ticks: {
			                    beginAtZero: true
			                }
			            }]
			        }
			    }
			});
			</script>

			<script>
			var ctx1 = document.getElementById('myChart1');
			ctx1.style.backgroundColor = '#fff';
			ctx1.style.border = '2px groove #ccc';
			ctx1.style.borderRadius = '10px';
			dataOpts1 = [Math.round(Math.random()*1000), Math.round(Math.random()*1000), Math.round(Math.random()*1000), Math.round(Math.random()*1000), Math.round(Math.random()*1000)];
			var myChart = new Chart(ctx1, {
			    type: 'polarArea',
			    data: {
			        labels: ['Red', 'Blue', 'Green', 'Purple', 'Orange'],
			        datasets: [{
			            label: '# of Votes',
			            data: dataOpts1,
			            backgroundColor: [
			                'rgba(255, 99, 132, 0.2)',
			                'rgba(54, 162, 235, 0.2)',
			                'rgba(75, 192, 192, 0.2)',
			                'rgba(153, 102, 255, 0.2)',
			                'rgba(255, 159, 64, 0.2)'
			            ],
			            borderColor: [
			                'rgba(255, 99, 132, 1)',
			                'rgba(54, 162, 235, 1)',
			                'rgba(75, 192, 192, 1)',
			                'rgba(153, 102, 255, 1)',
			                'rgba(255, 159, 64, 1)'
			            ],
			            borderWidth: 1
			        }]
			    },
			    options: {
			        scales: {
			            yAxes: [{
			                ticks: {
			                    beginAtZero: true
			                }
			            }]
			        },
			        // legend:true
			    }
			});
			</script>	