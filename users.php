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

    <title>Users</title>

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

  
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT 
      *********************************************************************************************************************************************************** -->
      <div class="container-fluid">
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      
                  
                  <!--add user form -->

                  <div class="darkblue-panel pn">

                      <!--panel start-->
<div class="product-panel-2 pn">
								<div class="badge badge-hot">ADD A USER</div>
								<i class="fa fa-user fa-5x"></i>
                                


                                <!--summary-->
                                <div class="weather-2 pn margin_top">
								<div class="weather-2-header">
									
                                </div><!-- /summary header -->
                                </div>
                                </div>
                                  
                                
                                <form method="POST" action="users.php">
                         
                    <input type="text" name="firstname" class="form-control size" placeholder="First Name" required/>
                    <input type="text" name="lastname" class="form-control size" placeholder="Last Name" required/>
                    <input type="email" name="email" class="form-control size" placeholder="Email" required/>
                    <input type="password" name="pass1" class="form-control size" placeholder="Password" required/>
                    <input type="password" name="pass2" class="form-control size" placeholder="Confirm Password" />

 <select class="form-control size" name="status" >
 <option>Select Role</option>
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                        </select>

                    <select class="form-control size" name="position" >
                    <option>Select Position</option>
                          <?php select_position(); ?>
                        </select>


                    <select class="form-control size" name="question" >
                    <option>Select Security Question</option>
                          <?php select_question(); ?>
                        </select>

                    <input type="text" name="ans" class="form-control size" placeholder="Answer" required/>

                                        
			<input type="submit" name="register" class="form-control btn btn-theme size  centered" value="Register"/>
					<?php add_user(); ?>
                      </form>

                              </div>
                           

<!--  -->			
              <div class="row mt">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Manage Users</h5></div>
	                        <br>
	                 	</div>
                         
                          <?php
                          delete_user();
                           modify_users(); 
                          
                           ?>
                              </div>

                           
                          </div>
                      </section>
                  </div><!-- /col-md-12-->
              </div><!-- /row -->





                  
                  </div><!--final div-->
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
          

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
