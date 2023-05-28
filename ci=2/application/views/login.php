
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" /> -->
    <title>Document</title>
</head>
<style>
 /* body {
  background-color:powderblue;
    font-size: 20px;
 }
 .container
 {
  height: 100px auto;
    width: 40%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 2px solid #bbbbbb; 
    border-radius: 5px;
	background-color:lightyellow;
	box-shadow: 0px 0px 10px rgba(0,0,0, 0.2);
 } */
 body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url(assets/image/nature.jpg);

  /* Control the height of the image */
  height: 745px;
/* width: 00px; */
  /* Center and scale the image nicely */
  background-position: center;
  /* background-repeat: no-repeat; */
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 300px;
  margin: 200px ;
  max-width: 500px;
  padding: 20px;
  background-color: lightgrey;
  /* filter: blur(8px);
  -webkit-filter: blur(8px); */
  box-shadow: 0px 0px 10px rgba(0,0,0, 0.2);
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<body>
<?php if ($this->session->flashdata('username')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('username') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('') ?> </div>
    <?php } ?>
    <?php if ($this->session->flashdata('pass')) { ?>
        <div class="alert alert-danger"> <?= $this->session->flashdata('pass') ?> </div>
    <?php } ?>
    <div class="bg-img">
<form method='POST' action='<?php echo base_url('Welcome/signin/'); ?>'>
  <div class='container'>
    <h1 align="center">login form </h1>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name='username' value='' id="username">
  </div>
  <?php echo form_error('username');?>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name='password' value='' id="exampleInputPassword1">
  </div>
  <?php echo form_error('password');?>
  <button type="submit" class="btn btn-primary">Signin</button>
  <a class="btn btn-primary" href="<?php echo base_url('Welcome/login_form/');?>" class="link-light">Signup </a>
  <!-- <a href="<?php echo base_url('Welcome/fedit');?>">Forgot password</a> -->
</div>
<?php //echo validation_errors();?>
</form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>