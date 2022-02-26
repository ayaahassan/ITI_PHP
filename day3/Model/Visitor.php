<?php

class Visitor
{
 private $username;
 private $password;
 private $iscount;


    public function __construct($username,$password) {
       // $this->iscount($iscount);
        $this->setUsername($username);
        $this->setPassword($password);

    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }
   /*static function checkvisit(){
       if(isset($_SESSION["is_visited"])&&$_SESSION["is_visited"]==false)
       {
          return true;
       }
       else
           return false;
    }*/
}