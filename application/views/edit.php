<head>
<title>Edit Form </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/bootstrap.min.css">
</head>

<body>
    <br>
    <div class="container-fluid wrapper">
    <?php echo validation_errors();?>
    <form method="post" action="<?php echo base_url(); ?>index.php/user/edit/<?php echo $user->user_id;?>" enctype="multipart/form-data">
       
    <h1>Edit Form:</h1>
    <div class ="input-group">
    <label> Name: </label> <input type="text" name="user_name" value="<?php echo $user->user_name; ?>" class="form-control"/> <br /><br />
    </div>
     <div class ="input-group">
    <label> Email: </label><input type="text" name="email" value="<?php echo $user->email; ?>" class="form-control" /> <br /><br />
     </div>
     <div class ="input-group">
    <label>Address: </label> <input type="text" name="address" value="<?php echo $user->address; ?>"  class="form-control" /> <br /><br />
     </div>
    <div class ="input-group">
    <label>Phone: </label> <input type="text" name="phone" value="<?php echo $user->phone; ?>" class="form-control"/> <br /> <br />
    </div>
    <div class ="input-group">
    <label> Password:</label> <input type="password" name="password" value="<?php echo $user->password; ?>"  class="form-control" /> <br /> <br />
    </div>
<!--     <label> Image: </label> <input type="file" name="image" value="Upload Image"class="form-control">-->
    <div class="form-group">
                    <label> Image: <br> Current Image: <img src="<?php echo base_url();?>/uploads/thumb/<?php echo $user->user_image;?>"> <br>
                       Want to Upload new?  </label> 
                       <input type="file" value="" name="user_image"> <br> <br>
                </div> 
    </div> <br> <br>
<input type="submit" value="Submit" name="submit" class="btn-primary">

</form>
        
        </div>
   <h1>
            <a href="Homepage.php">Go Home</a></h1>
</body>
</html>