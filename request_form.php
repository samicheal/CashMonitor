<?php
require("assets/functions/functions.php");

session_start();
redirect ();


?>

<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Request Form</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  
	  	<div class="container" id="login-page">
	  	
		      <form class="form-login" method="post" action="request_form.php">
		        <h2 class="form-login-heading">REQUEST FORM</h2>
		       

            <input type="text" placeholder="Amount" name="amount" class="form-control size" required>

        <p class="margin_left">Request details </p>
            <textarea class="form-control size" name="remark" rows="3"></textarea>

            <p class="margin_left">Select Unit (Optional)</p>
          <select class="form-control size" name="unit">
           
           <option></option>

           <?php
//while
$i=0;
while($i<20){
    $i= $i+1;
    echo "<option value='$i'>$i</option>";
}
?>

			</select>  

        <p class="margin_left">Select Category</p>
          <select class="form-control size" name="req_cat">
            <option></option>
         <?php select_request_cat(); ?>
			</select>  

  <input type="submit" name="request" value="Send" class="form-control btn btn-theme margin_bottom" id="login_button">

<?php request(); ?>


        <!--End of form-->
</form>
		     
	  	
	  	</div>
	  

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>



  </body>
</html>
