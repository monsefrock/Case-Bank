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