<?php
    require_once("{$_SERVER['DOCUMENT_ROOT']}/php/Class/Case_.php");
    include "{$_SERVER['DOCUMENT_ROOT']}/php/api/conn.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(!empty($_POST))
        {
            $cases = new Case_();

            $result2 = $cases->deleteContent($conn,$_POST);
            $result1 = $cases->deleltPointWithCase($conn,$_POST);
            $result = $cases->deleteCase($conn,$_POST);

            if($result && $result1 && $result2){

                echo $result;

            }else{

                echo '0';
            }

        }
    }
