<?php

//establish db connection
$link=mysqli_connect("localhost","root","","pettycash");

if($link){
    echo "";
}else{
    echo "<div class='alert alert-danger'>
    Databse Connection Failed
    </div>";
    die();
}
?>