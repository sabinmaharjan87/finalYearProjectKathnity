<div id="page">
<?php foreach ($players as $c) :?>

<h3>  <img src="<?php echo base_url();?>uploads/thumb/<?php echo $c->player_image;?>"> <a href="<?php echo base_url();?>index.php/home/player_detail/<?php echo $c->player_id;?>"><?php echo $c->player_name; ?></a> </h3>
<?php endforeach; ?>
</div>
