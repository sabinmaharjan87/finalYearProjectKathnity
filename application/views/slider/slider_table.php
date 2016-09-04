<body align="center">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<table border="1" class="table-condensed container-fluid"align="center">
    
    <tr align="center" class="text-uppercase">
    <td> Name </td>
    <td> Image</td>
    <td colspan="2"> Options </td>
    </tr>
    <?php foreach ($sliders as $s): ?>
    <tr> 
        
        <td> <?php echo $s->slider_name; ?> </td>
        <td> <img src="<?php echo base_url();?>uploads/thumb/<?php echo $s->slider_image;?>"> </td>

        <td> <a class='btn btn-info' href="<?php echo base_url();?>index.php/slider/edit/<?php echo $s->slider_id;?>"> Edit </a> </td>
        <td> <a class='btn btn-danger' href="<?php echo base_url();?>index.php/slider/delete/<?php echo $s->slider_id;?>"> Delete </a> </td>
        
    </tr>
    <?php endforeach;?>
    
    
</table>
 <h1>
             <a href="<?php echo base_url() ;?>index.php/user">Dashboard</a></h1>

</body>