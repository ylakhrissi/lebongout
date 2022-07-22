<?php

namespace App\Classes;

class User
{
    private $id;
    private $lastname;
    private $firstname;
    private $email;
    private $password;

    public function __construct($lastname, $firstname, $email, $password){
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->password = $password;

    }

    public function getId(){
        return $this->id;
    }
    public function getLastname(){
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    public function getFirstname(){
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

}
