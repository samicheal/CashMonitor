<?php

//invoke db
require("assets/db/database.php");



/*
//function to add categories to db
function add_request_cat(){

global $link;
$cat_error="";

if(isset($_POST['reuest_category'])){

if(empty($_POST['category'])){

 $cat_error= "Please Insert a Category";

echo "<div class='alert alert-warning alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   $cat_error
						</div>";

}else{

$category= mysqli_real_escape_string($link, trim($_POST['category']));

$save= "insert into request_category (category) values ('$category')";

$query=mysqli_query($link,$save);

if($query){

echo "<div class='alert alert-success alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Category Added Successfully!
						</div>";

$category="";
//mysqli_free_result($save);

}else{

echo "<div class='alert alert-danger alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
    //end of query if
}

    //end of empty if
}

    //end of isset if
}

//close connection
//mysqli_close($link);
    //function end
} 

*/







/*


//function to add company positions to db
function add_company_position(){

global $link;
$cat_error="";

if(isset($_POST['position'])){

if(empty($_POST['comp_position'])){

 $cat_error= "Please Insert a Position";

echo "<div class='alert alert-warning alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   $cat_error
						</div>";

}else{

$position= mysqli_real_escape_string($link, trim($_POST['comp_position']));

$save= "insert into company_position (position) values ('$position')";

$query=mysqli_query($link,$save);

if($query){

echo "<div class='alert alert-success alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Position Added Successfully!
						</div>";
$position="";
//mysqli_free_result($save);

}else{

echo "<div class='alert alert-danger alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
    //end of query if
}

    //end of empty if
}

    //end of isset if
}

//close connection
//mysqli_close($link);
    //function end
} 

*/


//function to select request categories 
function select_request_cat(){

global $link;

$display = "select * from request_category";

$query = mysqli_query($link, $display);

if($query){
while($row=mysqli_fetch_array($query)){

$category=$row['category'];

echo "<option value='$category'>$category</option>";

    //end of while
}

//end if covering while
}else{
  echo "<div class='alert alert-danger alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";  
}
//end of function
}




















//function to select security question 
function select_question(){

global $link;

$display = "SELECT question FROM security_question";

$query = mysqli_query($link, $display);

if($query){
while($row=mysqli_fetch_array($query)){

$question=$row['question'];

echo "<option value='$question'>$question</option>";

    //end of while
}

//end if covering while
}else{
  echo "<div class='alert alert-danger alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";  
}
//end of function
}






















//function to select request categories 
function select_position(){

global $link;

$display = "select * from company_position";

$query = mysqli_query($link, $display);

if($query){
while($row=mysqli_fetch_array($query)){

$position=$row['position'];

echo "<option value='$position'>$position</option>";

    //end of while
}

//end if covering while
}else{
  echo "<div class='alert alert-danger alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";  
}
//end of function
}






















function add_user(){

if(isset($_POST['register'])){

global $link;

//regular expressions
$expname="/[a-zA-Z]+$/";
$exppass="/^[\w]+$/";

//initialise array
$error=array();
$failed=array();


//initialise password variables
$pass1="";
$pass2="";

$position="";
//firstname
if(preg_match($expname,$_POST['firstname'])){

    $firstname=mysqli_real_escape_string($link, trim($_POST['firstname']));
}else{
    $error[0]="Invalid First name";
}

//lastname
if(preg_match($expname,$_POST['lastname'])){

    $lastname=mysqli_real_escape_string($link, trim($_POST['lastname']));

}else{
    $error[1]="Invalid Last name";
}

//email
if(!empty($_POST['email'])){

   $email=mysqli_real_escape_string($link, trim($_POST['email']));
}else{
    $error[4]="Please Insert email";
}

// password check
if(preg_match($exppass,$_POST['pass1']) && (preg_match($exppass,$_POST['pass2'])) && $_POST['pass1']==$_POST['pass2']){

    $pass1=mysqli_real_escape_string($link, trim($_POST['pass1']));
    $pass2=mysqli_real_escape_string($link, trim($_POST['pass2']));
    
}else{
    $error[2]="Invalid Password";
    $error[3]="Passwords Don't Match";
}

$status=mysqli_real_escape_string($link, trim($_POST['status']));
$position=mysqli_real_escape_string($link, trim($_POST['position']));


$question=mysqli_real_escape_string($link, trim($_POST['question']));

$ans=mysqli_real_escape_string($link, trim($_POST['ans']));

if (!empty($error)){
   
    echo "<div class='alert alert-warning alert-dismissable alert_margin '>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Registration Failed! Please Verify Data
						</div>";
}else{

    //validation done....Proceed

$send="insert into users (first_name,last_name,email,password,status,position,question,answer)
 values ('$firstname','$lastname','$email','$pass1','$status','$position','$question','$ans')";

$query=mysqli_query($link,$send);

if($query){

echo "<div class='alert alert-success alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   User Added Successfully!
						</div>";
}else{

  echo "<div class='alert alert-danger alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";    
}

    
}

    //end of isset if
}
//end of function
}











