<html>
<head>
    <title>Questionario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Atendimento Hospitalar</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
</head>
<body>
    <header>
        <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="/" class="logo"><b>Atendimento Hospitalar</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme"></span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green"></p>
                            </li>
                          
                         

                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme"></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green"></p>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->

                </ul>


            </div>

            
      
          
            <div class="top-menu">

                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
                </ul>
            </div>
        </header>

      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/images.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Grupo1</h5>
                    
    

                  <li class="sub-menu">

                      <a href="/admin">
                          <i class="fa fa-desktop"></i>
                          <span>Tabelas</span>
                      </a>

                      
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Definicoes</span>
                      </a>
                    
                  </li>
                 
                  <li class="sub-menu">
                      <a href="/">
                          <i class="fa fa-tasks"></i>
                          <span>Formularios</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a href="/admin/mensagens" >
                          <i class="fa fa-envelope-o"></i>
                          <span>Mensagens</span>
                      </a>
                      
                  </li>
                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
    
    </header>
    <div class ="container">
        <div class= 'content'>
        
        <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Questionario</h3>
            <div class="row mt">
                <div class="col-lg-12">
                <p>@yield('content')</p>
                </div>
            </div>
            
        </section>
      </section>
        </div>
    </div>
    <footer class="site-footer">
      <div class="text-center">
              2016-MozDevzs
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
    </footer>

</body>
</html>