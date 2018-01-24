<?php

//invoke db
require("assets/db/database.php");








function total_system_cash(){

global $link;

$sum="";

$tsc="SELECT last_added FROM cash";
$q=mysqli_query($link, $tsc);

if($q){
    $sum=0;
    while($row=mysqli_fetch_array($q)){

        $cash_added=$row['last_added'];
        $sum += $cash_added;
    }
    echo number_format($sum);
}else{
echo "Error";
}

    //func end
}















function last_cash_added_to_system(){

global $link;

$last=0;

$tsc="SELECT last_added FROM cash WHERE last_added!=0 ORDER BY cash_id DESC LIMIT 1";
$q=mysqli_query($link, $tsc);

if($q){

    while($row=mysqli_fetch_array($q)){

        $last=$row['last_added'];
    }
    echo number_format($last);
}else{
echo "Error";
}

    //func end
}















function last_cash_approved(){

global $link;
$a="approved";
$last_approved=0;
$tsc="SELECT amount FROM request WHERE action='$a' ORDER BY req_id DESC LIMIT 1";
$q=mysqli_query($link, $tsc);

if($q){

    while($row=mysqli_fetch_array($q)){

        $last_approved=$row['amount'];
    }
    echo number_format($last_approved);
}else{
echo "Error";
}

    //func end
}
















function total_cash_approved(){

global $link;

$run="SELECT SUM(amount) AS app FROM request WHERE action='approved'";

$q=mysqli_query($link, $run);

if($q){

$row=mysqli_fetch_array($q);

$add= $row['app'];

echo number_format($add);
}

    //func end
}









//number of admins

function number_of_admin(){

global $link;
$num="SELECT status FROM users WHERE status='admin'";

$q=mysqli_query($link, $num);

if($q){
    $row=mysqli_num_rows($q);
    echo "$row";
}
    //func end
}









//number of users

function number_of_users(){

global $link;
$num="SELECT status FROM users WHERE status='user'";

$q=mysqli_query($link, $num);

if($q){
    $row=mysqli_num_rows($q);
    echo "$row";
}
    //func end
}











//function for all regs

function num_all_registered(){

global $link;
$do="SELECT status FROM users";
$que=mysqli_query($link, $do);

$number=mysqli_num_rows($que);

echo "$number";
}












//function for all requests

function num_all_requests(){

global $link;
$do="SELECT amount FROM request";
$que=mysqli_query($link, $do);

$number=mysqli_num_rows($que);

echo "$number";
}
















//function total cash declined

function total_cash_declined(){

global $link;

$run="SELECT SUM(amount) AS app FROM request WHERE action='declined'";

$q=mysqli_query($link, $run);

if($q){

$row=mysqli_fetch_array($q);

$add= $row['app'];

echo number_format($add);
}

    //func end
}















//max approval

function max_cash_approved(){

global $link;

$run="SELECT MAX(amount) AS app FROM request WHERE action='approved'";

$q=mysqli_query($link, $run);

if($q){

$row=mysqli_fetch_array($q);

$add= $row['app'];

echo  number_format($add);
}

    //func end
}






//time of last cash add

function time_of_last_cash_added_to_system(){

global $link;
$date="";

$tsc="SELECT date_added FROM cash ORDER BY cash_id DESC LIMIT 1";
$q=mysqli_query($link, $tsc);

if($q){

    while($row=mysqli_fetch_array($q)){

        $date=$row['date_added'];
    }
    echo $date;
}else{
echo "Error";
}

    //func end
}






//function to show warning for cash limit

function show_cash_limit_warning(){

global $link;



$money="SELECT total_amount FROM cash ORDER BY cash_id DESC LIMIT 1";

$run=mysqli_query($link,$money);


if($run){

$row=mysqli_fetch_array($run);

$cash=$row['total_amount'];



$warning_q="SELECT warning FROM cash_warning";
$runn=mysqli_query($link,$warning_q);

$roww=mysqli_fetch_array($runn);

$warning=$roww['warning'];


if($cash <= $warning){

    $result=number_format($warning);

    echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Warning! Cash is Less Than or Equal to <strike>N</strike>$result
						</div>";
}


}else{

	echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Fatal Error, Contact Developer!
						</div>";
}


	//end func
}










//function for show_cash_warning_limit()

function show_cash_warning_limit(){

    global $link;

$warning_q="SELECT warning FROM cash_warning";
$runn=mysqli_query($link,$warning_q);

$roww=mysqli_fetch_array($runn);

$warning=$roww['warning'];

 echo number_format($warning);

}//func end



//func to add cash limit amount

function add_cash_limit(){

if(isset($_POST['warning'])){

global $link;

if(!is_numeric($_POST['limit'])){

    echo "<div class='alert alert-danger text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Insert a Valid Amount
						</div>";
}else{


$limit=mysqli_real_escape_string($link, trim($_POST['limit']));

$r="SELECT warning_id FROM cash_warning";
$q=mysqli_query($link, $r);

$rrr=mysqli_fetch_array($q);

$id=$rrr['warning_id'];


$query="UPDATE cash_warning SET warning='$limit' WHERE warning_id='$id'";

$qqq=mysqli_query($link, $query);

  echo "<div class='alert alert-success text-center alert-dismissable alert_margin'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
						   Limit Set!
						</div>";

}//if inner



}//if end

}//func end








?>