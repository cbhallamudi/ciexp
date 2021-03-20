    	<!-- Footer -->
    	<footer class="footer bg-light">
    	  <div class="container">
    	    <div class="row">
    	      <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
    	        <ul class="list-inline mb-2">
    	          <li class="list-inline-item">
    	            <a href="#">About</a>
    	          </li>
    	          <li class="list-inline-item">&sdot;</li>
    	          <li class="list-inline-item">
    	            <a href="#">Contact</a>
    	          </li>
    	          <li class="list-inline-item">&sdot;</li>
    	          <li class="list-inline-item">
    	            <a href="#">Terms of Use</a>
    	          </li>
    	          <li class="list-inline-item">&sdot;</li>
    	          <li class="list-inline-item">
    	            <a href="#">Privacy Policy</a>
    	          </li>
    	        </ul>
    	        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website <em><?php echo date('Y'); ?></em>. All Rights Reserved.</p>
    	      </div>
    	      <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
    	        <ul class="list-inline mb-0">
    	          <li class="list-inline-item mr-3">
    	            <a href="#">
    	              <i class="fa fa-facebook fa-2x"></i>
    	            </a>
    	          </li>
    	          <li class="list-inline-item mr-3">
    	            <a href="#">
    	              <i class="fa fa-twitter-square fa-2x"></i>
    	            </a>
    	          </li>
    	          <li class="list-inline-item">
    	            <a href="#">
    	              <i class="fa fa-instagram fa-2x"></i>
    	            </a>
    	          </li>
    	        </ul>
    	      </div>
    	    </div>
    	  </div>
    	</footer>

        <a href="#topNavbar" id="topButton" title="To Top"><i class="fa fa-arrow-up fa-2x"></i></a>

    	<script type="text/javascript">
    		$("#textAreaForm").click(function(){
    			console.log("submitted");
    		});

            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop();
                if(scroll >= 300){
                    $('#topButton').css('display','block');                    
                    console.log(scroll);
                }else{
                    $('#topButton').css('display','none');                    
                }
            });

            $(document).ready(function(){
              // Add smooth scrolling to all links
              $("#topButton").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 800, function(){
               
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
            });
    	</script>
    </body>
</html>