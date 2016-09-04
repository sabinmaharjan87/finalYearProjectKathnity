<html>
    <head>
        <title> Edit league </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid wrapper">
            <form id="form1" enctype="multipart/form-data" name="form 1" method="post" action="<?php echo base_url(); ?>index.php/league/edit/<?php echo $league->league_id;?>">
                <h1> Edit Category </h1>
                <div class="alert-danger">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <div class="form-group">
                    <label> league Name: </label><input type="text" name="league_name" class="form-control" value="<?php echo $league->league_name; ?>"> <br>
                </div>
                <div class="form-group">
                    <label> Image: <br> Current Image: <img src="<?php echo base_url();?>/uploads/thumb/<?php echo $league->league_image;?>"> <br>
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