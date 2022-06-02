<?php

class User
{
   public $name;
   public $email;
   public $password;
   public $profile_pic;
   public $type;

    function __construct($name,$email,$password,$type,$profile_pic) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->type = $type;
        $this->profile_pic = $profile_pic;
    }

   function setUser($conn){

       $stmt = $conn->prepare("INSERT INTO users (name, email, password, profile_pic, type) VALUES (?, ?, ?, ?, ?, ?)");
       $stmt->bind_param("ssssi", $this->name, $this->email,$this->password,$this->profile_pic,$this->type);
       $stmt->execute();

       $stmt->close();
       $conn->close();

   }

   function getUser($conn,$id){

       $stmt = $conn->prepare("SELECT * FROM users where $id");
       $stmt->execute();
       return $stmt->fetchAll();
   }

   function deletUser($conn,$id){
       $stmt = $conn->prepare("DELETE FROM users WHERE id = ?;");
       $stmt->bind_param("i",$id);
       $stmt->execute();

       $stmt->close();
       $conn->close();
   }

}