<?php

namespace personnes;

class employe extends personne
{
    protected $personne = [];

    function __construct($numEmp)
    {
        $this->numEmp = $numEmp;
    }

    function getEmploye(): array
    {
        return $this->personne;
    }

    function getAdresse($adresse)
    {
        return $this->$adresse;
    }

    function getNum($email)
    {
        return $this->$email;
    }

    function setNum($email)
    {
        $this->email = $email;
    }

}