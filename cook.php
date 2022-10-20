<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>AID NEXT DOOR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="css/normalize.min.css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="css/style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
     
                              </script>
<script>
$(document).ready(function(){
    $("#myaccount").click(function(){
        $("#login-form").toggle(1000);
    });
});
</script>


</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <header class="site-header" id="top" >
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="logo-wrapper">
                            <a class="navbar-brand" href="index.php">
                                <em>AND</em>
                                <span class="logo-s"></span>
                            </a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <span class="nav-s"></span>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a><span id="myaccount">My Account<span></a><ul id="login-form" class="nav navbar-nav navbar-right" >
                            <span class="nav-s"></span><li>
<?php session_start();
    if(isset($_SESSION['name'])){
	echo '<li><a>'.$_SESSION['name'].'</a></li>';
         echo '  <a href="logout.php"class=" glyphicon glyphicon-off" style="position:relative;top:1px;right:15px;color:red"></a>';
        
       }
     else 
	echo '<li><a href="form.php">LOGIN</a></li>';
 ?>

                        </ul>
                          </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
	<div style="text-align:center;background-color: #f55858;">
<style>
.reponsive-ad { width: 1px; height: 1px;color:#f65859; }
@media(min-width: 1px;color:#f65859;) { .reponsive-ad { width: 1px; height: 1px;color:#f65859; } }
@media(min-width: 1px;color:#f65859;) { .reponsive-ad { width: 1px; height: 1px;color:#f65859; } }
</style>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Reponsive Ad -->
<ins class="adsbygoogle reponsive-ad"
     style="display:inline-block"
     data-ad-client="ca-pub-1845532317325027"
     data-ad-slot="3780060900"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

   
    
        <div class="container">
           

                     <div class="row">
                
            <div class="col-lg-12 " >
             <strong  style="text-align:center;font-size:30px;color:black; margin-top: -60px;">COOK(coming soon)</strong>
            </div>
                <div class="col-lg-3 col-md-4 col-sm-6 c">
                  <a href="2.php" class="thumbnail">
                  <p>COOK 1</p>
                  <img src="photos/c1.jpg"style="height:200px;width:260px;" >
                  </a>
                   <form action="2.php" method="post">
                
              <input type="hidden" name="username" value="cook1">
              <button class = "btn btn-primary" type="submit" style="margin-bottom:18px;">DETAILS</button>
                 </form>
                  </div>
                 <div class="col-lg-3 col-md-4 col-sm-6 c">
                    <a href="2.php" class="thumbnail">
                    <p>COOK 2</p>
                    <img src="photos/c2.jpg" style="height:200px;width:260px;">
                  </a>
                   <form action="2.php" method="post">
                
              <input type="hidden" name="username" value="cook2">
              <button class = "btn btn-primary" type="submit" style="margin-bottom:18px;">DETAILS</button>
                 </form>
                  </div>
                  </div>
        </div>
        <footer>
         <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>Copyright © 2017 AID Next Door, Inc.</p>
                </div>
                
            </div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


    <!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/jquery.gmap3.min.js"></script>

    <!-- Google Map Init-->
    <script type="text/javascript">
        jQuery(function($){
            $('#map_canvas').gmap3({
                marker:{
                    address: '22.804995,86.2348056'
                },
                    map:{
                    options:{
                    zoom: 15,
                    scrollwheel: false,
                    streetViewControl : true
                    }
                }
            });
        });
    </script>

</body>
</html>