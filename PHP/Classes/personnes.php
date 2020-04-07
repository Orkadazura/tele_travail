<?php

namespace personnes;

class personne{
    private $nom;
    protected $prenom;
    protected $adresse;
    private $email;

    function __construct($nom, $prenom, $adresse, $email)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->email = $email;
    }

    function __destruct()
    {
        echo "<script type=\"text/javascript\">alert('La personne nommée
        $this->prenom $this->nom \\n est supprimée de vos
        contacts')</script>";
    }

    function getPersonne($nom, $prenom, $adresse)
    {
        $personne = [$nom, $prenom, $adresse];
        return $personne;
    }

    function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }
}

?>