<div id="page">
<?php foreach ($leagues as $c) :?>

<h3>  <img src="<?php echo base_url();?>uploads/thumb/<?php echo $c->league_image;?>"> <a href="<?php echo base_url();?>index.php/home/league_detail/<?php echo $c->league_id;?>"><?php echo $c->league_name; ?></a> </h3>
<?php endforeach; ?>
</div>
