<?php




    /*echo 'User Real IP - '.getUserIpAddr().'<br>';*/


$x = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.'102.69.1.233'));

echo $x["geoplugin_timezone"];
    /*echo json_encode($x,JSON_UNESCAPED_UNICODE) ;*/

//    $today = date("Y-m-d H:i:s");
//    echo $today;

