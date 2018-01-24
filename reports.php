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

    <title>Reports</title>

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

  <div class="container-fluid col-md-12">

<!--panel start-->
<div class="product-panel-2 pn">
								<div class="badge badge-hot">REPORTING</div>
								<img src="assets/img/product.jpg" width="200" alt="">
                                


                                <!--summary-->
                                <div class="weather-2 pn margin_top">
								<div class="weather-2-header">
									<div class="row">
										<div class="col-sm-6 col-xs-6 text-left">
											<p>Report summary</p>
										</div>
										<div class="col-sm-6 col-xs-6 goright">
											
										</div>
									</div>
								</div><!-- /summary header -->
								<div class="container text-left">

                                   <table class="table table-bordered table-striped  table-hover ">
                                   <thead>
                                <tr>
                                <td>TITLE</td>
                                <td>VALUE</td>
                                </tr>
                                </thead>

                                   <tbody>
                                <tr>
                                <td>The total amount added to this system is: </td>
                                <td><strike>N</strike><?php total_system_cash(); ?> </td>
                                </tr>

                                <tr>
                                <td>The last amount added to this system is: </td>
                                <td><strike>N</strike><?php last_cash_added_to_system(); ?> </td>
                                </tr>

                                <tr>
                                <td>The last amount approved by the Admin is: </td>
                                <td><strike>N</strike><?php last_cash_approved(); ?> </td>
                                </tr>

                                <tr>
                                <td>The total amount approved by the Admin is: </td>
                                <td><strike>N</strike><?php total_cash_approved(); ?> </td>
                                </tr>

                                <tr>
                                <td>The total amount declined by the Admin is: </td>
                                <td><strike>N</strike><?php total_cash_declined(); ?> </td>
                                </tr>

                                <tr>
                                <td>The number of registered Admin(s) in this system is: </td>
                                <td><?php number_of_admin(); ?> </td>
                                </tr>

                                <tr>
                                <td>The number of registered User(s) in this system is: </td>
                                <td><?php number_of_users(); ?> </td>
                                </tr>

                                <tr>
                                <td>The total number of registered Persons in this system is: </td>
                                <td><?php num_all_registered(); ?> </td>
                                </tr>

                                <tr>
                                <td>The total number of requests in this system is: </td>
                                <td><?php num_all_requests(); ?> </td>
                                </tr>

                                 <tr>
                                <td>The highest amount accepted by the Admin is: </td>
                                <td><strike>N</strike><?php max_cash_approved(); ?> </td>
                                </tr>






                                
                                   </tbody>
                                   </table>

                                    </div>
								
							</div><!--summary close-->




<!--
                                <div class="container margin_top"> <!the chart starts				
					<div class="row mt">
                      <!CUSTOM CHART START 
                      <div class="border-head">
                          <h3>INSIGHT</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
           </div>
           </div>
           </div>

</div>the chart ends here -->  


							</div><!--panel-->


  </div><!--container-->


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

