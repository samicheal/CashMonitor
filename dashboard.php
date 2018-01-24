<?php
require("assets/functions/functions.php");
require("assets/functions/reporting_functions.php");
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
    <link href="assets/css/dashstyle.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<!--div for all page content-->
  <div class="container-fluid">

<!--div for the panels-->
<div class="container-fluid col-md-12">

<!-- icons and details panel starts -->
<div class="container">
      
      <!--icon 1-->
      	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_user"></span>
					  			<h3> <?php number_of_admin();  ?></h3>
                  			</div>
					  			<p> Number of Admins Registered</p>
                          </div>
         <!--icon 2-->                  
        <div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_user"></span>
					  			<h3><?php number_of_users();?></h3>
                  			</div>
					  			<p> Number of Users Registered</p>
                          </div>
         <!--icon 3-->                  
        <div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_banknote"></span>
					  			<h3><strike>N</strike><?php last_cash_approved(); ?></h3>
                  			</div>
					  			<p>Last Cash Approved</p>
                          </div>
        <!--icon 4-->
        <div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_banknote"></span>
					  			<h3><strike>N</strike><?php total_cash_approved(); ?></h3>
                  			</div>
					  			<p>Total Cash Approved</p>
                          </div>
         <!--icon 5-->                
        <div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_banknote"></span>
					  			<h3><strike>N</strike><?php show_cash_warning_limit();?></h3>
                  			</div>
					  			<p>Cash Warning Limit</p>
                          </div>
         <!--icon 6-->
         <div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_banknote"></span>
					  			<h3><strike>N</strike><?php  total_system_cash();  ?></h3>
                  			</div>
					  			<p>Total Cash Added To The System</p>
                          </div>
                          
     <!--icon panel ends-->                       
   </div>


<!--panel 2, Wallet starts-->
   <div class="container">

       
      <div class="white-panel pn"><!--panel-->

                      			<div class="white-header">
						  			<h5 class="black">CURRENT CASH</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><span id="cash"><strike>N</strike> <?php show_cash(); ?> </span></p>
									</div>
                                    <div class="col-sm-6 col-xs-6"></div>
	                      		</div>
	                      		<div class="centered">
                                      
                                        <img src="assets/img/product.png" width="120">
                                        <?php show_cash_limit_warning(); ?>
                                  </div>
                                  
                     </div><!--panel ends-->
                              
   </div><!--panel 2 ends-->

<!--panel for adding company position/ request cat-->
    <div class="container margin_top">
<!--panel div-->
<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>MANAGE</h5>
                      			</div>
                  

<!--form 2-->     
<form action="dashboard.php" method="POST" class="form-inline margin_top">
   <input type="text" name="comp_position" placeholder="Company Position" class="form-control" required />
    <input type="submit" name="position" value="Add" class="btn btn-theme " id="button"/>
   <?php add_company_position(); ?>
        </form>

              <!--form 3-->     
<form action="dashboard.php" method="POST" class="form-inline margin_top">
   <input type="text" name="limit" placeholder="Enter Cash Warning Limit" class="form-control" required />
    <input type="submit" name="warning" value="Add" class="btn btn-theme " id="button"/>
   <?php add_cash_limit(); ?>
        </form>                    
                      		</div><!--paneldiv end-->
                              
   </div><!--main panel end-->


</div><!--master container  end-->


                  



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
