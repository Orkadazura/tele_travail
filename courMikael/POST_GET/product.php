<?php
session_start();
//$nom = $_GET['nom'] ?? null;

if(empty($_GET['nom'])){
    header('location: ./index.html');
    exit();
}

$nom = basename($_GET['nom']);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP POST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Bonjour <?$nom; ?></h1>

    <form>
        <input type="hidden" name="">
        <h2>Ajouter un produit</h2>
        <fieldset>
            <label for="product">Produit</label>
            <input type="text" id="product" name="product_name" value="" placeholder="Nom du produit" required>
        </fieldset>

        <fieldset>
            <label for="price">Prix</label>
            <input type="number" min="1" step="0.5" id="price" name="product_price" value="" placeholder="Prix du produit" required>
        </fieldset>

        <button type="submit">Valider</button>

    </form>

    <section>
        <h2>Liste des produits</h2>
        <?php
            var_dump($_SESSION);

            foreach($_SESSION['products'] as $product){
                echo $product['name'] . ' à ' . $product['pice'] . '€ ajouter par' . $product['user'];
            }
        ?>
    </section>
</body>
</html>