function request(){

if(isset($_POST['request'])){

global $link;

//regular expressions
$expname="/[a-zA-Z]+$/";

//initialise array
$error=array();
$failed=array();




//amount
if(!empty($_POST['amount']) && is_numeric($_POST['amount'])){

   $amount=mysqli_real_escape_string($link, trim($_POST['amount']));
}else{
    $error[4]="Please Insert amount";
}


//request details
if(!empty($_POST['remark'])){

   $remark=mysqli_real_escape_string($link, trim($_POST['remark']));
}else{
    $error[6]="Please Enter request details";
}

if(!empty($_POST['req_cat'])){
$req_cat=mysqli_real_escape_string($link, trim($_POST['req_cat']));
}else{
	 $error[5]="Please Select Category";
}

$unit=mysqli_real_escape_string($link, trim($_POST['unit']));

$status="";
$status="pending";

if (!empty($error)){
   
    echo "<div class='alert alert-warning text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Request Failed, Please Verify Data!
						</div>";

}else{

    //validation done....Proceed
$userfirst=$_SESSION['first_name'];
$userlast=$_SESSION['last_name'];

$send="insert into request (first_name,last_name,amount,request_details,unit,category,request_time,status) values
 ('$userfirst','$userlast','$amount','$remark','$unit','$req_cat', now(),'$status')";

$query=mysqli_query($link,$send);

if($query){

echo "<div class='alert alert-success text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Request Sent!
						</div>";
}else{

  echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";    
}

    
}

    //end of isset if
}
//end of function
}




function show_users(){

global $link;

$show="SELECT first_name,last_name,position FROM users ORDER BY user_id DESC LIMIT 3";

$query=mysqli_query($link,$show);

if ($query){

while($row=mysqli_fetch_array($query)){

$first_name=$row['first_name'];
$last_name=$row['last_name'];
$position=$row['position'];

echo "<div class='desc'>
                      	<div class='thumb'>
                      		<img class='img-circle' src='assets/img/ui-sam.jpg' width='35px' height='35px' align=''>
                      	</div>
                      	<div class='details'>
                      		<p><a >$first_name.$last_name</a><br/>
                      		   <muted>$position</muted>
                      		</p>
                      	</div>
                      </div>";

	//while end
}

}else{

 echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>"; 

	//if end
}





	//end of function
}






function show_requests(){

global $link;

$show="SELECT first_name,request_details,DATE_FORMAT(request_time, '%d / %m / %y') AS dd FROM request ORDER BY req_id DESC LIMIT 3";

$query=mysqli_query($link,$show);

if ($query){

while($row=mysqli_fetch_array($query)){

$name=$row['first_name'];
$req=$row['request_details'];
$time=$row['dd'];

echo " <div class='desc'>
                      	<div class='thumb'>
                      		<span class='badge bg-theme'><i class='fa fa-clock-o'></i></span>
                      	</div>
                      	<div class='details'>
                      		<p><muted>$time</muted><br/>
                      		   <a >$name</a> $req<br/>
                      		</p>
                      	</div>
                      </div>";

	//while end
}

}else{

 echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>"; 

	//if end
}





	//end of function
}




//function to login

function login(){


if($_SERVER['REQUEST_METHOD'] == 'POST'){
//invoke db
require("assets/db/database.php");

$mail=mysqli_real_escape_string($link, trim($_POST['mail']));
$password="";
if(!empty($password)){

	echo "<div class='alert alert-warning text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Password Can't Be Empty
						</div>";
}else{
$password=mysqli_real_escape_string($link, trim($_POST['password']));
}

//query
$detail = "SELECT * FROM users where email='$mail' and password='$password'";

//run query
$r=mysqli_query($link,$detail);

if(mysqli_num_rows($r)==1){

	$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
	$_SESSION['id']=$row['user_id'];
	$_SESSION['first_name']=$row['first_name'];
	$_SESSION['last_name']=$row['last_name'];
	$_SESSION['email']=$row['email'];
	$_SESSION['password']=$row['password'];
	$_SESSION['status']=$row['status'];
	$_SESSION['position']=$row['position'];

	header('location:master_page.php');



//if end
}else{
	echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Login Failed! Verify Input
						</div>";
}
//post end
}


	//function end
}







function logout(){

if(isset($_POST['logout'])){
	
	
	session_destroy();
	//echo "<script>window.open('index.php','_self')</script>";
echo "<script> location.reload();</script>";

	
}
	//function end
}













function redirect (){

// check login
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
	//func end
}






function redirect_users(){

if($_SESSION['status'] == "user"){

   header('location:others.php');
   exit();

}else{
   echo "";

}

	//func end
}









//function to add cash

function cash_upload(){

if(isset($_POST['cashbtn'])){

global $link;

if(!is_numeric($_POST['amount']) or empty($_POST['amount'])){

	echo "<div class='alert alert-warning text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Enter a Valid Amount
						</div>";
}else{

$total_amount=0;
$new_amount=mysqli_real_escape_string($link, trim($_POST['amount']));

//select last total amount from cash
$bring="SELECT total_amount FROM cash ORDER BY cash_id DESC LIMIT 1";

$q=mysqli_query($link, $bring);

while($row=mysqli_fetch_array($q)){

//extract last total amount
$total_amount=$row['total_amount'];

//while
}

//add last total and new amount
$sum=$total_amount + $new_amount;

//echo " $sum";
//echo " $total_amount";

//insert the addition and new amount into cash table
$add="INSERT INTO cash (last_added,total_amount,date_added) VALUES ('$new_amount','$sum',now())";

$qqq=mysqli_query($link, $add);

echo "<div class='alert alert-success text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Cash Updated
						</div>";
//else close
}


//if
} 
	//function end
}











