<html>
    <head>
        <title> Add Category </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"> </script>
<!--        <script>
            $(document).ready(function(){
                $("#myButton").click(function(){
                var data=$("#myForm").serialize();
                var url='<?php echo site_url();?>/league/ajaxAdd';
                $.ajax({
                   'type': 'POST',
                   'url': url,
                   'data': data,
                   'success':function($data){
                   $("#success").show();
                   $("#success").html($data);
               }//end success
                });//end ajax
                        return false;
                    });
    });
            
        </script>-->
    </head>
    <body>
        <div id="success" style="display: none">
                    <h1> Insertion Sucessful</h1>
                </div>
        <div class="container-fluid wrapper">
            <form id="myForm" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/league/add">
                <h1> Add league </h1>
                <div class="alert-danger">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <div class="form-group">
                    <label> league Name: </label><input type="text" name="league_name" class="form-control"> <br>
                </div>
                <div class="form-group">
                    <label> Photo: </label> <input type="file" name="userfile" class="form-control"> <br>
                </div>
                <input type="submit" name="submit" class="btn-primary" id="myButton"> <br>

            </form>
        </div>
         <h1>
             <a href="<?php echo base_url() ;?>index.php/user">Dashboard</a></h1>
    </body>
</html>