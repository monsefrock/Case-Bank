<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
use App\Models\CaseModel;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST))
    {
        if(CaseModel::setPoint($_POST)){
            echo "true";
        }else{
            echo "false";
        }
    }
}
