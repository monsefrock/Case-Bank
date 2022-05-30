<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/Case_.php");
    include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(!empty($_POST))
        {
            $cases = new Case_();

            $result = $cases->updatePoint($conn,$_POST);

            echo $result;
        }
    }