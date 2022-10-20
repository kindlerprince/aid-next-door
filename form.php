<?php
    if(isset($_SESSION['name']))
            header('location: index.php');
?>

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

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>
<body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1908008959525164',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
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
                            <a class="navbar-brand" href="#">
                                <em>AID NEXT DOOR</em>
                                <span class="logo-s"></span>
                            </a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <span class="nav-s"></span>
                            <li class="active"><a href="index.php">Home</a></li>
                            <!--<li><a href="#product-inner">Ethics</a></li>
                            <li><a href="#portfolio">Services</a></li>
                            <li><a href="#promotion">Promotion</a></li>
                            <li><a href="#contact">Reach Us</a></li>
                            <li><a href="form-1/index.php">Login</a></li>-->
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

    <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        
                    </div>
                    <h1 style="color:white;"><strong></strong></h1>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login</h3>
                                    <p>Enter your username and password to log on:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" id="loginform" action="index.php" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" id="email" name="email" placeholder="Email..." class="form-username form-control" id="form-username">

                 <span style="color:red; font-size:12px;" id="error-email"></span>
                   </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" id="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
  <span style="color:red; font-size:12px;" id="error-password"></span>
                   
                                    </div>
                                                   

                                    <button type="submit" class="btn">Sign in!</button>

                                    <div class="form-group">
                                        New user must sign up!
                                        
                                     <a href="signup.php"<button class="btn btn-warning" style="position:relative;top:6px;">Sign up</button></a>
                                           </div>     
                                    </form>
                                       <a href="" data-target="#loginModal" data-toggle="modal"><span style="color:blue;font-size:12px;">Forgot Password?</span></a>
                                    </div>
                                    <div class="modal" id="loginModal" tabindex="-1" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                          
                          <div class="modal-header">

                            <button class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Select any one way to reset password</h4>

                          </div>
                          <div class="modal-body">
                            
                            
                            <div class="form">
                                <form role="form" action="forgotten.php" id="loggedin"  method="post" class="login-form">
                                    <div >
                                         <input type="radio" value="viasms" name="resetpd" >Send code via sms<br>
  
                                    </div>
                                    <div >
                              
                                        <input type="radio" value="viaemail" name="resetpd" >Send code via email<br>
  
                   
                                    </div>

<button type="submit" class="btn btn-primary">Continue</button>
                   
                                </form>
                            </div>
                        </div>
                    </div>
                          </div>
                                    
                                        
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                            <h3></h3>
                            <div class="social-login-buttons">
                               <!-- <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                    <i class="fa fa-facebook"></i> Facebook
                                </a>
                               <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                                <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                    <i class="fa fa-twitter"></i> Twitter
                                </a>
                                <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                    <i class="fa fa-google-plus"></i> Google Plus
                                </a>-->
                            </div>
                        </div>
                    </div>
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
    <script src="forval.js"></script>
    
    <script src="emailvalidation.js"></script>


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
 <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
       
</body>

</html>