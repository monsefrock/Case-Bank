<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/php/bootstrap.php");
use App\Models\CaseModel;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST))
    {
        $result = CaseModel::updatePoint($_POST);
        echo $result;
    }
}
