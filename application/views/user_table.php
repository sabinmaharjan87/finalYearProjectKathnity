<body align="center">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<table border="1" class="table-condensed"align="center">
 
    <tr align="center" class="text-uppercase">
    <td>  Name </td>
    <td>  EMail</td>
    <td>  Address</td>
    <td>  Phone</td>
     <td>  Image</td>
    <td colspan="2"> Options </td>
    </tr>
    <?php foreach ($users as $c): ?>
    <tr> 
        <td> <?php echo $c->user_name; ?> </td>
        <td> <?php echo $c->email; ?> </td>
        <td> <?php echo $c->address; ?> </td>
        <td> <?php echo $c->phone; ?> </td>
        <td>  <img src="<?php echo base_url();?>uploads/thumb/<?php echo $c->user_image;?>" ></td>
        
        <td> <a class='btn btn-info' href="<?php echo base_url();?>index.php/user/edit/<?php echo $c->user_id;?>"> Edit </a> </td>
        <td> <a class='btn btn-danger' href="<?php echo base_url();?>index.php/user/delete/<?php echo $c->user_id;?>"> Delete </a> </td>
        
    </tr>
    <?php endforeach;?>
    
    
</table>
 <h1>
             <a href="<?php echo base_url() ;?>index.php/user">Dashboard</a></h1>

</body>