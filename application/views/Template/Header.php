<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
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
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 5px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
    </style>
  </head>
  <body>
  <ul class="topnav">
	<li><a class="active" href="#home">Home</a></li>
	<li><a href="#news">News</a></li>
	<li><a href="#contact">Contact</a></li>
	<li class="right"><a href="#about">About</a></li>
</ul>

  <!-- ///////////////////////////////////////// -->
  <ul class="nav nav-tabs" style="background-color: #DD571C; ">
  <img src="<?=base_url('img/logo.png')?>" class="" alt="..." style="width:4%">
	  <!-- <a class="navbar-brand" href="#"><img src="<?=base_url('img/logo.png')?>" class="" alt="..." style="width:20%"></a> -->
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
</ul>
<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #DD571C">
	<img src="<?=base_url('img/logo.png')?>" class="" alt="..." style="width:4%">
	  <!-- <a class="navbar-brand" href="#"><img src="<?=base_url('img/logo.png')?>" class="" alt="..." style="width:20%"></a> -->
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
	</nav>

	<h1>Hello, world!</h1>
    