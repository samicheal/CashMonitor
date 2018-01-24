<?php

//invoke db
require("assets/db/database.php");

if(isset($_GET['start'])){
                            $start=$_GET['start'];
}

if(isset($_GET['end'])){
                            $end=$_GET['end'];
}




 $closed="closed"; 
 $app="approved";

$result="SELECT * FROM request WHERE status='$closed' AND request_time between '$start' AND '$end'";

$q=mysqli_query($link, $result);

echo "Hiit PLC LAGOS CENTER";
echo "\n";
echo "\n";
echo "PETTY CASH RECORDS"."\t"." FROM"."\t"." $start"."\t"." TO"."\t"." $end";
echo "\n";
echo "\n";

$header='';
$header="FIRST NAME"."\t"."LAST NAME"."\t"."REQUEST DETAILS"."\t"."AMOUNT"."\t"."UNITS"."\t"."CATEGORY"."\t"."TIME"."\t"."ACTION"."\t"."\n";
echo "$header";

while($row=mysqli_fetch_array($q)){

        $firstname=$row['first_name'];
		$lastname=$row['last_name'];
		$amount=$row['amount'];
		$details=$row['request_details'];
                $unit=$row['unit'];
		$category=$row['category'];
		$time=$row['request_time'];
		$action=$row['action'];

echo "$firstname"."\t"."$lastname"."\t"."$details"."\t"."$amount"."\t"."$unit"."\t"."$category"."\t"."$time"."\t"."$action"."\n";

}//while end

echo "\n";


//custom excel export listing...........

//all the categories

$Energy="Energy Cost/GRE";
$Energycost="Energy Cost/PHCN";
$LRE="LRE ADMIN";
$VRE="VRE";
$TEL="TEL CRM";
$NYSC="NYSC MKG";
$Newspaper="Newspaper/Magazine.";
$Office="Office Repair & Maint.";
$Fac="Fac. Exp";
$Vehicle="Vehicle Maint. ADMIN";
$PRINT="PRINT & Stationaries ADM";
$Computer="Computer Maint";
$BroadBand="BroadBand Data Purchase";
$LREmkg="LRE MKG";
$ID="ID Card Production";
$Refreshments="Refreshments";


//category 0  here

//select based on category
$result="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$Energy' AND request_time between '$start' AND '$end'";
$q=mysqli_query($link, $result);
//heaader
$header='';
$header="CATEGORIES"."\t"."TOTAL"."\t"."\n";
echo "$header";
//count category requests
while($row=mysqli_fetch_array($q)){
        $amt=$row['total'];
}//while end
echo "$Energy"."\t"."$amt"."\t"."\n";
//............................end of category 



//category 1  here

//select based on category
$result1="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$Energycost' AND request_time between '$start' AND '$end'";
$q1=mysqli_query($link, $result1);
//count category requests
while($row=mysqli_fetch_array($q1)){
        $amt1=$row['total'];
}//while end
echo "$Energycost"."\t"."$amt1"."\t"."\n";
//............................end of category 




//category 2  here

//select based on category
$result2="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$LRE' AND request_time between '$start' AND '$end'";
$q2=mysqli_query($link, $result2);
//count category requests
while($row=mysqli_fetch_array($q2)){
        $amt2=$row['total'];
}//while end
echo "$LRE"."\t"."$amt2"."\t"."\n";
//............................end of category 


//category 3  here

//select based on category
$result3="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$VRE' AND request_time between '$start' AND '$end'";
$q3=mysqli_query($link, $result3);
//count category requests
while($row=mysqli_fetch_array($q3)){
        $amt3=$row['total'];
}//while end
echo "$VRE"."\t"."$amt3"."\t"."\n";
//............................end of category 




//category 4  here

//select based on category
$result4="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$TEL' AND request_time between '$start' AND '$end'";
$q4=mysqli_query($link, $result4);
//count category requests
while($row=mysqli_fetch_array($q4)){
        $amt4=$row['total'];
}//while end
echo "$TEL"."\t"."$amt4"."\t"."\n";
//............................end of category 





//category 5  here

//select based on category
$result5="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$NYSC' AND request_time between '$start' AND '$end'";
$q5=mysqli_query($link, $result5);
//count category requests
while($row=mysqli_fetch_array($q5)){
        $amt5=$row['total'];
}//while end
echo "$NYSC"."\t"."$amt5"."\t"."\n";
//............................end of category 





