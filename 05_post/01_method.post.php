<<<<<<< Updated upstream
<?php require_once '../inc/functions.php'; // APPEL DES FONCTIONS 
?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre 05 - 01 POST</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header class="container-fluid f-header p-2">
        <h1 class="display-4 text-center">CoursPHP - Chapitre 05 - 01 POST</h1>
        <p class="lead">$_POST[] permet de récupérer les données saisies dans un formulaire</p>
    </header>
    <!-- fin container-fluid header  -->

    <div class="container bg-white mt-2 mb-2 m-auto p-2">

        <section class="row">

            <div class="col-md-6">
                <h2>La méthode POST</h2>
                <ul>
                    <li>$_POST[] est une superglobale qui récupère les données saisies dans un formulaire</li>
                    <li>Superglobale signifie que cette variable est disponible partout dans le script, y compris au sein des fonctions</li>
                    <li>Les informations sont récupérées dans un tableau (array) selon la syntaxe suivante :
                        <code><br>
                            $_POST = array(<br>
                            'name1' => 'valeur1',<br>
                            'name2' => 'valeur2'<br>
                            );<br>
                        </code>
                    </li>
                    <li>'name1' et 'name2' correspondent aux attributs 'name' du formulaire et 'valeur1' et 'valeur2' aux valeurs saisies par l'internaute</li>
                </ul>
            </div>
            <!-- fin col -->

            <div class="col-md-6">
                <h2>Exemple</h2>
                <!-- formulaire avec prenom, nom de famille, commentaire et un bouton d'envoi -->
                <form action="" method="POST">
                    <div class="row g-3 mb-2">
                        <div class="col">
                            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" aria-label="Prénom">
                        </div>
                        <div class="col">
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de famille" aria-label="Nom de famille" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <textarea name="message" id="message" class="form-control" rows="3" required>Votre message</textarea>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-3">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- fin col -->
        </section>
        <!-- fin row -->
        <?php // fabrication d'une row avec sa col en php
        if (!empty($_POST)) { // si $_POST n'est pas vide = différent de empty (!empty) c'est qu'il est remplit et donc que le formulaire a été envoyé, on peut envoyer un formulaire avec des champs vide. Tout n'est pas obligatoire dans un formulaire, les valeurs de $_POST sont alors des strigs vides. 

            debug($_POST);

            echo "<section class=\"row bg-warning p-4 text-white\"><div class=\"col-md-12\"><h2>Données issues du formulaire</h2>";
            echo "<p>Prenom :" . $_POST['prenom'] . " Nom : " . $_POST['nom'] . "</p>";
            echo "<p>Message :" . $_POST['message'] . "</p>";
            echo "</div></section>";
        }
        // echo $_POST['nom'];
        ?>

    </div>
    <!-- fin container  -->


    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

=======
<?php
require_once "../inc/functions.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Cours PHP - Chapitre 5 - 01 Methode Post</title>
    <!-- =================================== -->
    <!-- MA FAVICON  -->
    <!-- =================================== -->


    <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-32x32.png">
    <link rel="manifest" href="../img/site.webmanifest">
    <link rel="mask-icon" href="../img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <!-- =================================== -->
    <!-- en-tête -->
    <!-- =================================== -->

    <header class="container-fluid p-4 alert alert-danger">
        <div class="col-12 text-center">
            <h1 class="display-4">Cours PHP - Chapitre 5 - 01 Methode Post</h1>
            <p class="lead">$_POST [] permet de récupérer les données saisies dans un formulaire</p>
    
        </div>
    </header>
    <!-- fin container header -->

    <div class="container bg-white">
<section class="row">

<div class="col-md-6">
<h2 class="text-decoration-underline text-danger">La methode POST</h2>
<ul>
    <li>$_POST[] est une superglobale qui recupère les données saisies dans un formulaire</li>
    <li>Superglobale signifie que cette variable est disponible partout dans le script, y compris au sein des fonctions</li>
    <li>Les informations sont récupérées dans un tableau (array) selon la syntaxe suivante :
        <code> <br>
            $_POST= array( <br>
                'name1' => 'valeur1', <br>
                'name2' => 'valeur2', <br>
            ); <br>
        </code>
    </li>
    <li>name1 et name2 correspondent aux attributs "name" du formulaire et valeur1 et valeur2 aux valeurs saisies par l'internaute</li>
  
</ul>
</div>
<!-- fin col -->
<div class="col-md-6">
<h2 class="text-decoration-underline text-danger">Exemples</h2>
<form action="" method="POST">
<div class="row g-3 mb-2">
      <div class="col">
       
        <input type="text"  name ="prenom" class="form-control" placeholder="Prénom" aria-label="prenom">
      </div>

      <div class="col">
  
      <input type="text" name="nom" class="form-control" placeholder="Nom" aria-label="Nom" required>
  </div>
</div>

<div class="row  mb-2">
      <div class="col-auto">
      <textarea name="message" class="form-control" id="" rows="5" required>Votre message....</textarea>
    </div>
</div>

<div class="row  mb-2">
      <div class="col">
        <button type="submit" class="btn btn-secondary mb-3">Envoyer</button>
      </div>
</div>
</form>
</div>
<!-- fin col -->
<div class="col-md-6">

</div>
<!-- fin col -->
</section>
<?php 
// debug($_POST);
echo $_POST['nome1'];
?>
<!-- fin row -->
    </div>
    <!-- fin div container -->

    <!-- on appel la date de footer  -->
    <?php require '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
>>>>>>> Stashed changes
</html>