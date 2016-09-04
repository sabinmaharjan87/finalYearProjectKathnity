
<html dir="ltr" lang="en-US">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />

        <title>KathNity - Nepal's Newest club Portal</title>

        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/home/style.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="<?php echo base_url(); ?>assets/home/css/lessthen800.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="<?php echo base_url(); ?>assets/home/css/lessthen600.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" href="<?php echo base_url(); ?>assets/home/css/lessthen480.css" />

        <!-- CUSTOM STYLE -->                                                                        
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/home/css/custom-style.css" />

        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/home/favicon.ico" />
        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/home/favicon.ico" />
        <!-- [favicon] end -->  

        <!-- MAIN FONT STYLE -->  
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz%3A400&amp;subset=latin%2Ccyrillic%2Cgreek" type="text/css" media="all" />      
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans" type="text/css" media="all" />      
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald" type="text/css" media="all" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz%3A200%2C400" type="text/css" media="all" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed%3A300%7CPlayfair+Display%3A400italic" type="text/css" media="all" />
        <!-- END MAIN FONT STYLE -->  

        <link rel="stylesheet" id="prettyPhoto-css" href="<?php echo base_url(); ?>assets/home/css/prettyPhoto.css" type="text/css" media="all" />
        <link rel="stylesheet" id="jquery-tipsy-css" href="<?php echo base_url(); ?>assets/home/css/tipsy.css" type="text/css" media="all" />

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.tipsy.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.tweetable.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.nivo.slider.pack.js"></script>  
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.cycle.min.js"></script>  

        <!-- for accordion slider in staff page -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.hrzAccordion.js"></script>  

        <!-- for filterable effect in gallery and portfolio filterable page -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.quicksand.js"></script>  

        <!-- for portfolio slider -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.jcarousel.min.js"></script> 

        <!-- for the contact page -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/contact.js"></script>  

        <!-- SLIDER ELASTIC -->                                                               
        <link rel="stylesheet" id="slider-elastic-css" href="<?php echo base_url(); ?>assets/home/css/slider-elastic.css" type="text/css" media="all" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.eislideshow.js"></script>

        <!-- SLIDER CYCLE -->                                                               
        <link rel="stylesheet" id="slider-cycle-css" href="<?php echo base_url(); ?>assets/home/css/slider-cycle.css" type="text/css" media="all" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.slides.min.js"></script>

        <!-- SLIDER THUMBNAILS -->                                                               
        <link rel="stylesheet" id="slider-thumbnails-css" href="<?php echo base_url(); ?>assets/home/css/slider-thumbnails.css" type="text/css" media="all" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.aw-showcase.js"></script>

        <!-- SLIDER FLASH -->                                                               
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/swfobject.js"></script>      

        <!-- SLIDER ELEGANT -->                                                               
        <link rel="stylesheet" id="slider-elegant-css" href="<?php echo base_url(); ?>assets/home/css/slider-elegant.css" type="text/css" media="all" />

        <!-- SLIDER NIVO -->                                                               
        <link rel="stylesheet" id="slider-nivo-css" href="<?php echo base_url(); ?>assets/home/css/slider-nivo.css" type="text/css" media="all" />     

        <!-- CUSTOM JAVASCRIPT -->                           
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/home/js/jquery.custom.js"></script>
    </head>

    <body class="home image-sphere-style responsive">

        <!-- START SHADOW WRAPPER -->
        <div class="shadowBg group">

            <!-- START WRAPPER -->
            <div class="wrapper group">

                <!-- START TOPBAR -->
                <div id="topbar">
                    <div class="inner">
                        <ul class="topbar_links">
                            <li>
                                <?php if ($this->session->userdata('user_name')==!0): ?>
                                
                               <?php echo $this->session->userdata('user_name');?>
                                <?php else: ?>
                                <a href = "<?php echo base_url(); ?>index.php/user/login">Login</a>
                               <?php 
                               endif?>
                            </li>
                            <li> | 
                                <?php if ($this->session->userdata('user_name')==!0): ?>
                                <a href="<?php echo base_url(); ?>index.php/user/logout">LogOut</a>
                                <?php else: ?>
                             <a href="<?php echo base_url(); ?>index.php/user/register">Register</a>
                               <?php endif?>
                                
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <!-- end.inner -->
                </div>
                <!-- END TOPBAR -->   

                <!-- START HEADER -->
                <div id="header" class="group">

                    <!-- START LOGO -->
                    <div id="logo" class="group">
                        <a href="<?php echo site_url(); ?>/home" title="KathNity"> 
                            <img width="50" height="50"src="<?php echo base_url(); ?>assets/home/images/main_logo.png" alt="Logo Main" /> 
                        </a>    
                        
                    </div>
                    <!-- END LOGO -->   

                    <!-- START NAV -->
                    <div id="nav" class="group">
                        <ul class="level-1 white">
                            <?php if ($this->session->userdata('user_name')==!0): ?>
                             <li class="calendar">
                              <a href="<?php echo site_url(); ?>/user/dashboard">
                                  DASHBOARD </a>
                             </li>
                             <?php endif?>
                            <li class="home">
                                <a href="<?php echo site_url(); ?>/home">HOME</a>

                            </li>
                           
                            <li class="bookmark">
                                <a href="<?php echo site_url(); ?>/home/leagues">Leagues</a>
                            </li>
                            <li class="bookmark">
                                <a href="<?php echo site_url(); ?>/home/countrys">Countries</a>
                            </li>
                            <li class="bookmark">
                                <a href="<?php echo site_url(); ?>/home/players">Players</a>
                            </li>
                            <li class="burst">
                                <a href="<?php echo site_url(); ?>/home/clubs">club</a>
                            </li>
                            <li class="email"><a href="<?php echo base_url();?>index.php/user/contact">Contact</a>
<!--                                <ul class="sub-menu">
                                    <li><a href="">Rupesh Adhikari</a></li>
                                    <li><a href="">Sabin Maharjan</a></li>
                                    <li><a href="">Subas Humagain</a></li>
                                    <li><a href="">Vivek Maharjan</a></li>
                                </ul>-->
                            </li>

                        </ul>
                    </div>
                    <!-- END NAV -->   
                </div>
                <!-- END HEADER -->        

               