//function to show cash-budget

function show_cash(){

global $link;

$money="SELECT total_amount FROM cash ORDER BY cash_id DESC LIMIT 1";

$run=mysqli_query($link,$money);


if($run){

$row=mysqli_fetch_array($run);

$cash=$row['total_amount'];

echo number_format($cash);
}else{

	echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
}


	//end func
}







//function to view pending requests for action


function pending_request(){
$a = "approved";
$b = "declined";
global $link;
$pending="";
$pending="pending";

$retrieve="SELECT * FROM request WHERE status='$pending' ORDER BY req_id DESC";

$query=mysqli_query($link,$retrieve);

if ($query){
	
echo	"<table class='table table-bordered table-striped table-condensed'>
                              <thead>
                              <tr>
							  <th>S/N</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th >Amount</th>
                                  <th >Request Details</th>
								  <th >Units</th>
                                  <th >Request Category</th>
                                  <th >Time</th>
                                  <th >Status</th>
                                  <th >Accept</th>
                                  <th >Reject</th>
                              </tr>
                              </thead>";

	while($row=mysqli_fetch_array($query)){

			$id=$row['req_id'];
		$firstname=$row['first_name'];
		$lastname=$row['last_name'];
		$amount=$row['amount'];
		$details=$row['request_details'];
		$unit=$row['unit'];
		$category=$row['category'];
		$time=$row['request_time'];
		$status=$row['status'];

static $var=1;
$counter=$var++;

echo "<tbody>

<tr>
<td>$counter</td>
<td>$firstname</td>
<td>$lastname</td>
<td>$amount</td>
<td> $details</td>
<td>$unit</td>
<td>$category</td>
<td>$time</td>
<td> <span class='badge bg-info'>$pending</span></td>
<td><a href='request.php?id=$id&action=approved' class='btn btn-success'>Approve</a></td>
<td><a href='request.php?id=$id&action=declined' class='btn btn-danger'>Decline</a></td>
</tr>

</tbody>";
		//while end
	}

echo "</table>";
	
}else{
		echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
}//if end

	//func end
}










//function to view all requests


function users_confirm(){

global $link;

$userfirst=$_SESSION['first_name'];

$retrieve="SELECT * FROM request WHERE first_name='$userfirst' AND status!='pending' AND status!='closed' ORDER BY req_id DESC";

$query=mysqli_query($link,$retrieve);

if ($query){
	

echo	"<table class='table table-bordered table-striped table-condensed'>
                              <thead>
                              <tr>
                                  <th >Amount</th>
                                  <th >Request Details</th>
                                  <th >Request Category</th>
                                  <th >Time</th>
                                  <th >Status</th>
								  <th >Action</th>
                              </tr>
                              </thead>";

	while($row=mysqli_fetch_array($query)){

		$id=$row['req_id'];
		$amount=$row['amount'];
		$details=$row['request_details'];
		$category=$row['category'];
		$time=$row['request_time'];
		$status=$row['status'];
		$who=$row['admin_name'];


echo "<tbody>
   <tr>
<td>$amount</td>
<td> $details</td>
<td>$category</td>
<td>$time</td>
<td>$status  <span class='badge'>$who</span></td>
<td><a href='all_request.php?id=$id&action=close' class='btn btn-primary'>Close Transaction</a></td>
</tr>
	 </tbody>";
		//while end
	}
echo "</table>";
	
}else{
		echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
}//if end

	//func end
}


















function admin_all_requests(){

global $link;

$userfirst=$_SESSION['first_name'];

$retrieve="SELECT first_name,last_name,amount,request_details,unit,category,request_time,action,status FROM request ORDER BY req_id DESC";

$query=mysqli_query($link,$retrieve);

if ($query){
	

echo	"<table class='table table-bordered table-striped table-condensed'>
                              <thead>
                              <tr>
							  <th>S/N</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th >Amount</th>
                                  <th >Request Details</th>
								  <th >Units</th>
                                  <th >Request Category</th>
                                  <th >Time</th>
								  <th >Action</th>
                                  <th >Status</th>
                                  
                              </tr>
                              </thead>";

	while($row=mysqli_fetch_array($query)){

		$firstname=$row['first_name'];
		$lastname=$row['last_name'];
		$amount=$row['amount'];
		$details=$row['request_details'];
		$unit=$row['unit'];
		$category=$row['category'];
		$time=$row['request_time'];
		$acc=$row['action'];
		$status=$row['status'];

static $var=1;
$counter=$var++;

echo "<tbody>
   <tr>
   <td>$counter</td>
  <td>$firstname</td>
<td>$lastname</td>
<td>$amount</td>
<td> $details</td>
<td>$unit</td>
<td>$category</td>
<td>$time</td>
<td>$acc</td>
<td>$status</td>
</tr>
	 </tbody>";
		//while end
	}
echo "</table>";
	
}else{
		echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
}//if end

	//func end
}












