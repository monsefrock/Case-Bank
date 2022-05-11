<?php

class Case_
{
    public $case_text;
    public $case_m_cat;
    public $case_s_cat;
    public $case_type;
    public $case_difficulty;


    function __construct($case_text,$case_m_cat,$case_s_cat,$case_type,$case_difficulty)
    {
         $this->case_text = $case_text;
         $this->case_m_cat = $case_m_cat;
         $this->case_s_cat = $case_s_cat;
         $this->case_type = $case_type;
         $this->case_difficulty = $case_difficulty;
    }

    function setCase($conn){

        $stmt = $conn->prepare("insert into cases (case_text, case_m_cat, case_s_cat, case_type, case_difficulty) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $this->case_text, $this->case_m_cat, $this->case_s_cat , $this->case_type,$this->case_difficulty);
        $stmt->execute();

        $stmt->close();
        $conn->close();

    }

    function getCase($conn,$type,$difficulty,$cat_m,$cat_s){

        $stmt = $conn->prepare("SELECT * FROM case_ where case_type = '$type' and case_difficulty = '$difficulty' and case_m_cat = '$cat_m' and case_s_cat = '$cat_s'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $stmt->close();
        $conn->close();
        return $result;
    }
}