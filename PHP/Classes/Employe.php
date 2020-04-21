<?php

class Employe extends Personne
{
    protected $numEmp;

    function __construct($_nom, $_prenom, $_adresse, $_email ,$_numEmp )
    {
        parent::__construct($_nom, $_prenom, $_adresse, $_email);
        $this->numEmp = $_numEmp;
    }

    function getEmploye()
    {
        $emp ="";
        $emp.="<br>".parent::getPersonne();
        $emp.=" et qui à pour numéro d'employé : ".$this->numEmp;
        return $emp;
    }

    /*function getAdresse($_adresse)
    {
        return $this->$_adresse;
    }

    function getNum($_email)
    {
        return $this->$_email;
    }

    function setNum($_email)
    {
        $this->email = $_email;
    }*/

}

