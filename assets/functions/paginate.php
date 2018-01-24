<?php
/**
*class to manage pagination
*/
class Paginate{
    
    //define properties
    public $display = 8;   //number of records per page
    public $pages = 0;
    public $starts = 0;

    function getPages($p="" , $dbc, $sql)
    {
        if(isset($_GET["$p"]) && is_numeric($_GET[$p]))
            $this->pages = $_GET["$p"];
        else{
            //count number of records
            $res = mysqli_query($dbc , $sql);
            $row = mysqli_fetch_array($res , MYSQLI_NUM);
            $records = $row[0];

            //count number of pages
            if($records > $this->display)
                 $this->pages = ceil($records/$this->display);
            else
                 $this->pages = 1;
        }
    }

    function getStart($s)
    {
        if(isset($_GET["$s"]) && is_numeric($_GET["$s"]))
             $this->starts = $_GET["$s"];
        else
             $this->starts = 0;
           return $this->starts;
    }


}

$paginate = new Paginate();

?>