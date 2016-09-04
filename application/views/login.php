
<title> Login </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style1.css">

<div class="container-fluid">
<?php if ($this->session->userdata('user_name') ==! 0): ?>
         <?php redirect('user') ;?>
    <?php endif ?>
    <form id="form1" name="form 1" method="post" action="<?php echo base_url(); ?>index.php/user/login">
        <h1> Login Form </h1>
        <div class="alert-danger">
            <?php echo validation_errors(); ?>
            <?php echo $this->session->flashdata('error'); ?>
        </div>
        <center>
        <div class="page">
        <div class="input-group ">
            <label> Username: </label><input type="text" name="user_name" class="form-control"> <br>
        </div>
        <div class="input-group">
            <label> Password:</label> <input type="password" name="password" class="form-control"> <br><br><br>
        </div>
       <div class="input-group">
           <center> <input type="submit" name="submit" value="Login" class=" btn btn-large btn-info " ></center> <br></div>
            <p>Not a Member?<a href="<?php echo base_url(); ?>index.php/user/register" class="btn btn-success">Sign Up
                </a></p>
         </div>
        </center>

    </form>
   

</div>

