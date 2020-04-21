<?php

require_once "Personne.php";
require_once "Employe.php";

$p = new Personne("Tavernier", "Bertrand", " rue des Frères Lumière", " btavernier@gmail.com");
echo $p->getPersonne();

$emp= new Employe("Tournesol", "Tryphon", "Rue du château de Moulinsart", "tryphontournesol@lacaurequin.fr", 5678);
echo $emp->getEmploye();
