<?php

class Case_
{
    public $case_text;
    public $case_m_cat;
    public $case_s_cat;
    public $case_type;
    public $case_difficulty;


    function setCase($conn){

        $data = array($this->case_text, $this->case_m_cat, $this->case_s_cat , $this->case_type,$this->case_difficulty);
        $stmt = $conn->prepare("insert into cases (case_text, case_m_cat, case_s_cat, case_type, case_difficulty) VALUES (?, ?, ?, ?, ?)");
//        $stmt->bind_param("sssss", $this->case_text, $this->case_m_cat, $this->case_s_cat , $this->case_type,$this->case_difficulty);
        $stmt->execute($data);

    }

    function updateCase($conn,$post){

        $case_text = $post["case_text"];
        $difficulty = $post["difficulty"];
        $cat = $post["cat"];
        $sub = $post["sub"];
        $case_id = $post["case_id"];
        $type = $post["type"];

        $stmt = $conn->prepare("UPDATE `cases` SET `case_text`= '$case_text',`case_m_cat`= '$cat',`case_s_cat`= '$sub',`case_type`= '$type',`case_difficulty`= '$difficulty' WHERE id = $case_id");
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function setNewCase($conn,$post){

        $data = array($post["case_text"], $post["cat"], $post["sub"], $post["type"], $post["difficulty"]);
        $stmt = $conn->prepare("insert into cases (case_text, case_m_cat, case_s_cat, case_type, case_difficulty) VALUES (?, ?, ?, ?, ?)");
        //  $stmt->bind_param("sssss", $this->case_text, $this->case_m_cat, $this->case_s_cat , $this->case_type,$this->case_difficulty);
        if($stmt->execute($data)){

            return true;

        }else{

            return false;
        }
    }

    function setlog($conn, $date, $log, $ip){

        $data = array($date,$ip,$log);
        $stmt = $conn->prepare("insert into logcase (timestamp, ip, log) values (?,?,?);");
//        $stmt->bind_param("sss" ,$date,$ip,$log);
        $stmt->execute($data);

    }

    function getCaseM($conn,$type,$cat_m, $deff){

        if($deff != 'disabled'){

            $sql = "SELECT * FROM cases where case_type = '$type' and case_m_cat = '$cat_m' and case_difficulty = '$deff' ORDER BY RAND() limit 1";

        }else{

            $sql = "SELECT * FROM cases where case_type = '$type' and case_m_cat = '$cat_m' ORDER BY RAND() limit 1";

        }

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            return $row;
        }
    }

    function getCaseS($conn,$type,$cat_m,$cat_s, $deff){

        if($deff != 'disabled'){

            $sql = "SELECT * FROM cases where case_type = '$type' and case_m_cat = '$cat_m' and case_s_cat = '$cat_s' and case_difficulty = '$deff' ORDER BY RAND() limit 1";

        }else{

            $sql = "SELECT * FROM cases where case_type = '$type' and case_m_cat = '$cat_m' and case_s_cat = '$cat_s' ORDER BY RAND() limit 1";
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            return $row;
        }
    }

    function getCaseRand($conn,$type, $deff){

        if($deff != 'disabled'){

            $sql = "SELECT * FROM cases where case_type = '$type' and case_difficulty = '$deff' ORDER BY RAND() limit 1";

        }else{

            $sql = "SELECT * FROM cases where case_type = '$type' ORDER BY RAND() limit 1";
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            return $row;
        }
    }

    function getAll($conn,$type,$cat_m,$cat_s,$difficulty){

        $stmt = $conn->prepare("SELECT * FROM cases where case_type = '$type' and case_m_cat = '$cat_m' and case_s_cat = '$cat_s' and case_difficulty = '$difficulty' ORDER BY RAND() limit 1");
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            return $row;
        }
    }

    function getCasesAll($conn){

        $stmt = $conn->prepare("SELECT * FROM cases");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function getCasesAllFilter($conn,$type){

        $stmt = $conn->prepare("SELECT * FROM cases where case_type = '$type'");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function getCasesAllSearch($conn,$search){

        $stmt = $conn->prepare("SELECT * FROM cases where case_text like '%$search%'");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function getEditCases($conn,$post){

        $id = $post["case_id"];
        $stmt = $conn->prepare("SELECT * FROM cases where id = $id");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function getPoints($conn,$post){

        $id = $post["case_id"];
        $stmt = $conn->prepare("SELECT * FROM `cases_points` where case_id = $id");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function getPoint($conn,$post){

        $id = $post["point_id"];
        $stmt = $conn->prepare("SELECT * FROM `cases_points` where id = $id");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function deleltPoint($conn,$post){

        $id = $post["point_id"];
        $stmt = $conn->prepare("DELETE FROM `cases_points` WHERE id = $id");
        if($stmt->execute()){

            return true;

        }else{

            return false;
        }

    }

    function updatePoint($conn,$post){

        $type = $post["type_point"];
        $titel = $post["titel_point"];
        $conte = $post["conte_point"];
        $id = $post["point_id"];
        $stmt = $conn->prepare("UPDATE `cases_points` SET `type`= $type,`titel`= '$titel',`discription`= '$conte' WHERE `id` = $id");
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function setPoint($conn,$post){

        $data = array($post["id"], $post["type_point"],$post["titel_point"], $post["conte_point"] );
        $stmt = $conn->prepare("INSERT INTO `cases_points`(`case_id`, `type`, `titel`, `discription`) VALUES (?,?,?,?)");
        if($stmt->execute($data)){
            return true;
        }else{
            return false;
        }
    }

    function getContent($conn,$post){

        $id = $post["case_id"];
        $stmt = $conn->prepare("SELECT * FROM cases_content where case_id = $id");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    function setContent($conn,$post){

        $data = array($post["case_id"],$post["content_case"]);
        $stmt = $conn->prepare("INSERT INTO `cases_content`(`case_id`, `content`) VALUES (?, ?)");

        if($stmt->execute($data)){
            return true;
        }else{
            return false;
        }

    }

    function updateContent($conn,$post){

        $id = $post["case_id"];
        $text = $post["content_case"];
        $stmt = $conn->prepare("UPDATE `cases_content` SET `content`= '$text' WHERE `case_id` = $id");

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }


    // Get Category and Sub Category and Types of all Cases in Main page (index.php)
    function getMainCat($conn)
    {
        $stmt = $conn->prepare("SELECT case_m_cat FROM cases WHERE case_m_cat != '' GROUP BY case_m_cat");
        $stmt->execute();

        return $stmt->fetchAll();
    }
    function getSubCat($conn)
    {
        $stmt = $conn->prepare("SELECT case_s_cat FROM cases WHERE case_s_cat != '' GROUP BY case_s_cat");
        $stmt->execute();

        return $stmt->fetchAll();
    }
    function getTypeCat($conn)
    {
        $stmt = $conn->prepare("SELECT case_type FROM cases WHERE case_type != '' GROUP BY case_type");
        $stmt->execute();

        return $stmt->fetchAll();
    }
}