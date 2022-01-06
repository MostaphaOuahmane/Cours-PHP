<?php require_once '../inc/functions.php';
require_once '../inc/connectionBDD.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>EXO PDO</h1>
    <ul>
        <li>require des fonctions</li>
        <li>Se connecter à entreprise</li>
        <li>Affichez dans une ul le prénom, le nom, et le salaire des employes du service commercial, triez par salaire
            du plus petit au plus grand</li>
        <li>Utilisez une requête préparée avec bindParam</li>
        <li>Affichez le nombre de commerciaux</li>
        <li>Chercher ensuite sur le web comment mettre le salaire au format français ex. 3000,00€</li>
    </ul>

    <?php


    echo '<ul>';
    $sql = 'SELECT prenom, nom, salaire FROM employes WHERE service= :service ORDER by salaire ASC';

    $resultat = $pdoENT->prepare($sql);
    $service = 'commercial';
    $resultat->bindParam(':service', $service, PDO::PARAM_STR);
    $resultat->execute();

    // $employes=$resultat->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($employes);

    echo '<hr>';
    $nombre_commerciaux = $resultat->rowCount();
    $salaire_fr = new NumberFormatter('fr_FR', NumberFormatter::CURRENCY);

    echo "Il y a $nombre_commerciaux commerciaux dans l'entreprise: <br><br>";
    echo '<ul>';
    while ($employes = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo '<li>' . $employes['prenom'] . ' ' . $employes['nom'] . ' ' . $salaire_fr->formatCurrency($employes['salaire'], "EUR") . '</li>';
    }

    echo '</ul>';
    echo '<hr>';
    ?>
</body>

</html>