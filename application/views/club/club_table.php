<body align="center">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<table border="1" class="table-condensed container-fluid">
   
    <tr align="center" class="text-uppercase"> 
        <td> </td>
    <td>  Club Name </td>
    <td>  League</td>
    <td colspan="2"> Options </td>
    </tr>
    <?php foreach ($clubs as $p): ?>
    <tr>
        <td> <img src="<?php echo base_url();?>/uploads/thumb/<?php echo $p->club_image;?>"> </td>
        <td> <?php echo $p->club_name; ?> </td>
        <td> <?php echo $p->league_name; ?> </td>
        <td> <a class='btn btn-info' href="<?php echo base_url();?>index.php/club/edit/<?php echo $p->club_id;?>"> Edit </a> </td>
        <td> <a class='btn btn-danger' href="<?php echo base_url();?>index.php/club/delete/<?php echo $p->club_id;?>"> Delete </a> </td>
        
    </tr>
    <?php endforeach;?>
    
    
</table>
 <h1>
             <a href="<?php echo base_url() ;?>index.php/user">Dashboard</a></h1>

</body>