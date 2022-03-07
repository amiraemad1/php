<?php
class User {
    
    private $username;
    private $password;
    private $email;
    
    
    
    
    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    function setPassword($password) {
        $this->password = $password;
        return $this;
    }
    
    
    function setEmail($email) {
        $this->email = $email;
        return $this;
    }


    
    
    
    
}