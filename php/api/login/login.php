<?php

    require_once("{$_SERVER['DOCUMENT_ROOT']}\php\Class\PasswordHash.php");
    include "{$_SERVER['DOCUMENT_ROOT']}\php\api\conn.php";


    $passw = new PasswordHash(8,"TRUE");

    $x = '4480644Mon';
    $y = $passw->HashPassword($x);
    echo $y."<br>";


    if($passw->CheckPassword("4480644Mon",$y)){

        echo "TRUE";
    }


?>