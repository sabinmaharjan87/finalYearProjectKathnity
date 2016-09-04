<html>
    <head>
        <title> Delete Post </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid wrapper">
            <form id="form1" name="form 1" method="post" action="<?php echo base_url(); ?>index.php/slider/delete/<?php echo $slider->slider_id;?>">
                <h1> Delete slider</h1>
                <div class="alert-danger">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                Do you Want to Delete?
                <input type="submit" name="submit" class="btn-primary"> <br>
            </form>
        </div>
         <h1>
             <a href="<?php echo base_url() ;?>index.php/user">Dashboard</a></h1>
    </body>
</html>