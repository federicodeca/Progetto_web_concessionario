<?php

class EPersona{
    private $id;
    private $nome;
    private $cognome;
    private $email;
    private $password;
    private $userName;
    


    public function __construct($id, $nome, $cognome, $email,$password,$userName)
    {
        $this->id = $id;
        $this->nome = $nome;        
        $this->cognome = $cognome;
        $this->email = $email;
        $this->password = $password;
        $this->userName = $userName;

    }
    
    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getCognome()
    {
        return $this->cognome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getUserName()
    {
        return $this->userName;
    }
    public function getPassword()
    {
        return $this->password;
    }


}