//approve or decline request

function request_action(){

global $link;

$actions="";
if($_GET){
    $id =$_GET['id'];
    $action =$_GET['action'];

   // echo $id.$action;

    if($action == "approved"){

$wallet=0;
//select the total amount
$cash="SELECT total_amount FROM cash ORDER BY cash_id DESC LIMIT 1";
		$result=mysqli_query($link,$cash);

		while($roo=mysqli_fetch_array($result)){

			$wallet=$roo['total_amount'];
		}

	//select requested amount	
$req_cash="SELECT amount FROM request WHERE req_id='$id'";

$run=mysqli_query($link,$req_cash);

while($show=mysqli_fetch_array($run)){

			$req_amt=$show['amount'];
		}



//wallet - requested amount 
if($wallet<$req_amt){

echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Insufficient Funds!
						</div>";	
}else{
    //session
$userfirst=$_SESSION['first_name'];

		//change the status to approved
 $query="UPDATE request SET status='approved',admin_name='$userfirst' WHERE req_id='$id'";
 $r=mysqli_query($link,$query);

}
//else close
}

//the decline area, just updates declined
    elseif($action == "declined"){
		//session
$userfirst=$_SESSION['first_name'];

        $query="UPDATE request SET status='declined',admin_name='$userfirst' WHERE req_id='$id'";
        $r=mysqli_query($link,$query);
    }
}

	//function end
}









//edit or delete users

function show_all_users(){

global $link;

$name=$_SESSION['first_name'];

$show="SELECT * FROM users WHERE first_name!='$name'";

$query=mysqli_query($link,$show);

if ($query){

echo	"<table class='table table-bordered table-striped table-condensed'>
                              <thead>
                              <tr>
							  <th>S/N</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th >Email</th>
                                  <th >Status</th>
                                  <th >Position</th>
                                  <th >Remove User</th>
                              </tr>
                              </thead>";

while($row=mysqli_fetch_array($query)){

$id=$row['user_id'];
$firstname=$row['first_name'];
$lastname=$row['last_name'];
$email=$row['email'];
$status=$row['status'];
$position=$row['position'];

static $var=1;
$counter=$var++;

echo "<tbody>

<tr>
<td>$counter</td>
<td>$firstname</td>
<td>$lastname</td>
<td>$email</td>
<td> $status</td>
<td>$position</td>
<td><a  href='users.php?id=$id' class='btn btn-danger'>Delete</a></td>
</tr>

</tbody>";
		//while end
	}

echo "</table>";
	

}else{

 echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>"; 

	//if end
}





	//end of function
}

































function request_notification(){

global $link;
$closed="closed";
$pending="pending";

$retrieve="SELECT * FROM request WHERE  status='$pending' ";

$query=mysqli_query($link,$retrieve);

if ($query){

$number=mysqli_num_rows($query);
	
	echo "$number";
	
}else{
		echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
}//if end

	//func end
}
















function new_request_dropdown(){

global $link;
$pending="";
$pending="pending";

$retrieve="SELECT first_name,request_details,DATE_FORMAT(request_time, '%d / %M / %Y') AS dr FROM request WHERE status='$pending'
ORDER BY req_id DESC LIMIT 5";

$query=mysqli_query($link,$retrieve);

if ($query){

while($row=mysqli_fetch_array($query)){

$firstname=$row['first_name'];
$details=$row['request_details'];
$time=$row['dr'];


echo "<li>
                                <a href='request.php' target='frame'>
                                    <span class='photo'><img alt='avatar' src='assets/img/ui-sam.jpg'></span>
                                    <span class='subject'>
                                    <span class='from'>$firstname</span>
                                    <span class='time'>$time</span>
                                    </span>
                                    <span class='message'>
                                        $details
                                    </span>
                                </a>
  </li>";


	//while end
}
	
}else{
		echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
}//if end

	//func end
}





//function to delete user

function delete_user(){

global $link;

if(isset($_GET['id'])){

  $id =$_GET['id'];

	//echo "$id";
	
	$do="DELETE FROM users WHERE user_id=$id LIMIT 1";
	$q=mysqli_query($link,$do);
	if(mysqli_affected_rows($link)==1){
		echo "<div class='alert alert-success text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   User Deleted Successfully!
						</div>";
}else{

echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
}

//if isset
}

	//func end
}




















//users request feed back


function users_request_notification(){

global $link;
$pending="";
$pending="pending";
$userfirst=$_SESSION['first_name'];

$retrieve="SELECT * FROM request WHERE status!='$pending' && first_name='$userfirst'";

$query=mysqli_query($link,$retrieve);

if ($query){

$number=mysqli_num_rows($query);
	
	echo "$number";
	
}else{
		echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
}//if end

	//func end
}











