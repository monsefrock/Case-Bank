<?php

    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/Case_.php");
    include "conn.php";

    recLog($conn,$_POST);

    function recLog($conn,$rec){

        $ip = getUserIpAddr();
        $x = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
        $x = json_encode($x,JSON_UNESCAPED_UNICODE);

        $log = json_encode($rec,JSON_UNESCAPED_UNICODE);

        $today = date("Y-m-d H:i:s");

        $cases = new Case_();
        $cases->setlog($conn,$today,$log,$x);

    }

    function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
