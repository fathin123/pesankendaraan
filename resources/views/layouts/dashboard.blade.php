<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>HOME</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- 
    Stone Template
    http://www.templatemo.com/preview/templatemo_452_stone
    -->
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="css/normalize.min.css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="css/templatemo-style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body  class="loading">
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

  <!-- HEADER -->
  <div class="site-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">SIAWAN</a>
                    </div>
                    @extends('layouts.app')

@section('content')
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="promotion.html">Penjadwalan</a></li>
                            <li><a href="products.html">Logout (belom bisa)</a></li>
                        </ul>
                    </div>
                </nav>         
            </div>
        </div>
    </div> <!-- .site-header -->


<!-- Start Sidebar -->
     
<!-- <ul class="navbar-nav">
        

          <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
              <a class="dropdown-item" href="#">Dashboard</a>
              <a class="dropdown-item" href="#">Profile</a>
          </div> -->

        
      </ul>

  
  <!-- <div class="row" id="body-row">
      <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
          <ul class="list-group">
              <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-dashboard fa-fw mr-3"></span>
                      <span class="menu-collapsed">Dashboard</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
              </a>
              <div id='submenu1' class="collapse sidebar-submenu">
                  <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Charts</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Reports</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Tables</span>
                  </a>
              </div>
              <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-user fa-fw mr-3"></span>
                      <span class="menu-collapsed">Profile</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
              </a>
              <div id='submenu2' class="collapse sidebar-submenu">
                  <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Settings</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Password</span>
                  </a>
              </div>            
             
          </ul>
      </div> End Sidebar -->
  
  

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright &copy; 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>    
    
</body>
</html>