function user_new_message_dropdown(){

global $link;
$pending="";
$pending="pending";
$userfirst=$_SESSION['first_name'];

$retrieve="SELECT status,request_details,amount FROM request WHERE status!='closed' && first_name='$userfirst' 
ORDER BY req_id DESC LIMIT 4";

$query=mysqli_query($link,$retrieve);

if ($query){

while($row=mysqli_fetch_array($query)){

$status=$row['status'];
$details=$row['request_details'];
$amount=$row['amount'];


echo "<li>
                                <a href='all_request.php' target='frame'>
                                    <span class='photo'><img alt='avatar' src='assets/img/ui-sam.jpg'></span>
                                    <span class='subject'>
                                    <span class='from'>$status</span>
                                    <span class='time'>$amount</span>
                                    </span>
                                    <span class='message'>
                                        $details
                                    </span>
                                </a>
  </li>";


	//while end
}
	
}else{
		echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
}//if end

}	//func end













//users can modify pending requests

function users_pending_request_modify(){

global $link;

$pending="pending";
//.................................................
if(isset($_SESSION['first_name'])){
	$user=$_SESSION['first_name'];
}
//....................................................
$show="SELECT * FROM request WHERE status='$pending' && first_name='$user' ORDER BY req_id DESC";

$query=mysqli_query($link,$show);

if ($query){

echo	"<table class='table table-bordered table-striped table-condensed'>
                              <thead>
                              <tr>
                                  <th >Amount</th>
                                  <th >Request Details</th>
                                  <th >Category</th>
								  <th >Change Request</th>
                                  <th >Remove Request</th>
                              </tr>
                              </thead>";

while($row=mysqli_fetch_array($query)){

$id=$row['req_id'];
$amount=$row['amount'];
$request=$row['request_details'];
$cat=$row['category'];

echo "<tbody>

<tr>
<td>$amount</td>
<td> $request</td>
<td>$cat</td>
<td><a href='request_status.php?pend=$id&do=edit' class='btn btn-primary'>Edit</a></td>
<td><a  href='request_status.php?pending=$id' class='btn btn-danger'>Delete</a></td>
</tr>

</tbody>";
		//while end
	}

echo "</table>";
	

}else{

 echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>"; 

	//if end
}





	//end of function
}
















//user delete pending request

function user_delete_pending_req(){

global $link;

if(isset($_GET['pending'])){

  $id =$_GET['pending'];

	//echo "$id";
	
	$do="DELETE FROM request WHERE req_id=$id LIMIT 1";
	$q=mysqli_query($link,$do);
	if(mysqli_affected_rows($link)==1){
		echo "<div class='alert alert-success text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Request Deleted Successfully!
						</div>";
}else{

echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
}

//if isset
}

	//func end
}











































//retrieve password

function retrieve_password(){

global $link;
	if(isset($_POST['find'])) {

	if (empty($_POST['email']) or empty($_POST['question']) or empty($_POST['ans'])){

echo "<div class='alert alert-warning text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Invalid Details, Fill The Form...
						</div>"; 
	}else{

    $email=trim($_POST['email']);
	$question=trim($_POST['question']);
	$ans=trim($_POST['ans']);


    $qq="SELECT password FROM users WHERE email='$email' && question='$question' && answer='$ans'";
    $q=mysqli_query($link,$qq);

    $row=mysqli_fetch_array($q);

    $pass=$row['password'];

  
$email="";
$question="";
$ans="";


	if($pass==""){

echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Email not registered. Verify Security Question Too...
						</div>"; 
	}else{

 echo "<div class='alert alert-success text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Your Password Is $pass
						</div>"; 
	}
}//end

	 
}//end

} //function end



















//change password function

function change_password(){

global $link;

if(isset($_POST['change'])){

//$dd="SELECT user_id FROM ";


$email=trim($_POST['email']);
$old=trim($_POST['old']);
$new=trim($_POST['new']);
$confirm=trim($_POST['confirm']);
$que=trim($_POST['question']);
$answer=trim($_POST['ans']);

$sel="SELECT * FROM users WHERE email='$email' && password='$old'";
$mysq=mysqli_query($link,$sel);
$roww=mysqli_num_rows($mysq);

$get=mysqli_fetch_array($mysq);

$idd=$get['user_id'];


if($roww==1 && $new==$confirm){
//echo "$roww";

$sec="UPDATE users SET password='$new',question='$que',answer='$answer' WHERE user_id='$idd' ";
$sql=mysqli_query($link,$sec);

if($sql){
	echo "<div class='alert alert-success text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Changes Successful!
						</div>"; 
}else{
	echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error! Contact Developer!
						</div>"; 
}

}else{
	echo "<div class='alert alert-warning text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Verify Email and Password Match...
						</div>"; 
}


}//isset if



} //func end









//edit function for users request

