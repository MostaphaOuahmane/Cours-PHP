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

    <title>CoursPHP - NUMERO TITRE</title>
    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <header class="container-fluid bg-light">
      <h1 class="display-4">CoursPHP - NUMERO TITRE</h1>
      <p class="lead">SOUS TITRE</p>
    </header> 
    <!-- fin container-fluid header  -->

    <div class="container bg-white">

      <section class="row">

        <div class="col-md-6">
          <h2>TitreNiveau2</h2>
        </div>
        <!-- fin col -->

        <div class="col-md-6">
          <h2>TitreNiveau2</h2>
        </div>
        <!-- fin col -->

      </section>
      <!-- fin row -->

    </div>
    <!-- fin container  -->

	
    <!-- footer en require  -->
    <?php require_once '../inc/footer.inc.php'; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>