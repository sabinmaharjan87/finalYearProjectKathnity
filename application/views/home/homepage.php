<link href="<?php echo base_url();?>assets/css/style1.css"> 
<link href="<?php echo base_url();?>public/assets/css/style.css">
<link href="<?php echo base_url();?>public/assets/css/vendor/counter.css">


<!-- START SLIDER -->
<div class="slider-wrapper theme-default">
    <div class="ribbon"></div>
    <div id="slider" class="nivo" style="height:350px">
        <?php foreach($sliders as $s):?>
        <img src="<?php echo base_url(); ?>uploads/mainslider/<?php echo $s->slider_image;?>" width="960" height="350" alt="<?php echo $s->slider_name;?>" />
        <?php endforeach;?>
    </div>
</div>
<script type="text/javascript">
    // edit here
    var slider_nivo_fx = 'random',
            slider_nivo_speed = 50,
            slider_nivo_timeout = 1500,
            slider_nivo_directionNav = true,
            slider_nivo_directionNavHide = true,
            slider_nivo_controlNav = false;
    // end editing    

    $('#slider.nivo').nivoSlider({
        effect: slider_nivo_fx,
        animSpeed: slider_nivo_speed,
        pauseTime: slider_nivo_timeout,
        directionNav: slider_nivo_directionNav,
        directionNavHide: slider_nivo_directionNavHide,
        controlNav: slider_nivo_controlNav
    });
</script>
<!-- END #slider --> 

<div class ="wrapper-content">
   <div id="scoreboard">

    
       
    

</div>
    
</div>
<?php
        $filepath= include '../../../json/leagues.json';
        $data= file_get_contents($filepath);
        $json= json_decode($data, true);
		$res ="<ul>";
		foreach($json['worldCup'] as $wc){
			$res.= "<h3>".$wc["FullName"]. "</h3>";
			
			
		}
		$res .= "</ul>";
		echo $res;
		
       ?>




<!-- START CONTENT -->

<!--<div class="two-fourth last">
    
    <div id="content"><br>
            <h3><b>Latest News</b></h3><br>
            <div class="page">
                        <?.php foreach ($latestclub as $p): ?>
                         <p> <a href="<?.php base_url();?>home/club_detail/<?.php echo $p->club_id;?>"> <?.php echo $p->club_name; ?></a></p>
                                             
                       
                        <?.php endforeach; ?>
                         
              
                    <p class="meta">

                    </p>
                    
        
        <!-- END LAST NEWS -->
       <!--     </div><br><br><br>
    </div> 
</div>
<br><br>
<h3><b>News Categories</b></h3><br>
<div id="content" class="gradient layout-sidebar-no group">
    
<div class="works-slider flexslider" align="center">
            <ul class="slides">
                <?.php //foreach ($leagues as $c):?>
                <li class="box-work">
                    <a href=<?.php echo base_url();?>index.php/home/league_detail/<?php echo $c->league_id;?>">
                        <div class="box-work-thumb"><img src="<?php echo base_url(); ?>uploads/slider/<?php echo $c->league_image; ?>" alt="" /></div>
                    </a>
                    <div class="box-work-body">
                       
                        <h4><a href="<?.php echo base_url();?>index.php/home/club_detail/<?php echo $c->league_id;?>"><?php echo $c->league_name; ?></a></h4>
                    </div>
                </li>
                <?.php endforeach;?>
            </ul>
        </div>
    
    <!-- START PRIMARY -->
    <h1 align="center"> Our Team </h1>
    <div id="primary" class="hentry group wrapper-content" role="main">

        <div class="box-sections">
            <img src="<?php echo base_url(); ?>assets/home/images/rupesh.jpg" alt="Rupesh" class="icon" />
            <p><h4 align ="left"><span style="line-height:32px">Rupesh Adhikari</span></h4></p>
        <p><h4 align ="left"><span  style="line-height:32px"><a href="https://www.facebook.com/spiritedcad"target="_blank" class="socials facebook" title="Facebook">facebook</a>
          <a href="https://www.twitter.com/apabaad"target="_blank" class="socials twitter" title="Twitter">twitter</a></span></h4></p>
        </div>

        <div class="box-sections">
            <img  src="<?php echo base_url(); ?>assets/home/images/sabin.jpg" alt="Sabin" class="icon" />

            <p><h4 align ="left"><span style="line-height:32px">Sabin Maharjan</span></h4></P>
            <p><h4 align ="left"><span  style="line-height:32px"><a href="https://www.facebook.com/5ab1n" class="socials facebook"target="_blank" title="Facebook">facebook</a>
        </div>

        <div class="box-sections">
            <img src="<?php echo base_url(); ?>assets/home/images/subas.jpg" alt="Subas" class="icon" />

            <p><h4 align ="left"><span style="line-height:32px">Subas Humagain</span></h4>
            </p>
            <p><h4 align ="left"><span  style="line-height:32px"><a href="https://www.facebook.com/subastheone" class="socials facebook"target="_blank" title="Facebook">facebook</a>
                    <a href="https://www.twitter.com/subastheone"target="_blank" class="socials twitter" title="Twitter">twitter</a> </a>
           <a href="https://www.youtube.com/user/subasspurs" target="_blank"class="socials youtube" title="Youtube">youtube</a></span></h4> </p>
        </div>
        <div class="box-sections">
            <img src="<?php echo base_url(); ?>assets/home/images/vivek.jpg" alt="Vivek" class="icon" />
            <p><h4 align ="left"><span style="line-height:32px">Vivek Maharjan</span></h4>
            </p>
            <p><h4 align ="left"><span  style="line-height:32px"><a href="https://www.facebook.com/wewake07" target="_blank"class="socials facebook" title="Facebook">facebook</a>
        </div>
        <p>&nbsp;</p>

    </div>
    