function user_edit_pending_request(){

global $link;

if(isset($_GET['pend'])){
                            $id=$_GET['pend'];
                            
                        }
                        if ($_POST) {
                            $id=$_POST['id'];
                          
                        }
                        if(isset($_POST['edit'])){
                            $amount=$_POST['amount'];
                            $request=$_POST['request'];
                            $category=$_POST['category'];
                            $q="UPDATE request SET amount='$amount',request_details='$request',category='$category' WHERE req_id='$id'";
                            mysqli_query($link,$q);
                            header('location:request_status.php');
                           
                        }
                        if(isset($id)){
                                    $q="SELECT * FROM request WHERE req_id='$id'";
                                    $row=mysqli_query($link,$q);
                                    $rr= mysqli_fetch_array($row);
                                   $amount=$rr['amount'];
                                    $request=$rr['request_details'];
                                    $cat=$rr['category'];

                                    $display = "SELECT * FROM request_category";
                                     echo "
                                        <div class='darkblue-panel pn'>
                      			<div class='darkblue-header'><h3>Edit Request</h3></div>
                                
                                 <form action='request_status.php' method='POST' >

                        <input type='text' name='amount' placeholder='Amount' value='$amount' class='form-control margin_bottom textbox center-block'/>
                        <input type='text' name='request' placeholder='Request Details' value='$request' class='form-control margin_bottom center-block textbox'/>";
                        echo "<select class='form-control textbox center-block' name='category'>";
                        select_request_cat();
                        echo "</select>";
                        echo "<input type='submit' name='edit' value='Update' class='btn btn-theme margin_bottom margin_top' id='button'/>
                                <input type='hidden' name='id' value='$id'/>
                                </form></div>";
                        }
                
                                
                        
                                
                        
                        
                        //echo $id;


}

















//function for date range query

function date_query(){

global $link;

echo "<form method='POST' action='request.php' class='form-inline text-center margin_bottom'>
<b>FROM</b>
<input type='date' name='start' class='form-control margin_bottom' />   
<b>TO</b>
<input type='date' name='end' class='form-control margin_bottom' />
<input type='submit' name='find' value='Search' class='btn btn-theme margin_bottom' />

</form>";

if(isset($_POST['find'])){
$start=$_POST['start'];
$end=$_POST['end'];

$dd="SELECT * FROM request WHERE request_time between '$start' AND '$end'";
$rr=mysqli_query($link,$dd);
$num=mysqli_num_rows($rr);

if($num==0){
echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   No Record Found...
						</div>";

}else{

echo "<h5>Request Records From $start TO A Day Before $end</h5>";
echo	"<table class='table table-bordered table-striped table-condensed'>
                              <thead>
                              <tr>
                                  <th class='white'>First Name</th>
                                  <th class='white'>Last Name</th>
                                  <th class='white'>Amount</th>
                                  <th class='white'>Request Details</th>
                                  <th class='white'>Request Category</th>
                                  <th class='white'>Time</th>
								  <th class='white'>Action</th>
                                  <th class='white'>Status</th>
                                  
                              </tr>
                              </thead>";

	while($row=mysqli_fetch_array($rr)){

		$firstname=$row['first_name'];
		$lastname=$row['last_name'];
		$amount=$row['amount'];
		$details=$row['request_details'];
		$category=$row['category'];
		$time=$row['request_time'];
		$accc=$row['action'];
		$status=$row['status'];


echo "<tbody>
   <tr>
  <td>$firstname</td>
<td>$lastname</td>
<td>$amount</td>
<td> $details</td>
<td>$category</td>
<td>$time</td>
<td>$accc</td>
<td>$status</td>
</tr>
	 </tbody>";
		//while end
	}
echo "</table>";


}//if num row

}//if isset




}//function
















//function for cash date range query

function cash_date_query(){

global $link;

echo "<form method='POST' action='cash.php' class='form-inline text-center margin_bottom'>
<b>FROM</b>
<input type='date' name='start' class='form-control margin_bottom' />   
<b>TO</b>
<input type='date' name='end' class='form-control margin_bottom' />
<input type='submit' name='find' value='Search' class='btn btn-theme margin_bottom' />

</form>";

if(isset($_POST['find'])){
$start=$_POST['start'];
$end=$_POST['end'];

$dd="SELECT last_added,date_added FROM cash WHERE date_added between '$start' AND '$end'";
$rr=mysqli_query($link,$dd);
$num=mysqli_num_rows($rr);

//the sum

if($num==0){
echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   No Record Found...
						</div>";

}else{

echo "<h5>Cash Records From $start TO A Day Before $end</h5>";
echo	"<table class='table table-bordered table-striped table-condensed'>
                              <thead>
                              <tr>
							  <th class='text-center white'>S/N</th>
                                  <th class='text-center white'>Cash Added</th>
                                  <th class='text-center white'>Date</th>
                              </tr>
							  
                              </thead>";
//sum
$sum=0;
	while($row=mysqli_fetch_array($rr)){

		$cash_added=$row['last_added'];
		$date=$row['date_added'];

		//sum
        $sum += $cash_added;

static $var=1;
$counter=$var++;

echo "<tbody>
   <tr>
   <td class='black'>$counter</td>
  <td class='black'>$cash_added</td>
  <td class='black'>$date</td>
</tr>
	 </tbody>";
		//while end
	}
echo "<tfoot>
<tr>
   <th class='text-center white'>TOTAL CASH</th>
  </tr>
	<tr>
<td class='total'>$sum</td>
	</tr>
</tfoot>";

echo "</table>";


}//if num row

}//if isset




}//function
































