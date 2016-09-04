<html>
    <head>
        <title> Add Post
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid wrapper">
            <form id="form1" name="form 1" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/slider/add">
                <h1> Add Post </h1>
                
                <div class="alert-danger">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <div class="form-group">
                    <label> Slider Name: </label><input type="text" name="slider_name" class="form-control"> <br> 
                </div>
                <div class="form-group">
                    <label> Slider Image: </label> <input type="file" name="userfile"> <br> <br>
                </div>
                <div class="form-group">
                    <label> Featured: </label><input type="checkbox" name="featured" value="1"> <br> <br>
                </div>

                <input type="submit" name="Submit" class="btn-primary"> <br> <br>

            </form>
        </div>
        <h1>
             <a href="<?php echo base_url() ;?>index.php/user">Dashboard</a></h1>
    </body>
</html>