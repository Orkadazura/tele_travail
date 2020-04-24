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

    public function afficherTableau()
	{
		echo '<table class="table table-dark table-hover" >
        <thead>
          <tr>
            <th>Numero de mois</th>
            <th>Part intérêt</th>
            <th>Part amortissement </th>
			 <th>Capital restant dû</th>
			 <th>Mensualité </th>
          </tr>
        </thead>
        <tbody>';
		
		$compteur=1;
			
   $mensualiter=$this->calculeMensualiter();
    do
    { 
    echo "<tr>"; 

        if($compteur == 1)
        {
            $capital=$this->capital; //calcul du capital restant dû
        }
        else 
        {
            $capital = $capital - $part_capital;
        }	
        $part_interet = $capital * $this->tauxMensuel;//calcul de la part intérêt
        $part_capital = $mensualiter - $part_interet; //calcul de la part capital
            
            
        echo "<td>".round($compteur,2)."</td>";
        echo "<td>".round($part_interet,2)."</td>";	
        echo "<td>".round($part_capital,2)."</td>";	
        echo "<td>".round($capital,2)."</td>";
        echo "<td>".round($mensualiter,2)."</td>";
        echo "</tr>"; 
        $compteur++; 
    }
    while($compteur <= $this->nbMois); 
    echo "</tbody></table>";

    }

    function coutTotalCredit()
    {
        
    }
}
