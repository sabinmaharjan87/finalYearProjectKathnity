<html>
    <head>
        <title> Add Club
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
       
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"> </script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"> </script>
<!--        <script>
            $(document).ready(function(){
                $("#myButton").click(function(){
                var data=$("#myForm").serialize();
                var url='<?php echo site_url();?>/club/ajaxAdd';
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
        <div class="container-fluid wrapper">
            <form id="myForm" name="form 1" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/club/add">
                <h1> Add Club </h1>
                <div id="success" style="display: none"> <h2>  insert successful </h2></div>
                
                <div class="alert-danger">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <div class="form-group">
                    <label> Club Name: </label> <input type="text" name="club_name" class="form-control"> <br>
                </div>
                <div class="form-group">
                    <label>Country: </label> <select name="country_name">
                        <?php foreach ($countrys as $c):?> 
                        <option value="<?php echo $c->country_name; ?>"> <?php echo $c->country_name; ?> </option>
                        <?php endforeach;?>
                    </select> <br>
                </div>
                
                
                <div>
                    <label> League Name: </label> 
                    <select name="league_name">
                        <?php foreach ($leagues as $c):?> 
                        <option value="<?php echo $c->league_name; ?>"> <?php echo $c->league_name; ?> </option>
                        <?php endforeach;?>
                    </select>
                </div> <br> <br>
                
                
                <div class="form-group">
                    <label> Image: </label> <input type="file" name="userfile"> <br> <br>
                </div>
                <input type="submit" name="Submit" class="btn-primary" id="myButton"> <br> <br>

            </form>
        </div>
        <h1>
             <a href="<?php echo base_url() ;?>index.php/user">Dashboard</a></h1>
    </body>
</html>