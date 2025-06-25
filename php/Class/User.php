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

       $stmt = $conn->prepare("INSERT INTO users (name, email, password, profile_pic, type) VALUES (?, ?, ?, ?, ?)");
       $stmt->execute([
           $this->name,
           $this->email,
           $this->password,
           $this->profile_pic,
           $this->type
       ]);

   }

   function getUser($conn,$id){

       $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
       $stmt->execute([$id]);
       return $stmt->fetch(PDO::FETCH_ASSOC);
   }

   function deletUser($conn,$id){
       $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
       $stmt->execute([$id]);
   }

}