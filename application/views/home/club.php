<?php foreach ($clubs as $p) :?>

<title> <?php echo $p->club_name; ?> </title>
<h2> <a href="<?php echo base_url();?>index.php/home/club_detail/<?php echo $p->club_id;?>"> <img src="<?php echo base_url();?>uploads/thumb/<?php echo $p->club_image; ?>">  <?php echo $p->club_name; ?> </a> </h2>

<?php endforeach; ?>
<a href="<?php echo base_url();?>index.php/club/nearestNeighbors/<?php echo $p->club_id;?>">Hello</a> </td>