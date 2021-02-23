<?php 
  
  // echo "<pre>";
  // print_r($siteDetails[0]); 
  // exit;
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('adminAssets/'); ?>userprofileassets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url('adminAssets/'); ?>userprofileassets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>User Profile</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

  <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('adminAssets/'); ?>fa/css/font-awesome.min.css">

  <!-- CSS Files -->
    <link href="<?php echo base_url('adminAssets/'); ?>userprofileassets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url('adminAssets/'); ?>userprofileassets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('adminAssets/'); ?>userprofileassets/css/demo.css" rel="stylesheet" />
  <style type="text/css">
    .fa-arrow-circle-left{
      font-size: 2.4rem !important;
    }
    #wizardProfile{
      background-color: #f4f1de;
    }
  </style>
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('<?php echo base_url('adminAssets/') ?>images/elizabeth-explores-tiFmFzRIk6I-unsplash.jpg');background-repeat: none;background-size: cover;">
    <!--   Creative Tim Branding   -->
    <a href="<?php echo base_url(); ?>">
         <div class="logo-container">
            <div class="logo">
                <img src="<?php echo base_url('uploads/sitesettingsimages/').$siteDetails[0]->sitelogo; ?>" style="width:60px;height:60px;border-radius: 50%;">
            </div>
            <div class="brand">
                Admin Panel
            </div>
        </div>
    </a>

  <!--  Made With Get Shit Done Kit  -->
    <a href="<?php echo base_url('admin-dashboard'); ?>" class="made-with-mk">
      <div class="brand"><span class="fa fa-arrow-circle-left fa-2x"></span></div>
      <div class="made-with">Go Back</div>
    </a>

    <!--   Big container   -->
    <div class="container">
         <div class="row">
           <div class="col-md-offset-3 col-md-6">
             
            <?php if($this->session->flashdata('success')){ ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>.
          </div>
            <?php }else if($this->session->flashdata('failure')){ ?>
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Sorry!</strong> <?php echo $this->session->flashdata('failure'); ?>.
          </div>
            <?php } ?>  
         </div>
        </div>

        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <!-- <form action="" method=""> -->
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                      <div class="wizard-header">
                          <h3>
                             <b>BUILD</b> YOUR PROFILE <br>
                             <small>This information will let us know more about you.</small>
                          </h3>
                      </div>

            <div class="wizard-navigation">
              <ul>
                              <li><a href="#website_profile_about" data-toggle="tab">About</a></li>
                              <li><a href="#website_profile_address" data-toggle="tab">Address</a></li>
                          </ul>

            </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="website_profile_about">
                              <div class="row">
                                  <h4 class="info-text"> Let's start with the basic information <span class="fa fa-edit text-warning" style="cursor: pointer;" onclick="editBasicInfo()"></span></h4>
                                  <form id="website_about_form" action="<?php echo base_url('admin-website-basic-info-update'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="col-sm-4 col-sm-offset-1">
                                       <div class="picture-container">
                                            <div class="picture">
                                                <img src="<?php echo base_url('uploads/sitesettingsimages/').$siteDetails[0]->sitelogo; ?>" class="picture-src" id="WebsiteLogoPreview" title="" style="pointer-events: none;"/>
                                                <input type="file" id="sitelogo-picture" name="sitelogo" value="" disabled>
                                            </div>
                                            <h6>Choose Loco</h6>
                                            <input type="hidden" name="hiddenSitelogo" value="<?php echo $siteDetails[0]->sitelogo; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>Website Name <small>(required)</small></label>
                                          <input name="sitename" id="sitename" type="text" class="form-control" placeholder="Andrew..." value="<?php echo $siteDetails[0]->sitename; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                          <label>Website URL <small>(required)</small></label>
                                          <input name="siteurl" id="siteurl" type="text" class="form-control" placeholder="Smith..." value="<?php echo $siteDetails[0]->siteurl; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                       <div class="picture-container">
                                            <div class="picture">
                                                <img src="<?php echo base_url('uploads/sitesettingsimages/').$siteDetails[0]->siteicon; ?>" class="picture-src" id="WebsiteIconPreview" title="" style="pointer-events: none;"/>
                                                <input type="file" id="siteicon-picture" name="siteicon" value="" disabled>
                                            </div>
                                            <h6>Choose Icon</h6>
                                            <input type="hidden" name="hiddenSiteicon" value="<?php echo $siteDetails[0]->siteicon; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>Website Email <small>(required)</small></label>
                                          <input name="siteemail" id="siteemail" type="text" class="form-control" placeholder="Andrew..." value="<?php echo $siteDetails[0]->siteemail; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                          <label>Website Contact <small>(required)</small></label>
                                          <input name="sitecontact" id="sitecontact" type="text" class="form-control" placeholder="Smith..." value="<?php echo $siteDetails[0]->sitecontact; ?>" readonly>
                                        </div>
                                    </div>
                                   
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="form-group">
                                            <input type="submit" id="basicInfoUpdateBtn" class="btn btn-primary btn-block" value="Update" disabled>
                                        </div>
                                    </div>
                                  </form>
                              </div>
                            </div>
                            
                            <div class="tab-pane" id="website_profile_address">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Are you living in a nice area? <span class="fa fa-edit text-warning" style="cursor: pointer;" onclick="editAddress()"></span> </h4>
                                    </div>
                                 <form action="<?php echo base_url('admin-update-website-address'); ?>" id="website_address_form" method="post"> 
                                  <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="siteaddress" id="siteaddress" placeholder="5h Avenue" readonly><?php echo $siteDetails[0]->siteaddress; ?></textarea>
                                          </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Map Location</label>
                                            <textarea class="form-control" name="sitemaplocation" id="sitemaplocation" placeholder="5h Avenue" readonly><?php echo $siteDetails[0]->sitemaplocation; ?></textarea>
                                          </div>
                                          <iframe src="<?php echo $siteDetails[0]->sitemaplocation; ?>" height="300" width="100%" frameborder="1" style="border:1px solid #dedede; border-radius:2px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="form-group">
                                            <input type="submit" id="updateAddressBtn" class="btn btn-primary btn-block" value="Update" disabled>
                                        </div>
                                    </div>
                                  </div>
                                </form>  
                            </div>
                        </div>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container">
          <p>&copy; Copyright <span id="copyRightText"></span> <a href="<?php echo base_url(); ?>">Admin Panel</a></p>

          <script type="text/javascript">
            var dateYearIs = new Date;
            document.getElementById("copyRightText").innerHTML = dateYearIs.getFullYear();
            // alert();
          </script>
        </div>
    </div>

</div>

</body>

  <!--   Core JS Files   -->
  <script src="<?php echo base_url('adminAssets/') ?>userprofileassets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('adminAssets/') ?>userprofileassets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('adminAssets/') ?>userprofileassets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="<?php echo base_url('adminAssets/') ?>userprofileassets/js/gsdk-bootstrap-wizard.js"></script>

  <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="<?php echo base_url('adminAssets/') ?>userprofileassets/js/jquery.validate.min.js"></script>
  
  <script type="text/javascript">

  $(document).ready(function(){
    $(".alert-dismissible").fadeOut(5000);
  });

    function editBasicInfo() {
      $("#sitename,#siteurl,#siteemail,#sitecontact").removeAttr("readonly");
      $("#basicInfoUpdateBtn,#sitelogo-picture,#siteicon-picture").removeAttr("disabled");
    }
   
    function editAddress() {
      $("#siteaddress,#sitemaplocation").removeAttr("readonly");
      $("#updateAddressBtn").removeAttr("disabled");
    }
  </script>



</html>
