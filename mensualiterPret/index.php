<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mensualité prêt</title>
    <meta charset="utf-8">
    <meta name="author" content="Orka" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

    <?php

    require_once ("Financier.php");

    $result=0;

    if(isset($_POST["capital"]) && isset($_POST["tauxAnuel"]) && isset($_POST["annees"]))
    {    
        $monFinancier = new Financier($_POST["capital"], $_POST["tauxAnuel"], $_POST["annees"]);
        $result = $monFinancier->calculeMensualiter();
    }
    else
    {
        echo "Le calcule de la mensualitée est impossible.";
    }

    /* Voir la classe Financier mais le code peut fonctionner si décommenté

    function calculeMensualiter($capital, $tauxAnnuel, $annees)
    {
        $tauxMensuel = $tauxAnnuel/12;
        $nbMois = $annees*12;
        $quotient = (1 - pow((1+$tauxMensuel),-$nbMois));
        $mensualiter=($capital*$tauxMensuel)/$quotient;
        return $mensualiter;
    }
    $result="";
    if(isset($_POST["capital"]) && isset($_POST["tauxAnnuel"]) && isset($_POST["annees"]))
    {    
        return $result = calculeMensualiter($_POST["capital"],$_POST["tauxAnnuel"],$_POST["annees"]);
    }*/

    ?>

    <h1>Simulation</h1>
    <br><br>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <!--$_SERVER["PHP_SELF"]= renvoi sur la même page. (remplace le nom de la page)-->
        <div class="form-group row">
            <label class="col-2"  for="">Capital empruté :</label>
            <input class="col-3"  type="text" id="capital" name="capital" value="<?php echo(!empty($_POST["capital"]))? $_POST["capital"]: "" ?>" required>
        </div>

        <div class="form-group row">        
            <label class="col-2"  for="">Taux intérêt en % :</label>
            <input class="col-3"  type="text" id="tauxAnuel" name="tauxAnuel" value="<?php echo(!empty($_POST["tauxAnuel"]))? $_POST["tauxAnuel"]: "" ?>" required>
        </div>

        <div class="form-group row">      
            <label class="col-2"  for="">Durée de remboursement en nb année :</label>
            <input class="col-3"  type="text" id="annees" name="annees" value="<?php echo(!empty($_POST["annees"]))? $_POST["annees"]: "" ?>" required>
        </div>
        <br><br>
        <div id="btn">
            <button type="submit">Valider</button>
            <label class="col-2"  for="">Mensualité :</label>
            <input class="col-3"  type="text" id="result" name="result"  value="<?php echo(!empty($result))? round($result,2)." €" : "NaN"  ?>" disabled>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox">Tableau d'amortissement.
        </label>
    </div>
    </form>
    <?php 
    require_once("financier.php");
    
    $res=0;

    if(isset($_POST["capital"]) && isset($_POST["tauxAnuel"]) && isset($_POST["annees"]))
    {
        $monfinancier=new financier($_POST["capital"], $_POST["tauxAnuel"], $_POST["annees"]);
        $monfinancier->afficherTableau();
    }
    
    ?>    
</body>

</html> 

