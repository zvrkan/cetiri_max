<?php

include ("Datum.php");

class DatumEN extends Datum
{
    function Trenutni ()
    {
        $IMG_DIR_URL = "./digits/";
        $date = date("Y-M-D");
        echo $date;
    }
}


?>