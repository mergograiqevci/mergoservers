<?php
class Person{ 
    public $name,$email,$password;
    function __construct($name,$email,$password)
    {
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
    }
    function setName($name)
    {
        $this->name=$name;
    }
    function setEmail($email)
    {
        $this->email=$email;
    }
    function setPassword($password)
    {
        $this->password=$password;
    }
    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
}
?>