function user_request_action(){

global $link;

$actions="";
if($_GET){
    $id =$_GET['id'];
    $action =$_GET['action'];

   // echo $id.$action;

$sel="SELECT status FROM request WHERE req_id='$id'";
$s=mysqli_query($link,$sel);

$rrow=mysqli_fetch_array($s);
$result=$rrow['status'];

//echo $result;

if($result=='declined'){

	 $query="UPDATE request SET status='closed',action='declined' WHERE req_id='$id'";
        $r=mysqli_query($link,$query);

}else{
	

	
//select the total amount
$cash="SELECT total_amount FROM cash ORDER BY cash_id DESC LIMIT 1";
		$result=mysqli_query($link,$cash);

		while($roo=mysqli_fetch_array($result)){

			$wallet=$roo['total_amount'];
		}

//echo "$wallet";
	//select requested amount	
$req_cash="SELECT amount FROM request WHERE req_id='$id'";

$run=mysqli_query($link,$req_cash);

while($show=mysqli_fetch_array($run)){

			$req_amt=$show['amount'];
		}

//echo "$req_amt";

//wallet - requested amount 
if($wallet<$req_amt){

echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Insufficient Funds!
						</div>";	
}else{
$remainder=$wallet-$req_amt;

//echo "$remainder";

//insert remainder
$final="INSERT INTO cash (total_amount) VALUES ('$remainder')";
$do=mysqli_query($link,$final);

   
		//change the status to approved
 $query="UPDATE request SET status='closed',action='approved' WHERE req_id='$id'";
 $r=mysqli_query($link,$query);


}





}





}
	//function end
}










//function message log

function message_log(){

global $link;


if(isset($_POST['sort'])){


$choice=$_POST['action'];

$a="all";
$ap="approved";
$de="declined";

if($choice==$a){


$mess="SELECT * FROM request WHERE status='closed' ORDER BY req_id DESC ";
$m=mysqli_query($link, $mess);

$num=mysqli_num_rows($m);

echo "<span class='count'>$num </span>";

echo "<div class='pad'> <p>All Message Log... </p> </div> ";

while($rrr=mysqli_fetch_array($m)){

	$fname=$rrr['first_name'];
	$lname=$rrr['last_name'];
	$amt=$rrr['amount'];
	$catt=$rrr['category'];
	$tim=$rrr['request_time'];
	$ac=$rrr['action'];
	$addname=$rrr['admin_name'];
	

$all= " <table class='table table-bordered table-striped  table-hover '>
                                 

                                   <tbody>
                                <tr>
                                <td>$fname  $lname's Request Of $amt   For
								  $catt    On    $tim Has Been $ac by  $addname</td>
                                </tr>

                                   </tbody>
                                   </table>";

	echo "$all";					
} //while end



}elseif($choice==$ap){

$mess="SELECT * FROM request WHERE action='approved' ORDER BY req_id DESC ";
$m=mysqli_query($link, $mess);

$num=mysqli_num_rows($m);


echo "<span class='count'>$num</span>";

echo "<div class='pad'> <p>Approved Message Log... </p> </div> ";

while($rrr=mysqli_fetch_array($m)){

	$fname=$rrr['first_name'];
	$lname=$rrr['last_name'];
	$amt=$rrr['amount'];
	$catt=$rrr['category'];
	$tim=$rrr['request_time'];
	$ac=$rrr['action'];
	$addname=$rrr['admin_name'];
	

$all= " <table class='table table-bordered table-striped  table-hover '>
                                 

                                   <tbody>
                                <tr>
                                <td>$fname  $lname's Request Of $amt   For
								  $catt    On    $tim Has Been $ac by  $addname</td>
                                </tr>

                                   </tbody>
                                   </table>";

	echo "$all";
					
} //while end


}elseif($choice==$de){


$mess="SELECT * FROM request WHERE action='declined' ORDER BY req_id DESC ";
$m=mysqli_query($link, $mess);

$num=mysqli_num_rows($m);

echo "<span class='count'>$num </span>";

echo "<div class='pad'> <p>Declined Message Log... </p> </div> ";

while($rrr=mysqli_fetch_array($m)){

	$fname=$rrr['first_name'];
	$lname=$rrr['last_name'];
	$amt=$rrr['amount'];
	$catt=$rrr['category'];
	$tim=$rrr['request_time'];
	$ac=$rrr['action'];
	$addname=$rrr['admin_name'];
	

$all= " <table class='table table-bordered table-striped  table-hover '>
                                 

                                   <tbody>
                                <tr>
                                <td>$fname  $lname's Request Of $amt   For
								  $catt    On    $tim Has Been $ac by  $addname</td>
                                </tr>

                                   </tbody>
                                   </table>";

	echo "$all";					
} //while end


}//if final end

}//if isset action

} //func end










//function for request history

function history(){


global $link;

$userfirst=$_SESSION['first_name'];

$mess="SELECT * FROM request WHERE first_name='$userfirst' ORDER BY req_id DESC";
$m=mysqli_query($link, $mess);

echo	"<table class='table table-bordered table-striped table-condensed'>
                              <thead>
                              <tr>
							  <th>S/N</th>
                                  <th>Amount</th>
                                  <th >Request Details</th>
                                  <th >Request Category</th>
                                  <th >Time</th>
                                  <th >Admin Action</th>
								  <th >Final Status</th>
                                  
                              </tr>
                              </thead>";


	while($row=mysqli_fetch_array($m)){

		
		$amount=$row['amount'];
		$details=$row['request_details'];
		$category=$row['category'];
		$time=$row['request_time'];
		$final=$row['status'];
		$ad=$row['action'];
		$adname=$row['admin_name'];

static $var=1;
$counter=$var++;

echo "<tbody>
   <tr>
  <td>$counter</td>
<td>$amount</td>
<td> $details</td>
<td>$category</td>
<td>$time</td>
<td>$ad <span class='badge'>$adname</span></td>
<td>$final</td>
</tr>
	 </tbody>";
		//while end
	}
echo "</table>";




	//end function
}











