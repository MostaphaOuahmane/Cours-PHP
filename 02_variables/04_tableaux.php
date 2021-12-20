<?php
require_once '../inc/functions.php'; // APPEL DES FONCTIONS
?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - 2 les chaînes </title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header class="container-fluid bg-light">
        <h1 class="display-4">CoursPHP - 04 tabeaux</h1>
        <p class="lead">Les tableaux représentent un type composé car ils permettent de stocker sous un même nom de variable plusieurs valeurs indépendantes. C'est comme un tiroir divisé en compartiments. Chaque compartiment, que nous nommerons un élément du tableau, est repéré par un indince numérique (le premier ayant par défaut la valeur 0 et non 1).D'où l'expression de "tableau indicé".</p>
        <?php
        $varcoucou = "coucou !";
        echo "<p>$varcoucou on entend le coucou</p>";

        ?>
    </header>
    <!-- fin container-fluid header  -->

    <section class="container bg-white">
        <div class="row">
            <div class="col-md-6">
                <h2>1- les tableaux </h2>
                <p>Un tableau appelé "array" en anglais est une variable améliorée dans laquelle on stocke une multitude de valeurs.Ces valeurs peuvent être de n'importe quel type.Elles possèdent un indice dont la numérotation commence à 0.</p>

                </p>
            </div>
            <div class="col-md-6">
                <h2>titreNiveau 2</h2>
            </div>
        </div>
    </section>



    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>