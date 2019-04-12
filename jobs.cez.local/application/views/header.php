<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 /*echo "<pre>".print_r($jobs,true)."</pre>";*/ ?>
<html>
<head>
    <title>Jobs.CEZ.Local</title>  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <style>
    body
    {
      margin:0;
      padding:0;
      background-color:coral;
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
  </style>
</head>
<body>
  <div class="container box">
    <nav class="navbar navbar-expand-lg navbar-light" style = "background-color: coral;">
    <img src = "https://upload.wikimedia.org/wikipedia/commons/7/76/%C4%8Cez_logo.PNG" height="30" width="30"></img>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('livetable/index')?>">Joburi curente<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Selectati Compania
        </a>
   <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">CEZ Vanzare</a>
          <a class="dropdown-item" href="#">CEZ Romania</a>
          <a class="dropdown-item" href="#">Distributie Oltenia</a>
          <a class="dropdown-item" href="#">CEZ Trade</a>
          <a class="dropdown-item" href="#">Tomis Team</a>
          <a class="dropdown-item" href="#">TMK</a>
        </div>
      </li>
    </ul>
  </div>    
        <ul class="nav navbar-nav navbar-right">
        <?php if($this->session->userdata('logged_in')) : ?>
        <li><a  class="nav-link" href="<?=base_url('livetable/create')?>">Adaugare Job</a></li>
        <?php endif;?>

        <?php if(!$this->session->userdata('logged_in')) : ?>
        <li><a  class="nav-link" href="<?=base_url('users/login')?>">Login</a></li>
        <?php endif;?>

        <?php if($this->session->userdata('logged_in')) : ?>
      	<li><a  class="nav-link" href="<?=base_url('users/logout')?>">Logout</a></li>
        <?php endif;?>
        
    	</ul>
</nav>