<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<title>Hello, world!</title>

    <style>
		.container {
			top: 40px;
			position: relative;
		}

		.topright {
			position: absolute;
			right: 50px;
			font-size: 18px;
		}

    	.footer {
		  	width: 100%;
		    height: 80px;
		    padding-left: 10px;
		    line-height: 50px;
		    background-color: #DD571C;
		    color: #fff;
		    position: absolute;
		    bottom: 0px;
			text-align: center;
		}

		.navbar{
			font-family:Agency FB;
			font-size: 15pt;
			font-weight: bold;
     	}

	  	ul.topnav {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #DD571C;
			font-family:Agency FB;
			font-size: 15pt;
			font-weight: bold;
		}

		ul.topnav li {float: left;}

		.logo {
			float: left;
			padding: 10px;
			width:5%;
		}

		ul.topnav li a {
			display: block;
			color: white;
			/* text-align: center; */
			padding: 19px 18px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #111;}

		ul.topnav li a.active {background-color: white;
			color: black;}

		ul.topnav li.right {
			float: right;
			/* color: black; */
		}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}

		li a, .dropbtn {
			display: inline-block;
			color: red;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li.dropdown {
			display: inline-block;
			position: relative;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		}

		.dropdown-content a:hover {background-color: #f1f1f1;}

		.dropdown:hover .dropdown-content {
			display: block;
		}

		.button {
			background-color: #DD571C;
			border: none;
			color: white;
			padding: 5px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}

		.button1 {border-radius: 40%;}

		input[type=search] {
			width: 50%;
			padding: 2px 10px;
			margin: 8px 0;
			box-sizing: border-box;
		}
    </style>
  </head>
  <body>
  <ul class="topnav">
  <img src="<?=base_url('img/logo.png')?>" class="logo my-2 my-sm-0 mb-2 mr-2" alt="...">
	<li><a class="active" href="#home">Penjadwalan</a></li>
	<li><a href="#news">Kelola Kegiatan</a></li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Bend</a>
		<div class="dropdown-content">
			<a href="#">Link 1</a>
			<a href="#">Link 2</a>
			<a href="#">Link 3</a>
		</div>
	</li>
	<li class="right"><a href="#about" class="">Setting <i class="fas fa-cog"></i></a></li>
  </ul>

<!-- <div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div> -->

  <!-- ///////////////////////////////////////// -->
  <!-- <ul class="nav nav-tabs" style="background-color: #DD571C; ">
  <img src="<?=base_url('img/logo.png')?>" class="" alt="..." style="width:4%">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul> -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #DD571C">
	<img src="<?=base_url('img/logo.png')?>" class="" alt="..." style="width:4%">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Input Penjadwalan</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Kelola Kegiatan</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Bend.26.a
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav> -->
    