<?php
require("assets/functions/functions.php");

session_start();
redirect ();
redirect_users();
?>


<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT 
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
                
            <!--logo start-->
            <a href="dashboard.php" class="logo"><span id="logo">HiiT</span></a>
            <!--logo end-->
           


<div class="nav notify-row" id="top_menu">
              
                    
                         
                        <!--  notification start -->
                <ul class="nav top-menu">
                    
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-bell"></i>
                            <span class="badge bg-theme"> <?php request_notification(); ?> </span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have <?php request_notification(); ?> new request(s)</p>
                            </li>
                           
                            <?php new_request_dropdown(); ?>
                            
                            
                            <li>
                                <a href="request.php" target="frame" class="text-center">See all Requests</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->

                

                </ul>
                <!--  notification end -->
          

            </div>



            <!--logout button-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                <form method="POST" action="master_page.php" class="up">
                  <input type="submit" class="btn btn-theme04" name="logout" value="Logout"/> <?php logout(); ?> 
                    </form>
                    
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      LEFT SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="master_page.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['first_name']; echo " "; echo $_SESSION['last_name']; ?></h5>
              	  	
                  <li class="mt">
                      <a  class="" href="dashboard.php" target="frame">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                    

                  <li class="sub-menu">
                      <a class="" href="request.php" target="frame">
                          <i class="fa fa-bell"></i>
                          <span>Requests</span>
                      </a>
                      
                  </li>

                  <li class="sub-menu">
                      <a class="" href="reports.php" target="frame">
                          <i class="fa fa-file"></i>
                          <span>Insights</span>
                      </a>
                      
                  </li>

                  <li class="sub-menu">
                      <a class="" href="users.php" target="frame">
                          <i class="fa fa-user"></i>
                          <span>Users</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a class="" href="cash.php" target="frame">
                          <i class="fa fa-usd"></i>
                          <span>Cash</span>
                      </a>
                      
                  </li>
                  
                  <li class="sub-menu">
                      <a class="" href="message.php" target="frame">
                          <i class="fa fa-comment"></i>
                          <span>Request log</span>
                      </a>
                      
                  </li>

                  <li class="sub-menu">
                      <a class="" href="export.php" target="frame">
                          <i class="fa fa-download"></i>
                          <span>Exports</span>
                      </a>
                      
                  </li>

              </ul>
              <!-- sidebar menu end-->


          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <!-- main content-->
                  <div class="col-lg-9 main-chart">
                  
                <!--iframe to display all pages per click-->
             <iframe class="embed-responsive-item" name="frame" width="100%" height="1350px" style="border:none;"></iframe>

                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>LATEST REQUESTS</h3>
                                        
                    <?php  show_requests();?>

                    <!-- see all requests -->  
                     <div class="desc text-center">
                                <a href="request.php" class="" target="frame">See All Requests</a>
                      </div>
                     

                       <!-- USERS ONLINE SECTION -->
						<h3>USERS</h3>
                     <?php show_users(); ?>
                      <!-- See all users -->
                      <div class="desc text-center">
                                <a href="users.php" class="" target="frame">See all users</a>
                      </div>
                   

                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->

                      
                  </div><!-- /col-lg-3 -->
              </div><!--/row -->
          </section>
      </section>
      <!--main content end-->

      
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
             © 2017 - Hiit plc
              <a href="master_page.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
    <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome!',
            // (string | mandatory) the text inside the notification
            text: 'Hover on me to enable the Close Button. You can hide the left sidebar by clicking on the button before the logo. Visit Site <a href="http://hiitplc.com" target="_blank" style="color:#82b5e0">HiiT.com</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>

	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
