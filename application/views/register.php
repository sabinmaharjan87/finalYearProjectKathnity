<head>
<title>SignUp Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/bootstrap.css">
</head>

<body>
    <div class="container-fluid">
    <?php echo validation_errors();?>
    <form method="post" action="<?php echo base_url(); ?>index.php/user/register" enctype="multipart/form-data" class="wrapper">
   <!-- <input type="submit" value="Users List" name="UserList">-->
    <h1>SIGN UP FORM:</h1>
    <div class ="input-group">
    <label> Name: </label> <input type="text" name="user_name" class="form-control"/> <br /><br />
    </div>
    <div class ="input-group">
    <label> Email: </label><input type="text" name="email"class="form-control" /> <br /><br />
    </div>
    <div class ="input-group">
    <label>Address: </label> <input type="text" name="address"class="form-control" /> <br /><br />
    </div>
    <div class ="input-group">
    <label>Phone: </label> <input type="text" name="phone" class="form-control"/> <br /> <br />
    </div>
    <div class ="input-group">
    <label> Password:</label> <input type="password" name="password"class="form-control" /> <br /> <br />
    </div>
    <div class ="input-group">
    <label> User Image: </label> <input type="file" name="user_image" value="Upload Image"class="form-control">
    </div> <br> <br>
    <input type="submit" value="Submit" name="submit" class="btn-primary">
    </form>
        </div>
  
</body>
</html>