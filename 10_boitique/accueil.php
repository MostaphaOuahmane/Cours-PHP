<?php
// connexion au fichier init 
require_once 'inc/init.inc.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


<!-- Bootstrap ICONS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <title>Ma boutique </title>
  <!-- =================================== -->
  <!-- Ma favicon -->
  <!-- =================================== -->
  <link rel="apple-touch-icon" sizes="180x180" href="photos/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="photos/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="photos/favicon_io/favicon-16x16.png">
<link rel="manifest" href="photos/favicon_io/site.webmanifest">
<!-- fin favicon -->
</head>

<body>

  <!-- =================================== -->
  <!-- navbar -->
  <!-- =================================== -->
  <nav class="navbar sticky-top navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="accueil.php">
        <img src="photos/logo.jpg" alt="" width="30" height="24">
      </a>
      <ul class="nav justify-content-center">

        <li class="nav-item">
          <a class="nav-link active" href="inscription.php">Inscris-toi !</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="connexion.php">Me connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profil.php">Mon profil</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="panier.php"><i class="bi bi-basket3"></i></a>
        </li>

      </ul>
    </div>

  </nav>

  <!-- =================================== -->
  <!-- en-tête -->
  <!-- =================================== -->

  <header class="container-fluid p-4 alert alert-danger">
    <div class="col-12 text-center">
      <h1 class="display-4">Ma boutique </h1>
      <img src="photos/logo.jpg" alt="logo">
    </div>

  </header>

  <!-- fin container header -->
  <div class="container mb-4 bg-white">

    <section class="row">
      <!-- col -->
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <div class="card1" style="width: 18rem;">
          <img src="photos/pull1.jpg" class="card-img-top" alt="pull1">
          <div class="card-body text-center">
            <h5 class="card-title">Pull gris</h5>

          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix</li>
          <li class="list-group-item">50 €</li>
        </ul>
        <p>
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
         Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample1">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->

      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <div class="card2" style="width: 18rem;">
          <img src="photos/pull2.jpg" class="card-img-top" alt="pull2">
          <div class="card-body text-center">
            <h5 class="card-title">Pull white</h5>


          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix</li>
          <li class="list-group-item">39 €</li>
        </ul>
        <p>
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
           Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample2">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->

    </section>
    <section class="row">
      <!-- col -->
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <div class="card3" style="width: 18rem;">
          <img src="photos/pantalon1.jpg" class="card-img-top" alt="pantalon1">
          <div class="card-body text-center">
            <h5 class="card-title">Pantalon blanc</h5>

          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix</li>
          <li class="list-group-item">50 €</li>
        </ul>
        <p>
        <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
      Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample3">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->


      <div class="col-12 col-sm-12 col-md-6 col-lg-4 mx-auto">

        <!-- card 2 -->
        <div class="card4" style="width: 18rem;">
          <img src="photos/pantalon2.jpg" class="card-img-top" alt="pantalon2">
          <div class="card-body text-center">
            <h5 class="card-title">Pantalon</h5>

          </div>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Prix :</li>
          <li class="list-group-item">39 €</li>
        </ul>
        <p>
          <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
            Ajoutez au panier
          </button>
        </p>
        <div class="collapse" id="collapseExample4">
          <div class="card card-body">
            <select class="form-select" aria-label="Default select example">
              <option value="xs">-XS-</option>
              <option value="s">-S-</option>
              <option value="m">-M-</option>
              <option value="l">-L-</option>
              <option value="xl">-XL-</option>
              <option value="xxl">-XXL-</option>
            </select>
          </div>
        </div>
        <!-- fin card body -->
      </div>
      <!-- fin col -->
      <!-- navigation produits -->
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
      <!-- fin navigation page produits -->
    </section>

    <?php
    $requete = $pdoMAB->query(" SELECT * FROM produits ORDER BY id_produit");
    // debug($resultat);
    $pdt = $requete->rowCount();
    // debug($nbr_commentaires);
    ?>
    <h5>Il y a <?php echo $pdt; ?> produits en ligne </h5>

    <table class="table table-striped">
      <thead>
        <tr>
          <th class="text text-danger">Titre</th>
          <th class="text text-danger">Categorie</th>
          <th class="text text-danger">Taille</th>
          <th class="text text-danger">Description</th>
          <th class="text text-danger">Couleurs</th>


        </tr>
      </thead>
      <tbody>
        <!-- ouverture de la boucle while -->
        <?php while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>
            <td><?php echo $ligne['titre']; ?></td>
            <td><?php echo $ligne['categorie'] . ' ' . $ligne['stock']; ?></td>
            <td><?php echo $ligne['taille']; ?></td>
            <td><?php echo $ligne['description']; ?></td>
            <td><?php echo $ligne['couleur']; ?></td>

          </tr>
          <!-- fermeture de la boucle -->
        <?php } ?>
      </tbody>
    </table>
  </div>
  <!-- fin col -->
  </section> -->
  <!-- fin row -->

  </div>
  <!-- fin div container -->
  <?php 
require_once '../inc/footer.inc.php';
  ?>
  <!-- Footer -->
  <!-- Optional JavaScript -->
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>