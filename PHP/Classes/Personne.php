<?php

require "Employe.php";

class Personne{
    private $nom;
    protected $prenom;
    protected $adresse;
    private $email;

    function __construct($_nom, $_prenom, $_adresse, $_email)
    {
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->adresse = $_adresse;
        $this->email = $_email;
    }

    function __destruct()
    {
        echo "<script type=\"text/javascript\">alert('La personne nommée
        $this->prenom $this->nom \\n est supprimée de vos
        contacts')</script>";
    }

    function getPersonne()
    {
        $p = "Cette personne à pour nom : ".$this->nom." et pour prénom : ".$this->prenom.", pour adresse : ".$this->adresse." et pour email : ".$this->getEmail();
        return $p;
    }

    function setAdresse($newAdresse)
    {
        $this->adresse = $newAdresse;
    }

    function setEmail($newEmail)
    {
        $this->email = $newEmail;
    }

    function getNom()
    {
        return $this->nom;
    }

    function getEmail()
    {
        return $this->email;
    }
}

?>