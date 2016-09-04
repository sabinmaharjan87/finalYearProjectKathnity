<body align="center">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <table border="1" class="table-condensed container-fluid" align="center">
        
        
        <tr align="center" class="text-uppercase">
           
            <td></td>
            <td>  League Name </td>
            <td colspan="2"> Options </td>
        </tr>
        <?php foreach ($leagues as $c): ?>
            <tr>
                <td> <img src="<?php echo base_url();?>/uploads/thumb/<?php echo $c->league_image;?>"> </td>
                <td> <?php echo $c->league_name; ?> </td>
                <td> <a class='btn btn-info' href="<?php echo base_url(); ?>index.php/league/edit/<?php echo $c->league_id; ?>"> Edit </a> </td>
                <td> <a class='btn btn-danger' href="<?php echo base_url(); ?>index.php/league/delete/<?php echo $c->league_id; ?>"> Delete </a> </td>

            </tr>
        <?php endforeach; ?>

    </table>
    <h1>
        <a href="<?php echo base_url(); ?>index.php/user">Dashboard</a></h1>
</body>