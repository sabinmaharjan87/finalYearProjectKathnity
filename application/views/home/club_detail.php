
<link href="<?php echo base_url();?>assets/css/style1.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<h2 align='center'> <?php echo $club->club_name; ?> </h2>
<i> League: <?php echo $club->league_name; ?> <br> </i>
<i> Country: <?php echo $club->country_name; ?> <br> </i>
<h2 align='center'><img src="<?php echo base_url();?>uploads/square/<?php echo $club->club_image; ?>"> <br> </h2>
<h1> Players: </h1>

<?php foreach ($allplayerofclub as $b):?>

<h4><a href="<?php echo base_url();?>index.php/home/player_detail/<?php echo $b->player_id;?>"> <img src="<?php echo base_url();?>uploads/thumb/<?php echo $b->player_image; ?>"> <?php echo $b->player_name; ?></a> </h4> &nbsp;

 <?php endforeach;?>

