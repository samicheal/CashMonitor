<?php

//invoke db
require("assets/db/database.php");
require("assets/functions/functions.php");
session_start();
redirect ();
redirect_users();

if(isset($_GET['start'])){
                            $start=$_GET['start'];
}

if(isset($_GET['end'])){
                            $end=$_GET['end'];
}

  

$result="SELECT * FROM cash WHERE date_added between '$start' AND '$end'";

$q=mysqli_query($link,$result);

$header='';
$header="AMOUNT"."\t"."DATE"."\t"."\n";
echo "$header";

$sum=0;
while($row=mysqli_fetch_array($q)){

$amt=$row['last_added'];
$date=$row['date_added'];

 $sum += $amt;

echo "$date"."\t"."$amt"."\n";

}//while end

echo "\n";

echo "TOTAL"."\t"."$sum";

header("content-type: application/octet-stream");
header("content-disposition: attachment; filename=Record.xls");
header("pragma: no-cache");
header("expires: 0");

?>