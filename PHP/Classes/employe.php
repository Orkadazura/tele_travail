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
        return $this->$personne;
    }

    function getAdresse()
    {

    }

    function getNum()
    {

    }

    function setNum()
    {

    }

}