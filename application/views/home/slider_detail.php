<?php foreach ($sliders as $s) :?>
<title> <?php echo $s->Title; ?> </title>
<h1> <?php echo $s->Title; ?> </h1>
<img src="<?php echo base_url();?>uploads/<?php echo $s->Image; ?>"> <br>
<?php echo $s->Description; ?>
<?php endforeach; ?>