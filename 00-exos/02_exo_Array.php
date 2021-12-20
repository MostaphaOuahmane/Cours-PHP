<?php

use function PHPSTORM_META\type;

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

    <title>CoursPHP - 02_Array exo </title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <header class="container-fluid bg-light">
        <h1 class="display-4 text-center">CoursPHP - 02_Array exo</h1>

    </header>
    <section class="container bg-white">
        <div class="row border border-success">
            <div class="col-md-12">
                <?php
                $tableau1 = array("Gabin", "Arletty", "Fernadel", "Dalio", "Pauline Carton");
                echo "<pre>";
                print_r($tableau1);
                echo "</pre>";
                echo "<pre>";
                var_dump($tableau1);
                echo "</pre>";
                $tableau2 = ['France', 'Espagne', 'Italie', 'Portugal'];
                echo "<pre>";
                print_r($tableau2);
                echo "</pre>";
                echo "<pre>";
                var_dump($tableau2);
                echo "</pre>";
                echo "<hr>";
                jeprint_r($tableau2);
                echo "<hr>";
                echo "<br>";
                debug_dump($tableau1);
                debug_dump($tableau2[0]);
                $tableau2[] = 'suisse';
                debug_dump($tableau2);
                array_push($tableau2, 'Maroc', 'coucou', 'aller');
                debug_dump($tableau2);
                //Array associatif
                $couleurs = array(
                    'b' => 'bleu',
                    'bl' => 'blanc',
                    'r' => 'rouge',
                );
                echo "<hr>";
                debug_dump($couleurs);
                print_r($couleurs['b']);
                echo count($couleurs);
                echo "<br>";
                echo sizeof($couleurs);
                echo "<br>";
                echo "<p> le drapeau français est($couleurs[b]),($couleurs[bl]),($couleurs[r]) </p>";

                echo "<ul>";
                foreach ($tableau1 as $acteurs) {
                    echo "<li>" . $acteurs . "</li>";
                }
                echo "</ul>";
                echo "<ol>";
                foreach ($tableau2 as $pays) {
                    echo "<li>" . $pays = "welcome to " . $pays . "</li>";
                }
                echo "</ol>";
                echo "<ol>";
                foreach ($tableau1 as $indice => $acteurs) {
                    echo "<li> indice :  $indice correspond à $acteurs </li>";
                }
                echo "</ol>";
                echo "<ol>";
                foreach ($couleurs as $indice => $teinte) {
                    echo "<li> indice :  $indice correspond à $teinte </li>";
                }
                echo "</ol>";
                echo "<hr>";

                $contacts = array(
                    'prenom' => 'mostapha',
                    'nom' => 'ouahmane',
                    'email' => 'ouhman.mostapha@gmail.com',
                    'tel' => '0766397744',
                );
                debug_dump($contacts);
                echo "<ul>";
                foreach ($contacts as $valeurs) {
                    echo "<li>" . $valeurs . "</li>";
                }
                echo "</ul>";

                foreach($contacts as $indice => $valeurs)  {
                    if ( $indice =='prenom'){ 
                        echo "<h3> $indice => $valeurs </h3> ";
                    }else {
                    echo "<p> $indice => $valeurs </p> ";
                }
            }

          
                ?>

            </div>
            <div class="col-md-6">

            </div>
        </div>
    </section>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>