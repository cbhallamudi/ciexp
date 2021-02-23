<html>
        <head>
                <title>CodeIgniter Tutorial</title>
                <meta charset="utf-8">
                
                <?php  
                        echo link_tag("base_url('adminAssets/') ?>css/bs.css")


                ?>

                <link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/') ?>css/bs.css">
                <link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/') ?>fa/css/font-awesome.min.css">
                
                <script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/jquery.js"></script>
                <script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/popper.js"></script>
                <script type="text/javascript" src="<?php echo base_url('adminAssets/') ?>js/bs.js"></script>
        </head>
        <body>

                <?php echo heading($title,1); ?>