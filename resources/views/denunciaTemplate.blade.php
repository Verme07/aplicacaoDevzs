<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Home</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT-AWESOME CORE STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CORE CUSTOM STYLE  -->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- THEME COLOUR STYLE (BY DEFAULT GREEN COLOR,  YOU CAN REPLACE green.css to red.css , orange.css, blue.css ,grey-bk.css or black-bk.css)  -->
    <link id="mainCSS" href="assets/css/themes/green.css" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Signika&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
     <!-- STYLE SWITCHER STYLE -->
    <link href="assets/css/style-switcher.css" rel="stylesheet" />
</head>
<body>
  
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home-sec">Atendimento Hospitalar</a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                     <li><a href="/">Sobre o Programa</a></li>
                     <li><a href="/">Contribuir</a></li>                      
                    <li><a href="/denuncia">Denunciar</a></li>
                </ul>
            </div>
           
        </div>
    </div>

    <div id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s"><strong>Denuncie </strong></h1>
                    <p data-scroll-reveal="enter from the bottom after 0.2s">
                       
                    Denuncie práticas de maus tratos em unidade sanitárias.
    
                    </p>
                    <form data-scroll-reveal="enter from the bottom after 0.3s">
                     @yield('footer')
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- /CONTACT SECTIO END  -->
    <div id="footer">
        <div class="text-center">
              2016-MozDevzs
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
    </div>
    <!-- /FOOTER SECTION END  -->
    <div class="move-me toup-div">
        <a href="#home-sec">
            <i class="fa fa-arrow-up "></i>
        </a>

    </div>
    <!-- /SCROLL TO UP SECTION END  -->
    <!-- JQUERY SCRIPTS FUCTIONS  -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS FUCTIONS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- SROLLING SCRIPTS   -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- STYLE SWITCHER SCRIPTS   -->
    <script src="assets/js/style-switcher.js"></script>
     <!-- ON SCROLL SCRIPTS   -->
    <script src="assets/js/scrollReveal.js"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
