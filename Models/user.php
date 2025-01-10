<?php

namespace Framework;
use Exception;

class User{

   private $id;
   private $name;
   private $password;
   private $age;
   private $email;

   public function __construct($id, $name,$password, $age, $email)
    {

        $nameRegex = '/^[a-zA-ZÀ-ÖØ-öø-ÿ\s-]+$/';
        $passwordRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';
        $ageRegex = '/^(?:1[0-4][0-9]|[1-9]?[0-9]|150)$/';
        $emailRegex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';


        if(!preg_match($nameRegex , $name) || empty($name)){
           throw new Exception('Invalid name, enter another name');
        }
    

        if (!preg_match($passwordRegex, $password) || empty($password)){
           throw new Exception('Invalid password, enter another password');
        }

        if (!preg_match($ageRegex, $age) || empty($age)) {
           throw new Exception('Invalid age, enter another age');
        }

        if (!preg_match($emailRegex, $email) || empty($email)) {
           throw new Exception('Invalid email, enter another email');
        }

        $this -> id = $id;
        $this -> name = $name;
        $this -> password = $password;
        $this -> age = $age;
        $this -> email = $email;
    }
    
    
    public function login($name, $password){
         if ((empty($name) || $name !== $this -> name)) {
            throw new Exception("The name is incorrect or does not exist.");
         }

         if ((empty($password) || $password !== $this -> password)) {
            throw new Exception("Incorrect password enter the other password");
         }

         return "You have successfully logged in.";
    }


    

}








?>