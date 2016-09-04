<?php foreach ($sliders as $s) :?>
<title> <?php echo $s->Title; ?> </title>
<h1> <a href="<?php echo base_url();?>index.php/home/slider_detail/<?php echo $s->ID;?>"><?php echo $s->Title; ?>  </a></h1>
    <?php echo $s->Description; ?> <br>
    <img width="200" src="<?php echo base_url();?>/uploads/<?php echo $s->Image; ?>">
    
<?php endforeach; ?>