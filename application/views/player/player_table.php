<body align="center">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <table border="1" class="table-condensed container-fluid" align="center">
        
        
        <tr align="center" class="text-uppercase">
           
            <td></td>
            <td>  Player Name </td>
            <td>  Club Name </td>
            <td>  Country Name </td>
            <td>  Position </td>
            <td colspan="2"> Options </td>
        </tr>
        <?php foreach ($players as $c): ?>
            <tr>
                <td> <img src="<?php echo base_url();?>/uploads/thumb/<?php echo $c->player_image;?>"> </td>
                <td> <?php echo $c->player_name; ?> </td>
                <td> <?php echo $c->club_name; ?> </td>
                <td> <?php echo $c->country_name; ?> </td>
                <td> <?php echo $c->position; ?> </td>
                <td> <a class='btn btn-info' href="<?php echo base_url(); ?>index.php/player/edit/<?php echo $c->player_id; ?>"> Edit </a> </td>
                <td> <a class='btn btn-danger' href="<?php echo base_url(); ?>index.php/player/delete/<?php echo $c->player_id; ?>"> Delete </a> </td>

            </tr>
        <?php endforeach; ?>

    </table>
    <h1>
        <a href="<?php echo base_url(); ?>index.php/user">Dashboard</a></h1>
</body>