//category 6  here

//select based on category
$result6="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$Newspaper' AND request_time between '$start' AND '$end'";
$q6=mysqli_query($link, $result6);
//count category requests
while($row=mysqli_fetch_array($q6)){
        $amt6=$row['total'];
}//while end
echo "$Newspaper"."\t"."$amt6"."\t"."\n";
//............................end of category 



//category 7  here

//select based on category
$result7="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$Office' AND request_time between '$start' AND '$end'";
$q7=mysqli_query($link, $result7);
//count category requests
while($row=mysqli_fetch_array($q7)){
        $amt7=$row['total'];
}//while end
echo "$Office"."\t"."$amt7"."\t"."\n";
//............................end of category 



//category 8  here

//select based on category
$result8="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$Fac' AND request_time between '$start' AND '$end'";
$q8=mysqli_query($link, $result8);
//count category requests
while($row=mysqli_fetch_array($q8)){
        $amt8=$row['total'];
}//while end
echo "$Fac"."\t"."$amt8"."\t"."\n";
//............................end of category 






//category 9  here

//select based on category
$result9="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$Vehicle' AND request_time between '$start' AND '$end'";
$q9=mysqli_query($link, $result9);
//count category requests
while($row=mysqli_fetch_array($q9)){
        $amt9=$row['total'];
}//while end
echo "$Vehicle"."\t"."$amt9"."\t"."\n";
//............................end of category 




//category 10  here

//select based on category
$result10="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$PRINT' AND request_time between '$start' AND '$end'";
$q10=mysqli_query($link, $result10);
//count category requests
while($row=mysqli_fetch_array($q10)){
        $amt10=$row['total'];
}//while end
echo "$PRINT"."\t"."$amt10"."\t"."\n";
//............................end of category 






//category 11  here

//select based on category
$result11="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$Computer' AND request_time between '$start' AND '$end'";
$q11=mysqli_query($link, $result11);
//count category requests
while($row=mysqli_fetch_array($q11)){
        $amt11=$row['total'];
}//while end
echo "$Computer"."\t"."$amt11"."\t"."\n";
//............................end of category 






//category 12  here

//select based on category
$result12="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$BroadBand' AND request_time between '$start' AND '$end'";
$q12=mysqli_query($link, $result12);
//count category requests
while($row=mysqli_fetch_array($q12)){
        $amt12=$row['total'];
}//while end
echo "$BroadBand"."\t"."$amt12"."\t"."\n";
//............................end of category 






//category 13  here

//select based on category
$result13="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$LREmkg' AND request_time between '$start' AND '$end'";
$q13=mysqli_query($link, $result13);
//count category requests
while($row=mysqli_fetch_array($q13)){
        $amt13=$row['total'];
}//while end
echo "$LREmkg"."\t"."$amt13"."\t"."\n";
//............................end of category 





//category 14  here

//select based on category
$result14="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$ID' AND request_time between '$start' AND '$end'";
$q14=mysqli_query($link, $result14);
//count category requests
while($row=mysqli_fetch_array($q14)){
        $amt14=$row['total'];
}//while end
echo "$ID"."\t"."$amt14"."\t"."\n";
//............................end of category 





//category 15  here

//select based on category
$result15="SELECT SUM(amount) as total FROM request WHERE status='$closed' AND action='$app'
AND category='$Refreshments' AND request_time between '$start' AND '$end'";
$q15=mysqli_query($link, $result15);
//count category requests
while($row=mysqli_fetch_array($q15)){
        $amt15=$row['total'];
}//while end
echo "$Refreshments"."\t"."$amt15"."\t"."\n";
//............................end of category 

echo "\n";


//the sum calculation
$sum=0;

$sum=$amt+$amt1+$amt2+$amt3+$amt4+$amt5+$amt6+$amt7+$amt8+$amt9+$amt10+$amt11+$amt12+$amt13+$amt14+$amt15;

echo "GRAND TOTAL"."\t"."$sum"."\t"."\n";

$filename="Pettycash Records ($start to $end).xls";

header("content-type: application/octet-stream");
header("content-disposition: attachment; filename=$filename");
header("pragma: no-cache");
header("expires: 0");

?>