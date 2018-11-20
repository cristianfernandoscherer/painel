<?php 
    include_once('../../config.php');

    if(empty($_COOKIE["token"])){
      header("Location:".URL_LOGIN);
    }
?>
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" type="text/css" href="<?php echo URL_FRONTEND ?>css/bootstrap.css">
<link rel="stylesheet/less" type="text/css" href="<?php echo URL_FRONTEND ?>css/style.less">
<script src="<?php echo URL_FRONTEND ?>js/less.min.js" type="text/javascript"></script>
</head>

<body>
 <div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <span class="navbar-toggler-icon leftmenutrigger"></span>
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Side Menu Items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
        <div class="container-fluid">
      <div class="navbar-right">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_COOKIE["nome"]; ?>
          </button>
          <div class="dropdown-menu right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
      </div>
    </div>
  </div>
  <script type="text/javascript" src="<?php echo URL_FRONTEND ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo URL_FRONTEND ?>js/bootstrap.js"></script>
  <script src="<?php echo URL_FRONTEND ?>js/geral.js"></script>