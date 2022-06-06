<?php

class User
{
   public $name;
   public $email;
   public $password;
   public $profile_pic;
   public $type;

    /*function __construct($name,$email,$password,$type,$profile_pic) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->type = $type;
        $this->profile_pic = $profile_pic;
    }*/

   function setUser($conn,$post,$password){

       $data = array($post['name'],$post['email'],$password,1);
       $stmt = $conn->prepare("INSERT INTO users (name, email, password, state) VALUES (?, ?, ?, ?)");

       if($stmt->execute($data)){
           return true;
       }else{
           return false;
       }


   }

   function editUser($conn,$post){

       $id = $post["id"];
       $name = $post["name"];
       $state = $post["state"];
       $stmt = $conn->prepare("UPDATE `users` SET `name`= '$name' ,`state`= $state  WHERE `id` = $id");

       if($stmt->execute()){
           return true;
       }else{
           return false;
       }


   }
   function editPass($conn,$post,$password){

       $id = $post["id"];
       $stmt = $conn->prepare("UPDATE `users` SET `password`= '$password' WHERE `id` = $id");

       if($stmt->execute()){
           return true;
       }else{
           return false;
       }


   }

   function getUser($conn,$email){

       $stmt = $conn->prepare("SELECT * FROM users where email = '$email' and state != 0 LIMIT 1");
       $stmt->execute();
       return $stmt->fetchAll();
   }

   function getUser_($conn,$id){

       $stmt = $conn->prepare("SELECT * FROM users where id = $id");
       $stmt->execute();
       return $stmt->fetchAll();
   }

    function getUsers($conn){

        $stmt = $conn->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }

   function deletUser($conn,$id){
       $stmt = $conn->prepare("DELETE FROM users WHERE id = $id");
       if($stmt->execute()){
           return true;
       }else{
           return false;
       }
   }

   function getCount($conn){

       $stmt = $conn->prepare("SELECT COUNT(id) as nm FROM `users`");
       $stmt->execute();
       return $stmt->fetchAll();

   }

}