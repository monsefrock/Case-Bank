<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
use App\Models\CaseModel;

recLog($_POST);

function recLog($rec){
    $ip = getUserIpAddr();
    $x = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ip));
    $x = json_encode($x, JSON_UNESCAPED_UNICODE);
    $log = json_encode($rec, JSON_UNESCAPED_UNICODE);
    $today = date("Y-m-d H:i:s");
    CaseModel::logCase($today, $log, $x);
}

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
