<html>
    <head>
        <title> Add Category </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"> </script>
<!--        <script>
            $(document).ready(function(){
                $("#myButton").click(function(){
                var data=$("#myForm").serialize();
                var url='<?php echo site_url();?>/player/ajaxAdd';
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
                    <h1> Insertion Successful</h1>
                </div>
        <div class="container-fluid wrapper">
            <form id="myForm" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/player/add">
                <h1> Add player </h1>
                <div class="alert-danger">
                    <?php echo validation_errors(); ?>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <div class="form-group">
                    <tr><td><label> player Name: </label></td>
                        <td><input type="text" name="player_name" class="form-control"></td></tr> <br>
                </div>
                <div>
                    <label> Club Name: </label> 
                    <select name="club_name">
                        <?php foreach ($clubs as $c):?> 
                        <option value="<?php echo $c->club_name; ?>"> <?php echo $c->club_name; ?> </option>
                        <?php endforeach;?>
                    </select>
                </div>
                  <div>
                    <label> Country Name: </label> 
                    <select name="country_name">
                        <?php foreach ($countrys as $c):?> 
                        <option value="<?php echo $c->country_name; ?>"> <?php echo $c->country_name; ?> </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div>
                    <label> Position: </label> 
                    <select name="position">
                        <?php foreach ($position as $c):?> 
                        <option value="<?php echo $c->position; ?>"> <?php echo $c->position; ?> </option>
                        <?php endforeach;?>
                    </select>
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