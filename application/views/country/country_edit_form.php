
<html>
    <head>
        <title> Edit Post
      </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid wrapper">
            <form id="form1" name="form 1" method="post" action="<?php echo base_url(); ?>index.php/country/edit/<?php echo $country->country_id; ?>" enctype="multipart/form-data">
                <h1> Edit country </h1>
                <div class="alert-danger">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                 
                <div class="form-group">
                    <label> Country Name: </label> <input type="text" name="country_name" class="form-control"value="<?php echo $country->country_name?>"> <br>
                </div>
             
               
             
                
                <div class="form-group">
                    <label> Image: <br> Current Image: <img src="<?php echo base_url();?>/uploads/thumb/<?php echo $country->country_image;?>"> <br>
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