//user reply counter

function user_reply_counter(){

	global $link;

$sell="SELECT * FROM request WHERE status='approved' OR status='declined'";
$runq=mysqli_query($link,$sell);

if ($runq){

	$numr=mysqli_num_rows($runq);
	echo "$numr";
}

}//end func




















//user reply display

function user_reply_dropdown(){

	global $link;

$sell="SELECT request_details,admin_name,status,DATE_FORMAT(request_time, '%d / %m / %y') AS dd
 FROM request WHERE status='approved' OR status='declined' ORDER BY req_id DESC LIMIT 5";
$runq=mysqli_query($link,$sell);

if ($runq){

	while($row=mysqli_fetch_array($runq)){

$name=$row['admin_name'];
$ac=$row['status'];
$req=$row['request_details'];
$time=$row['dd'];

echo " <div class='desc'>
                      <li>
                                <a href='all_request.php' target='frame'>
                                    
                                    <span class='subject dark'>
                                    <span class='from'>$name</span>
                                    <span class='time'>$time</span>
                                    </span>
                                    <span class='message dark'>
                                     $ac    . $req
                                    </span>
                                </a>
                            </li>

                      </div>";

	//while end
}

}else{

 echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>"; 

	//if end
}


}//end func









//function to export records

function export_cash_details(){

if(isset($_POST['find_cash'])){


	global $link;

	$start=$_POST['start_cash'];
	$end=$_POST['end_cash'];

	if(empty($start) OR empty($end)){

		echo "<div class='alert alert-warning text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Please Select Date Range
						</div>";
	}else{

$result="SELECT * FROM cash WHERE date_added between '$start' AND '$end' ";
$q=mysqli_query($link,$result);

echo	"<table class='table table-bordered table-striped table-condensed black'>
                              <thead>
                              <tr>
							  <th class='text-center '>S/N</th>
                                  <th class='text-center '>Cash Added</th>
                                  <th class='text-center '>Date</th>
                              </tr>
							  
                              </thead>";
$sum=0;
while($row=mysqli_fetch_array($q)){

$amount=$row['last_added'];
$date=$row['date_added'];

//sum
        $sum += $amount;

static $var=1;
$counter=$var++;

echo "<tbody>
   <tr>
   <td>$counter</td>
  <td>$amount</td>
  <td>$date</td>
</tr>
	 </tbody>";
}//while end

echo "<tfoot>
<tr>
   <th class='text-center'>TOTAL CASH</th>
  </tr>
	<tr>
<td >$sum</td>
	</tr>
</tfoot>";

echo "</table>";

echo "<a href='export_cash.php?start=$start&end=$end' class='btn btn-theme'>Export</a>";

	}//if empty end
}// if isset button end

} //func end




//function to export records

function export_request_details(){


if(isset($_POST['find_req'])){


	global $link;

	$start=$_POST['start_req'];
	$end=$_POST['end_req'];
$closed="closed";

	if(empty($start) OR empty($end)){

		echo "<div class='alert alert-warning text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Please Select Date Range
						</div>";
	}else{

$result="SELECT * FROM request WHERE status='$closed' AND request_time between '$start' AND '$end' ";
$q=mysqli_query($link,$result);

echo	"$start To $end <br>
<table class='table table-bordered table-striped table-condensed black'>
                              <thead>
                              <tr>
							  <th class='text-center '>S/N</th>
                                  <th class='text-center '>First Name</th>
                                  <th class='text-center '>Last Name</th>
								  <th class='text-center '>Amount</th>
								  <th class='text-center '>Request Details</th>
								  <th class='text-center '>Units</th>
								  <th class='text-center '>Category</th>
								  <th class='text-center '>Request Time</th>
								  <th class='text-center '>Action</th>
                              </tr>
							  
                              </thead>";

while($row=mysqli_fetch_array($q)){

		$firstname=$row['first_name'];
		$lastname=$row['last_name'];
		$amount=$row['amount'];
		$details=$row['request_details'];
		$units=$row['unit'];
		$category=$row['category'];
		$time=$row['request_time'];
		$action=$row['action'];

static $var=1;
$counter=$var++;

echo "<tbody>
   <tr>
   <td>$counter</td>
  <td>$firstname</td>
  <td>$lastname</td>
  <td>$amount</td>
  <td>$details</td>
  <td>$units</td>
  <td>$category</td>
  <td>$time</td>
  <td>$action</td>
</tr>
	 </tbody>";
}//while end

echo "</table>";

echo "<a href='export_request.php?start=$start&end=$end' class='btn btn-theme'>Export</a>";

	}//if empty end
}// if isset button end

} //func end











?>