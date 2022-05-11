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

    function getCase($conn,$type,$difficulty,$cat_m,$cat_s){

        $stmt = $conn->prepare("SELECT * FROM cases where case_type = '$type' and case_difficulty = '$difficulty' and case_m_cat = '$cat_m' and case_s_cat = '$cat_s' ORDER BY RAND() limit 1");
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            return $row;
        }
    }

    function getCaseRand($conn,$type,$difficulty){
        $stmt = $conn->prepare("SELECT * FROM cases where case_type = '$type' and case_difficulty = '$difficulty' ORDER BY RAND() limit 1");
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            return $row;
        }
    }

    function print_case()
    {
        echo $this->case_text.' '. $this->case_m_cat;
    }
}