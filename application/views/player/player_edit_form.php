<html>
    <head>
        <title> Edit player </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid wrapper">
            <form id="form1" enctype="multipart/form-data" name="form 1" method="post" action="<?php echo base_url(); ?>index.php/player/edit/<?php echo $player->player_id;?>">
                <h1> Edit Category </h1>
                <div class="alert-danger">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <div class="form-group">
                    <label> Player Name: </label><input type="text" name="player_name" class="form-control" value="<?php echo $player->player_name; ?>"> <br>
                </div>
                <div>
                    <label> Country Name: </label> 
                    <select name="country_name">
                        <?php foreach ($countrys as $c):?> 
                        <option value="<?php echo $c->country_name; ?>"<?php if ($player->country_name == $c->country_name ){echo 'selected="selected"';}?>> <?php echo $c->country_name; ?> </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div>
                    <label> club Name: </label> 
                    <select name="club_name">
                        <?php foreach ($clubs as $c):?> 
                        <option value="<?php echo $c->club_name; ?>"<?php if ($player->club_name == $c->club_name ){echo 'selected="selected"';}?>> <?php echo $c->club_name; ?> </option>
                        <?php endforeach;?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label> Image: <br> Current Image: <img src="<?php echo base_url();?>/uploads/thumb/<?php echo $player->player_image;?>"> <br>
                       Want to Upload new?  </label>
                       <input type="file" value="" name="userfile"> <br> <br>
                </div> <br> <br>
                <input type="submit" name="Submit" class="btn-primary"> <br>
            </form>
        </div>
         <h1>
             <a href="<?php echo base_url() ;?>index.php/user">Dashboard</a></h1>
    </body>
</html>