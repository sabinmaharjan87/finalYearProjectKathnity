<div id="page">
<?php foreach ($countrys as $c) :?>

<h3>  <img src="<?php echo base_url();?>uploads/thumb/<?php echo $c->country_image;?>"> <a href="<?php echo base_url();?>index.php/home/country_detail/<?php echo $c->country_id;?>"><?php echo $c->country_name; ?></a> </h3>
<?php endforeach; ?>
</div>
