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
                
                <script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/jquery.js"></script>
                <script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/popper.js"></script>
                <script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/bs.js"></script>
        </head>
        <body>
               <!-- Navigation -->
               <section class="menu menu--circle">
                 <input type="checkbox" id="menu__active"/>
                 <label for="menu__active" class="menu__active">
                   <div class="menu__toggle">
                     <div class="icon">
                       <div class="hamburger"></div>
                     </div>
                   </div>
                   <input type="radio" name="arrow--up" id="degree--up-0"/>
                   <input type="radio" name="arrow--up" id="degree--up-1" />
                   <input type="radio" name="arrow--up" id="degree--up-2" />
                   <div class="menu__listings">
                     <ul class="circle">
                       <li>
                         <div class="placeholder">
                           <div class="upside">
                             <a href="https://codepen.io/logrithumn" class="button"><i class="fa fa-user"></i></a>
                           </div>
                         </div>
                       </li>
                       <li>
                         <div class="placeholder">
                           <div class="upside">
                             <a href="#" class="button"><i class="fa fa-cog"></i></a>
                           </div>
                         </div>
                       </li>
                       <li>
                         <div class="placeholder">
                           <div class="upside">
                             <a href="#">&nbsp</a>
                           </div>
                         </div>
                       </li>
                       <li>
                         <div class="placeholder">
                           <div class="upside">
                             <a href="#" class="button"><i class="fa fa-commenting"></i></a>
                           </div>
                         </div>
                       </li>
                       <li>
                         <div class="placeholder">
                           <div class="upside">
                             <a href="#" class="button"><i class="fa fa-trash"></i></a>
                           </div>
                         </div>
                       </li>
                       <li>
                         <div class="placeholder">
                           <div class="upside">
                             <a href="#" class="button"><i class="fa fa-battery-4"></i></a>
                           </div>
                         </div>
                       </li>
                       <li>
                         <div class="placeholder">
                           <div class="upside">
                             <a href="#" class="button"><i class="fa fa-calendar"></i></a>
                           </div>
                         </div>
                       </li>
                       <li>
                         <div class="placeholder">
                           <div class="upside">
                             <a href="#" class="button"><i class="fa fa-cloud"></i></a>
                           </div>
                         </div>
                       </li>
                       <li>
                         <div class="placeholder">
                           <div class="upside">
                             <a href="#" class="button"><i class="fa fa-wifi"></i></a>
                           </div>
                         </div>
                       </li>
                       <li>
                         <div class="placeholder">
                           <div class="upside">
                             <a href="#" class="button"><i class="fa fa-envelope-o"></i></a>
                           </div>
                         </div>
                       </li>
                     </ul>
                   </div>
                   <div class="menu__arrow menu__arrow--top">
                     <ul>
                       <li>
                         <label for="degree--up-0"><div class="arrow"></div></label>
                         <label for="degree--up-1"><div class="arrow"></div></label>
                         <label for="degree--up-2"><div class="arrow"></div></label>
                       </li>
                     </ul>
                   </div>
                 </label>
               </section>
               <nav class="navbar navbar-light bg-light static-top">
                

                 <div class="container">
                   <a class="navbar-brand" href="#">Start Bootstrap</a>
                   <a class="btn btn-primary" href="#">Sign In</a>
                 </div>
               </nav>
