<?php 
// require connexion, session etc.
require_once '../inc/init.inc.php';

// debug($_SESSION);
// debug(estConnecte());
// debug(estAdmin());
// debug(RACINE_SITE);

if (!estAdmin()) { // accès non autorisé si on n'est pas admin (et pas connecté)
    header('location:../connexion.php');
}
// INSERTION D'UN PRODUIT

if (!empty($_POST)) {

    $_POST['reference'] = htmlspecialchars($_POST['reference']);
    $_POST['categorie'] = htmlspecialchars($_POST['categorie']);
    $_POST['titre'] = htmlspecialchars($_POST['titre']);
    $_POST['description'] = htmlspecialchars($_POST['description']);
    $_POST['couleur'] = htmlspecialchars($_POST['couleur']);
    $_POST['taille'] = htmlspecialchars($_POST['taille']);
    $_POST['public'] = htmlspecialchars($_POST['public']);
    //$_POST['photo'] = htmlspecialchars($_POST['photo']);
    $_POST['prix'] = htmlspecialchars($_POST['prix']);
    $_POST['stock'] = htmlspecialchars($_POST['stock']);
    
    debug($_POST);
  
    debug($_FILES);
  
  
  } // fin insertionn

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>La Boutique - Administration</title>
</head>
<body>

    <header class="container bg-primary text-white p-4 ">
    <h1 class="display">La Boutique - Administrateur</h1>
    <p class="lead">La Boutique gestion des produits</p>
    </header>

    <div class="container">
      <section class="row m-4 justify-content-center">
        <div class="col md-8 p-2 bg-light border border-primary">
          <table class="table table-stripped">
          <?php
    $requete = $pdoMAB->query(" SELECT * FROM produits ORDER BY id_produit");
    // jevar_dump($resultat);
    $pdt = $requete->rowCount();
    // jevar_dump($nbr_commentaires);
    ?>
    <h5 class= "alert alert-warning text-primary">Il y a <?php echo $pdt; ?> produits en ligne !</h5>
    <table class="table table-striped">
      <thead>
        <tr>
          <th class="text text-primary">Id</th>
          <th class="text text-primary">Reference</th>
          <th class="text text-primary">Titre</th>
          <th class="text text-primary">Categorie</th>
          <th class="text text-primary">Taille</th>
          <th class="text text-primary">Stock</th>
          <th class="text text-primary">Couleurs</th>
        </tr>
      </thead>
      <tbody>
        <!-- ouverture de la boucle while -->
        <?php while ($ligne = $requete->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>
            <td> <img src="../<?php echo $ligne['photo'];?>" class="figure-img img fluid-rounded img-admin"</td>
            <td><?php echo $ligne['id_produit']; ?></td>
            <td><?php echo $ligne['reference']; ?></td>
            <td><?php echo $ligne['titre']; ?></td>
            <td><?php echo $ligne['categorie'] . ' ' . $ligne['stock']; ?></td>
            <td><?php echo $ligne['taille']; ?></td>
            <td><?php echo $ligne['stock']; ?></td>
            <td><?php echo $ligne['couleur']; ?></td>
            <td><a href="VOIR?id_produit=<?php echo $ligne['id_produit']; ?>"VOIR</a></td>
          </tr>
          <!-- fermeture de la boucle -->
        <?php } ?>
    
      </tbody>
    </table>
    </div>
    <!-- fin col  -->
  </section>
  <!-- fin row  -->

    <section class="row m-4 justify-content-center" >
         <h2 class="text-white text-center bg-primary text-decoration-underline">Insertion d'un nouveau produit</h2>
         <div class="col-md-8 p-2 bg-light border border-primary">
           <form action="" method="POST" enctype="mutipart/form-data">

           <label for="reference" class="form-label">Réference</label>
           <input type="text" name="reference" id="reference" class="form-control">

           <label for="caregorie" class="form-label">Categorie</label>
           <input type="text" name="categorie" id="categorie" class="form-control">

           <label for="titre" class="form-label">Titre</label>
           <input type="text" name="titre" id="titre" class="form-control">

           <label for="description" class="form-label">Description</label>
           <input type="text" name="description" id="description" cols="30" rows="3" class="form-control">

           <label for="couleur" class="form-label">Couleur</label>
           <input type="text" name="couleur" id="couleur" class="form-control">

           <label for="taille" class="form-label">Taille</label>
           <select name="taille" id="taille" class="form-select">
                <option value="XS">Extra-small</option>
                <option value="S">Small</option>
                <option value="M">Medium</option>
                <option value="L">Large</option>
                <option value="XL">Extra-large</option>
            </select>

            <input type="radio" name="public" value="f" class="form-check-input" checked>
            <label for="public" class="form-check-label">Femme</label>

            <input type="radio" name="public" value="m" class="form-check-input">
            <label for="public" class="form-check-label">Masculin</label>

            <input type="radio" name="public" value="mixte" class="form-check-input">
            <label for="public" class="form-check-label">Mixte</label>

            <label for="photo" class="form-label">Photographie</label>
            <input type="file" name="photo" id="photo" class="form-control">
            <!-- pour pouvoir utiliser le type="file" ; il faut absolument l'attribut entype="mutipart/form-data" dans la balise form  -->

            <label for="prix" class="form-label">Prix</label>
            <input type="text" name="prix" id="prix" class="form-control">

            <label for="stock" class="form-label">Prix</label>
            <input type="text" name="stock" id="stock" class="form-control">

            <button class="btn btn-outline-success" type="submit">Ajouter un produit</button>

           </form>


  </section>


    </div>
</body>
</html>