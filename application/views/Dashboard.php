<?php //$this->load->view('home/includes/header'); ?>

         <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">
        <div class="last" align = "center">
         <?php foreach ($user as $u): ?> 
        <h1><?php echo $u->user_name;?> </h1>
        <img src="<?php echo base_url();?>uploads/square/<?php echo $u->user_image;?>" >
        <h3><?php echo $u->email;?> </h3>
        <h3><?php echo $u->address;?> </h3>
        <h3><?php echo $u->phone;?> </h3>
        <h5><a class='btn btn-info' href="<?php echo base_url();?>index.php/user/edit/<?php echo $u->user_id;?>"> Edit Your Profile Info</a></h5>
        <?php endforeach; ?>
   
         
           </div>
 
       

 
           
           <div id="footer" class="group columns-4"><!-- here you can change the number of columns -->
                    <div class="inner footer-main">
                              <div id="twitter-slider" class="group">
                                  <div class="tweets-list"> <div class="content"><p> <h1>Actions:</h1></p></div></div> <!-- END TWITTER -->   
                <div id="copyright" class="group two-columns">
                   
                    <div class="inner group">
                        
                          <center><a class="btn btn-info" href="<?php echo base_url(); ?>index.php/league/display"> View League Table</a>
                 <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/league/add"> Add New League </a>
                          <center><a class="btn btn-info" href="<?php echo base_url(); ?>index.php/country/display"> View Country Table</a>
                 <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/country/add"> Add New Country </a>
        <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/club/display"> View Club Table </a>
        <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/club/add"> Add New Club </a>
        <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/slider/display"> View Slider Table </a><br><br>
        <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/slider/add"> Add New Slider</a>
       <!-- <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/user/register"> Add New User </a>-->
        <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/user/display"> View User Table </a>    
        <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/user/register"> Add New User </a>    
        <a class="btn btn-info" href="<?php echo base_url(); ?>index.php/player/display"> View Player Table </a>    
        <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/player/add"> Add New Player </a>    
        <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/user/logout"> Log Out </a></center>
                    </div>
                </div>
                <!-- END COPYRIGHT -->  
                <p><h5>&copy;<a href="#">KathNity</a> <?php echo date('Y')?>  &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></h5></p>
            </div>
           
         </div>
           </div>