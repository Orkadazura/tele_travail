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
        var_dump("Destroying".__CLASS__);
    }

    function getPersonne($nom, $prenom, $adresse)
    {
        $array = [$nom, $prenom, $adresse];
        var_dump($array);
    }

    function setAdresse($adresse)
    {
        if($this->adresse === $adresse){
            
        }
    }

    function setEmail($email)
    {

    }
}

?>