
<html>
    <head>
        <title> Edit Post
      </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid wrapper">
            <form id="form1" name="form 1" method="post" action="<?php echo base_url(); ?>index.php/slider/edit/<?php echo $slider->slider_id;?>" enctype="multipart/form-data">
                <h1> Edit Post </h1>
                <div class="alert-danger">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <div class="form-group">
                    <label> Slider Name: </label><input type="text" name="slider_name" class="form-control" value="<?php echo $slider->slider_name; ?>"> <br>
                </div>
                
                <div class="form-group">
                    <label> Image: </label> Current Image=<img src="<?php echo base_url();?>uploads/thumb/<?php echo $slider->slider_image;?>"> <br>Want to change? <input type="file" name="userfile"> <br> <br>
                </div>
                <br> 
                <div class="form-group">
                    <label> Featured: </label><input type="checkbox" name="featured"value="1" <?php if ($slider->featured== 1){ echo 'checked = "checked"';}?> > <br>
                </div>

                <input type="submit" name="Submit" class="btn-primary"> <br>

            </form>
        </div>
        <h1>
             <a href="<?php echo base_url() ;?>index.php/user">Dashboard</a></h1>
    </body>
</html>