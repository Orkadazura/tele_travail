<?php

class Financier
{
    public $capital;
    public $tauxMensuel;
    public $nbMois;

    function __construct($_capital, $_tauxAnnuel, $_annees)
    {
        $this->capital = $_capital;
        $this->tauxMensuel = (double)$_tauxAnnuel/(100*12);
        $this->nbMois = $_annees*12;
    }

    function calculeMensualiter()
    {
        $quotient = (1 - pow((1 + $this->tauxMensuel), - $this->nbMois));
        $mensualiter = ($this->capital*$this->tauxMensuel)/$quotient;
        return $mensualiter;
    }
}