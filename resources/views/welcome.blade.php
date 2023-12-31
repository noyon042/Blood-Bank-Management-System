<!-- 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Blood Bank Mangement System</title>
    <link rel="stylesheet" type="text/css" href="https://foxythemes.net/preview/products/beagle/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="https://foxythemes.net/preview/products/beagle/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://foxythemes.net/preview/products/beagle/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="https://foxythemes.net/preview/products/beagle/assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://foxythemes.net/preview/products/beagle/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="https://foxythemes.net/preview/products/beagle/assets/css/app.css" type="text/css"/>
    <style>

    </style>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar ">
      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header"><a style="margin: 0 30px; font-size: xx-large; " href="index.html">BBMS</a>
          </div>
          <div class="page-title"><span style="text-align: center;
    color: blue;">Blood Bank Management System</span></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="https://i.ibb.co/Y0jGJFC/me.jpg" alt="Avatar"><span class="user-name">Noyon Mahmud</span></a>
                <div class="dropdown-menu" role="menu">     
                  <div class="user-info">
                    <div class="user-name">Noyon Mahmud</div>
                    <div>Admin</div>
                  </div><a class="dropdown-item" href="pages-profile.html"><span></span>Logout</a>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right be-icons-nav">

              
             
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper">
          <a class="left-sidebar-toggle" href="#">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active"><a href="index.html"><i ></i><span>Dashboard</span></a>
                  </li>
                  <li class="parent"><a href="#"><span>Donor List</span></a>
                    <ul class="sub-menu">
                    
                      <li><a href="ui-notifications.html">Notifications</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="parent"><a href="charts.html"><span>Blood Group</span></a>
                    <ul class="sub-menu">
                      <li><a href="charts-flot.html">Flot</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><span>Manage Pages</span></a>
                    <ul class="sub-menu">
                      <li><a href="form-elements.html">Elements</a>
                      </li>
                      <li><a href="form-validation.html">Validation</a>
                      </li>
                      <li><a href="form-multiselect.html">Multiselect</a>
                      </li>
                      <li><a href="form-wizard.html">Wizard</a>
                      </li>
                      <li><a href="form-masks.html">Input Masks</a>
                      </li>
                      <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                      </li>
                      <li><a href="form-upload.html">Multi Upload</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><span>Recepient</span></a>
                    <ul class="sub-menu">
                      <li><a href="tables-general.html">General</a>
                      </li>
                      <li><a href="tables-datatables.html">Data Tables</a>
                      </li>
                      <li><a href="tables-filters.html"><span class="badge badge-primary float-right">New</span>Table Filters</a>
                      </li>
                    </ul>
                  </li>
                 
             
                
                
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark1"></div>
                          <div class="data-info">
                            <div class="desc">Blood Group</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark2"></div>
                          <div class="data-info">
                            <div class="desc">Donor Info</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span class="number" data-toggle="counter" data-end="80" data-suffix="%">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark3"></div>
                          <div class="data-info">
                            <div class="desc">Recepient</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span class="number" data-toggle="counter" data-end="532">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                          <div class="chart sparkline" id="spark4"></div>
                          <div class="data-info">
                            <div class="desc">Report</div>
                            <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span class="number" data-toggle="counter" data-end="113">0</span>
                            </div>
                          </div>
                        </div>
            </div>
          </div>
          @yield('content')
          
          
          
        </div>
      </div>
     
    </div>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/js/app.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="https://foxythemes.net/preview/products/beagle/assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
  </body>
</html> -->