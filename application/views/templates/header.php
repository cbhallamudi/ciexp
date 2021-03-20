<html>
        <head>
                <title>CodeIgniter Tutorial</title>
                <meta charset="utf-8">
                
                <?php  
                        echo link_tag('adminAssets/css/bs.css');
                ?>

                <link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/') ?>css/bs.css">
                <link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/') ?>fa/css/font-awesome.min.css">
                <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
                <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

                <!-- Custom styles for this template -->
                <link href="css/landing-page.css" rel="stylesheet">
                <link href="css/website_styles.css" rel="stylesheet">
                <link href="css/website_responsive_styles.css" rel="stylesheet">
                
                <script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/jquery.js"></script>
                <script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/popper.js"></script>
                <script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/bs.js"></script>
        </head>
        <body>
               

                <nav class="circular-menu">

                  <div class="circle">
                    <a href="" class="fa fa-home fa-2x"></a>
                    <a href="" class="fa fa-question fa-2x"></a>
                    <a href="" class="fa fa-cart-arrow-down fa-2x"></a>
                    <a href="" class="fa fa-phone fa-2x"></a>
                  </div>
                  
                  <a href="" id="togIcon" class="menu-button fa fa-bars"></a>

                </nav>
               <!-- Navigation -->
               <nav class="navbar navbar-light bg-light static-top" id="topNavbar">
                

                 <div class="container">
                   <a class="navbar-brand" href="#"><img height="50" src="<?php echo base_url('img/logo.jpg') ?>" alt="CoolBrand"></a>
                   <a class="btn btn-primary" href="#">Sign In</a>
                 </div>
               </nav>
<script type="text/javascript">
  
  var items = document.querySelectorAll('.circle a');
  var getDist = 5.625*items.length;
  for(var i = 0, l = items.length; i < l; i++) {
    // items[i].style.left = (50 - getDist*Math.cos(3.5 - 1*(1/l)*i*Math.PI)) + "%";
    
    // items[i].style.top = (50 + getDist*Math.sin(3.5 - 1*(1/l)*i*Math.PI)) + "%";
    items[i].style.left = (55 - 35*Math.cos(3.4 - 0.95*(1/l)*i*Math.PI)).toFixed(4) + "%";
    
    items[i].style.top = (50 + 35*Math.sin(3.4 - 0.95*(1/l)*i*Math.PI)).toFixed(4) + "%";
  }



  document.querySelector('.menu-button').onclick = function(e) {
     e.preventDefault(); document.querySelector('.circle').classList.toggle('open');
  }

  $("#togIcon").click(function(){
      $(this).toggleClass('fa-bars');
      $(this).toggleClass('fa-times');
  })
  
</script>