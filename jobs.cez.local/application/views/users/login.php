<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<html>
<head>
<title>Log In</title> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
    body
    {
      margin:0;
      padding:0;
      background-color: rgb(255,127,80);
    }
    .box
    {
      width:900px;
      padding:20px;
      background-color:#fff;
      border:1px solid #ccc;
      border-radius:5px;
      margin-top:10px;
    }
    .input
    {
     text-align:center;
    }

    .btn.btn-signin {
    background-color: rgb(125, 125, 125);
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}
    .btn
    {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
    }

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus
{
    background-color: rgb(255,127,80);
}

  </style>
    <html>
    <head>
    </head>
    <body>
    <body>
  <div class="container ">    
<?php echo form_open('users/login');?>
	<div class="row justify-content-center">
		<div class="col-md-4 col-md-offset-4 box">
			<h1 class="text-center"><?php echo $title;?></h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus"/>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus"/>
			</div>
			<button class="btn btn-lg btn-success btn-block btn-signin" type="submit" >Log In</button>
        </br>
        <?= $this->session->flashdata("login_failed");?>   
    </div>
	</div>
<?php echo form_close(); ?>
</div>
  </div>
</body>	
  </html>

